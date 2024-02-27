<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Hotels</title>
</head>
<body>
<!-- 
    <?php foreach ($hotels as $hotel) {?>
       <?php foreach($hotel as $key =>$val ) {?>
   <?php echo " <p>{$key} :  {$val} </p>"?>

 
   <?php } ?>
   <?php } ?> -->
   <table class="table w-75 ">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Rate</th>
      <th scope="col">Distance to the center</th>
    </tr>
  </thead>

  

<tbody>
<?php foreach ($hotels as $hotel) : ?>
    <tr>
    <td><?= $hotel['name']?></td>
    
    <td><?= $hotel['description'] ?></td>
    <td><?= $hotel['parking'] == 1 ? "yes" : "no"?></td>
    <td><?= $hotel['vote'] ?></td>
    <td><?= $hotel['distance_to_center'] ?></td>
    <?php endforeach ?>
</tbody>
   </table>
 
</body>
</html>