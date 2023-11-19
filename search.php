<?php

require_once "./function/connect.php";

$results  = $dreams->search();

$searchTitle = $dreams->title();

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
            <div class="col-6 mt-4 card shadow-sm">

                <?php if (empty($results)) : ?>

                    <p><?php echo "No result Found For '$searchTitle'"; ?></p>

                <?php else : ?>

                    <h4 class="mt-2"><?php echo "Search Results for '$searchTitle'" ?></h4>

                    <ul>
                        <?php foreach ($results as $result) : ?>
                            <li><?php echo "{$result['BlogContent']}" ?></li>
                        <?php endforeach; ?>
                    </ul>

                <?php endif; ?>

                <a href="index.php" class="btn btn-primary mb-4">Go To Home Page</a>

            </div>
        </div>
    </div>

</body>

</html>