<?php
$paragraf = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$word = $_GET["badword"];
$newParagraf = str_replace($word, "***", $paragraf);
$lunghezza = strlen($nome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <p>Paragrafo: <?php echo $paragraf; ?></p>
  <p>Nuovo paragrafo: <?php echo $newParagraf ?></p>
  <p><?php echo "Lunghezza stringa: " .$lunghezza; ?></p>

</body>
</html>
