<?php require_once('bridge.php'); ?>
<center>
	<div class="titlewrapper">
		 <div class="theme-default">
			<div id="slider" class="nivoSlider">
				<img src="themes\<?php echo $theme; ?>\imgs\toystory.jpg" data-thumb="themes\<?php echo $theme; ?>\imgs\toystory.jpg" alt="" data-transition="slideInLeft" />
				<img src="themes\<?php echo $theme; ?>\imgs\up.jpg" data-thumb="themes\<?php echo $theme; ?>\imgs\up.jpg" alt="" data-transition="slideInLeft" />
				<img src="themes\<?php echo $theme; ?>\imgs\nemo.jpg" data-thumb="themes\<?php echo $theme; ?>\imgs\nemo.jpg" alt="" data-transition="slideInLeft" />
			</div>
		</div>

		<script type="text/javascript" src="themes\<?php echo $theme; ?>\js\jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="themes\<?php echo $theme; ?>\js\jquery.nivo.slider.js"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>
	</div>
</center>
<hr class="hr" noshade color="#FF7F00">