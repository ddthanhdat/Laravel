<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'table_name';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_name', 'pass_word'
    ];

    protected $hidden = [
        'pass_word', 'remember_token',
    ];



    public static $rules = array(
        'user_name' => 'required',
        'pass_word' => 'required'
    );

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->pass_word; // name column password in table
    }

    public function getReminderEmail() {
        return $this->email;
    }

}
