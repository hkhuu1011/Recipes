<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    // Table Name
    protected $table = 'saves';
    // Primary Key
    public $primaryKey = 'id';
    // Recipe ID
//    public $recipe_id = 'recipe_id';
    // Source URL
//    public $sourceUrl = 'sourceUrl';
    // Timestamp
    public $timestamps = 'true';
}
