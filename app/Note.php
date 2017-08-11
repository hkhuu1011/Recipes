<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // Table Name
    protected $table = 'notes';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = 'true';
}
