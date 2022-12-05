<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentss extends Model
{
    use HasFactory;
protected $table = 'studentss';

    protected $fillable = ['id','Name','Branch','GPA'];
}
