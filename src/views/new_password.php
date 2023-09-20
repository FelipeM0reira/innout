<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/comum.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/icofont.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <title></title>
</head>

<body>
  <form class="form-login" action="#" method="post">
    <div class="login-card card">
      <div class="card-header">
        <i class="icofont-travelling mr-2"></i>
        <span class="font-weight-light">In</span>
        <span class="font-weight-bold mx-2">N'</span>
        <span class="font-weight-light">Out</span>
        <i class="icofont-runner-alt-1 ml-2"></i>
      </div>
      <div class="card-body">
        <?php include(TEMPLATE_PATH . '/messages.php') ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Informe a senha"
              class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback">
              <?= $errors['password'] ?>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="confirm_password">Confirmação de Senha</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha"
              class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback">
              <?= $errors['confirm_password'] ?>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <a href="/login.php" class="btn btn-secondary btn-lg mr-2">Cancela</a>
        <button class="btn btn-lg btn-primary">Salvar</button>
      </div>
    </div>
  </form>
</body>

</html>