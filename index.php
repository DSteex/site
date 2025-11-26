<?php include 'virable.php'; ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $site_name ?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        
        <div class="content">
            <h1><?php echo $welcome_text; ?></h1>
            
            <div class="block">
                <h2>О нас</h2>
                <p>Информация</p>
            </div>
            
            <div class="block">
                <h2>Наши услуги</h2>
                <ul>
                    <li><a href="test1.html">Веб-разработка</a></li>
                    <li><a href="test2.html">Дизайн</a></li>
                    <li><a href="test3.html">Поддержка</a></li>
                </ul>
            </div>
            
            <div class="block">
                <h2>Контакты</h2>
                <?php
                $email = "дополнить";
                $phone = "дополнить";
                ?>
                <p>Email: <?php echo $email; ?></p>
                <p>Телефон: <?php echo $phone; ?></p>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>