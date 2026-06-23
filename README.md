# EngCalc

Base inicial para um site em PHP, HTML, CSS e JavaScript.

## Requisitos

- PHP 8.1 ou superior

O projeto inclui uma instalacao portatil em `tools/php/`, usada automaticamente
pelo arquivo `abrir_site.bat`.

## Como rodar localmente

```powershell
.\abrir_site.bat
```

Depois acesse:

```text
http://localhost:8000
```

## Estrutura

```text
app/
  config/       Configuracoes gerais
  helpers/      Funcoes auxiliares reutilizaveis
  pages/        Conteudo das paginas
  templates/    Partes comuns do HTML
docs/
  MEMORIA.md    Registro de funcoes, decisoes e bugs corrigidos
public/
  assets/       CSS, JavaScript e imagens publicas
  index.php     Entrada principal do site
```
