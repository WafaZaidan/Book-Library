<html lang="en">
    <head>
        <title>Our Library</title>

    </head>
    <body>
     
<?php include 'Styles/loginStyle.php'; 


$host="localhost";
$username="root";
$password="";
$database="library_v6";
$errormessage="";

try
{
    $connect=new PDO("mysql:host=$host;dbname=$database",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['submit']))
   {
   
    $sqlquery="SELECT Username,Password from usertable WHERE Username=:Username AND Password= :Password";
    $querystring =$connect->prepare($sqlquery);
    $querystring->execute(
            array(
                'Username' => $_POST["Username"],'Password'=> $_POST["Password"])
            );
            
        $count=$querystring->rowCount();
        if ($count > 0)
        {
            header("location:MainPage.php");
        }
   }   
        else 
        {
             $errormessage='<label>Not A valid user</label>';
     
        }
   
    
}
 catch (PDOException $e) 
{
  $errormessage=$e->getMessage();
}


?>