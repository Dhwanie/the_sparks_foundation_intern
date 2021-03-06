<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Banking System</title>
    <link rel="shortcut icon" type="image/jpg" href="https://img.icons8.com/color/50/000000/bank-building.png"/>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 4%;">
                <div class="heading text-center my-5">
                  <h3>Welcome to the</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6  text-justify">
              <p style="font-family: Montserrat;">Banking is defined as the business activity of accepting and safeguarding money owned by other individuals and entities, and then lending out this money in order to conduct economic activities such as making profit or simply covering operating expenses.
              <br>Following are the few services which bank provides :- Advancements of loans, Cheque payments, Discounting on bills of exchange, Collecting and paying the credit instruments, Guarantee by banks, Consultancy, Credit cards, Funds remittance, Debit cards.
              </p>
                
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6 img text-center">
              <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>
          </br><br>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://img.icons8.com/office/250/000000/user.png"/>
                    <br><br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://img.icons8.com/external-inipagistudio-lineal-color-inipagistudio/250/000000/external-customer-retail-company-inipagistudio-lineal-color-inipagistudio.png"/>
                    <br><br>
                    <a href="transfermoney.php"><button>Customer Details</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://img.icons8.com/cotton/250/000000/transaction-list--v7.png"/>
                    <br><br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Dhwani Kalathiya.</b> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>