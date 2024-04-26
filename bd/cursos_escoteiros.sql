CREATE DATABASE cursos_escoteiros;
USE cursos_escoteiros;
CREATE TABLE cursos_escoteiros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    instrutor VARCHAR(100),
    data_inicio DATE,
    data_fim DATE
);
SHOW DATABASES;

USE cursos_escoteiros;
SHOW TABLES;
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Orientação na Natureza', 'Aprenda a usar mapas e bússolas para se orientar na natureza', 'Maria Oliveira', '2024-06-15', '2024-06-17');

INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Sobrevivência na Selva', 'Descubra técnicas essenciais para sobreviver na selva', 'Carlos Santos', '2024-07-10', '2024-07-12');

INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Nós e Amarrações', 'Aprenda a fazer nós úteis para acampamentos e atividades ao ar livre', 'Ana Souza', '2024-08-20', '2024-08-22');

SELECT * FROM cursos_escoteiros;
SELECT user, host, authentication_string FROM mysql.user;
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Natação', 'Aprenda técnicas de natação para atividades aquáticas e resgate', 'Pedro Silva', '2024-09-10', '2024-09-15');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Sobrevivência na Selva', 'Aprenda técnicas de sobrevivência em ambientes selvagens', 'Mariana Oliveira', '2024-09-25', '2024-09-30');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Orientação com Bússola', 'Aprenda a utilizar bússolas e mapas para se orientar na natureza', 'Rafael Santos', '2024-10-05', '2024-10-07');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Acampamento Responsável', 'Saiba como planejar e realizar acampamentos de forma segura e sustentável', 'Juliana Costa', '2024-10-15', '2024-10-17');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Primeiros Socorros', 'Aprenda técnicas de primeiros socorros para situações de emergência', 'Marcos Oliveira', '2024-10-30', '2024-11-01');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Artesanato em Acampamentos', 'Desenvolva habilidades manuais e crie objetos úteis durante acampamentos', 'Camila Fernandes', '2024-11-10', '2024-11-12');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Fotografia de Natureza', 'Aprenda técnicas de fotografia para capturar a beleza da natureza', 'Guilherme Mendes', '2024-11-20', '2024-11-25');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Educação Ambiental', 'Conscientização sobre a importância da preservação ambiental e sustentabilidade', 'Carolina Castro', '2024-12-05', '2024-12-07');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Cozinha ao Ar Livre', 'Aprenda a preparar refeições deliciosas durante acampamentos e atividades ao ar livre', 'Thiago Oliveira', '2024-12-15', '2024-12-17');
INSERT INTO cursos_escoteiros (nome, descricao, instrutor, data_inicio, data_fim)
VALUES ('Curso de Montanhismo Básico', 'Introdução às técnicas de escalada e montanhismo', 'Patricia Ramos', '2024-12-28', '2024-12-31');
