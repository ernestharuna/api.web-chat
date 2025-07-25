<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Inbox extends Model
{
    use HasUlids;
    protected $fillable = [];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
