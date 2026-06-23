<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site EngCalc">
    <title><?= e(config('site_name')) ?></title>
    <link rel="icon" type="image/png" href="<?= e(asset('img/logos/engcalc-icon-blue.png')) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;700;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(asset('css/styles.css')) ?>">
</head>
<body>
    <header class="site-header">
        <div class="container site-header__inner">
            <a class="brand" href="/">
                <img class="brand__logo" src="<?= e(asset('img/logos/engcalc-icon-dark.png')) ?>" alt="">
                <span><?= e(config('site_name')) ?></span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
                <span class="nav-toggle__line"></span>
                <span class="nav-toggle__line"></span>
                <span class="nav-toggle__line"></span>
            </button>
            <nav class="site-nav" id="site-nav" aria-label="Navegacao principal">
                <a class="is-active" href="/">Inicio</a>
                <a href="/#modules">Modulos</a>
                <a href="/#pricing">Planos</a>
                <a href="/#documentation">Documentacao</a>
                <a href="?page=sobre">Sobre</a>
            </nav>
            <div class="nav-actions">
                <a class="nav-actions__ghost" href="?page=sobre">Entrar</a>
                <a class="nav-actions__primary" href="/#pricing">Teste gratuito</a>
            </div>
        </div>
    </header>

    <main>
