<?php

include_once "class_post.php";

$method = $_SERVER['REQUEST_METHOD'];
$reponse="cela n'a pas marche";
if ($method == 'POST') {
    if ($operation = "inserer") {
        if (isset($_FILES["image"])) {
            list($fileName,$fileSize,$fileTmp)=array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["tmp_name"]);
            $temp=explode('.',$fileName);
            $fileExtension=strtolower(end($temp));
            $extensions=array("png","jpg","jpeg","bmp");
            if (in_array($fileExtension,$extensions)===false) {
                $reponse="extension de l'image pas prise en compte";
            }
            else if($fileSize> 2097152){
                 $reponse="le fichier est en surpoids maxi 2M0";
            }
            else {
                $post=new Post($Titre, $Date,$Contenu,$Categorie,$fileName,$auteur,$introduction);
                $reponse = Post::ajouter($post);
                move_uploaded_file($fileTmp,"../views/assets/Backoffice/image/".$fileName);

            }
         
    } else {
        # code...
    }

}
}

echo $reponse;
