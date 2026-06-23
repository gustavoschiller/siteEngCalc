    </main>

    <footer class="site-footer">
        <div class="container site-footer__inner">
            <div class="site-footer__brand">
                <a class="brand" href="/">
                    <img class="brand__logo" src="<?= e(asset('img/logos/engcalc-icon-dark.png')) ?>" alt="">
                    <span class="brand__name"><?= e(config('site_name')) ?></span>
                </a>
                <p>Ambiente integrado de modelagem estrutural, análise e documentação técnica.</p>
            </div>
            <nav class="site-footer__nav" aria-label="Rodapé">
                <span class="site-footer__label">Navegação</span>
                <a href="/">Início</a>
                <a href="?page=sobre">Sobre</a>
                <a href="/#modulos">Módulos</a>
            </nav>
        </div>
        <div class="container site-footer__bottom">
            <span>&copy; <?= date('Y') ?> <?= e(config('site_name')) ?></span>
            <span class="site-footer__status">Projeto em desenvolvimento</span>
        </div>
    </footer>

    <script src="<?= e(asset('js/main.js')) ?>"></script>
</body>
</html>

