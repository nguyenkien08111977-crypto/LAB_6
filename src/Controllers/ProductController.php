<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Repositories\ProductRepository;

// TODO P3: Controller nhận ProductRepository qua constructor.
final class ProductController
{
    public function __construct(private ProductRepository $products) {}

    public function index(): void
    {
        $products = $this->products->all();
        // TODO P4: $products = $this->products->all();
        // TODO P5: require views/products/index.php.
        require __DIR__ . '/../../views/products/index.php';
    }
}
