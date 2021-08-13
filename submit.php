<?php


$host="localhost";
$username="root";
$password="";
$dbname="hugh";



try{


$db=new PDO("mysql:host=$host;dbname=$dbname",$username,$dbname);


$db=setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$QUERY="INSERT INTO hugh(First,Middle,Last,Birthday,Citizenship,nationality,Identification,Studies,gender,Education,others,img,Language,Religious,affiliation,postal,code,Town,pcountry,Mobile,email)  
  VALUES  (':First,Middle',:Last,:,Birthday,:nationality,:nationality,:Identification,:Studies,:gender,:Education,:others,:img,:Language,:Religious,:affiliation,:postal,:code,:Town,:pcountry,:Mobile,:email)";

$stmt=$db->prepare($QUERY);
$stmt->bindParam('First',$First);
$stmt->bindParam('Middle',$Middle);
$stmt->bindParam('Last',$,Last);
$stmt->bindParam('Birthday',$Birthday);
$stmt->bindParam('Citizenship',$Citizenship);
$stmt->bindParam('nationality',$nationality);
$stmt->bindParam('Identification',$Identification);
$stmt->bindParam('Studies',$Studies);                      
$stmt->bindParam('gender',$gender);
$stmt->bindParam('Education',$Education);
$stmt->bindParam('others',$others);
$stmt->bindParam('img',$img);
$stmt->bindParam('Language',$Language);
$stmt->bindParam('Religious',$Religious);
$stmt->bindParam('affiliation',$affiliation);
$stmt->bindParam('postal',$,postal);
$stmt->bindParam('code',$code);
$stmt->bindParam('Town',$Town);
$stmt->bindParam('pcountry',$pcountry);
$stmt->bindParam('Mobile',$Mobile);
$stmt->bindParam('email',$email);




$First=$_POST['First'];
$Middle=$_POST['Middle'];
$Last=$_POST['Last'];
$Birthday=$_POST['Birthday'];
$Citizenship=$_POST['Citizenship'];
$nationality=$_POST['nationality'];
$Identification=$_POST['Identification'];
$Studies=$_POST['Studies'];
$gender=$_POST['gender'];
$Education=$_POST['Education'];
$others=$_POST['others'];
$img=$_POST['img'];
$Language=$_POST['Language'];
$Religious=$_POST['Religious'];
$affiliation=$_POST['affiliation'];
$postal=$_POST['postal'];
$code=$_POST['code'];
$Town=$_POST['Town'];
$pcountry=$_POST['pcountry'];
$Mobile=$_POST['Mobile'];
$email=$_POST['email'];



$stmt->execute();

echo "Inserted succesfully";



}catch(PDOException e){


    echo  "Connection failed" .$e->getMessage();
}
















?>