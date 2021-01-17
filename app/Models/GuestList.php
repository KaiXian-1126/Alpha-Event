<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestList extends Model
{
    use HasFactory;
    protected $table = "guest_list";
    public $timestamps = false;
}
