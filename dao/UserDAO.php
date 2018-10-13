<?php 

    include_once './class/User.php';
    include_once './db/PDOFactory.php';

    class UserDAO {

        public function insert(User $user){

            $sql = "INSERT INTO Users (login, password, permission) VALUES (:login, :password, :permission);";
            $pdo = PDOFactory::getConnection();

            $command = $pdo->prepare($sql);
            
            $command->bindParam(":login", $user->login);
            $command->bindParam(":password", $user->password);
            $command->bindParam(":permission", $user->permission);

            $command->execute();

            $user->idUser = $pdo->lastInsertId();
            
            return $user;

        }

        public function list(){

            $sql = "SELECT * FROM Users;";
            $pdo = PDOFactory::getConnection();

            $command = $pdo->prepare($sql);
            
            $command->execute();

            $users = array();

            while($row = $command->fetch(PDO::FETCH_OBJ)){

                $users[] = new User($row->idUser, $row->login, $row->password, $row->permission);

            }

            return $users;

        }

        public function update(){

            $sql = "UPDATE FROM Users login=:login, password=:password, permission=:permission WHERE idUser=:idUser";
            $pdo = PDOFactory::getConnection();

            $command = $pdo->prepare($sql);

            $command->bindParam(":login", $user->login);
            $command->bindParam(":password", $user->password);
            $command->bindParam(":permission", $user->permission);

            $command->execute();

        }

        public function delete($idUser){

            $sql = "DELETE FROM Users WHERE idUser=:idUser;";
            $pdo = PDOFactory::getConnection();

            $command = $pdo->prepare($sql);

            $command->bindParam(":idUser", $idUser);

            $command->execute();

        }

        public function searchId($idUser){

            $sql = "SELECT * FROM Users WHERE idUser=:idUser;";
            $pdo = PDOFactory::getConnection();

            $command = $pdo->prepare($sql);

            $command->bindParam(":idUser", $idUser);
            $command->execute();

            $result = $command->fetch(PDO::FETCH_OBJ);

            return new User($result->idUser, $result->login, $result->password, $result->permission);

        }

    }

?>