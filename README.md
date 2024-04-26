Sistema de Cursos Escoteiros
Este é um sistema simples para gerenciar cursos escoteiros, onde é possível visualizar os detalhes de cada curso, bem como uma lista de todos os cursos disponíveis.

Funcionalidades
Visualizar detalhes de um curso específico.
Visualizar uma lista de todos os cursos disponíveis.
Requisitos
Servidor web (por exemplo, Apache, Nginx).
PHP 7.3 ou superior.
Banco de dados MySQL 10.6 ou superior.
Instalação
Clone este repositório para o diretório raiz do seu servidor web.
Importe o arquivo database.sql para o seu banco de dados MySQL para criar a estrutura da tabela.
Configure as credenciais do banco de dados no arquivo conexao.php.
Acesse o sistema através do navegador web.
Estrutura do Banco de Dados
O banco de dados contém uma tabela chamada cursos_escoteiros, com os seguintes campos:

id: ID único do curso (chave primária).
nome: Nome do curso.
descricao: Descrição do curso.
instrutor: Nome do instrutor do curso.
data_inicio: Data de início do curso.
data_fim: Data de término do curso.
Uso
Para visualizar os detalhes de um curso específico, acesse curso.php?id={ID_DO_CURSO}.
Para visualizar a lista de todos os cursos disponíveis, acesse cursos.php.

Autor
Este sistema foi desenvolvido por Lucas Diniz Sousa.
