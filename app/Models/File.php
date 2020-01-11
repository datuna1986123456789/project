<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model

{
    protected $fillable = [
        'url', 'type', 'uploadable_id', 'uploadable_type',
    ];


    public function uploadable() {
        return $this->morphTo();
    }
}

