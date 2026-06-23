<section class="hero">
    <div class="hero__veil"></div>
    <div class="container hero__layout">
        <div class="hero__content">
            <div class="status-chip">
                <span class="status-dot"></span>
                <span>NBR 6118 / 6120 - motor estrutural em evolucao</span>
            </div>
            <h1>Inteligencia estrutural <span>em alta velocidade.</span></h1>
            <p>
                Um command center para modelagem 3D, analise FEM, dimensionamento,
                armaduras, telhados, fundacoes, orcamento e documentacao tecnica.
            </p>
            <div class="hero__actions">
                <a class="button button--primary" href="#pricing">Iniciar teste <span class="button__icon">↯</span></a>
                <a class="button button--ghost" href="#modules">Explorar modulos</a>
            </div>
        </div>

        <div class="solver-panel solver-panel--render-only" aria-label="Renderizacao 3D WebGL do EngCalc">
            <div class="solver-panel__grid blueprint-grid"></div>
            <div class="solver-viewport">
                <canvas class="solver-webgl" id="solver-webgl" aria-label="Renderizacao 3D WebGL de estrutura EngCalc"></canvas>
                <img src="<?= e(asset('img/engcalc-preview.png')) ?>" alt="Modelo 3D estrutural renderizado no EngCalc">
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="modules">
    <div class="container section-heading">
        <p class="eyebrow">Modulos especializados</p>
        <h2>Suites computacionais integradas para engenharia civil.</h2>
        <p>
            Recursos extraidos do resumo tecnico do projeto desktop, apresentados
            em uma estrutura visual baseada no design system gerado pelo Stitch.
        </p>
    </div>

    <div class="container specialized-grid">
        <article class="specialized-card">
            <span class="specialized-card__icon">EA</span>
            <h3>Analise Estrutural FEM</h3>
            <p>Portico espacial, metodo dos elementos finitos, diagramas, deslocamentos e verificacoes ELS/ELU.</p>
            <strong>Sparse matrix solver</strong>
        </article>
        <article class="specialized-card">
            <span class="specialized-card__icon">FD</span>
            <h3>Geotecnia e Fundacoes</h3>
            <p>Sapatas, blocos de estacas, bielas e tirantes, SPT e armaduras automaticas.</p>
            <strong>Auto rebar rendering</strong>
        </article>
        <article class="specialized-card">
            <span class="specialized-card__icon">RF</span>
            <h3>Advanced Roof Builder</h3>
            <p>Telhados por perimetro, skeleton generation, cumeeiras editaveis, beirais e telhas 3D.</p>
            <strong>Skeleton generation</strong>
        </article>
        <article class="specialized-card">
            <span class="specialized-card__icon">OS</span>
            <h3>Contexto de Terreno e OSM</h3>
            <p>Integracao OpenStreetMap, edificios, ruas, terreno, raio efetivo e cache salvo no JSON.</p>
            <strong>OSM integration</strong>
        </article>
    </div>
</section>

