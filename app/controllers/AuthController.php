<?php
require_once(ROOT_PATH . 'models/AccountModel.php');

$account_model = new AccountModel();
class AuthController
{
  public function login()
  {
    global $account_model;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $message = $_POST['password'];

      $result = $account_model->login($email, $message);

      header('Content-Type: application/json');
      echo json_encode([
        'data' => [
          'user' => $result,
          'message' => isset($result) ? 'Login successfully' : 'Login failed'
        ],
        'status' => 200
      ]);
    }
  }
}