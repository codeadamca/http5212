<?php

// Connect to the MySQL database
$connect = mysqli_connect(
    'localhost',
    'root',
    'root',
    'demo'
);

// Create a query
$query = 'SELECT games.name,
    games.url,
    games.rating,
    games.year,
    games.image,
    developers.name AS developer_name,
    developers.url AS developer_url,
    developers.logo AS developer_logo
    FROM games
    INNER JOIN developers
    ON games.developer_id = developers.id
    ORDER BY games.name';
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games List</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<div class="w3-container" style="max-width: 800px; margin: auto;">

    <h1>Games List</h1>
    
    <?php while($record = mysqli_fetch_assoc($result)): ?>


        <div class="w3-third w3-container">

        <div class="w3-card-4">
            <a href="<?=$record['url']?>">
                <img src="images/<?=$record['image']?>" width="100%">
            </a>
            <div class="w3-container w3-center">
                <h2><?=$record['name']?></h2>
                <p>
                    Developer: <?=$record['developer_name']?>
                    <br>
                    Year: <?=$record['year']?>
                </p>
                <a href="<?=$record['developer_url']?>">
                    <img src="images/<?=$record['developer_logo']?>" width="100">
                </a>
                <hr>
                <?php for($i = 0; $i < 10; $i ++): ?>
                    <?php if($i < $record['rating']): ?>
                        &#9733;
                    <?php else: ?>
                        &#9734;
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>

        </div>

    <?php endwhile; ?>

</div>

</body>
</html>