<?php 
	foreach($config as $row){ 
		$judulweb = $row["judul_web"];
		$telpon = $row["nomor_telepon"];
		$email = $row["email"];
	}
?>
<?php ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kid Template for Children and child.">
    <meta name="keywords" content="child,children,school,childcare,colorful">
    <meta name="author" content="2goodtheme">

    <title><?php echo $judulweb;?></title>
    <!-- Swiper Slider CSS -->
    <link href="<?php echo base_url();?>/assets/kid/css/swiper.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
    <link href="<?php echo base_url();?>/assets/kid/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="<?php echo base_url();?>/assets/kid/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="<?php echo base_url();?>/assets/kid/css/responsive.css" rel="stylesheet">
  </head>

  <body>
