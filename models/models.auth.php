<?php
// '##::::::::'#######:::'######:::'####:'##::: ##::::::'####:::::::'##::::::::'#######:::'######::::'#######::'##::::'##:'########:
//  ##:::::::'##.... ##:'##... ##::. ##:: ###:: ##:::::'##. ##:::::: ##:::::::'##.... ##:'##... ##::'##.... ##: ##:::: ##:... ##..::
//  ##::::::: ##:::: ##: ##:::..:::: ##:: ####: ##:::::. ####::::::: ##::::::: ##:::: ##: ##:::..::: ##:::: ##: ##:::: ##:::: ##::::
//  ##::::::: ##:::: ##: ##::'####:: ##:: ## ## ##:::::'####:::::::: ##::::::: ##:::: ##: ##::'####: ##:::: ##: ##:::: ##:::: ##::::
//  ##::::::: ##:::: ##: ##::: ##::: ##:: ##. ####::::'##. ##'##:::: ##::::::: ##:::: ##: ##::: ##:: ##:::: ##: ##:::: ##:::: ##::::
//  ##::::::: ##:::: ##: ##::: ##::: ##:: ##:. ###:::: ##:. ##:::::: ##::::::: ##:::: ##: ##::: ##:: ##:::: ##: ##:::: ##:::: ##::::
//  ########:. #######::. ######:::'####: ##::. ##::::. ####. ##:::: ########:. #######::. ######:::. #######::. #######::::: ##::::
// ........:::.......::::......::::....::..::::..::::::....::..:::::........:::.......::::......:::::.......::::.......::::::..:::::
session_start();
include_once("../configs/conexion.php");

function login () {

    global $conn;

    $usernameDOM = (isset($_POST['username'])) ? $_POST['username'] : null;
    $passwordDOM = (isset($_POST['password'])) ? $_POST['password'] : null;

    $query = "SELECT * FROM usuarios WHERE usuario = '$usernameDOM'";

    $stmt = $conn->prepare($query);

    try{
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        if(count($result) > 0){
            $data = $result[0];
            $passwordDB = $data['clave'];

            if(password_verify( $passwordDOM, $passwordDB )){
                $_SESSION['usuario'] = $usernameDOM;
                header("location: ../administrador/");
            }else{
                header("location: ../administrador/login.php?err=404");            
            }
        }else{
            header("location: ../administrador/login.php?err=401");            
        }
    }
    catch(PDOException $err){
        header("location: ../administrador/login.php?err=404");            
        die("Error de consulta: " . $err->getMessage());
    }

}

function logout () {
    session_destroy();
    header("location: ../administrador/login.php");
}