<?php
echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
echo '<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400&amp;subset=latin-ext" rel="stylesheet">';

$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$from = 'Wiadomość od ' . $name .  "\n" . 'Nr Telefonu ' . $tel;
mail ("agnieszkagebus@gmail.com", "Nowa wiadomosc - formularz kontaktowy Family Coaching", $message, $from);
echo "<div class=\"form-php\"> <h1>Dziękuję za wiadomość<br> <br> Aneta Cybowicz</h1></div>";
?>