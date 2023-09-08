<?php

use PHPUnit\Framework\TestCase;
use App\CheckUser;

class CheckUserTest extends TestCase
{
    public function test_check_name_and_email()
    {
        $checkUser = new CheckUser();
        $checkUser->setName('User Test');
        $checkUser->setEmail('user@localhost.com');

        $next = function ($checkUser) {
            return $checkUser;
        };

        $request = $checkUser->checkNameAndEmail($next, $checkUser->getName(), $checkUser->getEmail());

        $this->assertInstanceOf(CheckUser::class, $request);
    }
}