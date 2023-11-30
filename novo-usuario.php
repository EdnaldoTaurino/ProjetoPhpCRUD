<div class="novo_usuario">
  <div id="cadastro">
    <h1>Novo usuário</h1>
    <form class="form" action="?page=utils" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
  
      <div class="form_grupo">
        <label for="nome" class="form_label">Nome</label>
        <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
      </div>
  
      <div class="form_grupo">
        <label for="e-mail" class="form_label">Email</label>
        <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
      </div>
  
      <div class="form_grupo">
        <label for="telefone" class="form_label">Telefone</label>
        <input type="text" name="telefone" class="form_input" id="telefone" placeholder="(xx)xxxxxxxxx" required>
      </div>
  
      <div class="form_grupo">
        <label for="datanascimento" class="form_label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
      </div>
  
      <div class="form_grupo">
        <label for="password" class="form_label">Senha</label>
        <input type="password" name="senha" class="form_input" id="password" placeholder="senha" required>
      </div>
  
      <p>
        <input type="submit" value="Cadastrar" />
      </p>
  
    </form>
  </div>
</div>