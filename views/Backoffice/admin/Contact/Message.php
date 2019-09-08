
<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=kiam_consulting", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $data = array(
        ':message'   => "%" . $_GET['message'] . "%",
        ':mail'   => "%" . $_GET['mail'] . "%",
        ':nom'   => "%" . $_GET['nom'] . "%",
        ':prenom'   => "%" . $_GET['prenom'] . "%",
        ':repondu'   => "%" . $_GET['repondu'] . "%"
    );
    $query = "SELECT * FROM messagecontact WHERE message LIKE :message AND mail LIKE :mail AND nom LIKE :nom AND prenom LIKE :prenom AND repondu LIKE :repondu ORDER BY id DESC";

    $statement = $connect->prepare($query);
    $statement->execute($data);
    $result = $statement->fetchAll();
    //print_r($result);
    foreach ($result as $row) {
        $output[] = array(
            'id'    => $row['id'],
            'message'  => $row['message'],
            'mail'   => $row['mail'],
            'nom'   => $row['nom'],
            'prenom'   => $row['prenom'],
            'repondu'   => $row['repondu']
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
}

if ($method == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $query = "DELETE FROM messagecontact WHERE id = '" . $_DELETE["id"] . "'";
    $statement = $connect->prepare($query);
    $statement->execute();
}

?>
