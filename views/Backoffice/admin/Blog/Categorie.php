
<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=kiam_consulting", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':titre'   => "%" . $_GET['titre'] . "%",
  ':Date'   => "%" . $_GET['Date'] . "%"
 );
 $query = "SELECT * FROM categorie WHERE titre LIKE :titre AND Date LIKE :Date ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
//print_r($result);
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'titre'  => $row['titre'],
   'Date'   => $row['Date'],
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
  ':titre' => $_PUT['titre'],
  ':Date' => $_PUT['Date']
 );
 $query = "UPDATE categorie SET titre = :titre, Date = :Date  WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM Categorie WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>
