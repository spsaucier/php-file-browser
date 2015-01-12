<?php
include("password_protect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>sixstepsrecords Media</title>


	<!-- Include our stylesheet -->
	<link href="assets/css/styles.css" rel="stylesheet"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="volume">

	<header>
		<div class="content">
			<h1>sixstepsrecords - Media</h1>
			
			<!-- Insert Content BELOW -->
			


			<!-- Insert Content ABOVE -->

		</div>
	</header>

	<div class="filemanager">

		<div class="upload">
			<input type="hidden" name="directory" id="directory" />
		    <input type="file" name="file" id="file" style="display: none;"/>
		    <button id="uploadButton"><i class="fa fa-cloud-upload"></i></button>
		    <div class="filename-drawer">
			    <button id="submitFile"><span id="filename"></span> <i class="fa fa-arrow-circle-o-right"></i></button>
		    </div>
		</div>

		<div class="search">
			<input type="search" placeholder="Find a file.." />
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>
		<div class="loading">
			<img src="assets/img/loading.gif" />
		</div>

	</div>

	<!-- Include our script files -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>