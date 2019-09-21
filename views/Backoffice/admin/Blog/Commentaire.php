
<?php
  require_once "../../../../entities/class_post.php";
  require_once "../../../../entities/class_commentaire.php";

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=kiam_consulting", "root", "");
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET')
{
 $data = array(
  ':date'   => "%" . $_GET['date'] . "%",
  ':username'   => "%" . $_GET['username'] . "%",
  ':commentaire'   => "%" . $_GET['commentaire'] . "%",
  ':titrePost'   => "%" . $_GET['titrePost'] . "%"
 );
 $query = "SELECT commentaire.id,commentaire.date,commentaire.commentaire,post.titre,client.username FROM commentaire INNER JOIN post ON commentaire.idPost= post.id INNER JOIN client on commentaire.idClient = client.id  where commentaire.date like :date and client.username like :username and commentaire.commentaire like :commentaire and post.titre like :titrePost  order by commentaire.id desc";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'date'  => $row['date'],
   'username'   =>  $row['username'],
   "commentaire"=>$row["commentaire"],
   "titrePost"=>$row["titre"]

  );
//    print_r($output);
 }
 header("Content-Type: application/json");
 echo json_encode($output);
//    var_dump($output);
}
if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':date' => $_PUT['date'],
  ':Date' => $_PUT['Date']
 );
 $query = "UPDATE categorie SET date = :date, Date = :Date  WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}
if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM commentaire WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>
