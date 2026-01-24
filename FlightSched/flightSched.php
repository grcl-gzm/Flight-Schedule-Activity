<!-- 
Name: Graciela C. Gozum
Section: WD-201
Date: 01/22/26
6DWEB 
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flight Schedule</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section>

<h2>|| Philippines Domestic Flights</h2>

<?php
$domesticFlights = [
    ["route"=>"CRK to MPH","place"=>"Boracay","timezone"=>"Asia/Manila",
    "duration"=>1,"destImage"=>"imgs/Boracay.jpg","image"=>"imgs/CRK.jpg"],

    ["route"=>"MNL to CEB","place"=>"Cebu","timezone"=>"Asia/Manila",
    "duration"=>2,"destImage"=>"imgs/Cebu.jpg","image"=>"imgs/MNL.jpg"],

    ["route"=>"CRK to ILO","place"=>"Iloilo","timezone"=>"Asia/Manila",
    "duration"=>1,"destImage"=>"imgs/Ilo.jpg","image"=>"imgs/CRK.jpg"],

    ["route"=>"MNL to DVO","place"=>"Davao","timezone"=>"Asia/Manila",
    "duration"=>2,"destImage"=>"imgs/Davao.jpg","image"=>"imgs/MNL.jpg"],

    ["route"=>"CRK to USU","place"=>"Coron","timezone"=>"Asia/Manila",
    "duration"=>1,"destImage"=>"imgs/Coron.jpg","image"=>"imgs/CRK.jpg"]
];

foreach ($domesticFlights as $flight) {
    date_default_timezone_set($flight["timezone"]);
    $currentTime = date("h:i A");
    $arrivalTime = date("h:i A", strtotime("+" . $flight["duration"] . " hours"));
?>
<div class="flight-grid">
    <div class="card">
        <img src="<?php echo $flight['image']; ?>" class="flight-img" alt="Flight Image">
        <div class="flight-dest"><?php echo $flight["route"]; ?></div>
        <div class="time-row"><b>Estimated Arrival:</b> <?php echo $arrivalTime; ?></div>
    </div>

    <div class="card">
        <img src="<?php echo $flight['destImage']; ?>" class="flight-img" alt="Location Image">
        <div class="time-row"><b>Place:</b> <?php echo $flight["place"]; ?></div>
        <div class="time-row"><b>Time Zone:</b> <?php echo $flight["timezone"]; ?></div>
        <div class="time-row"><b>Current Time:</b> <?php echo $currentTime; ?></div>
    </div>
</div>
<?php } ?>

<br>
<hr>

<h2>|| International Flights</h2>

<?php
$internationalFlights = [
    ["route"=>"MNL to SIN","country"=>"Singapore","timezone"=>"Asia/Singapore",
    "duration"=>3,"destImage"=>"imgs/SG.jpg","image"=>"imgs/MNL.jpg"],

    ["route"=>"CRK to JPN","country"=>"Japan","timezone"=>"Asia/Tokyo",
    "duration"=>4,"destImage"=>"imgs/Japan.jpg","image"=>"imgs/CRK.jpg"],

    ["route"=>"MNL to KOR","country"=>"South Korea","timezone"=>"Asia/Seoul",
    "duration"=>4,"destImage"=>"imgs/Korea.jpg","image"=>"imgs/MNL.jpg"],

    ["route"=>"CRK to HKG","country"=>"Hong Kong","timezone"=>"Asia/Hong_Kong",
    "duration"=>3,"destImage"=>"imgs/Hk.jpg","image"=>"imgs/CRK.jpg"],


    ["route"=>"MNL to USA","country"=>"USA","timezone"=>"America/New_York",
    "duration"=>15,"destImage"=>"imgs/USA.jpg","image"=>"imgs/MNL.jpg"]
];

foreach ($internationalFlights as $flight) {
    date_default_timezone_set($flight["timezone"]);
    $currentTime = date("h:i A");
    $arrivalTime = date("h:i A", strtotime("+" . $flight["duration"] . " hours"));
?>
<div class="flight-grid">
    <div class="card">
        <img src="<?php echo $flight['image']; ?>" class="flight-img" alt="Flight Image">
        <div class="flight-dest"><?php echo $flight["route"]; ?></div>
        <div class="time-row"><b>Estimated Arrival:</b> <?php echo $arrivalTime; ?></div>
    </div>

    <div class="card">
        <img src="<?php echo $flight['destImage']; ?>" class="flight-img" alt="Location Image">
        <div class="time-row"><b>Country:</b> <?php echo $flight["country"]; ?></div>
        <div class="time-row"><b>Time Zone:</b> <?php echo $flight["timezone"]; ?></div>
        <div class="time-row"><b>Current Time:</b> <?php echo $currentTime; ?></div>
    </div>
</div>
<?php } ?>

</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>