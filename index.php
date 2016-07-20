
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
	<div class="container">
		
	<div id="sw-content"></div>
	</div>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.get('getform.php',function(data){
				$('#sw-content').html(data);
			});

			$('#sw-content').on('submit', '#sw-form', function(responseText){
				$(this).ajaxSubmit({target:'#sw-content'});
				return false;
			});
		});
	</script>
</html>