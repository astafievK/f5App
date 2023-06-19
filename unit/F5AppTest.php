<?php

use PHPUnit\Framework\TestCase;
require 'AdminProduct.php';

final class F5AppTest extends TestCase
{

    function testUserIsAdminIsValid()
    {
        $this->expectNotToPerformAssertions();
        $validResultTrue = true;
        $validResultFalse = false;


        $roleStringAdmin = "Администратор";
        $roleStringUser = "Пользователь";

        $testResult = (new AdminProduct)->userIsAdmin($roleStringAdmin);
        $this -> assertSame($validResultTrue, $testResult);

        $testResult = (new AdminProduct)->userIsAdmin($roleStringUser);
        $this -> assertSame($validResultFalse, $testResult);
    }

    function testUserIsAdminIsInvalid()
    {
        $this->expectNotToPerformAssertions();
        $validResultTrue = true;
        $validResultFalse = false;


        $roleStringAdmin = "Администратор";
        $roleStringUser = "Пользователь";

        $testResult = (new AdminProduct)->userIsAdmin($roleStringAdmin);
        $this -> assertSame($validResultFalse, $testResult);

        $testResult = (new AdminProduct)->userIsAdmin($roleStringUser);
        $this -> assertSame($validResultTrue, $testResult);
    }
}