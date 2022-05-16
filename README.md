
#Principal
![principal](https://user-images.githubusercontent.com/87495655/159272733-0796c24b-d5ce-40c1-8819-ab90706cf2a7.png)

#Login
![Login](https://user-images.githubusercontent.com/87495655/160703310-a296949c-ed92-42b6-b3b7-5f20b47f646a.png)

#Fornecedor/Adicionar
![Fornecedor/Adicionar](https://user-images.githubusercontent.com/87495655/160731465-410feef0-895f-4529-a2de-52193938f7ae.png)

#Fornecedor/Listar
![Fornecedor/Listar](https://user-images.githubusercontent.com/87495655/160906630-928fc2d9-2c7b-4cb0-b8f6-0595b81834d3.png)

#Pedidos/Listar
![Pedidos/Listar](https://user-images.githubusercontent.com/87495655/168611992-d8183591-4521-40cc-91d7-e31e25da18fd.png)

#Pedidos/Adicionar
![Pedidos/Adicionar](https://user-images.githubusercontent.com/87495655/168612365-46242615-4fe3-468f-a6ba-9c15db9def08.png)



## CRUD com Laravel, PHP orientado a objetos, e MySQL.
Este código foi feito apenas para demonstração de habilidades e aprendizado, não recomendado o uso em produção ou comercial.
O programa inclui área para visitantes com envio de formularios, tela de login, e em área restrita telas para manipular estoque de produtos, clientes e pedidos de acordo com os fornecedores usando um banco de dados relacional. 

## Banco de dados
Crie o banco de dados "sg" e execute as migrates com o comando abaixo para criar as tabelas necessárias:
```shell
 php artisan migrate
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

## Laravel 
Projeto foi desenvolvido no laravel versão 7.X

## PHP
A versão usada do PHP foi a  7.4.6
