<?php # Developed by nano gennari
include('config.php');
if (isset($_GET['image'])) {
    $randomImage = './images/'.$_GET['image'];
} else {
$imagesDir = './images/';
$images = glob($imagesDir . '*.gif', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
}
?>
<!DOCTYPE html>
<head>
<title><?php echo($config['siteName']); ?></title>
<style>
.back {
   background-image:url(<?php echo($randomImage); ?>);
}
</style>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='gs.js'></script>
</head>
<body>
  <?php echo($config['body']); ?>
  <div class='back'></div>
  <div class='topleft'><?php echo($config['topLeft']); ?></div>
  <div class='topright'><?php echo($config['topRight']); ?></div>
  <div class='bottomleft'><?php echo($config['bottomLeft']); ?></div>
  <div class='bottomright'><?php echo($config['bottomRight']); ?></div>
</body>
</html>