<section class="page-section page-section--panel">
    <div class="container module-layout">
        <div class="module-layout__intro">
            <p class="eyebrow">Pipeline</p>
            <h2>Do modelo 3D ao memorial de calculo.</h2>
            <p>
                O projeto trabalha com dados estruturais em JSON, renderizadores por
                categoria, picking por ID, criacao interativa e rebuilds parciais
                para manter a edicao fluida.
            </p>
        </div>

        <div class="module-list">
            <article class="module-row">
                <span>01</span>
                <div>
                    <h3>Modelagem 3D estrutural</h3>
                    <p>Vigas, pilares, lajes, fundacoes, escadas, paredes, cortes, terrenos e telhados em renderers separados.</p>
                </div>
            </article>
            <article class="module-row">
                <span>02</span>
                <div>
                    <h3>Criacao interativa</h3>
                    <p>Mouse, snap, grade, preview visual e modos especificos para cada elemento do projeto.</p>
                </div>
            </article>
            <article class="module-row">
                <span>03</span>
                <div>
                    <h3>Dimensionamento e verificacoes</h3>
                    <p>Rotinas para vigas, pilares, lajes, fundacoes, estabilidade, ELS, ELU e detalhamento de armaduras.</p>
                </div>
            </article>
            <article class="module-row">
                <span>04</span>
                <div>
                    <h3>Saidas tecnicas</h3>
                    <p>Pranchas, planta baixa, orcamento, memorial DOCX, preview de video e documentacao auditavel.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="page-section pricing-section" id="pricing">
    <div class="container section-heading">
        <p class="eyebrow">Planos</p>
        <h2>Modelos comerciais para testar no site.</h2>
        <p>
            Valores e nomes abaixo sao placeholders do design. Podemos ajustar
            quando voce definir a estrategia comercial real do EngCalc.
        </p>
    </div>

    <div class="container pricing-grid">
        <article class="pricing-card">
            <span class="plan-badge">Professional</span>
            <div class="plan-price">
                <strong>R$ 59</strong>
                <span>/mes</span>
            </div>
            <p>Para engenheiros estruturais independentes.</p>
            <ul>
                <li>Analise FEM e verificacoes NBR</li>
                <li>Fundacoes e telhados</li>
                <li>Renderizacao 3D de armaduras</li>
            </ul>
            <a class="button button--ghost" href="?page=sobre">Ver detalhes</a>
        </article>

        <article class="pricing-card pricing-card--featured">
            <span class="pricing-card__flag">Melhor valor</span>
            <span class="plan-badge">Enterprise</span>
            <div class="plan-price">
                <strong>R$ 199</strong>
                <span>/mes anual</span>
            </div>
            <p>Para escritorios e equipes multidisciplinares.</p>
            <ul>
                <li>Membros de equipe ilimitados</li>
                <li>Exportacoes CAD/BIM</li>
                <li>Suporte prioritario</li>
                <li>Integracoes customizadas</li>
            </ul>
            <a class="button button--primary" href="?page=sobre">Solicitar plano</a>
        </article>
    </div>
</section>

<section class="page-section page-section--panel" id="documentation">
    <div class="container docs-layout">
        <div>
            <p class="eyebrow">Documentacao e BIM</p>
            <h2>Memoria, pranchas e auditoria tecnica.</h2>
            <p>
                O EngCalc vai alem do calculo: o resumo do projeto descreve pranchas
                CAD, planta baixa 2D, memorial de calculo DOCX e registros detalhados
                para verificacao tecnica.
            </p>
            <div class="docs-stack">
                <article>
                    <span>DOC</span>
                    <div>
                        <h3>Memorial de calculo</h3>
                        <p>Capitulos com premissas, cargas, FEM, dimensionamento, fundacoes, verificacoes e conclusao.</p>
                    </div>
                </article>
                <article>
                    <span>CAD</span>
                    <div>
                        <h3>Pranchas tecnicas</h3>
                        <p>Layout de paginas, plantas, cortes, detalhes e exportacao de imagens de prancha.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="drawing-panel">
            <img src="<?= e(asset('img/logos/engcalc-symbol-name-below.png')) ?>" alt="Logo EngCalc com simbolo estrutural">
            <div class="drawing-panel__code">
                <span>// DETALHAMENTO DE ARMADURA</span>
                <strong>SECAO A-A: 4 Ø 12.5 CA-50</strong>
                <strong>COBRIMENTO: 30mm</strong>
                <em>GERANDO CAMADA DXF...</em>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Projetado para rigor tecnico.</h2>
        <p>
            Uma base visual mais forte para apresentar o EngCalc como software de
            engenharia estrutural, mantendo a identidade escura/ciano do aplicativo.
        </p>
        <div class="hero__actions cta-section__actions">
            <a class="button button--primary" href="#pricing">Ver planos</a>
            <a class="button button--ghost" href="?page=sobre">Conhecer o projeto</a>
        </div>
    </div>
</section>
