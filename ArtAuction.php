<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ArtAuction: The Place To Buy PAINTS</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
    integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
</head>

<body>
  <header>
    <div id="brand-name">
      <span id="title"> ArtAuction: </span>
      <span id="title_secondry">The Place To Buy PAINTS</span>
    </div>
    <!-- <div id="menu">
      <i class="fa-solid fa-magnifying-glass icon"></i>
      <i class="fa-solid fa-house icon"></i>
      <i class="fa-solid fa-address-card icon"></i>
    </div> -->
  </header>
  <main>
    <?php
    $connect = mysqli_connect(
      'sql201.epizy.com',
      //host
      'epiz_33365951',
      //username
      'TCIqH96bMu',
      //password
      'epiz_33365951_artauction' //databse
    );

    if (mysqli_connect_errno()) {
      echo mysqli_connect_error();
      exit();
    }
    $query = "SELECT *
  FROM listing
  ORDER BY name";
    $result = mysqli_query($connect, $query)
      or die(mysqli_error($connect));

    while ($record = mysqli_fetch_assoc($result)) {
      echo '<div id="card">';
      echo '<div id="img">';
      echo '<img src="' . $record['image'] . '" alt="image.jpeg">';
      echo '</div>';
      echo '<div id="detail">';
      echo '<h2>' . $record['name'] . '</h2>';
      echo '<p>' . $record['description'] . '</p>';
      echo '<p> Year:' . $record['year'] . '</p>';
      echo '<button type="button"> Ask $' . $record['ask'] . '</button>';
      echo '<button type="button"> Bid </button>';
      echo '</div>';
      echo '</div>';
    }


    ?>
  </main>
  <footer>
    <p>manalipatel, PHP-Assignment-1, Feb 2023</p>
  </footer>
</body>

</html>