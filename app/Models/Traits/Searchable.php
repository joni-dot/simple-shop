<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    /**
     * Attach search filter to query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchable(Builder $query): Builder
    {
        if (! request('search')) {
            return $query;
        }

        if (! isset($this->searchable)) {
            return $query;
        }

        $query->where(function ($q) {
            foreach ($this->searchable as $field) {
                $q->orWhere($field, 'LIKE', '%'.request('search').'%');
            }

            return $q;
        });

        return $query;
    }
}
