<?php

namespace Randyduran\Pagebuilder\Traits;


trait asPageBuilder
{
    /**
     * Returns users pages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    final public function pages()
    {
        return $this->hasMany(Page::class, 'user_id', 'id');
    }
}