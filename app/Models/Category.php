<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string title
 * @property string icon
 * @property TodoList[] $todoLists
 */
class Category extends Model
{
    use HasFactory;

    public function todoLists(): HasMany
    {
        return $this->hasMany(TodoList::class);
    }
}
