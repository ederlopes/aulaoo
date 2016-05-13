<?php require_once 'Bootstrap.php'; ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste Classe</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<h1>ORDER CRESCENTE</h1>
<table class="table table-borded col-md-12">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>IDADE</th>
        <th>DETALHE</th>
    </tr>
    <?php
        foreach ($cliente as $objCliente):
    ?>
    <tr>
        <td><?php echo $objCliente->nome; ?></td>
        <td><?php echo $objCliente->cpf; ?></td>
        <td><?php echo $objCliente->idade; ?></td>
        <td><a href="detalhe.php?id=<?php echo $objCliente->cpf;?>">Detalhe</a></td>
    </tr>
    <?php
        endforeach;
    ?>
</table>


<?php
    krsort($cliente);
?>
<h1>ORDER DECRESCENTE</h1>
<table class="table table-borded col-md-12">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>IDADE</th>
        <th>DETALHE</th>
    </tr>
    <?php
    foreach ($cliente as $objCliente):
        ?>
        <tr>
            <td><?php echo $objCliente->nome; ?></td>
            <td><?php echo $objCliente->cpf; ?></td>
            <td><?php echo $objCliente->idade; ?></td>
            <td><a href="detalhe.php?id=<?php echo $objCliente->cpf;?>">Detalhe</a></td>
        </tr>
        <?php
    endforeach;
    ?>
</table>


</body>
</html>
