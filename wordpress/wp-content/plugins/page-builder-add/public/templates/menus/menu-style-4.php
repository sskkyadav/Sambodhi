<?php if ( ! defined( 'ABSPATH' ) ) exit;?>
<style type="text/css">
<?php $thisMenuWidgetId = "#widget-$j-$Columni-".$row["rowID"]; ?>

<?php echo $thisMenuWidgetId; ?> <?php echo $thisMenuWidgetId; ?> #pb-nav-res-button > span{
	float: left;
	font-size: 60px;
	color:<?php echo $menuColor; ?>;
	cursor: pointer;
}
<?php echo $thisMenuWidgetId; ?> #pb-nav-res-button > img{
	float: left;
	width:100%;
	cursor: pointer;
}
<?php echo $thisMenuWidgetId; ?> #pb-nav-res-button{
	display: none;
	width:7%;
}
<?php echo $thisMenuWidgetId; ?> #lpp_logo{
	max-width: 300px;
    max-height: 80px;
    color:<?php echo $menuColor; ?>;
}

<?php echo $thisMenuWidgetId; ?> #lpp_logo img{
	max-width: 320px;
    max-height: 80px;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget{
	text-align: center;
	display: block;
	margin-left: 10%;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul{
	list-style:none;
	margin:0;
	padding:0
}
<?php echo $thisMenuWidgetId; ?> .custom-logo{
	max-width:380px;
	max-height: 95px;
}
<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul a{
	display:block;
	color:<?php echo $menuColor; ?>;
	text-decoration:none;
	font-size: 16px;
	padding:10px 25px;
	font-family:<?php echo $pbMenuFontFamily;  ?>,sans-serif;
	font-size: <?php echo $pbMenuFontSize;  ?>px ;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul li{
	position:relative;
	float:left;
	margin:0;
	padding:5px;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul li.current-menu-item{
	color: <?php echo $pbMenuFontHoverColor;  ?>;
	background-color: <?php echo $pbMenuFontHoverBgColor;  ?>;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul a:hover {
	border-bottom: 2px solid  <?php echo $pbMenuFontHoverColor; ?>;
	transition:border-bottom .1s ease-out;
	-webkit-transition:border-bottom .1s ease-out;
	color: <?php echo $pbMenuFontHoverColor;  ?> !important;
	background-color: <?php echo $pbMenuFontHoverBgColor;  ?>;
	border-radius: 3px;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul ul{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0;
	z-index: 999;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul ul li{
	float:none;
	width:200px;
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul ul a{
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul ul ul{
	top:0;
	left:100%
}

<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul li:hover > ul{
	display:block;
}

@media screen and (max-width: 1080px) {
	<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul a{
		font-size: 16px;
		padding:0 15px;
}

@media screen and (max-width: 780px) {

	<?php echo $thisMenuWidgetId; ?> #lpp_logo{ display: inline-block; width: 65%; }
	<?php echo $thisMenuWidgetId; ?> #lpp_logo img{ width:auto; max-height: 65px;}
	<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget{ display: none; }
	<?php echo $thisMenuWidgetId; ?> #pb-nav-res-button {display: inline-block; margin-left: 3%; width: 15%; margin-top: 2%; }

	<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget{
		text-align: left;
	}
	<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul li{
		position:relative;
		float: none;
		margin:0;
		padding:5px;
	}

	<?php echo $thisMenuWidgetId; ?> #lpb_menu_widget ul li{
		border-bottom: 1px solid rgba(0, 0, 0, 0.07);
	}

	<?php echo $thisMenuWidgetId; ?>{
		display: block !important;
	}

}
</style>
<?php
ob_start();
$widgetFALoadScripts = true;
?>
<div id="pb-nav-res-button">
 	<i class="fas fa-bars navBtnImg" style="font-size:40px;"></i>
 	<i class="fas fa-bars navBtnImgActive"  style="display: none; font-size:40px;" ></i>
</div>

<div id="lpp_logo">
<?php 
if (isset($data['pageOptions']['pageLogoUrl']) && !empty($data['pageOptions']['pageLogoUrl']) ) {
	$pageLogoUrl = $data['pageOptions']['pageLogoUrl'];
  echo("<img src='$pageLogoUrl' alt='Site Logo'>");
} else{

	if(!has_custom_logo()) {
		?>
	    <h1 style="font-size:2.5em !important;"><?php bloginfo('name'); ?></h1>
	    <?php
	} else{ the_custom_logo();  }
}
 ?>
 </div>


<?php
wp_nav_menu( array( 'menu' => $menuName, 'container_id' => 'lpb_menu_widget', 'menu_class' => 'pbp-navbar' ) );
$this_widget_menu = ob_get_contents();
ob_end_clean();

ob_start();
?>

	(function($){
		$('.navBtnImg').on('click',function(){
			$('#lpb_menu_widget').show();
			$('.navBtnImg').hide();
			$('.navBtnImgActive').show();
		});
		$('.navBtnImgActive').on('click',function(){
			$('#lpb_menu_widget').hide();
			$('.navBtnImgActive').hide();
			$('.navBtnImg').show();
		});
		var currWindowsize = $(window).width();
		$(window).resize(function() {
	  		var currWindowsize = $(window).width();
	  		if (currWindowsize > 780) {
			$('#pb-nav-res-button').hide();
			$('.navBtnImgActive').hide();
			$('#lpb_menu_widget').show();
		}else{
			$('#pb-nav-res-button').show();
			$('.navBtnImg').show();
			$('#lpb_menu_widget').hide();
		}
		});
	})(jQuery);

<?php
$this_widget_menu_script = ob_get_contents();
ob_end_clean();

array_push($POPBallWidgetsScriptsArray, $this_widget_menu_script);

?>