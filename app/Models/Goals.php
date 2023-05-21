<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Goals extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'goals';
    protected $fillable = ['image', 'goals', 'amount','current','balance','duedate'];
    protected $hidden;
}
