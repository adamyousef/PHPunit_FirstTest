<?php

namespace App\Models;
class User 
{  
    public $FirstName;
    public $LastName;
    public $Email;
    public function setFirstName($firstname)
    {
        $this->FirstName = trim($firstname);
    }
    public function getFirstName()
    {
       return  $this->FirstName;
   }
   
   public function setLastName($lastName)
   {
       $this->LastName = trim($lastName);
   }
   public function getLastName()
   {
      return  $this->LastName;
   } 
   public function getFullName()
   {
       return $this->getFirstName()." ".$this->getLastName();
   }
   public function setEmail($email)
   {
       $this->Email = trim($email);
   }
   public function getEmail()
   {
      return  $this->Email;
  }

  public function getVariable()
  {
      return[
      'fullName'=>$this->getFullName(),
      'email'=>$this->getEmail()
      ];
  }
}