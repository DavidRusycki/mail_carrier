<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php
    if (isset($_SESSION['sucess'])) {
        if ($_SESSION['sucess']) {
            echo '<div class="alert alert-success" role="alert">
            Enviado com sucesso!
            </div>';
            
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Falha ao Enviar!
            </div>';
        }
    }
    unset($_SESSION['sucess']);
    ?>

    <div class="container mt-5">
        <form action="index.php" method="POST">
            <label for="destino">Destiny</label>
            <input type="email" class="form-control" name="destino" id="destino" placeholder="you@example.com" required>
            <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
            </div>
            <br>
            <label for="assunto">Subject</label>
            <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Teste Php" value="" required>
            <br>
            <label for="mensagem">Message:</label>
            <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            <br>
            <input class="btn btn-primary btn-lg btn-block" name="send" type="submit" value="Enviar">
            <input class="btn btn-danger btn-lg btn-block" type="reset" value="Limpar">
        </form>
    </div>
</body>

</html>