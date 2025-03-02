<?php

namespace App\Repository;

use App\Entity\Product;
use PDO;

class ProductRepository
{

    public function __construct(private PDO $pdo)
    {
    }

    /** * @return Product[] */
        public function all(): array
        {
            $productList = $this->pdo
                        ->query('SELECT * FROM products;')
                        ->fetchAll(PDO::FETCH_ASSOC);

            return array_map(
                $this->hydrateProduct(...),
                $productList
                );
        }

            /** * @return Product[] */
            public function produtosCafe(): array
            {
                $sql = 'SELECT * FROM products WHERE categoria = ?';
                $statement = $this->pdo->prepare($sql);
                $statement->bindValue(1, 'Cafe');
                $statement->execute();
                $productList = $statement->fetchAll();

                return array_map(
                    $this->hydrateProduct(...),
                    $productList
                    );
            }

                /** * @return Product[] */
        public function produtosAlmoco(): array
        {
            $productList = $this->pdo
                        ->query('SELECT * FROM products;')
                        ->fetchAll(PDO::FETCH_ASSOC);

            return array_map(
                $this->hydrateProduct(...),
                $productList
                );
        }


        public function hydrateProduct(array $productData) :Product
        {
            $product = new Product(
                $productData['nome'],
                $productData['categoria'],
                $productData['descricao'],
                $productData['preco']
            );
            $product->setId($productData['id']);

            if ($productData['image_path'] !== null) {
                $product->setfilePath($productData['image_path']);
            }

            return $product;
        }
}
