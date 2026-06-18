<!DOCTYPE html>
<html><head><title>Alunos</title></head>
<body>
<h1>Lista de Alunos</h1>
<ul>
    @foreach($alunos as $aluno)
        <li>{{ $aluno }}</li>
    @endforeach
</ul>
</body>
</html>
