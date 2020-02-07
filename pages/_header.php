<?php
    session_start();
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
        $connect = true;
    } else {
        $login = '';
        $connect = false;
    }
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/_header.css">
</head>
<header>
    <img id="top" src="images/books.jpg">
    <img id="booksmall" src="images/booksmall.jpg">
    <div>
        <img id="logo" src="images/logo_rougec.png">
    </div>


    <div id="search">
        <form method="get" action="#">

            <input class="search" type="search" name="keyin" placeholder="Tapez votre recherche...">
            <button class="loupe" type="submit" name="keyin"></button>
            <img id="loupe" src="images/loupe.png">

        </form>
    </div>


    <div>
         
        <span>Nous sommes le&nbsp;:&nbsp;<br>
            <?php  echo date("d-m-y"); ?><br>
                <?php $weekarray=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
                echo $weekarray[date("w")]; ?></span>

        <?php
        if (!$connect) {
            echo '<a href="pages/login.php"><img id="connect" src="images/login.png"></a>';
        } else {
           
            echo '<a href="pages/deconnect.php"><img src="images/logout.png"></a>';
        
        }
        ?>
    </div>


</header>