<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <?php
    $title = "Alcune parole verranno censurate";
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore autem eaque perferendis hic aperiam? Qui inventore animi nisi! Odio porro harum, minus temporibus accusamus reprehenderit fuga itaque dolorum eum!";
    $parola = $GET_["parola"];
    $censura = "***";
    $lunghezza = strlen($paragraph);
    ?>
</head>

<body>
    <h1>
        <?php
        echo $title;
        ?>
    </h1>
    <section id="trasparente">
        <p>
            <?php
            echo $paragraph;
            ?>
        </p>
        <h3>
            <?php
            echo "Il paragrafo contiene " . $lunghezza . " " . "parole";
            ?>
        </h3>
    </section>
    <section id="censurato">
        <p>
            <?php
            echo str_replace($censura, $parola, $paragraph);
            ?>
        </p>
        <h3>
            <?php
            echo "Il paragrafo contiene sempre " . $lunghezza . " " . "parole";
            ?>
        </h3>

    </section>
</body>

</html>