<?php
/**
 * Created by onoPhp.blogspot.com.
 */     
session_start(); // ini adalah kode untuk memulai session
        $host = "localhost";
        $username = "root";
        $password = "";
        
        try{
            $conn = new PDO("mysql:localhost=$host; dbname=inventaris", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (PDOException $e){
            echo "ERROR : " .$e->getMessage();
        }
        function style_script() {
            return
            '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';
        }
?>
