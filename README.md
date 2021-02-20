# CRUD Básica em Laravel + API Pública Vagalume ##

## Sumário ##

- [Informações](#informações)
- [Modelagem](#modelagem)
- [Tecnologias](#tecnologias)
- [API](#api)
- [Ambiente de desenvolvimento](#ambiente-de-desenvolvimento)
- [Servir o projeto](#servir-o-projeto)
- [Créditos](#créditos)

## Informações

Esse repositório contém o trabalho final do PSI (Processo Seletivo Interno) para Tech Lead da EJCM. O trabalho consiste na criação de uma API Restful que contenha uma CRUD básica (index, show, create, update e delete) para pelo menos duas entidades que se relacionam, além disso é necessária que a aplicação consuma uma API Pública com autenticação associada a algum método da CRUD.
Desta forma, eu escolhi a framework Laravel e a API do Vagalume (mais informações ao longo do README).

## Modelagem

As entidades são: Album, Music e Artist.
#### Artist & Music: n-n
- Artist pode escrever n Musics
- Music pode ser escrita por n Artists

#### Artist & Album: 1-n
- Artist pode ter n Albuns
- Album pode ter 1 Artist

#### Album & Music:
- Album tem n Musics
- Music pertence a 1 Album 


![Modelagem](https://user-images.githubusercontent.com/50138800/108563695-9d2aca00-72e0-11eb-8be9-1d356a3e57d1.png)

## Tecnologias
[Laravel](https://laravel.com/)

## API 
[Site API Vagalume](https://api.vagalume.com.br/) /
[Site Vagalume](https://www.vagalume.com.br/)

![logo-vagalume](https://user-images.githubusercontent.com/50138800/108465434-c572e400-7260-11eb-84d6-6fc90297290b.jpg)


#### Sobre o Vagalume
Lançado em 2002, o Vagalume é o maior portal de música do Brasil. Além de ser muito conhecido pelas letras de músicas organizadas e catalogadas no site, o Vagalume tem também um grande acervo de discografias, traduções, cifras, fotos, estilos musicais, notícias, informações de biografia sobre os artistas, medidor de popularidade, cálculo de proximidade musical (de músicas e artistas) e tempo de sincronização de legendas das músicas.

Todos os dias, milhares de informações são adicionadas e modificadas que são enviadas pelos próprios artistas, assessores de imprensa, fãs e gravadoras. O objetivo do Vagalume é organizar e divulgar artistas.

O conteúdo organizado pelo Vagalume é colaborativo, sendo assim, se algum artista não quiser ser divulgado pelo Vagalume, pode a qualquer momento entrar em contato para ter o seu conteúdo removido. 

Veja sobre o [Vagalume no Wikipedia](https://pt.wikipedia.org/wiki/Vagalume_(site)) 

#### Sobre a API
No Vagalume temos a performance como um dos itens mais importantes no desenvolvimento do sistema. Devido a grande quantidade de acessos no site, temos como prioridade o carregamento rápido e escalabilidade da aplicação. Utilizar as funções encontradas na API não devem deixar o seu site mais lento ou gerar problemas de estabilidade em nosso sistema. Nesta documentação devemos abordar as melhores práticas de como fazer requisições de forma assíncrona.

## Ambiente de desenvolvimento
### Para Linux

#### 1. Postman
O Postman é um Ambiente de Desenvolvimente de APIs utilizado para testar rotas de acesso de banco de dados.
<br>Link do Download: [Postman](https://www.getpostman.com/downloads/)

#### 2. LAMP
O LAMP é um acrônimo de softwares livres de código aberto usados em desenvolvimento web, seu nome possui as primeiras letras de Linux (Sistema Operacional), Apache (Servidor Web), MySQL ou MariaDB (Software para banco de dados) e PHP (Linguagem de Programação).

#### 3. APACHE
O Apache é um Servidor Web de código aberto.
<br>Nome do Pacote: apache

#### 4. PHP
O PHP é uma linguagem de programação utilizada no desenvolvimento de servidores web.
<br>Nome do Pacote: php

#### 5. MariaDB
O MariaDB é um software de manutenção de banco de dados, ele instala também as funcionalidades do MySQL.
<br>Nome do Pacote: mariadb
<br>Depois de baixado, para inicializar o banco de dados, temos que instalá-lo com o comando:
- mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

#### 6. phpMyAdmin
O phpMyAdmin é uma interface gráfica para manutenção de banco de dados com MySQL de código aberto.
<br>Nome do Pacote: phpmyadimin
<br>Para a instalação, em alguns sistemas Linux, o phpmyadimin terá uma tela de configuração específica.

### Para Windows

#### 1. Xampp
O primeiro passo é a instalação do Xampp. O Xampp automaticamente instalará o php, mysql/mariaDB e Apache. Faça o download no link abaixo para a versão compatível com o laravel, a do php 7.1.30.
[Download Xampp](https://www.apachefriends.org/download.html)

#### 2. Composer
[Download Composer](https://getcomposer.org/download/)

#### 3. NodeJs
[Download NodeJs](https://getcomposer.org/download/)

#### 4. Git Bash
[Download Git Bash](https://getcomposer.org/download/)

#### 5. VSCode
[Download VSCode](https://getcomposer.org/download/)

### 6. Laravel
Para instalar o Laravel é preciso executar o seguinte comando no git bash:
composer global require laravel/installer

### Verificando se o ambiente foi instalado corretamente:
- node -v
```
input
$ node -v

output
$ v10.19.0
```
- composer 
```
input
$ composer

output
$   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.0.9 2021-01-27 16:09:27

Usage:
  command [options] [arguments]

Options:
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
      --no-cache                 Prevent use of the cache
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  about                Shows the short information about Composer.
  archive              Creates an archive of this composer package.
  browse               Opens the package's repository URL or homepage in your browser.
  cc                   Clears composer's internal package cache.
  check-platform-reqs  Check that platform requirements are satisfied.
  clear-cache          Clears composer's internal package cache.
  clearcache           Clears composer's internal package cache.
  config               Sets config options.
  create-project       Creates new project from a package into given directory.
  depends              Shows which packages cause the given package to be installed.
  diagnose             Diagnoses the system to identify common errors.
  dump-autoload        Dumps the autoloader.
  dumpautoload         Dumps the autoloader.
  exec                 Executes a vendored binary/script.
  fund                 Discover how to help fund the maintenance of your dependencies.
  global               Allows running commands in the global composer dir ($COMPOSER_HOME).
  help                 Displays help for a command
  home                 Opens the package's repository URL or homepage in your browser.
  i                    Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  info                 Shows information about packages.
  init                 Creates a basic composer.json file in current directory.
  install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  licenses             Shows information about licenses of dependencies.
  list                 Lists commands
  outdated             Shows a list of installed packages that have updates available, including their latest version.
  prohibits            Shows which packages prevent the given package from being installed.
  remove               Removes a package from the require or require-dev.
  require              Adds required packages to your composer.json and installs them.
  run                  Runs the scripts defined in composer.json.
  run-script           Runs the scripts defined in composer.json.
  search               Searches for packages.
  self-update          Updates composer.phar to the latest version.
  selfupdate           Updates composer.phar to the latest version.
  show                 Shows information about packages.
  status               Shows a list of locally modified packages.
  suggests             Shows package suggestions.
  u                    Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  validate             Validates a composer.json and composer.lock.
  why                  Shows which packages cause the given package to be installed.
  why-not              Shows which packages prevent the given package from being installed.
  installe.

```
- php -v 
```
input
$ php -v

output
$ PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies

```

## Servir o Projeto

- Clone o projeto
```
$ git clone https://github.com/gabimattos/vagalume.git
```
- Entre na pasta vagalume localizada em Vagalume/backend/vagalume e rode o seguinte comando:
```
$ git composer install
```
- Ligue o Xampp/Lampp
- - Xampp
Abra o Xampp e aperte START nas linhas "Apache" e "MySQL"

- - Lampp 
Rode o comando:
```
$ sudo /opt/lampp/lampp start
```
- Crie um banco de dados no phpMyAdmin
- Na pasta 'vagalume', copie o arquivo .env.example e renomeie essa cópia com o nome .env e rode o seguinte comando:
```
$ cp .env.example .env
```
- Novamente na pasta 'vagalume' abra o arquivo .env e no campo 'DATABASE' altere de 'laravel' para o nome do banco de dados criado no phpMyAdmin.
- Crie uma conta e colha uma credencial na [API Vagalume](https://auth.vagalume.com.br/settings/api/)
- No arquivo .env adicione a linha a seguir:
```
$ KEY = {sua credencial}
```
- Rode os comandos a seguir para gerar uma cheve, installar a passport e criar as tabelas:

```
$ php artisan key:generate
$ php artisan passport:install
$ php artisan migrate
```
- Para servir o projeto rode o comando:
```
$ php artisan serve
```
OBS: A URL de acesso aparece no terminal após rodar o comando acima.

- As rotas se encontram dentro da pasta 'vagalume' no arquivo api.php.
Para testar as rotas usamos a URL localhost:8000/nome-da-rota

## Créditos
Gostaria de agradecer a Nayara Gomes e Mileny Loyolla por toda a ajuda e apoio ao longo de todo processo da execução do trabalho. Também gostaria de agradecer ao Danilo Collares e a EJCM, pois me baseei no slide "Ambiente Dev no Linux" criado pelo Danilo para dar as melhores orientações de instalação de todo o ambiente no Linux e no documento "Guia de Instalação do Ambiente de Desenvolvimento - Windows" disponibilizado pela EJCM para dar as melhores orientações de instalação de todo o ambiente no Windows.
