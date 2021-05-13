# Cadastro-de-cidadaos
Crie uma aplicação contendo um formulário para cadastrar cidadãos.

Este diretório contém a implementação de tempo de execução dos Buffers de protocolo por meio de um pacote PHP puro e uma extensão c nativa. O pacote PHP puro se destina a fornecer usabilidade a uma ampla gama de plataformas PHP, enquanto a extensão c se destina a fornecer maior desempenho. Ambas as implementações fornecem as mesmas APIs de tempo de execução e compartilham o mesmo código gerado. Os usuários não precisam gerar novamente o código para a mesma definição de protótipo quando desejam alternar a implementação posteriormente.

Ambas as implementações usam código PHP gerado que define tipos de mensagem e enum em PHP. É altamente recomendável usar o suporte à geração de PHP do protoc com arquivos .proto. O processo de construção neste diretório instala apenas a extensão / pacote; você também precisa instalar o protoc para ter a funcionalidade de geração de código PHP.

Requisitos
Para usar a biblioteca de tempo de execução PHP, é necessário:

Extensão C: PHP 5.5, 5.6 ou 7.
Pacote PHP : PHP 5.5, 5.6 ou 7.
Instalação
Extensão C
Pré requisitos
Para instalar a extensão c, as seguintes ferramentas são necessárias:

autoconf
automake
libtool
faço
gcc
pera
pecl
No Ubuntu, você pode instalá-los com:

sudo apt-get install -y php-pear php5-dev autoconf automake libtool make gcc
Em outras plataformas, use a ferramenta de gerenciamento de pacote correspondente para instalá-los antes de continuar.

Instalação da fonte (extensão do edifício)
Para construir a extensão c, execute o seguinte comando:

cd ext / google / protobuf
pacote de pêra
sudo pecl install protobuf- {VERSION} .tgz
Instalação de PECL
Quando lançarmos uma versão dos Buffers de protocolo, faremos upload da extensão para PECL . Para usar esta extensão pré-embalada, basta instalá-la como faria com qualquer outra extensão:

sudo pecl install protobuf- {VERSION}
Pacote PHP
Instalação do compositor
Basta adicionar “google / protobuf” à seção 'require' do composer.json em seu projeto.

Protoc
Uma vez que a extensão ou pacote é instalado, se você deseja gerar código PHP a partir de um .protoarquivo, você também desejará instalar o compilador de Protocol Buffers (protoc), conforme descrito no READMEarquivo principal deste repositório . A versão protocincluída na versão mais recente suporta a --php_outopção de gerar código PHP:

protoc --php_out = out_dir test.proto
Uso
Para código gerado: https://developers.google.com/protocol-buffers/docs/reference/php-generated

Problemas Conhecidos
