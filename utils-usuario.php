<?php

switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$data_nascimento = $_POST["data_nascimento"];
		$senha = $_POST["senha"];

		$sql = "INSERT INTO usuarios (nome, email, telefone, data_nascimento, senha) 
						VALUES ('{$nome}','{$email}','{$telefone}','{$data_nascimento}','{$senha}')";

		$response = $conn->query($sql);
		if($response == true) {
			print "<script>alert('Cadastro realizado com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		}else {
			print "<script>alert('Nao foi possivel cadastrar');</script>";
			print "<script>location.href='?page=index';</script>";
		};
		break;
	case 'editar':
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$data_nascimento = $_POST["data_nascimento"];
		$senha = $_POST["senha"];

		$sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}',
					telefone='{$telefone}',data_nascimento='{$data_nascimento}',
					senha='{$senha}'
					WHERE id=".$_REQUEST["id"];

		$response = $conn->query($sql);

		if($response == true) {
			print "<script>alert('Edicao realizada com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		}else {
			print "<script>alert('Nao foi possivel editar');</script>";
			print "<script>location.href='?page=listar';</script>";
		};

		break;
	case 'excluir':
		$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

		$response = $conn->query($sql);

		if($response == true) {
			print "<script>alert('Excluido com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		}else {
			print "<script>alert('Nao foi possivel excluir');</script>";
			print "<script>location.href='?page=listar';</script>";
		};
		break;
		case 'buscar':
			if (isset($_GET['id'])) {
				$user_id = $_GET['id'];
				$query = "SELECT * FROM usuarios WHERE id =$user_id";
				$response = $conn->query($query);
				$quantidade = $response->num_rows;
				
				if($quantidade > 0 ) {
						print "<h1>Usuário obtido com sucesso</h1>";
						print "<table>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>NOME</th>";
            print "<th>EMAIL</th>";
            print "<th>TELEFONE</th>";
            print "<th>DATA DE NASCIMENTO</th>";
            print "<th>AÇÕES</th>";
            print "</tr>";
						while($row = $response->fetch_object()){
							print "<tr>";
							print "<td>".$row->id."</td>";
							print "<td>".$row->nome."</td>";
							print "<td>".$row->email."</td>";
							print "<td>".$row->telefone."</td>";
							print "<td>".$row->data_nascimento."</td>";
				
							print "<td><button onclick=\"location.href='?page=editar&id=".$row->id."';\" 
							style='background-color:green' type='button'>Editar</button></td>";
							
							print "<td><button 
							onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}
							else{false;}\"
							style='background-color:red' type='button'>Excluir</button></td>";
				
							print "</tr>";
						}
						print "</table>";
					}else {
						print "<h1>Nenhum usuario encontrado.</h1>";
					}
		
				$response->close();
		}
			break;
}
