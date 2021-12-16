<?php

namespace Randyduran\Pagebuilder\Models;

use Randyduran\Pagebuilder\Models\Component;
use Illuminate\Database\Eloquent\Model;
use Randyduran\Pagebuilder\Models\Page;

class Container extends Model
{
    protected $fillable = [
        'page_id',
        'component_id',
        'options',
        'position',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    /**
     * Returns container's page
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function page()
    {
        return $this->BelongsTo(Page::class);
    }

    /**
     * Returns container's component
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}