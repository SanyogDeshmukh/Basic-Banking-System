<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    
 

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">

          <div class="row intro py-1">

              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br>
                  <br>
                  <h3>Welcome to</h3>
                  <h1>THE SPARKS BANK</h1>
                  <h4>A Basic Banking System</h4>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                 <br>
                  <img class="im" src="img/bank.png" class="img-fluid pt-2" width="300" height="300">
                 <br>
                <br>
              </div>
      
         </div>
      
          
            <div class="column activity text-center" >
                  
                  <div class="col-md act">
                    
                      <br>
                        <br>
                          <br>
                          <a href="transfermoney.php"><button class="btn btn-outline-light btn-lg">View Customers to transfer</button></a>
                       <br>    
                  </div>
                  <br>
                  <div class="col-md act">
                   <br>
                        <a href="transactionhistory.php"><button class="btn btn-outline-light btn-lg">Transfer History</button></a>
                       
                     <br>
                    <br>
                    <br>
                    <br>
                  </div>
                  
            </div>
           
      </div>
      <footer class="text-center py-2" style=" color: #6f7575; background-color:black; font-size: 120%;">
        <br><br>
        <p>Created by <b>Sanyog Deshmukh</b> <br>The Sparks Foundation </p>     
         <a href="https://www.linkedin.com/in/sanyog-deshmukh-066a801b1"><img src="img/logo.jpg" width="150px" height="60px"></a>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>