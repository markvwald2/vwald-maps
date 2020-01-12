<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>File Portal</title>

		<style type="text/css">

		h1 {
			font-size:16px;
			font-family:Verdana, Geneva, sans-serif;
			color:#777;
		}

		.text {
			font-size: 14px;
			font-family:Verdana, Geneva, sans-serif;
			color:white;
		}

		body {
			background-color: #333;
		}

		A {
			text-decoration:none
		}

	/*
	------------------------------- 
	Header
	------------------------------- 
	*/   

	#header{
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 46px;
		background-image: url('http://www.cartifact.com/images/gfx/bg_header.png');
		background-repeat: repeat-x;
		padding: 8px 14px 13px 14px;
		z-index: 10;
		min-width: 940px;
		color: #fff;
		font-size: 12px;
	}

	#header a{
		color: #fff;
	}

	#cartifact_logo img{
		margin-top: -3px;
	}

	#header span{
		width: 150px;
		display: block;
		float: left;
	}

	#header_center{
		width: 100%;
		display: inline;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}

	/*
	-------------------------------  		
	Footer
	-------------------------------  
	*/   

	#footer{
		text-align: center;
		position: absolute;
		bottom: 0;
		height: 22px;
		left: 0;
		right: 0;
		background-image: url('http://www.cartifact.com/images/gfx/bg_footer.png');
		background-repeat: repeat-x;
		padding: 14px;
		z-index: 16;
	}

	#footer img{
		margin-top: 1px;
	}

	#footer div {
		display: inline;
	}

	</style>


</head>
<body link="white" vlink="white" alink="white">
		<br />
		<br />
		<br />
		<br />
		<br />
	<table border="0" width="1024" align="center">
		<tr>
			<td>
				<h1>Click filenames to download:<br /></h1>
				<div class="text">

					<?php
				$files = array();

				$dh = opendir( '.' );
				while( false !== ( $file = readdir($dh) ) ){
					if ($file != "." && $file != ".." && $file != "index.php")

					{$files[] = $file;
					}
				}

				natsort( $files );
				foreach( $files as $filename )
					echo "<a href='".($filename)."'>$filename</a><br><br>";

				?>
				</div>
			</td>
		</tr>
	</table>

</body>
</html>