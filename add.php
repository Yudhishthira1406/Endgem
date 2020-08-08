<html>
<?php 


$conn = new mysqli("localhost","root","Divye-2001","myDB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$course=$_POST["course"];
$notes=$_POST["NotesType"];
$sql1="select * from courses";
$result1=$conn->query($sql1);
$c=0;
while($row1=$result1->fetch_assoc()){
    if($row1["Course"]==$course){
        $c=1;
        break;
    }
}
if($c==1){
    $sql="SELECT * from ".$course.";";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        if($row["notesType"]==$notes){
            echo "<script>alert('Course name already has the following name of material');
            document.location= 'add1.php'</script>";
            
        }
    }
}


    
    if(!is_dir("uploads/".$_POST["course"])){
        mkdir("uploads/".$_POST["course"]);
    }

    $target_dir = "uploads/".$_POST["course"]."/";
    $target_file = $target_dir .$_POST["NotesType"].'.'. strtolower(pathinfo($_FILES["filetoUpload"]["name"],PATHINFO_EXTENSION)) ;
    echo $target_file;
    echo $_FILES["filetoUpload"];
    $uploadOk = 1;
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    
    } else {
        if (move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["filetoUpload"]["name"]). " has been uploaded.";
        } else {
            echo $_FILES["filetoUpload"]["error"];
        }
    }


$sql = "SELECT * from courses;";
$sql1="Insert into ". $_POST["course"]." (notesType,filePath,downloads,dateadded) values ('".$_POST["NotesType"]."','".$target_file."',0,'".date("Y-m-d")."');";
$sql2="Create table ".$_POST["course"]." (notesType VARCHAR(30) NOT NULL,filePath VARCHAR(100),downloads INT,dateadded DATE);";
$sql3="Insert into courses (Course) values ('".$_POST["course"]."');";
$result = $conn->query($sql);
$upload=0;


    
    while($row = $result->fetch_assoc()) {
        if($row["Course"]==$_POST["course"]){
            $conn->query($sql1);
            // echo "inserted in ongoing course";
            $upload=1;
            break;
        }
    }   
    

if($upload==0){
    if ($conn->query($sql3) === TRUE) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // mkdir($_POST["course"]);
    $conn->query($sql2);
    $conn->query($sql1);
}


echo "<script>alert('submitted');
    document.location='index.php'</script>";


         
  
exit; 

$conn->close();
?>
