<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Карта Московского зоопарка</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="static/css/style.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=4a4aeeb4-097e-407f-9e5b-a96744f0cd22" type="text/javascript"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo_187_50.png" alt="">
            </a>
        </div>
    </nav>
    
    <main>
        <?php
        if (isset($_GET['search'])){
            $search=$_GET['search'];
        }
        ?>
        <div class="container-fluid pt-5">
            <form method="post" class="search-form" action="search.php">
                <input type="text" name="search" class="search-field" value="<?=$search?>" placeholder="Введите название животного">
                <input type="submit" name="submit" class="search-btn" value="Поиск">
            </form>
        </div>
        <?=$content?>
    </main>
</body>
</html>