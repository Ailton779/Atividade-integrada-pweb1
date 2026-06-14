<!DOCTYPE html>
<html><head><title>Disciplinas</title></head>
<body>
<h1>Lista de Disciplinas</h1>
<ul>
    @foreach($disciplinas as $disciplina)
        <li>{{ $disciplina }}</li>
    @endforeach
</ul>
</body>
</html>
