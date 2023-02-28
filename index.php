<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>App - Send Mail</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
https://github.com/diego1570565/APP-SEND-MAIL
<body style="background-color: #a6a6a6">
<div class="my-3">
    <div class="container bg-light border p-3">
        <h3 class="text-center m-5 text-info">App Send Mail</h3>
        <form action="tratamento.php" method="post">
            <div class="m-5">
                <span>Para quem é o Email:</span>
                <input type="text" placeholder="ex: exemplo@gmail.com" class="w-100 mt-3 form-control" name="para" id="para">
                <br>
                <span class="mb-2">Qual o assunto:</span>
                <input type="text" placeholder="ex: Assunto Importante"  class="w-100 mt-3 form-control" name="assunto" id="assunto">
                <br>
                <span class="mb-2">Conteudo do email:</span>
                <textarea name="mensagem" class="w-100 form-control mt-3 mb-5" id="mensagem" cols="30" rows="10"></textarea>
                <input type="submit" class="btn btn-success w-25" value="Enviar">
            </div>
        </form>
    </div>
    </div>
</body>
<?php
if (
    !empty($_GET['email'])
) {
    if ($_GET['email'] == 'enviado') {
        echo '<script>alert("Email enviado com Sucesso")</script>';
    } else {
        echo '<script>alert("Email não enviado")</script>';
    }
}

?>
</html>