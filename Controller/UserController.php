<?php
require '../Connection.php';
class UserController{

    //get all users
public function getAllUsers(){
    $db=config::getConnexion();
    $sql="SELECT * FROM user";
    try{
        $query=$db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

//add user
public function addUser($user1){
    $db=config::getConnexion();
    $sql="INSERT INTO user (email,pwd) VALUES (:e,:p)";
    try{
        $query=$db->prepare($sql);
        $query->execute([
            'e'=>$user1->getEmail(),
            'p'=>$user1->getPwd()
        ]);
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

//delete user
public function deleteUser($id){
    $db=config::getConnexion();
    $sql="DELETE FROM user WHERE id=:i";
    try{
        $query=$db->prepare($sql);
        $query->execute([
            'i'=>$id
        ]);
    } 
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
}
}

//update user
public function updateUser($upUser, $id){
        $db = config::getConnexion();
        $sql = "UPDATE user SET email = :n, pwd = :e WHERE id = :i";
        try {
             $query = $db->prepare($sql);
                $query->execute([
                    'n' => $upUser->getemail(),
                    'e' => $upUser->getPwd(),
                    'i' => $id
                ]);

         
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
//get user by id
}
?>
 