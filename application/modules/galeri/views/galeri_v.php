<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- This site is optimized with the Yoast SEO plugin v4.8 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="Simple image gallery using php codeigniter and ajax, free source code."/>
	<meta name="robots" content="noodp"/>
	<link rel="canonical" href="http://webrocom.net/codeigniter-image-gallery-using-ajax/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Codeigniter image gallery using ajax - WEBROCOM" />
	<meta property="og:description" content="Simple image gallery using php codeigniter and ajax, free source code." />
	<meta property="og:url" content="http://webrocom.net/codeigniter-image-gallery-using-ajax/" />
	<meta property="og:site_name" content="WEBROCOM" />
	<meta property="article:publisher" content="https://www.facebook.com/webrocom.learn/" />
	<meta property="article:tag" content="ajax" />
	<meta property="article:tag" content="codeigniter" />
	<meta property="article:tag" content="jquery" />
	<meta property="article:tag" content="php" />
	<meta property="article:section" content="Ajax" />
	<meta property="article:published_time" content="2016-09-30T03:07:20+00:00" />
	<meta property="article:modified_time" content="2017-05-24T04:43:09+00:00" />
	<meta property="og:updated_time" content="2017-05-24T04:43:09+00:00" />
	<meta property="og:image" content="http://webrocom.net/wp-content/uploads/2016/09/ci-512x320.png" />
	<meta property="og:image:width" content="512" />
	<meta property="og:image:height" content="320" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Simple image gallery using php codeigniter and ajax, free source code." />
	<meta name="twitter:title" content="Codeigniter image gallery using ajax - WEBROCOM" />
	<meta name="twitter:site" content="@webrocom" />
	<meta name="twitter:image" content="http://webrocom.net/wp-content/uploads/2016/09/ci-512x320.png" />
	<meta name="twitter:creator" content="@webrocom" />
	<!-- / Yoast SEO plugin. -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/Gallery/css/blueimp-gallery.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="<?php echo base_url() ?>assets/Gallery/js/blueimp-gallery.min.js"></script>

	<title>CI Image Gallery</title>
	<style>
		.dz-preview{display: none}
		#loader{position: fixed; width: 100%; height: 100%;    z-index: 999;  padding: 20% 45%; background: rgba(0,0,0,0.5); display: none;}
	</style>
</head>
<body>
<div id="loader">
	<div>
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
</div>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/image/retina.png" width="30">ebrocom</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Codeigniter ajax multiple image upload gallery demo.</a>
			</li>
			<li class="nav-item active">
				<a style="color: dodgerblue" class="nav-link" href="http://webrocom.net/codeigniter-image-gallery-using-ajax/">
				Visit Article and Download Source Code</a>
			</li>

	</div>
</nav>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">

			<div id="myAlert"></div>

			<div id="links" style="margin-top: 25px;">
				<?php foreach ($images as $key => $image): ?>
				<a href="<?php echo $imagePath.$image->path ?>" title="<?php echo $imagePath ?>">
					<img src="<?php echo $imagePath.$image->thumb_path ?>" alt="<?php echo $imagePath ?>">
				</a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-md-4">
			<div id="dropZone" style="width: 100%; height: 200px; background: #f5f5f5; margin-top: 25px; border: 2px dotted; border-radius: 4px; text-align: center">
				<h6 style="margin-top: 20%">Drag and Drop</h6>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<p>Click on image for preview. <br> Press esc for exit preview.</p>
			<a onclick="return confirm('Are you sure ?')" href="<?php echo base_url() ?>index.php/galeri/reset">Reset gallery</a>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<p>
				Learn more tutorials at <a href="webrocom.net">webrocom.net</a>

			</p>
		</div>
	</div>

</div>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>

<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>


<script>
	window.baseUrl = '<?php echo base_url() ?>';
	$(document).ready(function () {

		var msg = localStorage.getItem('msg');
		var Aclass = localStorage.getItem('class');

		if(msg != null){
			myAlert(Aclass, msg);
		}

		localStorage.clear();

		$("div#dropZone").dropzone({
			url: baseUrl+'index.php/galeri/upload',
			init: function () {
				this.on("complete", function (file) {
					if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
						var response = JSON.parse(file.xhr.response);
						if(response.code == 1){
							localStorage.setItem('msg' , 'Image uploaded successfully');
							localStorage.setItem('class' , 'alert-success');
						}else{
							localStorage.setItem('msg' , response.data.error);
							localStorage.setItem('class' , 'alert-danger');
						}
						loadContent('galeri');
					}
				});
				this.on("processing", function (file) {
					console.log('uploading...');
					$("#loader").show();
				});
				this.on("error", function (file) {
					console.log('error...');
					localStorage.setItem('msg' , 'Sorry Some images unable to  upload');
					localStorage.setItem('class' , 'alert-danger');
					window.location.reload();
				});
				this.on("completemultiple", function (file) {
					console.log('complete all');
					//window.location.reload();
				});


			}
		});


		document.getElementById('links').onclick = function (event) {
			event = event || window.event;
			var target = event.target || event.srcElement,
				link = target.src ? target.parentNode : target,
				options = {index: link, event: event},
				links = this.getElementsByTagName('a');
			blueimp.Gallery(links, options);
		};

		$( document ).ajaxComplete(function( event, xhr, settings ) {
			console.log(settings);
		});

	});



	function myAlert(Aclass, text) {
		html = '<div class="alert ' + Aclass + ' alert-dismissible fade show" role="alert" style="margin-top: 25px">'+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span>'+
				'</button>'+
				''+text+'.'+
				'</div>';
		$("#myAlert").html(html).show();
	}
</script>
</body>
</html>