<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'memo'
    ];

    use Sortable;
}
