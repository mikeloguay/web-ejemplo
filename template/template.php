<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <style type="text/css">
        .wrap { max-width: 720px; margin: 50px auto; padding: 30px 40px; text-align: center; box-shadow: 0 4px 25px -4px #9da5ab; }
        article { text-align: left; padding: 40px; line-height: 150%;}

        h2:hover {transform: rotate(-180deg); transition: 0.5s}
        
        body > div > header > nav > a {color:black; text-decoration: none; transition: 0.5s; padding: 20px }
        body > div > header > nav > a:hover {font-size: 30px; color: red; }
 
    </style>
</head>
<body>
<div class="wrap">

    <header>
        <h2><?php siteName(); ?></h2>
        <nav class="menu">
            <?php navMenu(); ?>
        </nav>
        <div>
        <img src="images/excelente.gif">
        </div>
    </header>

    <article>
        <h3><?php pageTitle(); ?></h3>
        <?php pageContent(); ?>
    </article>

    <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?></small></footer>

</div>
</body>
</html>