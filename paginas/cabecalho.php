<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Canais</title>
    <link rel="stylesheet" href="../css/principal.css"> 
</head>
<body>

    <header>
        <div class="logo">:3</div>

        <nav>
            <a href="/">Página inicial</a>
            <?php 
                if (!isset($id_meu_canal)) {
                    echo "<a href=\"login\">Meu perfil</a>";
                } else {
                    echo "<a href=\"/canal/" . $id_meu_canal . "\">Meu perfil</a>";
                }
            ?>
        </nav>
    </header>

</body>
</html>
