# Cadastro-de-cidadaos

Este diretório contém a implementação de um gerador de cadastros do NIS(Número de Identificação Social) com as funcionalidades de cadastrar novos cidadãos e de pesquisar inscrições de cidadãos já cadastrados pelo número do NIS.
A aplicação usa código em PHP conectado uma banco de dados que contem a tabela de pessoas cadastradas.

# Requisitos
Para usar esta implementação é preciso:

Pacote PHP : PHP 5.5, 5.6 ou 7.
MySQL istalado
Navegador
Editor de texto

Modificações:

Será preciso alterar o arquivo connect.php para estabelecer conecção com o banco de dados. No arquivo devem ser alterados os campos localhost, username, password, dbname , de
acordo com as configurações do seu banco de dados.

![image](https://user-images.githubusercontent.com/34312201/118130873-3b0bcd80-b3d4-11eb-8b70-12a34213038c.png)

# Modificação futuras

• Utilização de padrões arquiteturais e de projeto;  
• Testes automatizados;  
• A utilização de um gerenciador de pacotes.   

#Problemas Conhecidos

• O aplicação gera números de inscrição de aleatórios, apesar da grande dificuldade de gerar codigos iguais não tratativa para esse problema.
• A aplicação informa o primeiro número de pesquisa encontrado, caso haja duplicidade no banco de dados apenas um será mostrado e a aplicação 
não trata esse problema.

