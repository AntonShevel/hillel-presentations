<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Hillel PHP course Lesson 11</title>

    <meta name="description" content="">
    <meta name="author" content="Anton Shevel">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="../vendor/css/reveal.css">
    <link rel="stylesheet" href="../vendor/css/theme/beige.css" id="theme">

    <!-- Theme used for syntax highlighting of code -->
    <link rel="stylesheet" href="../vendor/lib/css/github.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="../vendor/lib/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<div class="reveal">

    <!-- Any section element inside of this container is displayed as a slide -->
    <div class="slides">
        <section>
            <h1>PHP</h1>
            <h3>Урок 12</h3>
        </section>

        <section>
            <h2><a href="http://www.phptherightway.com/#databases" target="_blank">Работа с Базами данных</a></h2>
        </section>

        <section>
            <h2><a href="http://www.spravkaweb.ru/mysql/sql/insert" target="_blank">Добавление записи</a></h2>
            <pre class="with-code">
                <code class="lang-sql" data-trim data-noescape>
                    INSERT INTO TABLE_NAME (column1, column2, column3)
                        VALUES (value1, value2, value3);

                    INSERT INTO CUSTOMERS (ID,NAME,AGE,ADDRESS,SALARY)
                        VALUES (3, 'Ivan', 23, 'New-York', 2000.00 );
                </code>
            </pre>
        </section>

        <section>
            <h2><a href="http://php.net/book.pdo" target="_blank">Работа с БД в PHP</a></h2>
            <pre class="with-code">
                <code class="lang-php" data-trim data-noescape>
                    &lt;?php

                        $statement = $db->query('SELECT * FROM pets'); // подготавливаем запрос
                        $statement->rowCount(); // список строк
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        var_dump($row);
                        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                        var_dump($rows);

                        $affected_rows = $db->exec("UPDATE table SET field='value'");
                        echo $affected_rows.' were affected';

                        $stmt = $db->prepare("SELECT * FROM table WHERE id=? AND name=?");
                        // подготовленнео выражение
                        $stmt->execute([$id, $name]); // выполнить и подставить значения
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // получить все строки
                </code>
            </pre>
        </section>

        <section>
            <h1>The End️️🐘</h1>
        </section>

    </div>

</div>

<script src="../vendor/lib/js/head.min.js"></script>
<script src="../vendor/js/reveal.js"></script>
<script src="../assets/js/script.js"></script>

</body>
</html>
