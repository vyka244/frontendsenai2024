<?php
// iniciar um lista
$numeros = [];
// garantir que eu tenha 3 numeros diferentes
while(count($numeros) < 3){
    $numero = rand(1, 19);
    // gerou os valores random
    if(!in_array($numero, $numeros)) {
        $numeros[] = $numero;
    }
}
$produto1 = $numeros[0];
$produto2 = $numeros[1];
$produto3 = $numeros[2];

include "conexao.php";

$query = "select id, url, titulo, descricao FROM produtos WHERE id IN ($produto1,$produto2,$produto3)";

$resultado = $conexao->query($query);

// verificar se a busca retornou algo
$produtos = [];
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()) {
        $produtos[$row['id']] = $row;
    }
}

?>
<section id="produtos" class="card-section">
    <h2>Nossos produtos</h2>

    <div class="card-container">
<!-- card1 -->
    <div class="card">
        <img src="<?php 
        echo $produtos[$produto1]['url'];
        ?>" alt="">
        <!-- titulo do produto-->
        <h3><?php 
        echo $produtos[$produto1]['titulo'];
        ?></h3>
        <!-- descrição -->
        <p><?php
        echo $produtos[$produto1]['descricao'];
        ?></p>
        <a href="">Comprar</a>
    </div>

    <!-- card2 -->
    <div class="card">
    <img src="<?php 
        echo $produtos[$produto2]['url'];
        ?>" alt="">
        <!-- titulo do produto-->
        <h3><?php 
        echo $produtos[$produto2]['titulo'];
        ?></h3>
        <!-- descrição -->
        <p><?php
        echo $produtos[$produto2]['descricao'];
        ?></p>
        <a href="">Comprar</a>
    </div>

    <!-- card3 -->
    <div class="card">
    <img src="<?php 
        echo $produtos[$produto3]['url'];
        ?>" alt="">
        <!-- titulo do produto-->
        <h3><?php 
        echo $produtos[$produto3]['titulo'];
        ?></h3>
        <!-- descrição -->
        <p><?php
        echo $produtos[$produto3]['descricao'];
        ?></p>
        <a href="">Comprar</a>
    </div>


</div>
</section>