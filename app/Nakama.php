<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nakama extends Model
{
    protected $fillable = ['name', 'job_role', 'phone_number', 'status', 'work_location'];

    public $table = 'nakama';
}
