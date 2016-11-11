<?php namespace App\Validators;

use Hash;

class HashValidator {

  public function validateHash($attribute, $value, $parameters) {
    return Hash::check($value, $parameters[0]);
  }

}