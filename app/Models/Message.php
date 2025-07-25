<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasUlids;

    protected $fillable = [
        'inbox_id',
        'user_id',
        'content',
        'is_read',
    ];

    public function inbox()
    {
        return $this->belongsTo(Inbox::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
