<?php session_start(); ?>  
<html>  
     <head>    
   <title>Home</title>  
     </head>  
      <body>  
  
            <?php if(isset($_SESSION["YES"])){ ?>  
                  You are loged in ! <br/>  
                <ul> 
		 <li><a href="goout.php">Logged out</a></li> 
		</ul>
            <?php }else{ ?>  
                  You are not logged in , now !  
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
