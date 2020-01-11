<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Article extends Model
{
    {

    protected $fillable = [
        'title', 'summary', 'content', 'category_id', 'published',
    ];

    public function uploads() {
        return $this->morphMany(File::class, 'uploadable');
    }
}
