<?php
	$uniqueID = get_sub_field('unique_id');
	$backgroundType = get_sub_field('background_type');
	$backgroundImageID = get_sub_field('background_image');
	if($backgroundImageID){
		$backgroundImage = wp_get_attachment_image_src($backgroundImageID, 'full');
	};
	$backgroundFixed = get_sub_field('background_fixed');
	$backgroundCover = get_sub_field('background_cover');
	$backgroundColor = get_sub_field('background_color');
	$hl_color = get_sub_field('headline_color');
	$text_color = get_sub_field('text_color');
	$topPadding = get_sub_field('top_padding');
	$bottomPadding = get_sub_field('bottom_padding');
?>

<?php if($backgroundType === 'image'){?>

	<style>
		div#wrap<?php echo $uniqueID; ?>{
			background-color:transparent;
			background-image:url('<?php echo $backgroundImage[0]; ?>');
			background-attachment: <?php if($backgroundFixed){?>fixed<?php }else{ ?>scroll<?php }; ?>;
			<?php if($backgroundCover){?>
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage[0]; ?>', sizingMethod='scale');
				-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage[0]; ?>', sizingMethod='scale')";
				background-repeat: no-repeat;
				background-position: center center;
			<?php } else{ ?>
				background-repeat: repeat;
				background-position: top center;
			<?php }; ?>
			color: <?php echo $text_color; ?>;
		}
		div#<?php echo $uniqueID; ?> .p-content{
			color: <?php echo $text_color; ?>;
		}
		div#<?php echo $uniqueID; ?> .p-title{
			color:<?php echo $hl_color;?>;
		}
	</style>

	<?php $opaque = get_sub_field('enable_color_overlay');?>
	<?php if($opaque){

		$opaqueHex = get_sub_field('opaque_overlay_color');
		$opaqueRGB = hex2rgb($opaqueHex);
		$opaqueAmount = get_sub_field('opacity_amount');
		?>
		<style>
			#wrap<?php echo $uniqueID; ?> .wrapper-inner{
				background-color:rgba(<?php echo $opaqueRGB[0]; ?>,<?php echo $opaqueRGB[1]; ?>,<?php echo $opaqueRGB[2]; ?>,0.<?php echo $opaqueAmount; ?>);
			}
		</style>

	<?php };?>
<?php }; ?>

<?php if($backgroundType === 'color'){?>

	<style>
		#wrap<?php echo $uniqueID; ?>{
			background-color:<?php echo $backgroundColor; ?>;
			color: <?php echo $text_color; ?>;
		};
	</style>

<?php };?>

		<?php if(get_sub_field('condense_wrapper')){?>
			<div class="container">
				<div class="row">
		<?php }; ?>

<div class="element-wrapper <?php echo $backgroundType; ?>" id="wrap<?php echo $uniqueID; ?>">

	<div class="wrapper-inner clearfix <?php echo $topPadding;?> <?php echo $bottomPadding; ?>">


