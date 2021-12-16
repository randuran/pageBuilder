<?php

namespace Randyduran\Pagebuilder\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['name', 'path', 'description', 'options'];
    protected $casts = [
        'is_container' => 'boolean',
        'options' => 'array',
    ];

    /**
     * Returns pages
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pages()
    {
        return $this->belongsToMany(Page::class, 'component_page');
    }

    /**
     * Format component name
     *
     * @return string $name
     */
    public function getTitleAttribute()
    {
        $title = str_replace('-', ' ', $this->name);
        return ucwords($title);
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = json_encode($value);
    }
}