<main class="content">
  <?php
    renderTitle(
      'Cadastro de Usuários',
      'Mantenha os dados dos usuários atualizados',
      'icofont-users'
    );

    include(TEMPLATE_PATH . "/messages.php");
  ?>

  <a class="btn btn-lg btn-primary mb-3" href="save_user.php">Novo Usuário</a>

  <table class="table table-bordered table-striped table-hover">
    <thead>
      <th>Nome</th>
      <th>Email</th>
      <th>Data de Admissão</th>
      <th>Data de Desligamento</th>
      <th>Ações</th>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->start_date ?></td>
        <td><?= $user->end_date ?></td>
        <td>
          <a href="save_user.php?update=<?= $user->id ?>" class="btn btn-warning rounded-circle mr-2">
            <i class="icofont-edit"></i>
          </a>
          <button class="btn btn-danger rounded-circle delete_btn" data-id="<?= $user->id ?>">
            <i class="icofont-trash"></i>
          </button>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(".delete_btn").click(function() {
  var id = $(this).data('id');
  if (confirm('Tem certeza de que deseja excluir este registro ?')) {
    $.ajax({
      url: '?delete=' + id,
      type: 'GET',
      data: {
        id: id
      },
      error: function() {
        alert('Não foi possível deletar o registro.');
      },
      success: function(data) {
        $(this).closest('tr').remove();
        alert("Registro deletado com sucesso");
      }.bind(this)
    });
  }
});
</script>