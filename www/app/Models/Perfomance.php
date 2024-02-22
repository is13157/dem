<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Perfomance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genre():BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function age():HasOne
    {
        return $this->hasOne(Age::class);
    }
}
