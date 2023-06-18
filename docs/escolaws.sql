--

-- Criação das tabelas necessárias para o sistema

--

-- tabela turmas


CREATE TABLE
    IF NOT EXISTS turmas (
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