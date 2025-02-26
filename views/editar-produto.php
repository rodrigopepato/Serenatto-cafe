<?php
    require_once __DIR__ . '/inicio.php';
?>

<main>
  <section class="container-admin-banner">
    <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
    <h1>Editar Produto</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
    <form action="#">

      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>

      <div class="container-radio">
        <div>
            <label for="cafe">Café</label>
            <input type="radio" id="cafe" name="tipo" value="Café" checked>
        </div>
        <div>
            <label for="almoco">Almoço</label>
            <input type="radio" id="almoco" name="tipo" value="Almoço">
        </div>
    </div>

      <label for="descricao">Descrição</label>
      <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" required>

      <label for="preco">Preço</label>
      <input type="text" id="preco" name="preco" placeholder="Digite uma descrição" required>

      <label for="imagem">Envie uma imagem do produto</label>
      <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

      <input type="submit" name="editar" class="botao-cadastrar"  value="Editar produto"/>
    </form>

  </section>
</main>

<?php
    require_once __DIR__ . '/fim.php';
?>
