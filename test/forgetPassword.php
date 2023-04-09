<?php

class ForgetPassword
{
    public function sendPasswordResetLink($email)
    {
        if ($this->validateEmail($email)) {
            return true;
        } else {
            return false;
        }
    }

    private function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

use PHPUnit\Framework\TestCase;

class ForgetPasswordTest extends TestCase
{
  public function testValidateEmail()
  {
    $forgetPassword = new ForgetPassword();
    $this->assertFalse($forgetPassword->validateEmail(''));
    $this->assertTrue($forgetPassword->validateEmail('quocthien@gmail.com'));
    $this->assertFalse($forgetPassword->validateEmail('invalidemail@.com'));
  }
}