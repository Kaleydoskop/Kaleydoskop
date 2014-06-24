
<!DOCTYPE html>
<html>
  <head>
    <title>Kaleydoskop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="" id="status">
    
  </div>

      <div  class="container">
        <div  class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kaleydeskop</a>
        </div>
        <div class="navbar-collapse collapse">


<?php include ( "./inc/connect.inc.php");
              // USER LOGIN
  if (isset($_POST["email_login"]) && isset($_POST["password_login"])) {
    $email_login = preg_replace("#[a-zA-Z0-9ğüşiöç]#i", '', $_POST["email_login"]); //burdaki harfler dışındakiler filteli
    $password_login = preg_replace("#[a-zA-Z0-9ğüşiçö]#i", '', $_POST["password_login"]);
    $password_login_md5 = md5($password_login);
  $sql = mysql_query("SELECT id FROM accounts WHERE email='$email_login' AND password='$password_login_md5' LIMIT 1");
    $userCount = mysql_num_rows($sql);
    if ($userCount == 1) {
      while ($row = mysql_fetch_array($sql)) {
        $id = $row["id"];
       }
        $_SESSION["email_login"] = $email_login;
        $_SESSION["password_login"] = $password_login;
        header("location: home.php");
        exit();
      }
            else {
        echo 'Lütfen doğru email/şifre giriniz!';
        exit();
       }
    }
?>
          <form action="index.php" method="POST" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" name="email_login" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password_login" placeholder="Şifre" class="form-control">
            </div>
            <input type="submit" name="login" value="Giriş" class="btn btn-primary">
          </form>
            </div><!--/.navbar-collapse -->
      </div>
    </div>
    

    <div class="jumbotron" >
    
    

      <div class="container">

        <h1>Kitaplarını Paylaş!</h1>


        <div class="row">
        <p class="col-md-6">Yüzlerce Kaleydoscope kullanıcısıyla kitaplarını paylaş. Onların da sana verecek kitabı vardır.</p>
        <p class="col-md-1"></p>
        <div class="container col-md-5">
          <!--/ REGISTER -->
      		<form id="kayitol" class="form-signin pull-right" role="form">
      	 	 <h2 class="form-signin-heading">Bize Katıl</h2>
      		 <input type="name" name="name" class="form-control" size="25" placeholder="Adınız" required autofocus>
     		   <input type="surname" name="surname"  class="form-control" size="25" placeholder="Soyadınız" required>
           <input type="email" name="email" class="form-control" size="25" placeholder="Email" required>
           <input type="password" name="password" class="form-control" size="25" placeholder="Şifre" required>
      	 	 <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Kaydol</button>
   		   </form>
   		    <script type="text/javascript">
   		$('#kayitol').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'kaydol.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                $('#status').html(data.msg);
                                $('#kayitol')[0].reset()
                        }
                });
        });
   			</script>

   
        </div>
    	</div>
      </div>
    
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
        <hr>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->
</html>