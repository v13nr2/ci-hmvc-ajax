<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo base_url('data/news')?>'>Konten</a> |
		<a href='<?php echo base_url('data/kategori_berita')?>'>Kategori Berita</a> |
		<a href='<?php echo base_url('data/album')?>'>Album</a> |
		<a href='<?php echo base_url('data/banner')?>'>Banner</a> |
		<a href='<?php echo base_url('data/banner_samping')?>'>Banner Samping</a> |
		<a href='<?php echo base_url('data/offers')?>'>Keunggulan</a> |
		<a href='<?php echo base_url('data/sosmed')?>'>Link Sosmed</a> |
		<a href='<?php echo base_url('data/chat')?>'>Chat</a>  |
		<a href='<?php echo base_url('data/config')?>'>Konfig</a> 
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
