<?php

// parola vietata, che verrà inserita dall'utente (verrà inserita dall'utente?)
$parola = $_GET['parola'];

// variabile paragrafo
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

// sostituzione
$paragrafo = str_replace($parola, "***", $paragrafo);

// lunghezza del paragrafo
$lunghezza = strlen($paragrafo);

?>

<h1> <?php echo $paragrafo; ?> </h1>
<h2> il paragrafo conta: <?php echo $lunghezza;?> caratteri</h2>
