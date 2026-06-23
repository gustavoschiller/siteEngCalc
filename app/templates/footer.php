    </main>

    <footer class="site-footer">
        <div class="container site-footer__inner">
            <div class="site-footer__brand">
                <img src="<?= e(asset('img/logos/engcalc-icon-dark.png')) ?>" alt="">
                <div>
                    <strong><?= e(config('site_name')) ?></strong>
                    <span>&copy; <?= date('Y') ?> EngCalc Systems. Software de engenharia de precisao.</span>
                </div>
            </div>
            <div class="site-footer__links">
                <div>
                    <strong>Produto</strong>
                    <a href="/#modules">Modulos</a>
                    <a href="/#pricing">Planos</a>
                </div>
                <div>
                    <strong>Recursos</strong>
                    <a href="/#documentation">Documentacao</a>
                    <a href="?page=sobre">Sobre</a>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="<?= e(asset('js/main.js')) ?>"></script>
</body>
</html>
