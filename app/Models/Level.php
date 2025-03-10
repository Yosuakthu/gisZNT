<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class level extends Model
{
    use HasFactory;

    public $table = "level";

    protected $fillable = ['level'];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'level_id');
    }
}
