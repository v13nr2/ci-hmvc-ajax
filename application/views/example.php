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
		<a href='<?php echo base_url('data/banner')?>'>Banner</a> |
		<a href='<?php echo base_url('data/banner_samping')?>'>Banner Samping</a> |
		<a href='<?php echo base_url('data/chat')?>'>Chat</a>  |
		<a href='<?php echo base_url('data/config')?>'>Konfig</a> 
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
