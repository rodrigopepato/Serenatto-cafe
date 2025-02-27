<?php

namespace App\Entity;

class Product
{
    private ?int $id = null;
    private ?string $filePath;

    public function __construct(
        private string $nome,
        private readonly string $categoria,
        private string $descricao,
        private string $preco
    ) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): string
    {
        return number_format((float) $this->preco, 2, '.', '');
    }

    public function getfilePath(): ?string
    {
        return $this->filePath;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function setfilePath($filePath): void
    {
        $this->filePath = $filePath;
    }

    public function setPreco(string $preco): void
    {
        if (!is_numeric($preco)) {
            throw new \InvalidArgumentException("O preço deve ser um número válido.");
        }
        $this->preco = number_format((float) $preco, 2, '.', '');
    }
}
