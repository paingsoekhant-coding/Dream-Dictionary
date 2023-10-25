<?php


$json_file = 'DreamDictionary.json';

$json_data = file_get_contents($json_file);

$dreams = json_decode($json_data, true);

$blogHeaders = $dreams['BlogHeader'];


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

    <div class="container mt-5 bg-light shadow-lg rounded">
        <div class="row justify-content-center ">
            <div class="col-6 mt-5 ">

                <h1 class="fs-4 mb-4">မြင်မက်ခဲ့သောအိပ်မက်ထဲမှ အဓိကဇာတ်ကောင်များ (သို့) အရာဝတ္ထုများကို မြန်မာစာလုံးပေါင်းဖြင့် အောက်ပါအကွက်လေးထဲ ထည့်ပါ။</h1>
                <form action="search.php" method="POST">

                    <div class="form-group">

                        <input class=" form-control" type="text" name="searchTitle" placeholder="search . . .">

                        <button name="submit" class="btn btn-secondary mt-3 col-4">Search</button>

                    </div>


                    <div class="row text-center mt-4">
                        <?php foreach ($blogHeaders as $blogHeader) : ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="project-item bg-white p-4 shadow-lg rounded">

                                    <a href="show.php?id=<?php echo $blogHeader['BlogId'] ?>" class="text-decoration-none text-secondary"><?php echo $blogHeader['BlogTitle'] ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </div>


</body>

</html>