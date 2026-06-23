# Memoria do Projeto

Este arquivo deve ser atualizado sempre que uma funcao importante for criada,
alterada ou quando um bug for corrigido. A intencao e evitar repetir erros e
manter o historico tecnico do projeto facil de consultar.

## Decisoes Iniciais

| Data | Decisao | Motivo |
| --- | --- | --- |
| 2026-06-23 | Usar PHP + HTML + CSS + JS sem framework no inicio | O projeto esta comecando do zero e essa pilha permite desenvolvimento simples, hospedagem facil e evolucao gradual. |
| 2026-06-23 | Usar `public/` como raiz web | Mantem arquivos internos do PHP fora do acesso direto pelo navegador. |
| 2026-06-23 | Separar paginas, templates, helpers e assets | Reduz mistura de responsabilidades e facilita manutencao. |
| 2026-06-23 | Instalar PHP portatil em `tools/php/` | Permite rodar o projeto pelo `.bat` sem depender do PATH global do Windows. |
| 2026-06-23 | Basear o visual no projeto desktop EngCalc | O site deve comunicar a mesma identidade do aplicativo em C++/OpenGL/ImGui. |
| 2026-06-23 | Usar `Resumo_Projeto.md` como fonte de conteudo | O site deve apresentar os modulos reais do EngCalc, nao textos genericos. |
| 2026-06-23 | Integrar design system gerado pelo Stitch | O HTML Tailwind foi portado manualmente para PHP/CSS proprio, sem adicionar Tailwind ao projeto. |
| 2026-06-23 | Refinar fidelidade ao Stitch | Adicionados topbar actions, underline ativo, hero com destaque azul, barras do painel solver, pricing centralizado e footer em colunas. |
| 2026-06-23 | Adicionar WebGL no painel Sparse Matrix Solver | O container do solver passou a renderizar uma cena 3D com Three.js local, mantendo imagem como fallback. |
| 2026-06-23 | Corrigir eixo Z invertido no WebGL | A cena Three.js passou a seguir a convencao do EngCalc: X/Y em planta e Z negativo como altura visual. |
| 2026-06-23 | Corrigir giro desalinhado no WebGL | Removida inclinacao animada do grupo; a perspectiva agora vem da camera com `camera.up=(0,0,-1)` e o modelo gira somente em Z. |

## Identidade Visual

Origem: `C:\Users\gusta\Desktop\c++\EngCalc\EngCalc\Project1`

Referencia complementar: `C:\Users\gusta\Downloads\stitch_engcalc_design_system\DESIGN.md`

Cores extraidas de `UIEngine.h` e `UIEngineV2.h`:

| Uso | Cor aproximada | Origem |
| --- | --- | --- |
| Fundo principal | `#0F1217` | `COL_BG_SCENE` |
| Fundo escuro lateral | `#14171C` | `COL_BG_DARK` |
| Cabecalho/painel | `#1A1C24` | `COL_BG_HEADER` |
| Botao normal | `#24262E` | `COL_BTN_IDLE` |
| Botao hover | `#333847` | `COL_BTN_HOVER` |
| Acento azul | `#38A6F5` | `COL_ACCENT` |
| Acento verde/status | `#2EC78C` | `COL_ACCENT_GREEN` |
| Texto principal | `#F2F5FA` | `COL_TEXT` |
| Texto secundario | `#8C94A6` | `COL_TEXT_DIM` |

Componentes traduzidos para o site:

- Marca quadrada com letra `E`, igual ao top bar do programa.
- Botao primario azul com texto escuro, baseado em `drawPrimaryButton`.
- Cards escuros compactos com borda/acento no topo, baseados em `drawActionCard` e `buttonModern`.
- Preview do app com topbar, rail lateral e imagem real do modelo 3D.
- Blueprint grid, painel "Sparse Matrix Solver", cards de modulos, pricing cards e bloco de documentacao inspirados no `code.html` do Stitch.

## Conteudo Extraido do Projeto Desktop

Fonte: `C:\Users\gusta\Desktop\c++\EngCalc\EngCalc\Project1\Resumo_Projeto.md`

Resumo usado no site:

- Aplicacao C++ com OpenGL, shaders GLSL, renderizacao 3D propria e UI 2D.
- Estado principal baseado em JSON (`projectData`), com picking por ID/cor.
- Elementos modelados: vigas, pilares, lajes, fundacoes, escadas, paredes, cortes, terrenos e telhados.
- Criacao interativa com mouse, snap, grade, preview e modos especificos.
- Analise estrutural FEM, deslocamentos, diagramas, verificacoes ELS/ELU e dimensionamento.
- Armaduras 3D para vigas, pilares, lajes, escadas, fundacoes e vergas.
- Pranchas tecnicas, planta baixa 2D, orcamento, memorial DOCX, video preview e dados OSM.

