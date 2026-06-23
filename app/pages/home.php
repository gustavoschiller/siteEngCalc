<section class="hero">
    <div class="container hero__layout">
        <div class="hero__content">
            <p class="eyebrow">Modelagem estrutural e cálculo</p>
            <h1>EngCalc</h1>
            <p>
                Site oficial do projeto EngCalc, inspirado na interface técnica do
                aplicativo desktop: escuro, preciso e focado em ferramentas de
                engenharia estrutural.
            </p>
            <div class="hero__actions">
                <a class="button button--primary" href="?page=sobre">Conhecer o projeto</a>
                <a class="button button--ghost" href="#modulos">Ver módulos</a>
            </div>
            <div class="hero__meta">
                <div>
                    <strong>3D</strong>
                    <span>Modelagem estrutural</span>
                </div>
                <div>
                    <strong>FEM</strong>
                    <span>Análise de pórtico</span>
                </div>
                <div>
                    <strong>JSON</strong>
                    <span>Projeto unificado</span>
                </div>
            </div>
        </div>

        <div class="app-preview" aria-label="Prévia visual do EngCalc">
            <div class="app-preview__topbar">
                <span class="app-preview__mark">E</span>
                <span>projeto-estrutural.json</span>
                <span class="app-preview__status">salvo</span>
            </div>
            <div class="app-preview__body">
                <div class="app-preview__rail">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <img src="<?= e(asset('img/engcalc-preview.png')) ?>" alt="Modelo estrutural 3D gerado no EngCalc">
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="modulos">
    <div class="container section-heading">
        <p class="eyebrow">Resumo do projeto</p>
        <h2>Um ambiente integrado para engenharia estrutural</h2>
        <p>
            O EngCalc combina modelagem, análise, dimensionamento, visualização e
            documentação técnica em um fluxo único baseado em projeto JSON.
        </p>
    </div>

    <div class="container feature-grid">
        <article class="feature-card">
            <span class="feature-card__icon">V</span>
            <h2>Modelagem</h2>
            <p>Fluxo para vigas, pilares, lajes, escadas, fundações, paredes e telhados.</p>
        </article>
        <article class="feature-card">
            <span class="feature-card__icon">A</span>
            <h2>Análise</h2>
            <p>Base para apresentar cálculos, verificações e memória técnica do projeto.</p>
        </article>
        <article class="feature-card">
            <span class="feature-card__icon">D</span>
            <h2>Documentação</h2>
            <p>Espaço para manuais, exemplos, versões e explicações das ferramentas.</p>
        </article>
    </div>
</section>

<section class="page-section page-section--panel">
    <div class="container module-layout">
        <div class="module-layout__intro">
            <p class="eyebrow">Capacidades</p>
            <h2>Principais módulos do EngCalc</h2>
            <p>
                Conteúdo extraído do arquivo de resumo técnico do projeto desktop.
                A página resume os recursos para apresentação pública, mantendo o
                documento completo como referência interna.
            </p>
        </div>

        <div class="module-list">
            <article class="module-row">
                <span>01</span>
                <div>
                    <h3>Modelagem 3D estrutural</h3>
                    <p>Vigas, pilares, lajes, escadas, fundações, paredes, cortes, terrenos e telhados renderizados em batches separados.</p>
                </div>
            </article>
            <article class="module-row">
                <span>02</span>
                <div>
                    <h3>Criação interativa</h3>
                    <p>Fluxo com mouse, snap, grade, preview visual e modos específicos para cada elemento do projeto.</p>
                </div>
            </article>
            <article class="module-row">
                <span>03</span>
                <div>
                    <h3>Análise e dimensionamento</h3>
                    <p>Análise estrutural FEM de pórtico espacial, verificações ELS/ELU e dimensionamento de vigas, pilares, lajes e fundações.</p>
                </div>
            </article>
            <article class="module-row">
                <span>04</span>
                <div>
                    <h3>Armaduras 3D</h3>
                    <p>Geração geométrica de barras, estribos, malhas, armaduras de fundações e visualização com qualidade configurável.</p>
                </div>
            </article>
            <article class="module-row">
                <span>05</span>
                <div>
                    <h3>Documentos e pranchas</h3>
                    <p>Visor de pranchas CAD, planta baixa 2D e geração de memorial de cálculo em DOCX.</p>
                </div>
            </article>
            <article class="module-row">
                <span>06</span>
                <div>
                    <h3>Orçamento e dados externos</h3>
                    <p>Estimativa de concreto e aço, integração com mapas OSM, terreno, edifícios e cache salvo no projeto.</p>
                </div>
            </article>
        </div>
    </div>
</section>
