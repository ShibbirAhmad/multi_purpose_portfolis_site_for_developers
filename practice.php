


	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>this is practice page</title>
   	<script type="text/javascript" src="myjs/jquery-3.2.1.min.js"></script>


	</head>
	<body>
		
    <h2 class="hdemo" style="color:red"> Hello! dear user ,i am heading two </h2>

    <p class="pdemo" style="color:green">HI! i am paragraph of this page</p>

    <form action="" method="post">
    	
        
        <input type="text" name="name"/>
        <input type="email" name="email"/>
       

    </form>

    <script type="text/javascript">
    	
    $(document).ready(function(){
				
				  // $(selector).action();
				  
				//  $('.hidding').hide();
				
					$('.hdemo').click(function(){
					
					   $(this).hide()
				   
				});
				
				});


    </script>


		<script type="text/javascript" src="myjs/myscript.js"></script>
		</body>
	</html>