## Assets Gerados

| Data | Asset | Caminho | Observacao |
| --- | --- | --- | --- |
| 2026-06-23 | Logo conceito 1 | `public/assets/img/logos/engcalc-logo-concept-1.png` | Monograma E com estrutura predial e eixos. |
| 2026-06-23 | Logo conceito 2 | `public/assets/img/logos/engcalc-logo-concept-2.png` | Monograma E com pilar, calculadora e mira tecnica. |
| 2026-06-23 | Logo conceito 3 | `public/assets/img/logos/engcalc-logo-concept-3.png` | E estrutural com malha FEM e check de verificacao. |
| 2026-06-23 | Logo adotado | `public/assets/img/logos/engcalc-logo-adopted.png` | Concept 1 adotado exatamente como arte principal. |
| 2026-06-23 | Simbolo principal | `public/assets/img/logos/engcalc-symbol-main.png` | Recorte do simbolo grande sem wordmark. |
| 2026-06-23 | Logo principal | `public/assets/img/logos/engcalc-logo-main.png` | Recorte do simbolo com wordmark grande. |
| 2026-06-23 | Icone escuro | `public/assets/img/logos/engcalc-icon-dark.png` | Icone de app em fundo escuro, usado no header. |
| 2026-06-23 | Logo horizontal | `public/assets/img/logos/engcalc-logo-horizontal.png` | Lockup horizontal para banners, rodape e apresentacoes. |
| 2026-06-23 | Icone azul | `public/assets/img/logos/engcalc-icon-blue.png` | Icone de app em fundo azul, usado como favicon. |
| 2026-06-23 | Simbolo com nome abaixo | `public/assets/img/logos/engcalc-symbol-name-below.png` | Simbolo principal com wordmark original do concept 1 posicionado abaixo. |

## Frontend Interativo

### `initSolverWebgl()`

Arquivo: `public/assets/js/main.js`

Inicializa o canvas `#solver-webgl` dentro do painel "Sparse Matrix Solver".
Usa Three.js local em `public/assets/vendor/three/three.module.min.js` para
renderizar uma estrutura 3D simplificada com pilares, vigas, lajes, armaduras e
grid de referencia. Se WebGL nao carregar, a imagem fallback do painel continua
visivel.

Convencao obrigatoria: seguir o projeto desktop EngCalc, onde `X/Y` representam
a planta e `Z` negativo representa "para cima". Evitar implementar cenas novas
usando `Y` como altura.

## Dependencias

### PHP 8.5.7 NTS x64

Instalado em: `tools/php/`

Uso principal: executar o servidor local embutido do PHP e interpretar os arquivos
`.php` do projeto.

O arquivo `abrir_site.bat` prioriza `tools/php/php.exe`. Se essa instalacao local
nao existir, ele tenta usar `php` do PATH do Windows.

## Funcoes PHP

### `config(string $key, mixed $default = null): mixed`

Arquivo: `app/helpers/functions.php`

Busca valores definidos em `app/config/app.php`. Se a chave nao existir, retorna
o valor padrao informado.

### `asset(string $path): string`

Arquivo: `app/helpers/functions.php`

Monta o caminho publico de arquivos em `public/assets/`, como CSS, JavaScript e
imagens.

### `e(string $value): string`

Arquivo: `app/helpers/functions.php`

Escapa textos antes de imprimir no HTML. Deve ser usada sempre que exibirmos
dados dinamicos para reduzir risco de XSS.

### `current_page(): string`

Arquivo: `app/helpers/functions.php`

Le o parametro `page` da URL e valida o nome da pagina. Caso receba algo
invalido, usa `home`.

### `page_path(string $page): string`

Arquivo: `app/helpers/functions.php`

Transforma o nome de uma pagina no caminho do arquivo PHP correspondente em
`app/pages/`.

### `render_page(string $page): void`

Arquivo: `app/helpers/functions.php`

Carrega a pagina solicitada. Se o arquivo nao existir, retorna status HTTP 404 e
exibe `app/pages/404.php`.

## Bugs Corrigidos

| Data | Bug | Correcao |
| --- | --- | --- |
| 2026-06-23 | `abrir_site.bat` podia falhar se fosse iniciado a partir de outro diretorio | Adicionado `cd /d "%~dp0"` no inicio do script para sempre executar a partir da raiz do projeto. |

## Proximas Funcionalidades Planejadas

- Definir quais calculadoras ou ferramentas o site tera.
- Criar componentes visuais reutilizaveis para formularios.
- Avaliar necessidade de banco de dados.
