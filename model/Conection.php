<?php
class Conection{

    public $con;

    public function __construct(){
        try {

            $this->con =new mysqli('localhost','root','','db_fundacioncs');
                            // echo "Conexion exitosa.";
                            //require('../view/V_Register-users.php');

        } catch (Exception $pe) {
            echo "Error conexion BD" . $pe->getMessage();
        }
    }

}

?>