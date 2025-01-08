<?php      
    include('database.php');  
    $firstname = filter_input(INPUT_POST, 'fn');  
    $lastname = filter_input(INPUT_POST, 'ln');  
    $email = filter_input(INPUT_POST, 'email');  
    $phone = filter_input(INPUT_POST, 'pn');  
    $message = filter_input(INPUT_POST, 'message');  
   
      
                
        $sql = "INSERT INTO contact(`FirstName`, `LastName`, `Email`,`Phoneno`,`message`) 
                VALUES ('$firstname', '$lastname', '$email','$phone','$message')"; 
       
          
        if ($conn->query($sql) == TRUE) {
            echo " Record created successfully";
          } 
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
          
?>  