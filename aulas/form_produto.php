<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML</title>
    <style>
        label{
            width:150px;
            display: inline-block;
        }
        hr {
            height: 3px;
            background-color: red;
            left:0;
        }
        #retorno{
            position: fixed;
            top: 0;
            right: 50px;
            color: white;
            font-size: 20px;
            border: 1px solid lightblue;
            background-color: darkblue;
            opacity: 90%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h2>Formulário de inclusão e edição de dados</h2>

    <form action="inserir_registro_parametros.php" method="POST">
        <div class="">
            <label for="id">Id</label>
            <input type="number" min="0" name="id" id="id" placeholder="0" value="0" readonly="readonly">
        </div>
        <div class="">
            <label for="descricao">Descrição do produto</label>
            <input type="text" name="descricao" id="descricao" maxlength="50" size="50" placeholder="produto 1...">
        </div>

        <hr />
        <div class="">
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <div id='retorno'></div>

    <br />

    <?php include "listar_registros.php"; ?>

    <script src="js/app.js"></script>
</body>

</html>