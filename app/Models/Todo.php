<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function user()
    {
        //relationship many to one
        return $this->belongsto('App\Models\User');
    }

    //$todo ->attachment_url
    public function getAttachmentUrlAttribute()
    {
        return asset('storage/'.$this->attachment);
    }
}
