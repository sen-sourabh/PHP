<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>videojs/video-js.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>videojs/video.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>videojs-resolution-switcher-master/lib/videojs-resolution-switcher.css">
	<script type="text/javascript" src="<?php echo base_url();?>videojs-resolution-switcher-master/lib/videojs-resolution-switcher.js"></script>
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>videojs/video-js.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>videojs/video.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	#uploadFile{
	    text-decoration:none;
	}
	#upload_f{
	    display:none
	}

	#myProgress {
	  width: 100%;
	  background-color: #ddd;
	}

	#myBar {
	  width: 0%;
	  height: 30px;
	  background-color: #4CAF50;
	  text-align: center;
	  line-height: 30px;
	  color: white;
	}

	</style>
</head>
<body>
	<!-- <video id="player" class="video-js vjs-default-skin"
       controls
       preload="none"
       autoplay
       loop
       muted
       width="640" height="360"
       poster="https://vjs.zencdn.net/v/oceans.png">
</video>
<script>
	var player = videojs('player', {
  plugins: {
    videoJsResolutionSwitcher: {
      default: 'low',
      dynamicLabel: true
    }
  }
});
player.updateSrc([
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 144,
    label: '144'
  },
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 240,
    label: '240'
  },
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 360,
    label: '360'
  },
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 480,
    label: '480'
  },
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 720,
    label: '720'
  },
  {
    src: 'https://vjs.zencdn.net/v/oceans.mp4',
    type: 'video/mp4',
    res: 1080,
    label: '1080'
  },
])
</script> -->
 <!-- <video class="video-js vjs-default-skin" width="1280" height="720" controls data-setup='{}'>
	<source src="<?php echo base_url();?>uploads/javascript.mp4" type="video/mp4">
		<p class="vjs-no-js">Javascript not supported</p>
</video> -->

<div id="container">
	<h1>CodeIgniter Plupload Chunk Uploading</h1>

	<div id="body">
		<p>Upload Big file chunk by chunk using Plupload.</p>

		
		<div id="container">
			<!-- <form method="post" id="upform"> -->
				<div class="form-group">
					<select id="cat" name="hello">
						<option value="hello">hello</option>
						<option value="hello1">hello1</option>
						<option value="hello2">hello2</option>
						<option value="hello4">hello4</option>
					</select>
				</div>
				<div class="form-group">
					
					<a id="uploadFile" name="uploadFile" href="javascript:;">Select file</a>
					<div id="open" style="display:none;">
						<div id="filelist">Your browser doesn't have Flashs, Silverlight or HTML5 support.</div>
						<div id="myProgress">
							  <div id="myBar"></div>
						</div>
					</div>
				</div>

				<!-- <div class="form-group">
					<input type="submit" name="upload" id="upload" onclick="demo();" class="btn btn-danger" value="Upload files"/>
				</div> -->	
			<!-- </form> -->
			
			<!-- <div class="form-group">
				<a id="uploadCancel" href="javascript:;" class="btn btn-danger">Upload Cancel</a>	
			</div>
 -->
		</div>
		<input type="hidden" id="file_ext" name="file_ext" value="<?=substr( md5( rand(10,100) ) , 0 ,10 )?>">
		<div id="console"></div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

<script type="text/javascript">
	BASE_URL = "<?php echo base_url();?>"
</script>

<script src="<?=base_url();?>test/public/js/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>test/public/js/application.js"></script>





</body>
</html>