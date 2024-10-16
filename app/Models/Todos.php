<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Todos extends Model
{
    use HasFactory, BroadcastsEvents;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'start_date',
    ];

    public function bookmarks(): HasMany
    {
        return $this->hasMany(Bookmarks::class);
    }

    public function broadcastOn($event): array
    {
        return [$this, $this->user()];
    }

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }


}
