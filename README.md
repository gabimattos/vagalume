# CRUD Básica em Laravel + API Pública Vagalume ##

### Sumário ###

- Informações
- Modelagem
- Tecnologias
- API
- Ambiente de desenvolvimento
- Servir o projeto
- Créditos

## Informações

Esse repositório contém o trabalho final do PSI (Processo Seletivo Interno) para Tech Lead da EJCM. O trabalho consiste na criação de uma API Restful que contenha uma CRUD básica (index, show, create, update e delete) para pelo menos duas entidades que se relacionam, além disso é necessária que a aplicação consuma uma API Pública com autenticação associada a algum método da CRUD.
Desta forma, eu escolhi a frmework Laravel e a API do Vagalume (mais informações ao longo do README).

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


(colocar uma foto da modelagem)

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
- composer 
- php -v 

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
$ API_KEY = {sua credencial}
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
Gostaria de agradecer a Nayara Gomes e Mileny Loyolla por toda a ajuda e apoio ao longo de todo processo da execução do trabalho. Também gostaria de agradecer ao Danilo Collares e a EJCM, pois me baseei no slide "Ambiente Dev no Linux" para dar as melhores orientações de instalação de todo o ambiente no Linux e no documento "Guia de Instalação do Ambiente de Desenvolvimento - Windows" disponibilizado pela EJCM para dar as melhores orientações de instalação de todo o ambiente no Windows.
