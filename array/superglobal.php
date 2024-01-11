<?php
$x = 5;

$y = 45;

$z = 145;

include "../date/test1.php";
require "../date/test2.php";
include "../date/test3.php";//jab file nahi milega then ye sirf warning dega
require "../date/test3.php";//jab file nahi milega then ye fatal error dega jiske age ka code nhi chlega
echo "<br>";

echo $GLOBALS['x']."<br>";
echo $GLOBALS['y']."<br>";
echo $GLOBALS['z']."<br>";

//$_SERVER[]

ECHO $_SERVER['PHP_SELF']."<br>";//GIVE YOU FILE NAME WITH DIRECTORY

ECHO $_SERVER['SERVER_NAME']."<br>";
ECHO $_SERVER['HTTP_HOST']."<br>";
// ECHO $_SERVER['SCRIPT_NAME']."<br>";
ECHO $_SERVER['HTTP_USER_AGENT']."<br>";

// $_REQUEST[] => this array store your form data which can be submitted by EITHER post or get

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo $_REQUEST['name1'];

// $_POST AND $_GET

echo "<pre>";
print_r($_GET);
echo "</pre>";
//FIELS DATA IS NOT ACCESSIBLE BY REQUEST, POST OR GET SUPER GLOBAL VARIABLES
//$_FIELS[]
echo "<pre>";
print_r($_FILES['image']);
echo "</pre>";

//how can i upload files to our desired locations

$target_dir = '../images/';
$filename = $_FILES['image']['name'];
$target_file = $target_dir.$filename;
$temp_file = $_FILES['image']['tmp_name'];
ECHO "<br>";
// strToLower();

//file_exists('file path') this function check file is exists or not
echo file_exists($target_file);
if(file_exists($target_file)){
    echo "file already exists";
}else{
    echo "file is not already exists";
}

//using pathinfo('file path', PATHINFO_EXTENSTION) function you can find extension of your file

ECHO "<br>";
$fielExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

ECHO "<br>";
// echo $temp_file;
echo $fielExtension;
if($_FILES['image']['size'] > 1024000){
    echo "image size should be less than 1MB";
}else{
    if($fielExtension == "jpg" || $fielExtension == "png" || $fielExtension == "jpeg"){
        move_uploaded_file($temp_file, $target_file);
        echo "image uploaded successfully";
    }else{
        echo "file type should either jpg, png, jpeg format<br> but you have uploaded $fielExtension";
    }
}

/*
1MB = 1024KB = 1024000B

*/
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h4>Submit your query</h4>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name1">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        //AJAX

    </script>
  </body>
</html>