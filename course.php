<!DOCTYPE html>
<html>

<head>
    <link href="index.css" rel="stylesheet" type="text/css">
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color: rgb(30,41,41);">

    <div class="header">
        <div class="row">
            <div class="col-sm-1"><a href="index.php"><img src="images.jpeg" class="rounded-circle logo"></a></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6 title"><b>EndGem</b></div>
        </div>
    </div>
    <div id="mySidebar" class="sidebar">
        <div class="top"><i class="fa fa-diamond" style="font-size:36px;color: white;"></i>Top gems</div>
        <?php
            include 'connection.php';
            $sql='SELECT * from '.$_REQUEST["q"].' order by downloads desc limit 3';
            $red=$conn->query($sql);
            $t=1;
            while($row=$red->fetch_assoc()){
                echo '<a href="'.$row["filePath"].'" onclick="load2(this.innerHTML)" download>'.$t.'.'.$row["notesType"].'</a>';
                $t++;
            }
        ?>
    </div>
    <div id="main">
        <div id="navbars" style="padding-bottom: 10px;
        border-radius: 9px;
        border-color: #111;
        border-bottom-width: 5px;">
            <div class="row">
                <div id="toggle" onclick='openNav()' class="col-sm-1">
                    <div class="row">
                        <div id="ham">
                            <div class="rounded-circle
                                    menu openbtn">
                                <div class="lines"></div>
                                <div class="lines"></div>
                                <div class="lines"></div>
                            </div>
                        </div>
                        <div id="cross"><img class="rounded-circle cross" src="plus.png"></div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4">
                    <div class="select">
                        <select name='course' id='select' class='select' onchange="redirect(this.value)">
                        <?php 
                    include 'connection.php';
                    $sql1="select Course from courses";
                    $result=$conn->query($sql1);
                    echo '<option class="val" id="'.$_REQUEST["q"].'" value="'.$_REQUEST["q"].'"><a href="course.php?q='.$_REQUEST["q"].'">'.$_REQUEST["q"].'</a></option>';
                    while($row =$result->fetch_assoc()){
                        if($row["Course"]==$_REQUEST["q"]) continue;
                        echo '<option class="val" id="'.$row["Course"].'" value="'.$row["Course"].'">'.$row["Course"].'</option>';
                    }
                    
                    ?>
                        </select></div>
                </div>
                <div class="col-sm-3"></div>
            <div class="col-sm-1"><a href='add1.php'><img class="rounded-circle plus" src="plus.png"></a></div>
            </div>
        </div>
        <?php
        include 'connection.php';
        $sql1="select * from ".$_REQUEST["q"]." order by dateadded desc;";//new file is seen first
        $result=$conn->query($sql1);
        while($row =$result->fetch_assoc()){
        echo '<div class="row">
        <div class="col-sm-2"></div>
        <button class="col-sm-8" style="margin-bottom: 16px;border-radius: 9px;">
            <a href="'.$row["filePath"].'" onclick="return load(this)" download>
                <i class="fa fa-file-pdf-o" style="font-size:40px;color:red"></i>
                <div class="text">'.$row["notesType"].'</div>
                <div class="date">Date added:'.$row["dateadded"].'</div>
                <div class="downloads">'.$row["downloads"].'</div>
                <i class="fa fa-download" aria-hidden="true" style="font-size:36px;color:aqua"></i>
                </a>
            </button>
        </div>';
        }
        ?>
        
        
    
    </div>

</body>

</html>
