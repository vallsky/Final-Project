	
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTEM INFORMASI ACCOUNTING </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
		  <?php
	
	if (isset($_GET['i']))
	{
		if ($_GET['i'] == 'gagal')
		{
			print 'Masukan User Dan Password';
		}
		elseif ($_GET['i'] == 'salah')
		{
			print 'User Salah/Password';
		}
		elseif ($_GET['i'] == 'login')
		{
			print 'Login Dahulu';
		}
		elseif ($_GET['i'] == 'ps')
		{
			print 'password not match';
		}
	}
?>
            <form method="post" action="control/login_control.php" >
              <h1>WELCOME</h1>
			  
              <div>
                <input type="text" class="form-control" placeholder="Username" name="id" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pas" required="" />
              </div>
              
					
          </section>
		  <input  class="btn btn-default submit" type="submit" value="Log in"/> 
                
            </form>
        </div>

       
      </div>
    </div>
  </body>

       
	  

