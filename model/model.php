
<?php 

require_once 'db_connect.php';


function showAllUsers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showUsers($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where User_Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function showEmployee($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `employee_info` where User_Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}







function addUsers($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO user_info( Name ,Email, Dob, Gender, User_Name, Password, Role)
VALUES (:Name,:Email,:Date_Of_Birth,:Gender,:User_Name, :Password, :Role)";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Name'                =>    $data['Name'],
            ':Email'              =>   $data['Email'],
            ':Date_Of_Birth'     =>     $data['Dob'], 
            ':Gender'           =>     $data['Gender'],     
            ':User_Name'      =>     $data['User Name'],  
            ':Password'     =>     $data['Password'],
            ':Role'     =>     $data['Role']
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function addHotel($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO hotel( Name ,Description, Location, Website, Images) VALUES (:name,:description,:location,:website,:image)";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':name'                =>    $data['name'],
            ':description'              =>   $data['description'],
            ':location'     =>     $data['location'], 
            ':website'           =>     $data['website'],
            ':image'           =>     $data['image'],
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        //echo $e->getMessage();
        return false;
    }
    
    $conn = null;
    return true;
}


function addRestaurant($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO restaurant( Name ,Description, Location, Website, Images) VALUES (:name,:description,:location,:website,:image)";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':name'                =>    $data['name'],
            ':description'              =>   $data['description'],
            ':location'     =>     $data['location'],
            ':website'           =>     $data['website'], 
            ':image'           =>     $data['image']
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        //echo $e->getMessage();
        return false;
    }
    
    $conn = null;
    return true;
}


function addSpot($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO spot( Name ,Description, Location, Images) VALUES (:name,:description,:location,:image)";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':name'                =>    $data['name'],
            ':description'              =>   $data['description'],
            ':location'     =>     $data['location'],
            ':image'           =>     $data['image']
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        //echo $e->getMessage();
        return false;
    }
    
    $conn = null;
    return true;
}




function updateUsers($data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?,  Email = ? where User_Name = ?";

    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            $data['Name1'],
            $data['email1'],
            $data['username']
            
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function addEmployee($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO employee_info( Name ,Email, Dob, Gender, User_Name, Password)
VALUES (:Name,:Email,:Date_Of_Birth,:Gender,:User_Name, :Password )";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Name'                =>    $data['Name'],
            ':Email'              =>   $data['Email'],
            ':Date_Of_Birth'     =>     $data['Dob'], 
            ':Gender'           =>     $data['Gender'],     
            ':User_Name'      =>     $data['User Name'],  
            ':Password'     =>     $data['Password']
            
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function updateEmployee($data){
    $conn = db_conn();
    $selectQuery = "UPDATE employee_info set Name = ?,  Email = ?, Password=?, Dob=?,Gender=? where User_Name = ?";

    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            $data['Name'],
            $data['Email'],
            $data['Password'],
            $data['Dob'],
            $data['Gender'],
            $data['User_Name'],
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




function showUsersByEmail($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `owner_info` where Email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
        //echo "success";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}




function updatePassword($data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ?  where User_Name = ?";

    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            $data['password'],
            $data['username']
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
