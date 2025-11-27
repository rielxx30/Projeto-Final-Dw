<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Canais</title>
    <link rel="stylesheet" href="../css/principal.css"> 
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="logo">:3</div>

        <nav>
            <a href="#">Página inicial</a>
            <a href="#">Meu perfil</a>
        </nav>
    </header>

    <section class="busca">
        <input type="text" placeholder="Buscar canais...">
    </section>

    <!-- Lista de canais (os dados virão do banco depois) -->
    <div class="container-canais">

    <!-- Cada card -->
    <div class="card-canal">
        <img src="banner.jpg" alt="Banner do canal" class="banner">
        <div class="info">
            <h3>Nome do Canal</h3>
            <p>contato@exemplo.com</p>
        </div>
    </div>

    <div class="card-canal">
        <img src="banner.jpg" alt="Banner do canal" class="banner">
        <div class="info">
            <h3>Outro Canal</h3>
            <p>(00) 00000-0000</p>
        </div>
    </div>

    <!-- Repete isso no PHP -->
</div>

</body>
</html>
