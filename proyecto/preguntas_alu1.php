<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/steps/jquery.steps.js"></script>
    </head>
    <body>
        <script>
            $("#example-basic").steps({
			    headerTag: "h3",
			    bodyTag: "section",
			    transitionEffect: "slideLeft",
			    autoFocus: true
			});
        </script>
        
		<div id="example-basic">
		   <?php 

		   extract($_REQUEST);

		   echo $valor;
		   ?>
		</div>
    </body>
</html>