
<?php

include "../php/header.php";

?>

<style> <?php include "../css/index.css"; include "../css/reset.css";?> </style>


<section id="temp-signup-styling">
    <h2> Sign Up </h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Password Repeat...">
        <button type="submit" name="submit"> Sign Up </button>
    </form>
</section>