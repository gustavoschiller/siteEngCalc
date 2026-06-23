@echo off
setlocal
cd /d "%~dp0"

set "HOST=localhost"
set "PORT=8000"
set "URL=http://%HOST%:%PORT%"
set "LOCAL_PHP=%~dp0tools\php\php.exe"

if exist "%LOCAL_PHP%" (
    set "PHP_BIN=%LOCAL_PHP%"
) else (
    where php >nul 2>nul
    if errorlevel 1 (
        echo PHP nao foi encontrado.
        echo Instale o PHP ou adicione a pasta do php.exe ao PATH do Windows.
        echo.
        pause
        exit /b 1
    )

    set "PHP_BIN=php"
)

echo Abrindo o site em %URL%
echo.
echo Para encerrar o servidor, feche esta janela ou pressione Ctrl+C.
echo.

start "" "%URL%"
"%PHP_BIN%" -S %HOST%:%PORT% -t public

endlocal
