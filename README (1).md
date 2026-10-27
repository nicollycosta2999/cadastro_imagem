# Desafio 3 - Perfil de Usuário com Banco de Dados

## Sobre a atividade

Nesta atividade, desenvolvi um sistema de login utilizando PHP e MySQL.
O objetivo foi praticar a consulta de usuários cadastrados no banco de
dados, o uso de sessões e a criação de uma página de perfil protegida
por login.

O sistema também permite escolher uma cor de fundo na tela de login, que
aparece na página de perfil do usuário.

## Funcionalidades

-   Login com usuário e senha cadastrados no banco de dados.
-   Verificação dos dados informados.
-   Uso de sessões para manter o usuário conectado.
-   Página de perfil acessível somente após o login.
-   Escolha da cor de fundo do perfil.
-   Opção de sair do sistema, encerrando a sessão.

## Arquivos do projeto

-   **15d_login.php:** contém o formulário de login, consulta o banco de
    dados e inicia a sessão quando os dados estão corretos.
-   **15d_perfil.php:** verifica se o usuário está logado e exibe a
    mensagem de boas-vindas com a cor escolhida.
-   **15d_logout.php:** encerra a sessão e retorna para a página de
    login.

## Tecnologias utilizadas

-   PHP
-   MySQL
-   HTML
-   Sessões PHP

## Banco de dados

Foi utilizado o banco de dados `exercicio`, com a tabela `usuarios`,
criada na atividade anterior.

## O que aprendi

Com essa atividade, pude praticar a conexão entre PHP e MySQL, a
consulta de dados cadastrados e o uso de sessões para controlar o acesso
às páginas. Também aprendi a passar informações entre páginas e a
utilizar a escolha de cor feita pelo usuário para personalizar o perfil.
