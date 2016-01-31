<?php # Developed by nano gennari
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
<title>PARTY HARD!!!!!!!!!!!!!!!!!!!!!!!!!</title>
<style>
.back {
   background-image:url(<?php echo($randomImage); ?>);
}
</style>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="gs.js"></script>
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=279003092136694";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div class='back'></div>
<div class='bottomleft'>
	<!--FB Button-->
	<div class="fb-like" data-href="https://partyhard.online/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></br>

	<!--Twitter Button-->
	<a href="https://twitter.com/share" class="twitter-share-button"{count} data-url="http://partyhard.online" data-text="Let's PARTY HARD!!!!!!!" data-hashtags="PartyHardCPBR9">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</div>
<div class='topright'><p>
    <input type="checkbox" onclick="toggleAutoRefresh(this);" id="reloadCB"> Auto Change</br>
    <A HREF="javascript:reload()">Change GIF NOW!</A></br>
    <a href='http://partyhard.online/?image=<?php echo(substr($randomImage,9)); ?>'>Link to this</a>
</p></div>
<div class='bottomright'><p>Send Party Hard GIFs to <a href='mailto:gifs@partyhard.online' target='_blank'>gifs@partyhard.online</a> - <a href='http://twitter.com/nanogennari' target='_blank'>@nanogennari</a> 2016</p></div>
<div class='topleft'>Desenvolvido na <a href='https://twitter.com/hashtag/CPBR9' target='_blank'>#CPBR9</a></div>
</body>
</html>
