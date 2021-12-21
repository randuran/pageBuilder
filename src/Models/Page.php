<?php

namespace Randyduran\Pagebuilder\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Page extends Model
{
    use SoftDeletes, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['user_id', 'parent_id', 'title', 'slug', 'background', 'status', 'has_children'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = ['author_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
        'has_children' => 'boolean',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'title'],
        ];
    }

    /**
     * Returns the author of the page
     *
     * @return Object parent
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Returns parent page
     *
     * @return Object parent
     */
    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    /**
     * Returns page containers
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function containers()
    {
        return $this->hasMany(Container::class);
    }
}