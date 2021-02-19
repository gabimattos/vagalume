# CRUD Básica em Laravel + API Pública Vagalume ##

### Sumário ###

- Informações
- Modelagem
- Tecnologias
- API
- Instalação
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

## Ambiente
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

## Servir o Projeto
## Créditos

