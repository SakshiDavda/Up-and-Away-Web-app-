<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$("input").focus(function(){
        		$("input").addClass("focus");
      		});
 			$("input").blur(function(){
        		if($("input").val() == "")
        		$("input").removeClass("focus");
      		});
    	});
    </script>

    <style type="text/css">
      *{
		  margin: 0;
		  padding: 0;
		  text-decoration: none;
		  font-family: montserrat;
		  box-sizing: border-box;
		}

		body{
		  min-height: 100vh;
		}

		.login-form{
		  width: 360px;
		  background: #f1f1f1;
		  height: 480px;
		  padding: 80px 40px;
		  border-radius: 10px;
		  position: absolute;
		  left: 50%;
		  top: 50%;
		  transform: translate(-50%,-50%);
		}

		.login-form h1{
		  text-align: center;
		  margin-bottom: 60px;
		}

		.txtb{
		  border-bottom: 2px solid #adadad;
		  position: relative;
		  margin: 30px 0;
		}

		.txtb input{
		  font-size: 15px;
		  color: #333;
		  border: none;
		  width: 100%;
		  outline: none;
		  background: none;
		  padding: 0 5px;
		  height: 40px;
		}

		.txtb span::before{
		  content: attr(data-placeholder);
		  position: absolute;
		  top: 50%;
		  left: 5px;
		  color: #adadad;
		  transform: translateY(-50%);
		  z-index: -1;
		  transition: .5s;
		}

		.logbtn{
		  display: block;
		  width: 100%;
		  height: 50px;
		  border: none;
		  background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
		  background-size: 200%;
		  color: #fff;
		  outline: none;
		  cursor: pointer;
		  transition: .5s;
		}

		.logbtn:hover{
		  background-position:bottom right;
		}

		.bottom-text{
		  margin-top: 60px;
		  text-align: center;
		  font-size: 13px;
		}

		.focus{
			border:3px solid black;
		}

    </style>
  </head>
  <body>
  	<header>
        <nav>
            <ul>
                <li><a href="index.html"><img src="img/logo.jpg" alt="Up-and-Away-logo"  /></a></li>
            </ul>
            <ul>
            	<li><a href="index.html"><h3>&lt;&lt; Back to home</h3></a></li>
            </ul>
        </nav>
    </header>
	<div>
		<?php
			
		?>
	</div>
	<div>
      <form action="login.php" class="login-form" method="post">
        <h1>SignUp</h1>
        
        <div class="txtb">
          <input type="email" name="email" placeholder="E-mail" id="email" required>
        </div>

        <div class="txtb">
          <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        

        <input type="submit" name="create" class="logbtn" value="SignUp" id="register">

        <div class="bottom-text">
          Already have an account? <a href="login.php">LogIn</a>
        </div>
      </form></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();

			if(valid){

			var email    = $('#email').val();
			var password = $('#password').val();

				e.preventDefault();

				$.ajax({
					type:'POST',
					url : 'process.php',
					data: {email : email, password : password},
					success: function(data){
						Swal.fire({
							'title' : 'Successful',
							'text' : data,
							'type' : 'success'
		    			})
		    			setTimeout(' window.location.href =  "login.php"', 1000);
					},
					error: function(data){
						Swal.fire({
							'title' : 'Error!',
							'text' : 'Error occured while Signing Up',
							'type' : 'error'
		    			})
					}

				});

			}else{
				
			}
		});
		
	});
</script>	
</body>
</html>
