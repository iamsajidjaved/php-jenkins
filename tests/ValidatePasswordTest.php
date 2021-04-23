<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase{
    public function testValidationLength(){
       $validate_password =  new ValidatePassword();
       $this->assertFalse($validate_password->validLength('1234'));
    }
}