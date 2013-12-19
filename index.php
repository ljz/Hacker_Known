<?php session_start(); ?>  
<html>  
     <head>    
   <title>Home</title>  
     </head>  
      <body>  
  
            <?php if(isset($_SESSION["EMAIL"])){ ?>  
                <script> alert("success !")</script>  

                <ul>
			 
		 <li><a href="goout.php">Logged out</a></li> 
		 <li><a href="profile.php">profile</a></li> 
		</ul>
            <?php }else{ ?>  
                <script> alert("something is wrong !!!")</script>  
            <?//php } ?>  
            <br/>  
            <p>Demo</p>  
                <ul>  
                    <li><a href="login.php">Login</a></li>  
                    <li><a href="regist.php">regist</a></li>  
                </ul>  
            <?php } ?>  
      </body>  
</html>  
