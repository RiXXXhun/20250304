<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'color',
        'user_id'
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

}
