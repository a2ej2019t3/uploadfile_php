<?php
    session_start();
//upload img here
    $target_dir = 'tmp/';
    if( isset($_POST['submit'])) {
        $total_files = count($_FILES['file']['name']);
        for($x = 0; $x < $total_files; $x++) {
            // Check if file is selected
            if(isset($_FILES['file']['name'][$x])) {
                $original_filename = $_FILES['file']['name'][$x];
                $target = $target_dir . basename($original_filename);
                $tmp = $_FILES['file']['tmp_name'][$x];
                move_uploaded_file($tmp, $target);
            }
        }
    }

//post product to DB here
    include ('connection.php');

    //check the name of session here
    $sellerid = 1;
    // $_SESSION['userid'];

    $productName = $_POST['productName'];
    $categoryid = $_POST['categoryid'];
    // $subcategoryid = $_POST['subcategoryid'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $imgsrc = basename($_FILES['file']['name'][0]);

    $newpost_sql = "INSERT INTO `products`(`postDate`, `productName`, `sellerID`, `categoryID`, `Price`, `quantity`,  `imgSRC`) VALUES (now(),'$productName',$sellerid,$categoryid,$price,$quantity,$imgsrc)";
    // $newpost_result = mysqli_query($conn, $newpost_sql);

    if ($conn->query($newpost_sql) === TRUE) {
        echo "inserted successfully";
    } else {
        echo "Error: " . $newpost_sql . "<br>" . $conn->error;
    }
    echo "<br>$productName - $categoryid - $price - $quantity";
    
?> 
           
      
  
    
      
    
