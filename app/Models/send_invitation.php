<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class send_invitation extends Model
{
    use HasFactory;
    protected $table = "send_invitations";
    public $primaryKey='id';
}
