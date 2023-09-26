<?php

$paragraph = $_GET["text"];
$censored = $_GET["censored_word"];

$censored_text = str_replace($censored, "***", $paragraph);
$len_paragraph = strlen($paragraph);
$len_new_paragraph = strlen($censored_text );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Paragrafo originale</h2>
    <p>" <?php echo $paragraph ?> "</p>
    <h2>Lunghezza del paragrafo originale</h2>
    <p>" <?php echo $len_paragraph ?> " caratteri</p>

    <h2>Parola da censurare</h2>
    <span><?php echo $censored_text ?></span>

    <h2>Nuovo Paragrafo</h2>
    <p>" <?php echo $censored_text ?> " </p>
    <h2>Lunghezza del nuovo paragrafo</h2>
    <p>" <?php echo $len_new_paragraph ?> " caratteri </p>
    </div>
  
</body>
</html>
