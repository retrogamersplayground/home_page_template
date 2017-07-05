<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Welcome to ? <?php echo $_SESSION['username']; ?></h2>
				<p><a href='logout.php'>Logout</a></p>
				<hr>

		</div>
	</div>


</div>
<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
  
  
  
  
<style>


  a:link {color: #212121; text-decoration: none; }
a:visited {color: #212121; text-decoration: none; }
    a:hover {color: #5dfc0a; text-decoration: none; }

    
   </style>
 </head>
  

    
<?php include_once("template_navigation.php");?>
  



 <div class="container-fluid background-color text-center">
<div class="container-fluid divider-color text-primary-color">
  


      
        

    
    
    
       
    </div>  
    
 <body> 

  <div class="container-fluid inline-block primary-color text-primary-color"> 
   <header>
     </br>  
     
     <h1>  Ruzi</h1>
   <img class="largest-image thick-gray-border" src=" https://s5.postimg.org/4fmpazifb/IMG_0674.jpg  "></br></img>
   <h2>Taking the Distance Out of Dining</h2>
   </header>
   </div>


</div>
</br>
<?php include_once("template_footer.php");?>
   </div>
    </body>
  </div>
</html>