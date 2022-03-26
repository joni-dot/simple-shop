<?php

namespace App\Models;

use App\Models\Traits\HasStaticTableName;
use App\Models\Traits\Searchable;
use App\Models\Traits\Sortable;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasStaticTableName;
    use Searchable;
    use Sortable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Array of fields that are searchable.
     *
     * @var array
     */
    protected $searchable = [
        'name',
        'barcode',
    ];

    /**
     * Array of fields that are sortable.
     *
     * @var array
     */
    protected $sortable = [
        'name',
        'barcode',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
