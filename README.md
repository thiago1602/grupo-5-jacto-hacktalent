# Jacto-Hackaton:

#### :book: Resumo:

Esse sistema foi desenvolvido para no hackaton Jacto-Agrícola. Com o intuito de tornar a experiência de um tecnico agrícola mais simplificada e acessível na contratação de fornecedores, 


#### :rocket: Versão (DEV 2.0): 

A API foi totalmente desenvolvida em [Javascript e Jquery](https://www.javascript.com/,https://api.jquery.com/). Responsável por realizar toda a requisição dos dados entre a Aplicação (Laravel) 
e o Via Cep (https://viacep.com.br/).


##### Versão:

  - Inclusão/Remoção/Edição de fornecedores;
  - Validações;
- Criação das rotas de manutenção dos fornecedores;
  - Criar novo fornecedor;
  - Atualização de fornecedor;


#### :backend: Running:

Passos para rodar localmente o projeto:

- Instalar o Vscode ou Phpsthorm;
  - [Link de download](https://code.visualstudio.com/download)
  - Para rodar o projeto execute os passos abaixo: 1- clone o repositorio em um ambiente local 
  - 2- abra a pasta do projeto em um terminal 3- execute o comando "composer install" 
  - 4- configue uma base de dados com chat_union.sql mysql no arquivo .env na raíz do projeto 
  - 5- rode o comando para limpar possiveil cache da aplicação "php artisan optimize:clear" 
  - 6- rode o comando para executar as migrations no seu banco de dados "php artisan migrate:fresh". 
  - 7 - Rode o comanda para startar o servidor laravel "php artisan serve".
 
 #### :frontend: Running:

Passos para rodar localmente o projeto:

- Instalar o Vscode e o node;
  - [Link de download](https://code.visualstudio.com/download)
  - Para rodar o projeto execute os passos abaixo: 1- clone o repositorio em um ambiente local 
  - 2- abra a pasta do projeto em um terminal 3- execute o comando "npm install" 
  - 3- configue uma base de dados no arquivo .env na raíz do projeto 
  - 4- rode o comando para executar as migrations no seu banco de dados "php artisan migrate:fresh". 
  - 5 - Rode o comanda para startar o servidor laravel "npm run dev".
