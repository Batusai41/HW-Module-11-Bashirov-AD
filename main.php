<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 11.6</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>
        <div class="about me">
            <h1> <?php echo $p ?> </h1>
            <div class="data">
                <div class="myImg">
                    <?php
            echo '<img src="img/php.jpg">';
            ?>
                </div>
                <div class="fullname">
                    <p> Меня зовут:
                        <?php echo $name, ' ', $surname . '<br>';?>
                    </p>
                    <p> Мой город:
                        <?php echo 'г.', ' ', $city; ?>
                    </p>

                    <p> Мне:
                        <?php echo $age; ?>
                        года </p>
                </div>
            </div>

            <div class="skills">
                <?php include 'skills.php' ?>
            </div>

            <div class="knowledge">
                <h2>Получены знания:</h2>
                <?php include 'knowledge.inc.php' ?>

                <?php
            echo '● Пример строки:', ' ', $a, ' ', $b, ' ', $c;
            ?> <br>

                <?php
            $a=10;
            $b=20;
            $c=$a + $b;
            echo '● Пример числа:', ' ', $c;
            ?> <br>
                <?php
            echo '● Пример условия:', ' ', $d;
            ?>
            </div>
            <div class="article">
                <p class="text">
                    © Все логотипы, товарные знаки и марки являются собственностью зарегистрировавших их компаний. При
                    использовании материалов ссылка на SkillFactory обязательна.
                </p>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>

</html>