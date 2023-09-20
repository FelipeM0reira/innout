<?php
loadModel('Login');
session_start();
$exception = null;
$recover = null;

if(count($_POST) > 0) {
  $recover = new Login($_POST);
  try {
    $recover->checkEmail();
    if($recover) {
      addSuccessMsg('E-mail enviado com sucesso!');
    }
  } catch (AppException $e) {
    $exception = $e;
  }
}

$_SESSION['recover'] = $recover;

loadView('recover_password', $_POST + ['exception' => $exception]);