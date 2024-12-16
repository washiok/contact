<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
         'name',
         'sex',
         'email',
         'tel',
         'address',
         'building',
         'select',
         'content'
             ];
}
