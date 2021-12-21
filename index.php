<!-- Import data -->
<?php

require_once __DIR__ . '/data/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($database as $data) : ?>
                <div class="col-4">
                    <div>
                        <img src=" <?php echo $data['poster']; ?>" alt="<?php echo $data['title']; ?>">
                    </div>
                    <div><?php echo $data['title']; ?></div>
                    <div><?php echo $data['author']; ?></div>
                    <div><?php echo $data['year']; ?></div>
                    <div><?php echo $data['genre']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>