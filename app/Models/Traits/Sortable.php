<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Sortable
{
    /**
     * Attach sorting to query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSortable(Builder $query): Builder
    {
        if (
            ! request('sortBy')
            && ! request('sort')
        ) {
            return $query;
        }

        if (! isset($this->sortable)) {
            return $query;
        }

        if (! in_array(request('sortBy'), $this->sortable)) {
            return $query;
        }

        if (! in_array(request('sort'), ['ASC', 'DESC'])) {
            return $query;
        }

        return $query->orderBy(
            request('sortBy'),
            request('sort')
        );
    }
}
