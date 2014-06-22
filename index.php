<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Şifre" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Giriş</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
    


    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron" >
    
    

      <div class="container">

        <h1>Kitaplarını Paylaş!</h1>


        <div class="row">
        <p class="col-md-6">Binlerce Kaleydoscope kullanıcısıyla kitaplarını paylaş. Onların da sana verecek kitabı vardır.</p>
        <p class="col-md-1"></p>
        <div class="container col-md-5">
      		<form id="kayitol" class="form-signin pull-right" role="form">
      	 	 <h2 class="form-signin-heading">Bize Katıl</h2>
      		 <input type="name" name="name" class="form-control" placeholder="Adınız" required autofocus>
     		   <input type="surname" name="surname"  class="form-control" placeholder="Soyadınız" required>
           <input type="email" name="email" class="form-control" placeholder="Email" required>
           <input type="password" name="password" class="form-control" placeholder="Şifre" required>
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