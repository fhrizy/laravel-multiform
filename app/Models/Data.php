<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'datas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'dateofbirth',
        'gender',
        'address',
        'kel',
        'kec',
        'city',
        'province',
        'degree',
        'school',
        'study',
        'graduation',
        'gpa',
        'cv'
    ];
}
