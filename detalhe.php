<?php require_once 'Bootstrap.php'; ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhe cliente</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<h1>CLEENTE DADOS</h1>
<table class="table table-borded col-md-12">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>IDADE</th>
    </tr>
        <?php
         $objCliente = $cliente[$_GET['id']];
        ?>
        <tr>
            <td><?php echo $objCliente->nome; ?></td>
            <td><?php echo $objCliente->cpf; ?></td>
            <td><?php echo $objCliente->idade; ?></td>
        </tr>
</table>



</body>
</html>
