<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Url Shortening Service</title>

	<style type="text/css">
	#con1{
		width:300px;
		height: 150px;
		background-color: #83C9F4;
		text-align: center;
		margin: 0px auto;
	}
	#con2{
		width:300px;
		height: 50px;
		background-color: #D9F0FF;
		text-align: center;
		margin: 0px auto;
	}
	#inputUrl{
		width:270px;
		margin: 0px auto;
	}
	</style>
<script type="text/javascript">
   function openURL(x){
   	window.location.href = x;
		    return false;
      }


</script>


</head>
<body>
<center><h1> Url Shortening</h1></center>
<div id="container">
	<div id="con1">
		<?php

			$this->load->helper('form');

			echo form_open();
			echo form_label('URL to Shorten', 'url');
			echo ('<input type="text" class="form-control" id="inputUrl" name="url" onchange="this.form.urlhidden.value=this.value;);"><br/>');
			echo ('<input type="submit" name="shorty" id="submitForm" class="btn btn-default">');
			
		?>
	</div>
<input type="hidden" name="urlhidden" id="hiddenURL">
	<div id="con2">
			<?php
				session_start();
				if (isset($_POST['url'])) {
					$_SESSION['urlget'] = $_POST['url'];
				}
				if(isset($short_url))
					{
						echo '<br/><a href="#" onclick="openURL(\''.$_SESSION['urlget'].'\');" class="shorty_url">'.base_url().$short_url.'</a>';
					}

				if(isset($error))
					{
						echo '<div class="errors">'.$error.'</div>';
					}
				echo form_close();
			?>		
	</div>
</div>


</body>
</html>