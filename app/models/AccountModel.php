<?php
require_once(ROOT_PATH . 'config.php');

class AccountModel
{
  public function login($email, $password)
  {
    $result = query("SELECT first_name, last_name, email, phone, role, created_at, updated_at FROM accounts WHERE email = '$email' AND password = SHA('$password')");

    return $result->fetch_assoc();
  }
}
