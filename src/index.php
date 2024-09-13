<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="assets/app.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-logo">
                    <img src="assets/static/logo.jpg" alt="logo">
                </div>
                <div class="header-title">
                    <h1>PHP-server</h1>
                </div>
            </div>
        </div>

    </div>


    <div class="container-2">
        <div class="info-block">
            <h2 style="text-align: center;">Структура проекта</h2>
            <pre>
            .
            ├── docker-compose.yml
            ├── nginx.conf
            └── src
                ├── about.php
                ├── assets
                │   ├── app.css
                │   ├── app.js
                │   └── static
                │       └── logo.jpg
                └── index.php
            </pre>
        </div>

        <div class="info-block">
            <h2 style="text-align: center;">Конфигурация</h2>
            <div class="info-line">
                <label>phpmyadmin</label>
                <a href="http://localhost:8080">Открыть</a>
            </div>
            <div class="info-line">
                <label>MySQL port:</label>
                3306
            </div>
            <div class="info-line">
                <label>Nginx port</label>
                80
            </div>
            
        </div>

    </div>

</body>

</html>