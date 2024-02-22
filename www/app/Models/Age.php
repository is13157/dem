<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Age extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function perfomance():BelongsTo
    {
        return $this->belongsTo(Perfomance::class);
    }
}
