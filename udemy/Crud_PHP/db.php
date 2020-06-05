<?php

$servidor = 'localhost';
$usuario = '';
$senha = "";
$bd = 'aula_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT aluno_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
                FROM alunos, cursos, aluno_cursos
                WHERE aluno_cursos.id_aluno = alunos.id_aluno
                AND aluno_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);