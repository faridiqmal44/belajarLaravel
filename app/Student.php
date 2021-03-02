<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //field yang hanya bisa diperbaharui
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
