<!DOCTYPE html>
<html><head><title>Cursos</title></head>
<body>
<h1>Cursos Disponíveis</h1>
<ul>
    @foreach($cursos as $curso)
        <li>{{ $curso }}</li>
    @endforeach
</ul>
</body>
</html>
