<?php # Developed by @nanogennari 2016
include('config.php');

# Foolproofing imagesFolder:
if (substr($config["imagesFolder"], -1) != '/'){
  $config["imagesFolder"] = $config["imagesFolder"].'/';
}
if ((substr($config["imagesFolder"], 2) != './') && (substr($config["imagesFolder"], 1) != '/')){
  $config["imagesFolder"] = './'.$config["imagesFolder"];
}

#Test if there is an image name in GET
if (isset($_GET['image'])) {
  $randomImage = $config["imagesFolder"].$_GET['image'];
  $imageName = $_GET['image'];
}
# Else get an random image from imagesFolder
else {
  $images = glob($config["imagesFolder"].'*.'.$config["imagesFileType"], GLOB_BRACE);
  $randomImage = $images[array_rand($images)];
  $imageName = substr($randomImage,strlen($config['imagesFolder']));
}
include('htmls.php')
?>
<!DOCTYPE html>
<head>
<title><?php echo($config['siteName']); ?></title>
<style>
  .back { background-image:url(<?php echo($randomImage); ?>);}
</style>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='gs.js'></script>
</head>
<body>
  <?php echo($htmls['body']); ?>
  <div class='back'></div>
  <div class='topleft'><?php echo($htmls['topLeft']); ?></div>
  <div class='topright'><?php echo($htmls['topRight']); ?></div>
  <div class='bottomleft'><?php echo($htmls['bottomLeft']); ?></div>
  <div class='bottomright'><?php echo($htmls['bottomRight']); ?></div>
</body>
</html>
