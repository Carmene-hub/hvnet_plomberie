<?php
include('./connect.php');


if(isset($_POST['email'])){ 
    
  $insertion = $conn->prepare('INSERT INTO abonnement VALUES(NULL, :email)');
  $insertion->bindValue(':email',$_POST['email']);
  $verification=$insertion->execute();
  if($verification){
        echo "Abonnement reussie";
        header('Location: ./index.php');
  }else{
        echo "Echec de l'abonnement";
  }

}else{
  echo "Une variable n'est pas declaree et ou est null";
}

?>