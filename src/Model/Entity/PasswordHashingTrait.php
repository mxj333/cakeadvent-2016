<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;

trait PasswordHashingTrait
{
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}