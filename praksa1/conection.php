<?php


     $users ="";
    $pass ='';
     $db ='short_table';
     $connection;

     function getConnection(){
        $con = mysqli_connect($this->servername, $this->username, $this->password. $this->database)  or die ("Connection faild. " . 
        mysqli_connect_error());

        if (mysqly_connect_error()){
            printf("Conection faild: %s\n",mysqli_connect_error());
            exit();
        }else{
            $this->connection =$conn;
        }

        return $this->connection;
    }


