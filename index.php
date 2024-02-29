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
   $filterRes = [];
   $parking = $_POST["parking"] ?? null;
   $stars = $_POST["vote"] ?? null;
   if($parking === null && $stars == null){
    echo "nothing set yet"; 
    
   }


   if(isset($parking) && isset($stars) ){
      foreach($hotels as $item){
        if($parking == $item['parking'] && $stars <= $item["vote"]){
            array_push($filterRes,$item);
        } 
       
      }
   }elseif (isset($parking)  || isset($stars)  ){
    foreach($hotels as $item){
        if($parking == $item['parking'] || $stars <= $item["vote"]){
            array_push($filterRes,$item);
        } 
       
      }
   } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Hotels</title>
</head>
<body class="m-5">
<!-- 
    <?php foreach ($hotels as $hotel) {?>
       <?php foreach($hotel as $key =>$val ) {?>
   <?php echo " <p>{$key} :  {$val} </p>"?>

 
   <?php } ?>
   <?php } ?> -->
   <h3>Filter</h3>
   <form action="index.php" method="post">
    <div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="parking" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" value="true">
   Hotel with car park
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="parking" id="flexRadioDefault2" value="0">
  <label class="form-check-label" for="flexRadioDefault2">
    Hotel without car park
  </label>
</div>
    </div>
    <div>
    <label for="vote">Select stars</label>
    <input id="vote" name="vote" type="number" min="0" max="5">
    </div>


<button class="btn btn-primary my-3" type="submit">Submit</button>
   </form>
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
<?php foreach (count($filterRes) === 0 ? $hotels : $filterRes as $hotel) : ?>
    <tr>
    <td><?= $hotel['name']?></td>
    
    <td><?= $hotel['description'] ?></td>
    <td><?= $hotel['parking'] == 1 ? "yes" : "no"?></td>
    <td><?= $hotel['vote'] ?></td>
    <td><?= $hotel['distance_to_center'] ?></td>
    <?php endforeach ?>
</tbody>
   </table>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>
</body>
</html>