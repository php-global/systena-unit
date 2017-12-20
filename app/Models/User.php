<?php

namespace App\Models;

class User
{
  public $user;

  public function setNameUser($name)
  {
    $this->user = $name;
  }

  public function getNameUser()
  {
    return $this->user;
  }
}