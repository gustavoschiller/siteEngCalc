<section class="hero">
    <div class="container hero__layout">
        <div class="hero__content">
            <p class="eyebrow">Modelagem estrutural e calculos</p>
            <h1>EngCalc</h1>
            <p>
                Site oficial do projeto EngCalc, inspirado na interface tecnica do
                aplicativo desktop: escuro, preciso e focado em ferramentas de engenharia.
            </p>
            <div class="hero__actions">
                <a class="button button--primary" href="?page=sobre">Conhecer o projeto</a>
                <a class="button button--ghost" href="#modulos">Ver modulos</a>
            </div>
        </div>

        <div class="app-preview" aria-label="Previa visual do EngCalc">
            <div class="app-preview__topbar">
                <span class="app-preview__mark">E</span>
                <span>Projeto estrutural.json</span>
                <span class="app-preview__status">salvo</span>
            </div>
            <div class="app-preview__body">
                <div class="app-preview__rail">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <img src="<?= e(asset('img/engcalc-preview.png')) ?>" alt="Modelo 3D gerado no EngCalc">
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="modulos">
    <div class="container section-heading">
        <p class="eyebrow">Resumo do projeto</p>
        <h2>Um ambiente integrado para engenharia estrutural</h2>
        <p>
            O EngCalc combina modelagem, analise, dimensionamento, visualizacao e
            documentacao tecnica em um fluxo unico baseado em projeto JSON.
        </p>
    </div>

    <div class="container feature-grid">
        <article class="feature-card">
            <span class="feature-card__icon">V</span>
            <h2>Modelagem</h2>
            <p>Fluxo para vigas, pilares, lajes, escadas, fundacoes, paredes e telhados.</p>
        </article>
        <article class="feature-card">
            <span class="feature-card__icon">A</span>
            <h2>Analise</h2>
            <p>Base para apresentar calculos, verificacoes e memoria tecnica do projeto.</p>
        </article>
        <article class="feature-card">
            <span class="feature-card__icon">D</span>
            <h2>Documentacao</h2>
            <p>Espaco para manuais, exemplos, versoes e explicacoes das ferramentas.</p>
        </article>
    </div>
</section>

<section class="page-section page-section--panel">
    <div class="container module-layout">
        <div class="module-layout__intro">
            <p class="eyebrow">Capacidades</p>
            <h2>Principais modulos do EngCalc</h2>
            <p>
                Conteudo extraido do arquivo de resumo tecnico do projeto desktop.
                A pagina resume os recursos para apresentacao publica, mantendo o
                documento completo como referencia interna.
            </p>
        </div>

        <div class="module-list">
            <article class="module-row">
                <span>01</span>
                <div>
                    <h3>Modelagem 3D estrutural</h3>
                    <p>Vigas, pilares, lajes, escadas, fundacoes, paredes, cortes, terrenos e telhados renderizados em batches separados.</p>
                </div>
            </article>
            <article class="module-row">
                <span>02</span>
                <div>
                    <h3>Criacao interativa</h3>
                    <p>Fluxo com mouse, snap, grade, preview visual e modos especificos para cada elemento do projeto.</p>
                </div>
            </article>
            <article class="module-row">
                <span>03</span>
                <div>
                    <h3>Analise e dimensionamento</h3>
                    <p>Analise estrutural FEM de portico espacial, verificacoes ELS/ELU e dimensionamento de vigas, pilares, lajes e fundacoes.</p>
                </div>
            </article>
            <article class="module-row">
                <span>04</span>
                <div>
                    <h3>Armaduras 3D</h3>
                    <p>Geracao geometrica de barras, estribos, malhas, armaduras de fundacoes e visualizacao com qualidade configuravel.</p>
                </div>
            </article>
            <article class="module-row">
                <span>05</span>
                <div>
                    <h3>Documentos e pranchas</h3>
                    <p>Visor de pranchas CAD, planta baixa 2D e geracao de memorial de calculo em DOCX.</p>
                </div>
            </article>
            <article class="module-row">
                <span>06</span>
                <div>
                    <h3>Orcamento e dados externos</h3>
                    <p>Estimativa de concreto e aco, integracao com mapas OSM, terreno, edificios e cache salvo no projeto.</p>
                </div>
            </article>
        </div>
    </div>
</section>
