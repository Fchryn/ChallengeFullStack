<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];

    public function  getAuthIdentifierName() {
        return 'username';
    }

    public function getAuthIdentifier() {
        return $this->username;
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getRememberToken() {
        return $this->token;
    }

    public function setRememberToken($value) {
        return $this->token = $value;
    }

    public function getRememberTokenName() {
        return 'token';
    }
}
