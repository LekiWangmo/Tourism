$ErrorActionPreference = 'Stop'

$projectRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$php = Join-Path $projectRoot '.local-php\php.exe'

if (-not (Test-Path -LiteralPath $php)) {
    throw 'Local PHP runtime is missing. Run the project setup again.'
}

Set-Location -LiteralPath $projectRoot
& $php -S localhost:8000
