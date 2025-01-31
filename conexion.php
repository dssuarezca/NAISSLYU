

<?php
 

	class Connection {
               
        

		/*=============================================
		Información de la base de datos
		=============================================*/

		static public function infoDatabase(){
          
			$infoDB = array(
				"host" => "localhost:3307",
				"database" => "ejemplo",
				"user" => "root",
				"pass" => ""

			);
			

			return $infoDB;

		}}

		/*=============================================
		Conexión a la base de datos
		=============================================*/

		class Conexion{
					static public function connect(){


			try{

				$link = new PDO(
					"mysql:host=".Connection::infoDatabase()["host"].";dbname=".Connection::infoDatabase()["database"],
					Connection::infoDatabase()["user"], 
					Connection::infoDatabase()["pass"]
				);

				$link->exec("set names utf8");
           

			}catch(PDOException $e){

				die("Error: ".$e->getMessage());

			}
		

			return $link;

		}

	}

	
?>