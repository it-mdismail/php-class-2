<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap stylesheet -->
</head>
<body>
    <?php 
    class basicInfo{
       public $firstName;
       public $lastName;
       public $address;
       public $phone;
    }
    $info = new basicInfo( );
    $info->firstName = "Md Ismail";
    $info->lastName = "Hossain";
    $info->address = "Dhanmondi, Dhaka 1205.";
    $info->phone =  "0177777777777";
    
    echo "<strong>Name: </strong>". $info->firstName . " " . $info->lastName . "</br>";
    echo "<strong>Address: </strong>". $info->address . "</br>";
    echo "<strong>Phone number: </strong>". $info->phone . "</br>";
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>