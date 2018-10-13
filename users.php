<?php

    include_once 'class/User.php';
    include_once 'dao/UserDAO.php';

    if(version_compare(phpversion(), '7.1', '>=')){

        ini_set('serialize_precision', -1);

    }

    $request_method = $_SERVER["REQUEST_METHOD"];

    switch($request_method){

        case 'GET':

            if(!empty($_GET["idUser"])){

                $idUser = intval($_GET["idUser"]);

                $dao = new UserDAO;
                $user = $dao->searchId($idUser);

                $user_json = $json_encode($user);

                header('Content-Type:application/json');

                echo($user_json);

            } else {

                $dao = new UserDAO();
                $users = $dao->list();

                $user_json = json_encode($users);
                header('Content-Type:application/json');

                echo($user_json);

            }

            break;

        case 'POST':

            $data = file_get_contents("php://input");
            $var = json_decode($data);

            $user = new User(0, $var->login, $var->password, $var->permission);

            $dao = new UserDAO;

            $user = $dao->insert($user);

            $user_json = json_encode($user);
            header('HTTP/1.1 201 Created');
            header('Content-Type:application/json');

            echo($user_json);

            break;

        case 'PUT':
            
            if(!empty($_GET["idUser"])){

                $id = intval($_GET["idUser"]);
                $data = file_get_contents("php://input");
                $var = json_decode($data);

                $user = new User($idUser, $var->login, $var->password, $var->permission);

                $dao = new UsuerDAO;
                $dao->update($user);

                $user_json = json_encode($user);
                header('Content-Type:application/json');

                echo($user_json);

            }

            break;

        case 'DELETE':

            if(!empty($_GET["idUser"])){

                $id = intval($_GET["idUser"]);

                $dao = new UserDAO;
                $user = $dao->searchId($idUser);
                $dao->delete($user);

                $user_json = json_encode($user);

                header('Content-Type:application/json');

                echo($user_json);

                break;

            }

            default:
                header('HTTP/1.1 405 Method Not Allowed');
                break;

    }

?>