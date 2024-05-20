
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> THE HOME </title>
    <link rel ="stylesheet" href="style.css">
   


   


</head>
<body>

    <div class="container">
       
        <div class="form-section">
            <h2>Contact Us</h2>
            <form  method="POST" action="contact.php">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter a Valid Email Address" required>
                <textarea name="message" placeholder="Enter Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="contact-details">
        </div>
        
    </div>
   
      
      <div class="contact-button1">
        <a href="https://www.example.com">
          <span>
            <h3> LOCATION</h3>
            <p>The Home Engineering,No. 245,<br>Matara,<br> Sri Lanka</p></span>
        </a>
      </div>

      <div class="contact-button2">
        <a href="https://www.example.com">
              <span>
          <h3> CALL US</h3>
          <p>+94 412 221 111<br>+94 412 228 777</p></span>
        </a>
      </div>

      <div class="contact-button3">
        <a href="info.thehome@gmail.com">
          <span>
          <h3> EMAIL</h3>
            <p> info.thehome@gmail.com</p></span>
        </a>
      </div>

      
</body>
</html>