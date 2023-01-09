<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h1>
        <?php
        $title = "Alcune parole verranno censurate";
        echo $title;
        ?>
    </h1>
    <p>
        <?php
        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore autem eaque perferendis hic aperiam? Qui inventore animi nisi! Odio porro harum, minus temporibus accusamus reprehenderit fuga itaque dolorum eum!";
        echo $paragraph;
        $parola = $GET_["parola"];
        $censura = "***";
        $censurato = str_replace($censura, $parola, $paragraph);
        echo $censurato;
        ?>
    </p>
</body>

</html>