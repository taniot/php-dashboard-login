<?php

include_once __DIR__ . '/session.php';


if(empty($_SESSION['email'])) {
    // echo 'Non fare il furbo';
    // die();
    header('Location: ./index.php');

}

$page_title = 'Chi siamo';
$body_class = 'chi-siamo';
include __DIR__.'/header.php';
?>

<h1>Ciao utente</h1>
<?php echo $_SESSION['email']; ?>
<a href="logout.php">Logout</a>


<?php
include __DIR__.'/footer.php';
?>