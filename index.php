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
body {
    overflow:hidden;
}
div {
   font-family: 'Oswald', sans-serif;
   text-shadow: 2px 2px #000000;
   margin: 0px;
   padding: 0 2px 0 0;
   right: 10px;
   position: absolute;
   overflow:hidden;
   color: white;
   left:0; 
   font-size: 9pt;
   opacity: 0.3;
   }
div:hover {
   opacity: 1;
   }
.body {
   background-image:url(<?php echo($randomImage); ?>);
   background-repeat:no-repeat;
   background-size: 100% 100%;
   width: 100%;
   height: 100%;
   margin:0;
   top:0;
   left:0;
   z-index: -1;
   position: absolute;
   overflow:hidden;
   opacity: 1;
   } 
.fb {
   bottom:10px;
   left: 10px;
   opacity: 0.15;  
   z-index: 10;
   right: auto;
   } 
.fb-like {
   opacity: 1;  
   }
.autoref {
   text-align: right;
   top:0;   
   left: auto;
   }
    
.bottom {
   text-align: right;
   bottom:10px;  
   left: auto;
   } 
.made {
   text-align: left;
   top: 10px;
   left: 10px; 
   right: auto;
   } 
a, a:hover, a:active, a:visited { 
   color: white;
   text-decoration: none;
   }
a:hover { 
   text-decoration: underline;
   }
</style>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<script type="text/javascript">
var reloading;

function reload() {
    var url = window.location.protocol + '//' + window.location.hostname + window.location.pathname + window.location.hash;
    if (url == window.location) {
    	window.location.reload();
    } else {
         window.open(url,"_self");
    }
}

function checkReloading() {
    if (window.location.hash=="#autoreload") {
        reloading=setTimeout("reload();", 30000);
        document.getElementById("reloadCB").checked=true;
    }	
}

function toggleAutoRefresh(cb) {
    if (cb.checked) {
        reloading=setTimeout("reload();", 30000);
        window.location.replace('#autoreload');
    } else {
        window.location.replace("#");
        clearTimeout(reloading);
    }
}

window.onload=checkReloading;
</script>
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

<div class='body'></div>
<div class="fb">
	<!--FB Button-->
	<div class="fb-like" data-href="https://partyhard.online/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></br>
	
	<!--Twitter Button-->
	<a href="https://twitter.com/share" class="twitter-share-button"{count} data-url="http://partyhard.online" data-text="Let's PARTY HARD!!!!!!!" data-hashtags="PartyHardCPBR9">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	
</div>
<div class='autoref'><p>
    <input type="checkbox" onclick="toggleAutoRefresh(this);" id="reloadCB"> Auto Change</br>
    <A HREF="javascript:reload()">Change GIF NOW!</A></br>
    <a href='http://partyhard.online/?image=<?php echo(substr($randomImage,9)); ?>'>Link to this</a>
</p></div>
<div class='bottom'><p>Send Party Hard GIFs to <a href='mailto:gifs@partyhard.online' target='_blank'>gifs@partyhard.online</a> - <a href='http://twitter.com/nanogennari' target='_blank'>@nanogennari</a> 2016</p></div>
<div class='made'>Desenvolvido na <a href='https://twitter.com/hashtag/CPBR9' target='_blank'>#CPBR9</a></div>
</body>
</html>