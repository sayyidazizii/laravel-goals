<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'goals', 'amount','current','balance','duedate','created_at'];
}
