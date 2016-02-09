<?php /*

	ACF Additional Content Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
?>

<section class="p-element custom_content clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<div class="row">

			<div class="items-col news-col col-sm-6">
				<h3 class="custom_title">Latest News</h3>
				<div class="custom_item row">
					<div class="custom_item_image col-xs-4">
						<a href="#">
							<img src="http://dummyimage.com/360" alt=""/>
						</a>
					</div>
					<div class="custom_item_content col-xs-8">
						<a href="#">
							<h3 class="custom_item_title">Residential Market Strategy Adopted by Saugatuck Council</h3>
						</a>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimdent, sunt in culpa qui of cia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="custom_item row">
					<div class="custom_item_image col-xs-4">
						<a href="#">
							<img src="http://dummyimage.com/360" alt=""/>
						</a>
					</div>
					<div class="custom_item_content col-xs-8">
						<a href="#">
							<h3 class="custom_item_title">MDA keynote speach well attended</h3>
						</a>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimdent, sunt in culpa qui of cia deserunt mollit anim id est laborum.
					</div>
				</div>
				<a class="custom_more" href="/news">SEE ALL NEWS <span class="glyphicon glyphicon-menu-right"></span></a>
			</div>

			<div class="items-col events-col col-sm-6">
				<h3 class="custom_title">Upcoming Events</h3>
				<div class="custom_item row">
					<div class="custom_item_image col-xs-4">
						<a href="#">
							<img src="http://dummyimage.com/360" alt=""/>
						</a>
					</div>
					<div class="custom_item_content col-xs-8">
						<time class="custom_item_time">April 1, 2016</time>
						<a href="#">
							<h3 class="custom_item_title">CNU Congress for New Urbanism</h3>
						</a>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimdent, sunt in culpa qui of cia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="custom_item row">
					<div class="custom_item_image col-xs-4">
						<a href="#">
							<img src="http://dummyimage.com/360" alt=""/>
						</a>
					</div>
					<div class="custom_item_content col-xs-8">
						<time class="custom_item_time">April 1, 2016</time>
						<a href="#">
							<h3 class="custom_item_title">MDA Summer Conference</h3>
						</a>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimdent, sunt in culpa qui of cia deserunt mollit anim id est laborum.
					</div>
				</div>
				<a class="custom_more" href="/events">SEE ALL EVENTS <span class="glyphicon glyphicon-menu-right"></span></a>
			</div>

		</div>

	</div>
	<div class="clearfix"></div>

</section>