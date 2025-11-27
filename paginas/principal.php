<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Canais</title>
    <link rel="stylesheet" href="../css/principal.css"> 
</head>
<body>

    <?php
        require "cabecalho.php";
    ?>

    <!-- Ranking dos canais com mais likes -->
    <div class="container-ranking">
        
        <?php
            if (!isset($conexao)) {$conexao = conectar_bd();}
            $comando_ranking = "SELECT Canal.Nome, count(*) \"Quantidade likes\"
                                FROM LikeCanal
                                JOIN Canal ON LikeCanal.idCanal = Canal.idCanal
                                WHERE Dislike = False
                                GROUP BY LikeCanal.idCanal
                                ORDER BY \"Quantidade likes\" DESC LIMIT 10;";

            $result = mysqli_query($conexao, $comando_ranking);
            $dados = $result->fetch_all(MYSQLI_ASSOC);
        ?>

        <h1>Canais com mais likes</h1>
        <table border="1">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Quantidade de likes</th>
        </tr>
        <?php $pos = 1; foreach($dados as $linha): ?>
            <tr>
                <td><?= $pos ?></td>
                <td><?= htmlspecialchars($linha['Nome']) ?></td>
                <td><?= htmlspecialchars($linha['Quantidade likes']) ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

    <!-- Ranking dos canais com mais deslikes -->
    <div class="container-ranking">
        
        <?php
            if (!isset($conexao)) {$conexao = conectar_bd();}
            $comando_ranking = "SELECT Canal.Nome, count(*) \"Quantidade likes\"
                                FROM LikeCanal
                                JOIN Canal ON LikeCanal.idCanal = Canal.idCanal
                                WHERE Dislike = True
                                GROUP BY LikeCanal.idCanal
                                ORDER BY \"Quantidade likes\" DESC LIMIT 10;";

            $result = mysqli_query($conexao, $comando_ranking);
            $dados = $result->fetch_all(MYSQLI_ASSOC);
        ?>

        <h1>Canais com mais deslikes</h1>
        <table border="1">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Quantidade de deslikes</th>
        </tr>
        <?php $pos = 1; foreach($dados as $linha): ?>
            <tr>
                <td><?= $pos ?></td>
                <td><?= htmlspecialchars($linha['Nome']) ?></td>
                <td><?= htmlspecialchars($linha['Quantidade likes']) ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

    <!-- Lista de canais -->
    <div class="container-canais">

        <!-- Cada card -->
        <?php 
            $conexao = conectar_bd();
            $comando = "SELECT * FROM Canal";
            $resultado_query = mysqli_query($conexao, $comando);
            if (mysqli_num_rows($resultado_query) !== 0) {
                // Loop que escreve os cards de cada canal
                // Observação importante que ele é aberto dentro dessa tag php e fechado apenas na tag mais abaixo
                while ($canal = mysqli_fetch_assoc($resultado_query)) {
        ?>
        <?= "<a href=\"/canal/{$canal['idCanal']}\">
            <div class=\"card-canal\">
                <img src=\"{$canal['Caminho_banner']}\" alt=\"Banner do {$canal['Nome']}\" class=\"banner\">
                <div class=\"info\">
                    <h3>{$canal['Nome']}</h3>
                </div>
            </div>
        </a>"
        ?>
        <?php }}?>
    </div>
</div>

</body>
</html>
