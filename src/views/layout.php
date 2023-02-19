<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <link rel="icon" href="../../public/img/flavicon.webp"/>
    <link rel="stylesheet" href="/public/css/theme.css">
    <script type="module" src="./public/js/main.js"></script>
</head>
<body>
<header>
    <section>
        <p>Header</p>
    </section>
</header>

<!--le corp de la page sera injecté en fonction de la page observée-->
<main>
    <?php require $template . '.php' ?>
</main>

<footer>
    <section>
        <p>footer</p>
    </section>
</footer>
</body>
</html>

