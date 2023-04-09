<?php

class Registration
{
  public function register($username, $email, $password)
  {
    if ($this->validateUsernameLength($username) && $this->validateEmail($email) && $this>validatePasswordSameAsUsername($password, $username)) {
      return true;
    } else {
      return false;
    }
  }

  private function validateUsername($username)
  {
    return strlen($username) > 0 && strlen($username) <= 20;
  }

  private function validateEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
  }

  private function validatePassword($password, $username)
  {
    return strlen($username) > 0 && strlen($username) <= 20;
  }
}

use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
  public function testValidRegistration()
  {
    $registration = new Registration();
    $this->assertTrue($registration->register('quocthien', 'quocthien@gmail.com', '123'));
  }

  public function testInvalidRegistration()
  {
    $registration = new Registration();
    $this->assertFalse($registration->register('', 'wrongemail', '123'));
  }
}