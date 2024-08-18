<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmarks extends Model
{
    use HasFactory;

    /**
     * App\Models\Bookmarks
     * @property integer $id
     * @property string $title
     */
    protected $fillable = [
        'title',
        'og_url',
        'shortened_url',
        'og_image',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function todo(): BelongsTo
    {
        return $this->belongsTo(Todos::class);
    }
}
