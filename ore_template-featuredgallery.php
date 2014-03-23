<?php
// Nested inside a div and list for slider
?>
<div class="slider--product">
	<ul>

<?php
// Getting ready for looping. Anticipating maximum amount of images.
$i = 1;
$max_images = 5;

while ($i <= $max_images) {
	$i_str = (string)$i;
	$image = get_field('featured_' . $i_str);
	if( !empty($image) ) {

		// We have an image! Set vars to target attributes
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];

		// Set sizes
		// Might not need this as I use picturefill..
		//$size = 'thumbnail';
		//$thumb = $image['sizes'][ $size ];
		//$width = $image['sizes'][ $size . '-width' ];
		//$height = $image['sizes'][ $size . '-height' ];

		// Make it a list item, for the slider
		?><li><?php

			// Picturefill markup starts.
			?>
		    <span data-picture data-alt="<?php echo $alt ?>" title="<?php echo $title; ?>">
		        <span data-src="<?php echo $image['sizes'][ 'small' ]?>"></span>
		        <span data-src="<?php echo $image['sizes'][ 'medium' ]?>" 	data-media="(min-device-pixel-ratio: 2.0)"></span>
		        <span data-src="<?php echo $image['sizes'][ 'medium' ]?>"	data-media="(min-width: 480px)"></span>
		        <span data-src="<?php echo $image['sizes'][ 'large' ]?>"	data-media="(min-width: 480px) and (min-device-pixel-ratio: 2.0)"></span>
		        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
		        <noscript>
		            <img src="<?php echo $image['sizes'][ 'small' ]?>" alt="<?php echo $alt ?>">
		        </noscript>
		    </span>
  		</li><?php

	}
	$i++;
}

/*
						
 <span data-src="<?php echo $image['sizes'][ 'large' ]?>"	data-media="(min-width: 800px)"></span>
		        <span data-src="large_x2.jpg"      data-media="(min-width: 800px) and (min-device-pixel-ratio: 2.0)"></span>
		        <span data-src="extralarge.jpg"    data-media="(min-width: 1000px)"></span>
		        <span data-src="extralarge_x2.jpg" data-media="(min-width: 1000px) and (min-device-pixel-ratio: 2.0)"></span>
						<


						a href="<?php echo $thumb_large_url; ?>" class="img-text__container  img-container">
							<img class="product__img" src="<?php echo $thumb_url; ?>" />
							<h1 class="h2  img-text__title  img-text__title--product"><span class="img-text__bg"><?php the_title(); ?></span></h1>
						</a>



	if( $caption ): ?>
		<div class="wp-caption">
	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
 		</a>
 
	<?php if( $caption ): ?>
		<p class="wp-caption-text"><?php echo $caption; ?></p>
	</div>
	<?php endif; ?>

<?php endif; ?>









*/
?>
</ul>
</div>