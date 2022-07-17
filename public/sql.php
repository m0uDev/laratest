<?php  
function OpenConnection()
    {
        $serverName = "localhost:1433";
        $connectionOptions = array("Database"=>"laratest",
            "Uid"=>"sa", "PWD"=>"P3ace4all$");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false){
            echo "Could not connect.\n";  
			die( print_r( sqlsrv_errors(), true)); 
		}
        return $conn;
    }
	
	try
    {
         $conn = OpenConnection();
		 echo " deu certo!";
	}
        catch(Exception $e)
    {
        echo("Error!");
    }	


?>