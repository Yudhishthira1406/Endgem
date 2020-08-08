<!DOCTYPE html>
<html>
    <head>
        <link href="index.css" rel="stylesheet">
        <script src="index.js"></script>
        <title>EndGem</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>   
    </head>
    <body style="background-color: rgb(30,41,41);">
    <div class="header">
        <div class="row">
            <div class="col-sm-1"><a href="index.php"><img src="images.jpeg" class="rounded-circle logo"></a></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6 title"><b>EndGem</b></div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
                    <div class="select">
                        <select name='course' id='select' class='select' onchange="redirect(this.value)">
                        <?php 
                    include 'connection.php';
                    $sql1="select Course from courses";
                    $result=$conn->query($sql1);
                    echo '<option class="val"><a href="index.php">Select an option</a></option>';
                    while($row =$result->fetch_assoc()){
                        echo '<option class="val" id="'.$row["Course"].'" value="'.$row["Course"].'">'.$row["Course"].'</option>';
                    }
                    
                    ?>
                        </select></div>
                </div>
                <div class="col-sm-3"></div>
            <div class="col-sm-1"><a href='add1.php'><img class="rounded-circle plus" src="plus.png"></a></div>
            
                </div>
    </body>
</html>