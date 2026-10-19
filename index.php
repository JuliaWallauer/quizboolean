
<!DOCTYPE html>
<!-- Informa ao navegador que estamos usando HTML5 -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>

    <!-- Conecta o HTML ao arquivo CSS -->
    <link href="style1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>QUIZ</header>

    <h1>História básica</h1>
    <p>Você sabe sobre a história? Vamos ver.</p>

    <?php
        // Começa sem nenhuma resposta enviada.
        $enviado = isset($_POST['enviar']);

        // Inicializa a pontuação.
        $pontos = 0;

        // Guarda as respostas corretas.
        $respostaCerta1 = "1964";
        $respostaCerta2 = "1789";

        // Guarda as respostas selecionadas, caso o formulário tenha sido enviado.
        $resposta1 = $_POST['resposta1'] ?? "";
        $resposta2 = $_POST['resposta2'] ?? "";

        // Soma os pontos apenas depois do envio.
        if ($enviado) {

            if ($resposta1 == $respostaCerta1) {
                $pontos++;
            }

            if ($resposta2 == $respostaCerta2) {
                $pontos++;
            }
        }
    ?>

    <!-- Um único formulário para todas as perguntas -->
    <form action="" method="POST">

        <!-- PRIMEIRA PERGUNTA -->
        <h2>História do Brasil</h2>

        <p>Em que ano começou a ditadura militar no Brasil?</p>

        <?php
            // Cada cartão recebe uma classe conforme a resposta enviada.
            // Antes do envio, todos continuam com a aparência normal.
            $classeA = "";
            $classeB = "";
            $classeC = "";
            $classeD = "";

            if ($enviado) {
                if ($resposta1 == "1964") {
                    $classeA = "correta";
                } elseif ($resposta1 == "1932") {
                    $classeB = "errada";
                } elseif ($resposta1 == "1980") {
                    $classeC = "errada";
                } elseif ($resposta1 == "1968") {
                    $classeD = "errada";
                }
            }
        ?>

        <div class="alternativa <?= $classeA ?>">
            <input type="radio" id="ditaduraA" name="resposta1"
                   value="1964" <?= $resposta1 == "1964" ? "checked" : "" ?>>
            <label for="ditaduraA">1964</label>
        </div>

        <div class="alternativa <?= $classeB ?>">
            <input type="radio" id="ditaduraB" name="resposta1"
                   value="1932" <?= $resposta1 == "1932" ? "checked" : "" ?>>
            <label for="ditaduraB">1932</label>
        </div>

        <div class="alternativa <?= $classeC ?>">
            <input type="radio" id="ditaduraC" name="resposta1"
                   value="1980" <?= $resposta1 == "1980" ? "checked" : "" ?>>
            <label for="ditaduraC">1980</label>
        </div>

        <div class="alternativa <?= $classeD ?>">
            <input type="radio" id="ditaduraD" name="resposta1"
                   value="1968" <?= $resposta1 == "1968" ? "checked" : "" ?>>
            <label for="ditaduraD">1968</label>
        </div>


        <!-- SEGUNDA PERGUNTA -->
        <h2>Revolução Francesa</h2>

        <p>Em que ano começou a Revolução Francesa?</p>

        <?php
            // Reinicia as classes para a segunda pergunta.
            $classeA = "";
            $classeB = "";
            $classeC = "";
            $classeD = "";

            if ($enviado) {
                if ($resposta2 == "1789") {
                    $classeC = "correta";
                } elseif ($resposta2 == "1822") {
                    $classeA = "errada";
                } elseif ($resposta2 == "1760") {
                    $classeB = "errada";
                } elseif ($resposta2 == "1500") {
                    $classeD = "errada";
                }
            }
        ?>

        <div class="alternativa <?= $classeA ?>">
            <input type="radio" id="revolucaoA" name="resposta2"
                   value="1822" <?= $resposta2 == "1822" ? "checked" : "" ?>>
            <label for="revolucaoA">1822</label>
        </div>

        <div class="alternativa <?= $classeB ?>">
            <input type="radio" id="revolucaoB" name="resposta2"
                   value="1760" <?= $resposta2 == "1760" ? "checked" : "" ?>>
            <label for="revolucaoB">1760</label>
        </div>

        <div class="alternativa <?= $classeC ?>">
            <input type="radio" id="revolucaoC" name="resposta2"
                   value="1789" <?= $resposta2 == "1789" ? "checked" : "" ?>>
            <label for="revolucaoC">1789</label>
        </div>

        <div class="alternativa <?= $classeD ?>">
            <input type="radio" id="revolucaoD" name="resposta2"
                   value="1500" <?= $resposta2 == "1500" ? "checked" : "" ?>>
            <label for="revolucaoD">1500</label>
        </div>

        <!-- Um único botão para enviar todas as respostas -->
        <button type="submit" name="enviar" value="1">Finalizar quiz</button>

    </form>

    <?php
        // Só mostra o resultado depois que o quiz for enviado.
        if ($enviado) {
            echo '<h2 class="resultado">Você acertou ' . $pontos . ' de 2 perguntas!</h2>';
        }
    ?>

</body>
</html>
