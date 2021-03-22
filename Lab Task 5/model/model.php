<?php 

require_once 'db_connect.php';



function showAllData()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
	
    try
	{
        $stmt = $conn->query($selectQuery);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function addProduct($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into Products (Name, Buying_Price, Selling_Price, Profit, Display)
                   VALUES (:name, :buying_price, :selling_price, :profit, :display)";

    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name'         => $data['name'],
        	':buying_price'  => $data['buying_price'],
        	':selling_price' => $data['selling_price'],
        	':profit'       => $data['profit'],
        	':display'      => $data['display']
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
	$selectQuery = "SELECT * FROM `products` where id = ?";
	
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



function deleteProduct($id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE id = ?";
	
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
    $conn = null;
    return true;
}


function searchProduct($name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%$name%'"; 
	
    try
	{
        $stmt = $conn->query($selectQuery);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    }
	
	
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateProduct($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `products` set name = ?, buying_price = ?, selling_price = ?, profit=? , display = ? where id = ?";
	
    try
	{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buying_price'], $data['selling_price'],$data['profit'], $data['display'], $id
        ]);
    }
	
	catch(PDOException $e)
	{
        echo $e->getMessage();
    } 

	
    $conn = null;
    return true;
}



 
 






