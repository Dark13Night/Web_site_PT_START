﻿<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Кузнецова Ю.О.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">Расскажу немного о себе</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Образование</h2>
                <h3>Учусь в МГТУ им Н.Э.Баумана на 2 курсе по специальности компьютерная безопасность</h3>
                <h2>Хобби и интересы</h2>
                <h3>Люблю читать, петь, увлекаюсь экстремальными видами спорта: горнолыжка, сноубординг, скейтбординг, вейкбординг. Также мне очень интересна сфера информационной безопасномти(отсюда и выбор специальности), особенно меня интересует pentest. Также мне кажется очень интересным, как будет равзвиваться тема безопасности в сфере ИИ</h3>
               
            </div>
            <div class="col-4">
            <div class="row my_photo"></div>
            <div class="row"><p class="title_photo">Кузнецова Ю.О.</p></div>

            </div>
         </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
<div class="container">
    <div class = "row">
        <div class = "col-12">
            <h1 class="hello">
                Привет, <?php echo $_COOKIE['User']; ?>
            </h1>
            <form method = "POST" action = "profile.php" class = "form-container">
                <input type = "text" class = "form" type="text" name="title" placeholder = "Заголовок вашего поста"/>
                <textarea name = "text" cols = "30" rows = "10" placeholder = "Введите текст вашего поста..."></textarea>
                <button type = "submit" class = "btn_red" name = "submit">Сохранить пост!</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/button1.js"></script>
</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES('$title', '$main_text')";

    if(!mysqli_query($link, $sql)) die("Не удалось добавить пост");
}