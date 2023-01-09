<?php
$title = "Alcune parole verranno censurate";
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore autem eaque perferendis hic aperiam? Qui inventore animi nisi! Odio porro harum, minus temporibus accusamus reprehenderit fuga itaque dolorum eum!";
$parola = $GET_["parola"];
$censura = "***";
$lunghezza = strlen($paragraph);

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
    <meta http-equiv="content-type" content="text/html; charset-utf-8" />
    <title>BadWords</title>
    <style type="text/css">
    </style>
</head>
<html>



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