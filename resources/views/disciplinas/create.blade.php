<!DOCTYPE html>
<html><head><title>Cadastro de Disciplina</title></head>
<body>
<h1>Cadastro de Disciplina</h1>
<form method="POST" action="/disciplinas">
    @csrf
    <input type="text" name="nome" placeholder="Nome da disciplina">
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
