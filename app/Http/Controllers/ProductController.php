<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $service)
    {
        $this->productService = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = $this->paginate($this->productService->prepareData());
        return view('products', compact('products'));
    }


    public function paginate($items, $perPage = 5, $page = null, $options = []): LengthAwarePaginator
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
