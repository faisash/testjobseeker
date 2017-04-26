<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_seeker extends Model
{
    //



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id', 'Mobile_No', 'DOB', 'Gender', 'Status', 'Resume_Id', 'Picture', 'Nationality_Id', 'Driving_License', 'Relocate', 'User_Id', 'Relocate', 'User_Id', 'Relocate', 'Created_At', 'Updated|_At'
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
