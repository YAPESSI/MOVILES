<!DOCTYPE html>
<html lang="es">
   <head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Demos and Documentation</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>
	<script type="js/script.js"></script>
</head> 
<body>
		<div data-role="page">
	<div data-role="header">
	<h1>Actualizar foto</h1>
	<a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
	<a href="lciudad.php" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>
	<div data-role="content">
				<form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
				<input type="text" name="nc" value="<?php echo $nc;?>" />
				<div>
					<div><label for="image_file">Please select image file</label></div>
					<div><input type="file" name="image_file" id="image_file" onchange="fileselected();"/></div>
				</div>
				<div>
					<input type="button" value="upload" onclick="starUploading" />
				</div>
				<div id="fileinfo">
					<div id="filename"></div>
					<div id="filesize"></div>
					<div id="filetype"></div>
					<div id="filedim"></div>
				</div>
				<div id="error">you should select valid image files only</div>
				<div id="error2">an error ocurred while uploading the file</div>
				<div id="abort">the upload has been canceled by the user</div>
				<div id="warnsize">your file i very big</div>
				
				<div id="progress_info">
					<div id="progress"></div>
					<div id="progress_percent">&nbsp;</div>
				    <div id="clear_both"></div>
				<div>
					<div id="speed">&nbsp;</div>
					<div id="remaining">&nbsp;</div>
					<div id="b_transfered">&nbsp;</div>
					<div class="clear_both"></div>
				  </div>
			    <div id="upload_response"></div>
		      </div>
			</form>
		
	</div>
	<div dara-role="footer">
			
</div>
</div>
</body>
</html>