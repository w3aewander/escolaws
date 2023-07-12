--

-- Criação das tabelas necessárias para o sistema

--

-- tabela turmas

CREATE IF NOT EXISTS DABASE escolaws;

USE escolaws;

CREATE TABLE
    IF NOT EXISTS escolaws.turmas (
        id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome varchar(50) NOT NULL,
        data_inicio date,
        data_termino date,
        created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

-- tabela cursos

CREATE TABLE
    IF NOT EXISTS cursos (
        id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome varchar(100) NOT NULL,
        data_inicio timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        data_termino date NULL,
        carga_horaria INT,
        created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

-- tabela alunos

CREATE TABLE
    IF NOT EXISTS alunos (
        id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome varchar(100) NOT NULL,
        email varchar(50) NOT NULL,
        data_matricula timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        curso_id integer NOT NULL,
        created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

alter table alunos
add
    constraint fk_alunos1 foreign key (curso_id) references cursos (id);

-- tabela professores

drop table professores;

CREATE TABLE
    IF NOT EXISTS professores (
        id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome varchar(100) NOT NULL,
        email varchar(50) NOT NULL,
        data_admissao date not null,
        created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

-- tabela disciplinas

CREATE TABLE
    IF NOT EXISTS disciplinas (
        id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome varchar(100) NOT NULL,
        carga_horaria integer NOT NULL,
        created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

-- tabela disciplina_id

CREATE TABLE
    IF NOT EXISTS cursos_disciplinas (
        curso_id integer NOT NULL,
        disciplina_id integer NOT NULL,
        constraint curso_disciplina_fk1 Foreign Key (curso_id) REFERENCES cursos(id),
        constraint curso_disciplina_fk2 Foreign Key (disciplina_id) REFERENCES disciplinas(id)
    );

-- tabela turma_cursos
CREATE TABLE
    IF NOT EXISTS turmas_cursos (
        turma_id integer NOT NULL,
        curso_id integer NOT NULL,
        constraint turma_curso_fk1 Foreign Key (turma_id) REFERENCES turmas(id),
        constraint turma_curso_fk2 Foreign Key (curso_id) REFERENCES cursos(id)
    );

CREATE TABLE boletins(
   id integer not null PRIMARY KEY AUTO_INCREMENT,
   aluno_id INTEGER not null,
   disciplina_id int not null,
   nota_1 float not null,
   nota_2 float not null,
   nota_3 float not null,
   nota_4 float not null,
   constraint boletim_aluno_fk1 Foreign Key (aluno_id) REFERENCES alunos(id),
   constraint boletim_disciplina_fk1 Foreign Key (disciplina_id) REFERENCES disciplinas(id)
);

CREATE TABLE perfis(
   id integer not null primary key AUTO_INCREMENT,
   nome varchar(50) not null,
   created_at timestamp not null default CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (
    id integer not null primary key AUTO_INCREMENT, -- chave primária
    nome varchar(50),
    email varchar(60) not null,
    telefone varchar(14),
    perfil_id integer not null,
    password varchar(60),
    constraint usuario_perfil_fk FOREIGN key (perfil_id) REFERENCES perfis(id), -- restrição.
    ativo TINYINT(1),
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP);


insert into perfis (nome) values('admin'),('professor'),('aluno');
insert into usuarios(nome,email,password, perfil_id, ativo) 
values('Wanderlei Silva','wander.silva@gmail.com','$2y$10$pUcvKT7UN5ZE7cTlRwcaL.SXx.8j8c7Uo58jgs3sPxETLpJqrLceu', 1, 1);


INSERT INTO `alunos` (`id`, `nome`, `email`, `data_matricula`, `curso_id`, `created_at`) VALUES
(2, 'JosÃ© das Couves', 'jose.couves@email.com', '2023-02-01 03:00:00', 1, '2023-06-20 14:12:47'),
(4, 'Clailson Silva Matos', 'tecserverposse@gmail.com', '2023-06-21 03:00:00', 1, '2023-06-21 23:28:53'),
(5, 'Karine Carrilho', 'karine_friburgo@yahoo.com.br', '1987-07-25 03:00:00', 1, '2023-06-21 23:46:17'),
(6, 'Bruno Tessarolo', 'bmtessarolo@gmail.com', '2023-06-21 03:00:00', 1, '2023-06-21 23:48:00'),
(7, 'Elson', 'elsonvt@gmail.com', '2023-06-21 03:00:00', 2, '2023-06-21 23:51:50'),
(8, 'CLAILSON SILVA MATOS', 'tecserverposse@gmail.com', '0000-00-00 00:00:00', 1, '2023-06-24 12:00:28');

INSERT INTO `cursos` (`id`, `nome`, `data_inicio`, `data_termino`, `carga_horaria`, `created_at`) VALUES
(1, 'Fundamentos de ProgramaÃ§Ã£o em PHP', '2023-02-01 03:00:00', '2023-06-30', NULL, '2023-06-20 14:11:14'),
(2, 'Curso de AlimentaÃ§Ã£o', '2023-06-21 03:00:00', '2023-06-02', NULL, '2023-06-21 23:26:15');


INSERT INTO `disciplinas` (`id`, `nome`, `carga_horaria`, `created_at`) VALUES
(1, 'Fundamentos de ProgramaÃ§Ã£o em PHP', 30, '2023-06-21 00:21:36'),
(2, 'Fundamentos da linguagem CSS', 16, '2023-06-21 00:47:18'),
(3, 'Fundamentos da linguagem Javascript', 20, '2023-06-21 00:47:39'),
(4, 'Fundamentos da linguagem HTML', 20, '2023-06-21 00:48:05');


INSERT INTO `turmas` (`id`, `nome`, `data_inicio`, `data_termino`, `created_at`) VALUES
(1, 'FPHP2023-1', '2023-02-01', '2023-07-30', '2023-06-21 00:44:29'),
(2, 'TURMA A', '2023-06-21', '2023-05-23', '2023-06-21 23:25:12'),
(3, 'teste 1', '2023-06-21', '2023-10-21', '2023-06-21 23:26:04'),
(4, 'Turma Z', '2023-06-20', '2023-09-20', '2023-06-21 23:50:19');



CREATE TABLE enderecos (
     usuario_id integer not null,
     cep varchar(8),
     bairro varchar(100),
     cidade varchar(50),
     uf char(2),
     constraint endereco_usuario_fk1 FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
);

select id, nome from usuarios where nome = 'Wanderlei Silva';

insert into enderecos (usuario_id, cep, bairro, cidade, uf) 
values (1, '29043220', 'Santa Cecília', 'Vitória', 'ES' );

select * from enderecos;

insert into enderecos (usuario_id, cep, bairro, cidade, uf) 
values (1, '29032050', 'Sao Pedro', 'Vitória', 'ES' );

select u.id, u.nome, DATE_FORMAT(u.created_at, '%d/%m/%Y') `cadastrado em` , e.cep, e.bairro, 
       concat(e.cidade,'/', e.uf) cidade 
from enderecos e
inner join usuarios u
on e.usuario_id = u.id;