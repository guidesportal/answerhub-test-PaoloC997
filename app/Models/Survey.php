<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $id)
 */
class Survey extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public $timestamps = true;

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
