<?php

// die(var_dump($_GET['id']));


$json_file = 'DreamDictionary.json';

$json_data = file_get_contents($json_file);

$dreams = json_decode($json_data, true);

$blogDetails = $dreams['BlogDetail'];

// $blogHeaders = $dreams['BlogHeader'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Dictionary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <?php foreach ($blogDetails as $blogDetail) : ?>

                    <?php if ($blogDetail['BlogId'] == $_GET['id']) : ?>
                        <div class="form-group">
                            <ul>
                                <li class="bg-light"><?php echo $blogDetail['BlogContent'] ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>


                <?php endforeach; ?>

                <a href="index.php" class="btn btn-secondary mb-4">Go To Home Page</a>

            </div>


        </div>


    </div>

</body>

</html>