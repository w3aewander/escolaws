
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
