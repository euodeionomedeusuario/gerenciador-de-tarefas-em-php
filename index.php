<!DOCTYPE html>

<html>
<head lang = "pt-br">
    <meta charset = "utf-8">
     <link rel="stylesheet" href="index.css" type="text/css"/>
    <title>Gerenciador de Tarefas</title>
</head>
<body>

<h1>Gerenciador de Tarefas</h1>

<form method = "post" action = "programa.php">
    <fieldset>
        <legend>Nova Tarefa</legend>
            <label>Nome da Tarefa</label>
            <span></span>
            <input type = "text" name = "nome">

            <label>Descrição</label>
            <textarea name = "descricao"></textarea>

            <fieldset>
                <legend>Prioridade</legend>
                    <input type = "radio" name = "prioridade" value = "1">Baixa
                    <input type = "radio" name = "prioridade" value = "2">Média
                    <input type = "radio" name = "prioridade" value = "3">Alta
            </fieldset>

            <label>Tarefa Concluída:</label>
            <input type = "checkbox" name = "concluida">

            <input type = "submit" value = "Cadastrar">
    </fieldset>
</form>

</body>
</html>