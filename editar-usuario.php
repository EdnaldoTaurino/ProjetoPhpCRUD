<div id="editar">
  <?php
  $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

  $response = $conn->query($sql);

  $row = $response->fetch_object();
  ?>
  <h1>Editar usuário</h1>
  <form class="form" action="?page=utils" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="form_grupo">
      <label for="nome" class="form_label">Nome</label>
      <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form_input" id="nome" placeholder="Nome" required>
    </div>

    <div class="form_grupo">
      <label for="e-mail" class="form_label">Email</label>
      <input type="email" name="email" value="<?php print $row->email; ?>" class="form_input" id="email" placeholder="seuemail@email.com" required>
    </div>

    <div class="form_grupo">
      <label for="telefone" class="form_label">Telefone</label>
      <input type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form_input" id="telefone" placeholder="(xx)xxxxxxxxx" required>
    </div>

    <div class="form_grupo">
      <label for="datanascimento" class="form_label">Data de Nascimento</label>
      <input type="date" name="data_nascimento" value="<?php print $row->data_nascimento; ?>" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
    </div>

    <div class="form_grupo">
      <label for="password" class="form_label">Senha</label>
      <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form_input" id="password" placeholder="senha" required>
    </div>

    <p>
      <input type="submit" value="Salvar" />
    </p>

  </form>
</div>