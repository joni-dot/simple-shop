<?php

namespace App\Models\Traits;

trait HasStaticTableName
{
    /**
     * Return db table name of model.
     *
     * @return  string
     */
    public static function tableName(): string
    {
        return with(new static)->getTable();
    }
}
