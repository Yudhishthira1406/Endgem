<!DOCTYPE html>
<html>
    <head>
        <link href="add.css" rel="stylesheet">
        <script src="add.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>EndGem</title>    
    </head>
    <body style="background-color: rgb(30,41,41);">
            <div class="header">
                <div class="row">
                    <div class="col-sm-1"><a href="index.php"><img src="images.jpeg" class="rounded-circle logo"></a></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6 title"><b>EndGem</b></div>
                </div>
            </div>
            <form action='add.php' method="POST" enctype="multipart/form-data" >
                <div class="course">Select Course</div>
                <input id="course" class="courseselect" type="text" name="course" required autocomplete="off"><br>
                <div class="fileinput">Drag file here</div>
                <input id="file" type="file" name="filetoUpload" required><br>
                <div id="typeofNotes">Type of notes</div>
                <input id="notes" class="courseselect" type="text" name="NotesType" required autocomplete="off">
                <div id="warning"></div>
                <br>
                <input id="submit" type="submit">
            </form>
        
    </body>
</html>
