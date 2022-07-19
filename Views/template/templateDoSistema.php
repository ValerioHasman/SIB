<!DOCTYPE html>
<html lang="pt-br">

<head>
    <base href="<?= $GLOBALS['base'] ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.js">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.js">
    </script>
    <script defer src="roteiro/roteiro.js"></script>
    <link rel="stylesheet" href="formatar/estilosistema.css">
    <link rel="shortcut icon" href="midias/ICONE.ico" type="image/x-icon">
    <title>Gerenciador</title>
</head>

<body>
    <?php

    $this->carregarViewNoTemplate($nomeView, $dadosModel);

    ?>
</body>

</html>