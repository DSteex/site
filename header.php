<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="logo">
        <h1>Тест_лого</h1>
    </div>
    
    <nav>
        <a href="index.php" <?php if($current_page == 'index.php') echo 'class="active"'; ?>>Главная</a>
        <a href="about">О нас</a>
        <a href="contacts">Контакты</a>
    </nav>
</header>