<!DOCTYPE html>
<html><head><title>Cadastro de Aluno</title></head>
<body>
<h1>Cadastro de Aluno</h1>
<form method="POST" action="/alunos">
    @csrf
    <input type="text" name="nome" placeholder="Nome do aluno">
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
