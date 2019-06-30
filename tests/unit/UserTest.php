<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
public function testThatIsFirstName()
  {
    $user = new \App\Models\User;
    $user->setFirstName('billy');
    $user->setLastName('Nzazi');
    
    $this->assertEquals($user->getFirstName(), "billy");
  
  }
public function testThatIsLasstName()
{
    $user = new \App\Models\User;
    $user->setLastName('Nzazi');
    $this->assertEquals($user->getLastName(), "Nzazi");
}
public function testThatIsFulltName()
{
    $user = new \App\Models\User;
    $user->setFirstName('billy');
    $user->setLastName('Nzazi');
    $this->assertEquals($user->getFullName(), "billy Nzazi");
}

public function testThatIsFulltNameTrimed()
{
    $user = new \App\Models\User;
    $user->setFirstName('    billy');
    $user->setLastName('    Nzazi');
    $this->assertEquals($user->getFullName(), "billy Nzazi");
}
public function testEmail()
{
    $user = new \App\Models\User;
    $user->setEmail('billy@gmail.com');
    $this->assertEquals($user->getEmail(), "billy@gmail.com");

}
public function testVariable()
{
    $user = new \App\Models\User;
    $user->setFirstName('billy');
    $user->setLastName('Nzazi');
    $user->setEmail('billy@gmail.com');

    $Variable = $user->getVariable();

    $this->assertArrayHasKey('fullName', $Variable);
    $this->assertArrayHasKey('email', $Variable);

    $this->assertEquals($Variable['fullName'], "billy Nzazi");
    $this->assertEquals($Variable['email'], "billy@gmail.com");

}

}