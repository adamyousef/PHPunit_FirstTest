<?php

class SimpleTest extends \PHPUnit\Framework\TestCase
{
public function testTrueAssertsToTrue(){
    //$this->assertTrue(false);
    $this->assertTrue(true);
}


}


/*
class UserTest extends \PHPUnit\Framework\TestCase
{
public function testThatIsFirstName(){
    $user = new \App\Models\User;
    $user->setFirstName('billy');
    
    $this->assertEquals($user->getFirstName(), "billy");
}


}*/