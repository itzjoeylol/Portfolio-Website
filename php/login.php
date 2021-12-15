
<?php

include "../php/header.php";

?>

<style> <?php include "../css/index.css"; include "../css/reset.css";?> </style>


<section id="temp-signup-styling">
    <h2> Log In </h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit"> Log In </button>
    </form>
</section>