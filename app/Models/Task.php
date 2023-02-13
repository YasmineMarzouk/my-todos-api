<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string title
 * @property int status
 * @property boolean is_daily_routine
 * @property boolean finished_at
 * @property string comments
 * @property TodoList $todoList
 */
class Task extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function todoList(): BelongsTo
    {
        return $this->belongsTo(TodoList::class);
    }
}
