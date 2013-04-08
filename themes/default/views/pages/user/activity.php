<div id="filters-trigger" class="col_12 cf">
	<a href="#" class="button button-primary filters-trigger"><i class="icon-filter"></i>Filters</a>
</div>

<section id="filters" class="col_3">
	<div class="modal-window">
		<div class="modal">		
			<div class="modal-title cf">
				<a href="#" class="modal-close button-white"><i class="icon-cancel"></i>Close</a>
				<h1>Filters</h1>
			</div>

			<ul class="filters-primary">
				<li class="active"><a href="#" class="modal-close"><?php echo __("Everything"); ?></a></li>
				<li><a href="#" class="modal-close"><?php echo __("Pending"); ?></a></li>
				<li><a href="#" class="modal-close"><?php echo __("Discussion"); ?></a></li>
			</ul>
		</div>
	</div>
</section>

<div class="col_9">
	<div id="news-feed" class="container base">
		<!--
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> created the <a href="#">Kenya election hate speech</a> river.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2448693999/emrjufxpmmgckny5frdn_bigger.jpeg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> created the <a href="#">Kenya election hate speech</a> bucket.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2448693999/emrjufxpmmgckny5frdn_bigger.jpeg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> created the <a href="#">Kenya election hate speech</a> form.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> invited <a href="/markup/river">Juliana Rotich</a> to collaborate on the <a href="#">Kenya election hate speech</a> river.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> invited <a href="/markup/river">Juliana Rotich</a> to collaborate on the <a href="#">Kenya election hate speech</a> bucket.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> started following the <a href="#">Kenya election hate speech</a> river.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Brian Muita</a> started following the <a href="#">Kenya election hate speech</a> bucket.</h2>
			</div>
		</article>
		
		<article class="news-feed-item cf">
			<div class="item-type">
				<a href="#" class="avatar-wrap"><img src="https://si0.twimg.com/profile_images/2525445853/TweetLandPhoto_reasonably_small.jpg" /></a>
			</div>
			<div class="item-summary">
				<span class="timestamp">3 hours ago</span>
				<h2><a href="/markup/river">Juliana Rotich</a> invited you to collaborate on the <a href="#">Kenya election hate speech</a> bucket.</h2>
				<div class="item-actions">
					<a href="#" class="button-white"><i class="icon-checkmark"></i>Accept</a>
					<a href="#" class="button-white">Ignore</a>
				</div>
			</div>
		</article>
			
		-->
	</div>
</div>

<?php echo $activity_stream; ?>
