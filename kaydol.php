<?php include("dbsettings.php");
class ajaxValidate {
 
        function formValidate() {



        $name = @$_POST["name"];
        $surname = @$_POST["surname"];
        $email = @$_POST["email"];
        $password = @$_POST["password"];

		$return = array();
		$email_kontrol = mysql_query("SELECT * FROM accounts WHERE email='{$email}'"); 
		$email_kontrol2 = mysql_num_rows($email_kontrol); 
		if($email_kontrol2>0)
		{$return['msg'] = '<div class="alert alert-danger fade in">
       <span class="close" data-dismiss="alert">&times;</span>
       	Bu e-mail kullanılıyor ! </div>';

       }else
       {
       		$password1 = hash("sha512",$password);	
       				mysql_query("INSERT INTO accounts(id,name,surname,email,password) values (null, '$name','$surname','$email','$password1')");
	
			$return['msg'] = '<div class="alert alert-success fade in">
       <span class="close" data-dismiss="alert">&times;</span>
       	Üye kaydın tamamlandı. Sağ taraftan giriş yapabilirsin! </div>';
       }
			
			return json_encode($return);
		
			
			





}
}


$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->formValidate();
?>
