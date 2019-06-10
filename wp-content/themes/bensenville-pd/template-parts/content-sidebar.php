<?php
	$winter_spring_title = get_field('winter_spring_title','option');
	$winter_spring_description = get_field('winter_spring_description','option');
	$winter_spring_background_image_array = get_field('winter_spring_background_image','option');
	$winter_spring_background_image = $winter_spring_background_image_array['sizes']['sidebar_image'];
	$winter_spring_link_section = get_field('winter_spring_link_section','option');	
	?>

<?php if(is_front_page()) {?>
<div class="box box-bg-gradient clearfix">
	<?php if(!empty($winter_spring_background_image)){?>
		<img src="<?php echo $winter_spring_background_image;?>" alt="">
	<?php } ?>
	<?php if(!empty($winter_spring_title) || !empty($winter_spring_description)){?>
	<div class="box-content">
		<?php if(!empty($winter_spring_title)){?><h5 class="box-title"><?php echo $winter_spring_title;?></h5><?php } ?>
		<?php if(!empty($winter_spring_description)){?><p><?php echo $winter_spring_description;?></p><?php } ?>
		<?php
		if(!empty($winter_spring_link_section)){
			foreach ($winter_spring_link_section as $winter_spring_link) {
			$winter_spring_link_title = $winter_spring_link['winter_spring_link_title'];
			$winter_spring_link_type = $winter_spring_link['winter_spring_link_type'];
			$winter_spring_internal_link = $winter_spring_link['winter_spring_internal_link'];
			$winter_spring_external_link = $winter_spring_link['winter_spring_external_link'];
		?>
		<?php if(!empty($winter_spring_link_title) && $winter_spring_link_type=='Internal' && !empty($winter_spring_internal_link)){?>
			<a href="<?php echo $winter_spring_internal_link;?>" class="box-link"><i class="fa fa-angle-right"></i> <?php echo $winter_spring_link_title;?></a>
		<?php } ?>
		<?php if(!empty($winter_spring_link_title) && $winter_spring_link_type=='External' && !empty($winter_spring_external_link)){?>
			<a href="<?php echo $winter_spring_external_link;?>" class="box-link" target="_blank"><i class="fa fa-angle-right"></i> <?php echo $winter_spring_link_title;?></a>
		<?php } ?>
		<?php 	}
		}
		?>
	</div>
	<?php } ?>
</div>
<?php }else{ ?>

<div class="box box-blue mar-t-50">
	<div class="d-flex box-history">
	<?php if(!empty($winter_spring_background_image)){?> <img src="<?php echo $winter_spring_background_image?>" alt=""> <?php } ?>
	<?php if(!empty($winter_spring_title)){?><h5 class="box-title"><?php echo $winter_spring_title;?></h5><?php } ?>
	</div>
	<?php if(!empty($winter_spring_description)){?>
	<div class="box-content">
		<?php if(!empty($winter_spring_description)){?><p><?php echo $winter_spring_description;?></p><?php } ?>
		<?php
			if(!empty($winter_spring_link_section)){
				foreach ($winter_spring_link_section as $winter_spring_link) {
				$winter_spring_link_title = $winter_spring_link['winter_spring_link_title'];
				$winter_spring_link_type = $winter_spring_link['winter_spring_link_type'];
				$winter_spring_internal_link = $winter_spring_link['winter_spring_internal_link'];
				$winter_spring_external_link = $winter_spring_link['winter_spring_external_link'];
			?>
			<?php if(!empty($winter_spring_link_title) && $winter_spring_link_type=='Internal' && !empty($winter_spring_internal_link)){?>
				<a href="<?php echo $winter_spring_internal_link;?>" class="box-link"><i class="fa fa-angle-right"></i> <?php echo $winter_spring_link_title;?></a>
			<?php } ?>
			<?php if(!empty($winter_spring_link_title) && $winter_spring_link_type=='External' && !empty($winter_spring_external_link)){?>
				<a href="<?php echo $winter_spring_external_link;?>" class="box-link" target="_blank"><i class="fa fa-angle-right"></i> <?php echo $winter_spring_link_title;?></a>
			<?php } ?>
			<?php 	} } ?>
	</div>
	<?php } ?>
</div>
<?php } ?>