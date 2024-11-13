<?php

namespace App\Models;

use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tech_stack' => 'array',
        'status' => ProjectStatus::class,
        'ends_at' => 'datetime'
    ];

    /*public function casts()
    {
        return [
            'tech_stack' => 'array',
        ];
    }*/

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
