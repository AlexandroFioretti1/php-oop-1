<?php

include __DIR__ . "/Models/class.php";
include __DIR__ . "/Models/db.php";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-oop-1</title>
</head>

<body>

    <div class="container ">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-4 my-4 text-center">
                    <div class="card gap-1">
                        <h5><?php echo ($movie->Titolo) ?></h5>
                        <br>
                        <span><?php echo ($movie->Anno) ?></span>
                        <br>
                        <span><?php echo ($movie->Genere) ?></span>
                        <br>
                        <span><?php echo ($movie->Regista) ?></span>
                        <br>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>