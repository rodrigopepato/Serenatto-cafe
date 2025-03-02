<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Controller\ControllerWithHtml;

class ProductListController extends ControllerWithHtml implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }

    public function processaRequisicao(): void
    {

        $productList = $this->productRepository->all();

        echo $this->renderTemplate(
            'cardapio-list',
            ['productList' => $productList]
        );
    }
}
