<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EngCalc — ambiente integrado de modelagem estrutural, análise FEM, dimensionamento e documentação técnica.">
    <meta name="theme-color" content="#0c0f14">
    <title><?= e(config('site_name')) ?> — Modelagem e cálculo estrutural</title>
    <link rel="icon" type="image/png" href="<?= e(asset('img/logos/engcalc-icon-blue.png')) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap">
    <link rel="stylesheet" href="<?= e(asset('css/styles.css')) ?>">
</head>
<body>
    <?php $current = current_page(); ?>
    <header class="site-header">
        <div class="container site-header__inner">
            <a class="brand" href="/">
                <img class="brand__logo" src="<?= e(asset('img/logos/engcalc-icon-dark.png')) ?>" alt="">
                <span class="brand__name"><?= e(config('site_name')) ?></span>
                <span class="brand__tag">v0.1</span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Abrir menu">
                <span class="nav-toggle__line"></span>
                <span class="nav-toggle__line"></span>
                <span class="nav-toggle__line"></span>
            </button>
            <nav class="site-nav" id="site-nav" aria-label="Navegação principal">
                <a href="/"<?= $current === 'home' ? ' class="is-active" aria-current="page"' : '' ?>>Início</a>
                <a href="?page=sobre"<?= $current === 'sobre' ? ' class="is-active" aria-current="page"' : '' ?>>Sobre</a>
                <a class="site-nav__cta" href="?page=sobre">Conhecer o projeto</a>
            </nav>
        </div>
    </header>

    <main>
