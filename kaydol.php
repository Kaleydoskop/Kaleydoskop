<?php include("dbsettings.php");
class ajaxValidate {
 
        function formValidate() {



        $name = @$_POST["name"];
        $surname = @$_POST["surname"];
        $email = @$_POST["email"];
        $password = @$_POST["password"];
$return = array();
$return['msg'] = '<div class="alert alert-success fade in">
       <span class="close" data-dismiss="alert">&times;</span>
       	Üye kaydın tamamlandı. Sağ taraftan giriş yapabilirsin! </div>'.$name;





return json_encode($return);
}
}


$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->formValidate();
?>
