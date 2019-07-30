<?php 
include('header.php');?>
<title>phpzag.com : Demo Drag and Drop File Upload using jQuery and PHP</title>
<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
<script type="text/javascript" src="js/dropzone.js"></script>
<?php include('container.php');?>
<div class="container">
	<h2>Example: Drag and Drop File Upload using jQuery and PHP</h2>	
	<div class="file_upload">
		<form action="file_upload.php" class="dropzone">
			<div class="dz-message needsclick">
				<strong>Drop files here or click to upload.</strong><br />
				<span class="note needsclick">(This is just a demo. The selected files are <strong>not</strong> actually uploaded.)</span>
			</div>
		</form>		
	</div>		
	<div style="margin:10px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/drag-and-drop-file-upload-using-jquery-and-php/" title="">Back to Tutorial</a>			
	</div>		
</div>
<?php include('footer.php');?>