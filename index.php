<?php
require __DIR__ . '/functions.php';
include_once __DIR__ . '/session.php';
include __DIR__.'/header.php';

$error = false;

if(!empty($_POST['email'])){
    
    //function che verifica la mail
    $mail = $_POST['email'];

    $verifyEmail = verifyEmail($mail);

    if($verifyEmail) {
        $_SESSION['email'] = $_POST['email'];
        header('Location: ./dashboard.php');
    } else {   
        $error = true;
    }
    

}

?>
<div class="p-3">
    <h1>Ciao sono index</h1>

    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control <?php echo $error ? 'show-error' : ''; ?>"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <p>email: <?php echo $_SESSION['email']; ?></p>

        <?php if($error): ?>
        <p>Non ti conosco!</p>
        <?php endif; ?>
    </form>
</div>



<?php
include __DIR__.'/footer.php';
?>