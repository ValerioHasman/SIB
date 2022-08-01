<!DOCTYPE html>
<html lang="pt-br">

<head>
    <base href="<?= $GLOBALS['base'] ?>" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.js"></script>
    <script defer src="roteiro/roteiro.js"></script>
    <link rel="stylesheet" href="formatar/estilosistema.css">
    <link rel="shortcut icon" href="midias/ICONE.ico" type="image/x-icon">
    <title>SIB</title>
</head>

<body>
    <?php

    $this->carregarViewNoTemplate($nomeView, $dadosModel);

    ?>
</body>

</html>