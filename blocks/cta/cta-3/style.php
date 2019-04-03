#<?php echo $id; ?> .uk-heading-primary{
	font-size : <?php echo $settings['title_size'];?>px;
	color : <?php echo $styles['title_color']?>;
}
#<?php echo $id; ?> .uk-text-lead{
	color : <?php echo $styles['desc_color'];?>;
	font-size : <?php echo $settings['desc_size'];?>px;
}

#<?php echo $id; ?> .uk-button-primary{
	font-size : <?php echo $settings['button_font_size'];?>px;
	background: <?php echo $styles['button_bg_color'];?>;
	border: 1px solid <?php echo $styles['button_border_color'];?>;
	color : <?php echo $styles['button_text_color'];?>;
	text-transform:<?php echo $settings['button_transformation'];?>
}
#<?php echo $id; ?> .uk-button-primary:hover{
	background : <?php echo $styles['button_text_color'];?>;
	color : <?php echo $styles['button_bg_color'];?>;
	border-color : <?php echo $styles['button_bg_color'];?>;
}

#<?php echo $id; ?> .uk-overlay-primary{
	background: <?php echo $styles['overlay_color']?>;
}
#<?php echo $id; ?> .uk-background-default{
	color:<?php echo $styles['items_text_color']?>;
	background-color:<?php echo $styles['items_bg_color']?>;
    border: 1px solid <?php echo $styles['items_border_color']?>;
    border-radius: 10px;
    cursor:pointer;

}
#<?php echo $id; ?> .uk-background-default h3{
	font-size:<?php echo $settings['items_font_size'];?>px;
}
#<?php echo $id; ?> .uk-background-default a{
	color:<?php echo $styles['items_text_color']?>;
}
#<?php echo $id; ?> .uk-background-default:hover a{
	color:<?php echo $styles['button_bg_color']?>;
	text-decoration:none;
}

@media(max-width:768px){
	#<?php echo $id?> .uk-heading-primary{
		font-size : <?php echo ($settings['title_size']/1.5)?>px;
	}
	#<?php echo $id?> .links{
		margin-left:30px !important;
	}
}