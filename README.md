# PDWEL_ProjetoFinal
Projeto final da disciplina de PDWEL pelo IFSP. <br>
O objetivo deste trabalho é o desenvolvimento de uma aplicação WEB para o controle de medicamentos. Utilizaremos o framework Laravel para o back-end, os frameworks 
Boostrap e Tailwindcss para o front-end e o MySQL no banco de dados.

Equipe:
Amanda Queiroz Carreiro SP3040836 <br>
Guilherme Fernandes Lima SP3040674 <br>
Samy Almeida SP304078X <br>

Instruções de deployment:<br>
1 - Inicie o Apache e o MySQL no XAMPP<br>
2 - Clone o repositório com o comando git clone https://github.com/FernandesGuilherme/PDWEL_ProjetoFinal.git<br>
3 - Abra a pasta clonada no VSCode e no terminal dele rode o comando composer install para instalar as dependências, caso dê erro rode o composer install --ignore-platform-req=ext-fileinfo<br>
4 - Renomeie o arquivo .env.example para .env<br>
5 - No navegador digite localhost/phpmyadmin e crie um banco de dados chamado laravel<br>
6 - No terminal do VSCode rode o comando php artisan key:generate e depois php artisan migrate para que as tabelas sejam criadas no banco de dados local<br>
7 - Ainda no terminal, rode o comando php artisan serve para subir a aplicação e clique no link que mostrará na tela <br>

