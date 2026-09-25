<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'registration_number',
        'course',
        'gender',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}