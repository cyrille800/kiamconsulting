
<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=kiam_consulting", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
  $data = array(
    ':date'   => "%" . $_GET['date'] . "%",
    ':contenu'   => "%" . $_GET['contenu'] . "%",
    ':Categorie'     => "%" . $_GET['Categorie'] . "%",
    ':titre'    => "%" . $_GET['titre'] . "%",
    ':auteur'    => "%" . $_GET['auteur'] . "%",
    ':image'    => "%" . $_GET['image'] . "%",
    ':introduction'    => "%" . $_GET['introduction'] . "%"
   );
   $query = "SELECT * FROM post WHERE date LIKE :date AND contenu LIKE :contenu AND Categorie LIKE :Categorie AND titre LIKE :titre  AND auteur LIKE :auteur AND image LIKE :image AND introduction LIKE :introduction ORDER BY id DESC";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
//print_r($result);
 foreach($result as $row)
 {
  $output[] = array(
   'id'  => $row['id'],   
   'date' => $row['date'],
   'contenu' => substr(htmlspecialchars($row['contenu']),0,40)."....",
   'Categorie' => $row['Categorie'],
   'titre'   => substr($row['titre'],0,15)."...",
   'auteur'   => $row['auteur'],
   'image'   => substr($row['image'],0,15)."...",
   'introduction'  => substr($row['introduction'],0,15)."..."
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}



if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM post WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

// if($method == 'PUT')
// {
//  parse_str(file_get_contents("php://input"), $_PUT);
//  $data = array(
//   ':id'   => $_PUT['idCommande'],
//   ':totalPaiement' => $_PUT['totalPaiement'],
//   ':etat' => $_PUT['etat'],
//   ':date'   => $_PUT['date'],
//   ':email'  => $_PUT['email']
//  );
//  $query = "
//  UPDATE commande 
//  SET totalPaiement = :totalPaiement, 
//  etat = :etat, 
//  date = :date, 
//  email = :email 
//  WHERE idCommande = :idCommande
//  ";
//  $statement = $connect->prepare($query);
//  $statement->execute($data);
// }



?>
