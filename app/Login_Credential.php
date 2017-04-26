<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_Credential extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id', 'User_Name', 'Password', 'User_Id', 'IP_Address', 'Terminal_Name'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];
}
