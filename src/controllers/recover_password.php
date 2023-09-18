<?php
loadModel('Login');
session_start();
$exception = null;

if(count($_POST) > 0) {
  $recover = new Login($_POST);
  try {
    $user = $recover->checkEmail();
  } catch (AppException $e) {
    $exception = $e;
  }
}

loadView('recover_password', $_POST + ['exception' => $exception]);