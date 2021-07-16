<?php
    include __DIR__.'/inc/data.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oDev - Des articles écrits par des dév pour les dév</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <script defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper" class="text-white text-center d-flex flex-column">
        <header class="jumbotron">
            <h1 class="display-2">oDev</h1>
            <p>Découvrez les articles les plus consultés !</p>
        </header>
        <main>
            <div id="carousel" class="carousel slide bg-dark" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner font-italic">
                <?php for($index = 0 ; $index < 3 ; $index++): ?>
                    <div class="carousel-item<?php if ($index == 0) echo ' active'; ?>">
                        <h3 class="d-block w-75 p-5 m-auto"><?= $articleList[$index]; ?></h3>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </main>
        <footer class="mt-auto">
            <p class="font-italic">Site réalisé par oDev <?= date('Y'); ?></p>
        </footer>
    </div>
</body>
</html>