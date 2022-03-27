<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.products.index', [
            'products' => Product::query()
                ->searchable()
                ->sortable()
                ->paginate(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('public.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Display the creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.products.create', [
            'product' => new Product(),
        ]);
    }
}
