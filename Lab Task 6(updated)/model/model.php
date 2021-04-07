<?php 

require_once 'db_connect.php';



function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `student` where username = :username AND password= :password ";
	
    try 
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
		array(
		':username'=> $_POST["username"],
		':password'=> $_POST["password"],
		)
		
		
		);
    } 
	
	catch (PDOException $e) 
	{
        echo $e->getMessage();
    }
    

   $conn = null;
    return true;
}



function addStudent($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into student (Username, Password, Name, Email, ContactNo)
    VALUES (:username, :password, :name, :email, :contactno)";


    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':contactno' => $data['contactno']
        ]);
    }
	
	catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




function updateProfile($username, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `student` set  name = ?, email = ?, contactno=?  where username = ?";
	
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['name'], $data['email'],$data['contactno'],$username
        ]);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }    
	
    $conn = null;
    return true;
}


function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `student` where username = ?";
	
    try 
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } 
	
	catch (PDOException $e) 
	{
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function updatePass($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `student` set  password = ?,  where username = ?";
	
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['password'], $username
        ]);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }  

	
    $conn = null;
    return true;
}


?>






