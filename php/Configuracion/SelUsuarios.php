<?php 
    /*if ( isset($_GET['del']) ){
				$del = ($_GET['del']);
				echo "DELETE FROM usuarios WHERE usuid='".$del."'";
				$db->query("DELETE FROM usuarios WHERE usuid='".$del."'");
    }*/
   include '../../db/db.php';
   $data = [];
   $stmt = $db->prepare("SELECT * FROM usuarios");
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $stmt->execute();
// Mostramos los resultados
    while ($row = $stmt->fetch()){
        $dataAux = array('usuid'=>$row["usuid"],
                        'usunombre'=>$row["usunombre"],
                        'usuusuario'=>$row["usuusuario"],
                        'usucorreo'=>$row["usucorreo"]);
        array_push($data,$dataAux);
    }
   // header('Content-type: application/json; charset=utf-8');
    echo json_encode($data);
    //exit();
?>