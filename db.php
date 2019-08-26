<?php

	class dbConnection{	
        public $conn;
		function __construct(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "crud";
			// Create connection
			$this->conn = mysqli_connect($servername, $username, $password,$db);
			// Check connection
			if (!$this->conn) {
			   die("Connection failed: " . mysqli_connect_error());
			}

		}
		

		function insertData($name, $mobile){			

			$sql = "INSERT INTO crud_data(name, mobile)
			VALUES ('$name', '$mobile')";

			if ($this->conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $this->conn->error;
			}

		}
		function readData(){	
			

			$sql = "SELECT id, name, mobile FROM crud_data";
			$result = $this->conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . " - Mobile: ". $row["mobile"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}
			$this->conn->close();

		}
	}

?>