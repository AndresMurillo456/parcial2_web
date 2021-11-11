<?php

// if (!empty($_POST['pregunta-7'])) {
// }

if (1 == 1) {
    $correctas = 0;
    if (isset($_POST['pregunta-1']) &&  strtoupper($_POST['pregunta-1']) == 'ECOSISTEMA') {
        $correctas++;
    }
    if (isset($_POST['pregunta-2']) && strtoupper($_POST['pregunta-2']) == 'NATURALEZA') {
        $correctas++;
    }
    if (isset($_POST['pregunta-3']) && strtoupper($_POST['pregunta-3']) == 'BIODIVERSIDAD') {
        $correctas++;
    }
    if (isset($_POST['pregunta-4']) && $_POST['pregunta-4'] == '3') {
        $correctas++;
    }
    if (isset($_POST['pregunta-5']) && $_POST['pregunta-5'] == '2') {
        $correctas++;
    }
    if (isset($_POST['pregunta-6']) && $_POST['pregunta-6'] == '2') {
        $correctas++;
    }
    $respuestas = array(
        array('1', '2', '4'),
        array('1', '3', '4'),
        array('1', '3', '4')
    );
    $incorrecto = array(
        '3', '2', '2'
    );

    $correctaT = 0;
    $incorrectas = 0;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if (isset($_POST['pregunta-' . $i + 7][$j]) && in_array($_POST['pregunta-' . $i + 7][$j], $respuestas[$i])) {
                $correctaT++;
                $correctas++;
            } elseif (isset($_POST['pregunta-' . $i + 7][$j]) && $_POST['pregunta-' . $i + 7][$j] == $incorrecto[$i]) {
                $incorrectas++;
            }
        }
        if ($incorrectas != 0) {
            echo $incorrectas . "<br>";
            echo $correctaT . "<br>";
            $correctas -= $correctaT;
        }
        $incorrectas = 0;
        $correctaT = 0;
    }
    if (isset($_POST['pregunta-10']) && $_POST['pregunta-10'] == '1') {
        $correctas++;
    }
    $calificacion = ($correctas * 10) / 16;
} else {
    header('examen.html');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Examen Ciencias Naturales</title>
    <style>
        html {
            min-height: 100%;
            position: relative;
        }

        body {
            margin: 0;
            margin-bottom: 40px;
        }

        .title {
            width: 100%;
            height: fit-content;
            text-align: center;
            background: rgb(0, 214, 54);
            font-family: Impact, 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
            font-size: xx-large;
            border-bottom: solid;
        }

        .contenido {
            padding: 8rem;
            padding-top: 3rem;
            padding-bottom: 1rem;
            font-family: Verdana, 'Geneva', Tahoma, sans-serif;
            font-size: medium;
        }
    </style>
</head>

<body>
    <div class="title">
        Examen Ciencias Naturales <br>
        Calificacion: <?php echo $calificacion; ?>
    </div>
    <div class="contenido">
        <form action="examen.php" method="POST">
            <span>1-Un</span>
            <input type="text" name="pregunta-1" value="<?php echo $_POST['pregunta-1']; ?>" disabled>
            <span>es el conjunto de especies de un área determinada que interactúan entre ellas y con su ambiente abiótico.</span>
            <br><br>
            <span>2-La</span>
            <input type="text" name="pregunta-2" value=" <?php echo $_POST['pregunta-2']; ?>" disabled>
            <span>es un conjunto de cosas que existen en el mundo o que se producen o modifican sin intervención del ser humano.</span>
            <br><br>
            <span>3-La</span>
            <input type="text" name="pregunta-3" value=" <?php echo $_POST['pregunta-3']; ?>" disabled>
            <span>es la diversidad de especies vegetales y animales que viven en un espacio determinado.</span>
            <br><br>
            <span><b>4-¿Qué es un factor abiótico?</b></span><br><br>
            <?php
            $texto = array(
                "Son elementos de la naturaleza que tienen vida.",
                "Son químicos fundamentales del ecosistema.",
                "Son elementos de la naturaleza que no tienen vida.",
                "Son las especies que habitan en un ecosistema."
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-4']) && $_POST['pregunta-4'] == $i) {
                    echo "<input type='radio' name='pregunta-4' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='radio' name='pregunta-4' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>5-¿Qué es un factor biótico?</b></span><br><br>
            <?php
            $texto = array(
                "Son los gases que generan las fábricas.",
                "Son elementos de la naturaleza que tienen vida.",
                "Son los cambios de clima en un ecosistema.",
                "Son elementos de la naturaleza que no tienen vida."
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-5']) && $_POST['pregunta-5'] == $i) {
                    echo "<input type='radio' name='pregunta-5' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='radio' name='pregunta-5' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>6-¿Cuál es la causa principal de la destrucción de los ecosistemas?</b></span><br><br>
            <?php
            $texto = array(
                "Tala de arboles",
                "La agricultura",
                "La mineria",
                "La sobrepesca"
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-6']) && $_POST['pregunta-6'] == $i) {
                    echo "<input type='radio' name='pregunta-6' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='radio' name='pregunta-6' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>7-Son algunas condiciones físicas para los ecosistemas</b></span><br><br>
            <?php
            $texto = array(
                "Agua",
                "Luz",
                "Fabricas",
                "Temperatura"
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-7']) && in_array($i, $_POST['pregunta-7'])) {
                    echo "<input type='checkbox' name='pregunta-7' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='checkbox' name='pregunta-7' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>8-Son algunos tipos de ecosistemas</b></span><br><br>
            <?php
            $texto = array(
                "Marinos",
                "Urbanos",
                "Bosques",
                "Desiertos"
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-8']) && in_array($i, $_POST['pregunta-8'])) {
                    echo "<input type='checkbox' name='pregunta-8' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='checkbox' name='pregunta-8' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>9-Son los tipos de climas que tienen los ecosistemas</b></span><br><br>
            <?php
            $texto = array(
                "Climas Cálidos",
                "Climas Tormentosos",
                "Climas Templados",
                "Climas Secos"
            );
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_POST['pregunta-9']) && in_array($i, $_POST['pregunta-9'])) {
                    echo "<input type='checkbox' name='pregunta-9' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='checkbox' name='pregunta-9' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br>
            <span><b>10-¿Quien es el hermano del hijo de mi padre?</b></span><br>
            <?php
            $texto = array(
                "Mi Hermano",
                "Yo",
                "Mi Sobrino"
            );
            for ($i = 1; $i <= 3; $i++) {
                if (isset($_POST['pregunta-10']) && $_POST['pregunta-10'] == $i) {
                    echo "<input type='radio' name='pregunta-10' value='" . $i . "' checked>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                } else {
                    echo "<input type='radio' name='pregunta-10' value='" . $i . "' disabled>&nbsp;<span>" . $texto[$i - 1] . "</span><br>";
                }
            }
            ?>
            <br><br>
        </form>
    </div>
</body>

</html>