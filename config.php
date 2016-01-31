config = [
  "siteName" => "PARTY HARD GIF!!!!!!!!!!!!!!!!!!!!!!!!!",
  "imagesFolder" => "./images",
  "topRight" => "
      <input type='checkbox' onclick='toggleAutoRefresh(this);' id='reloadCB'> Auto Change</br>
      <A HREF='javascript:reload()'>Change GIF NOW!</A></br>
      <a href='http://partyhard.online/?image=<?php echo(substr($randomImage,9)); ?>'>Link to this</a>
      ",
  "topLeft" => "
      Desenvolvido na <a href='https://twitter.com/hashtag/CPBR9' target='_blank'>#CPBR9</a>
      ",
  "bottomLeft" => "
      <!--FB Button-->
      <div class='fb-like' data-href='https://partyhard.online/' data-layout='box_count' data-action='like' data-show-faces='true' data-share='true'></div></br>

    	<!--Twitter Button-->
    	<a href='https://twitter.com/share' class='twitter-share-button'{count} data-url='http://partyhard.online' data-text='Lets PARTY HARD!!!!!!!' data-hashtags='PartyHard'>Tweet</a>
    	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      ",
  "bottomRight" => "
      Send Party Hard GIFs to <a href='mailto:gifs@partyhard.online' target='_blank'>gifs@partyhard.online</a> - <a href='http://twitter.com/nanogennari' target='_blank'>@nanogennari</a> 2016
      ",
  "body"  => "
  <div id='fb-root'></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=279003092136694';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>",
]
