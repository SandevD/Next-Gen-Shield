<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOne extends Model
{
    use HasFactory;
    protected $casts = [
        'image_one' => 'object',
        'image_two' => 'object',
        'image_three' => 'object',
        'image_four' => 'object',
        'image_five' => 'object',
        'image_six' => 'object',
        'image_seven' => 'object',
    ];
}
