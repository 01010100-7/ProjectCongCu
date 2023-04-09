<?php

use PHPUnit\Framework\TestCase;

class Login
{
  public function login($username, $password)
  {
    if ($username === 'quocthien' && $password === '123') {
      return true;
    } else {
      return false;
    }
  }
}

class LoginTest extends TestCase
{
  public function testValidCredentials()
  {
    $login = new Login();
    $this->assertTrue($login->login('quocthien', '123'));
  }

  public function testInvalidCredentials()
  {
    $login = new Login();
    $this->assertFalse($login->login('quocthien', '234'));
  }
}