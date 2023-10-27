<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TimelineEvent;

class Category extends Model
{
    use HasFactory;

    public function timelineEvents() {
        return $this->hasMany(TimelineEvent::class);
    }
}
