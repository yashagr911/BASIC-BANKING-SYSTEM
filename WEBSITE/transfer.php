<html>
    <head>
        <meta charset = "utf-8" /> 
        <title> Transfer money </title>
        <link rel="stylesheet" type="text/css" href="bankhome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link rel = "icon" href =  
        "./abc.png" 
                type = "image/x-icon"> 
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-transparent"> 
            <div class="container"> 
                <a class="navbar-brand text-black font-weight-bold" href="#" style="font-family:'Bauhaus 93';"> 
                  Yash Bank
                </a> 
                <button class="navbar-toggler" type="button" 
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" 
                        aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
      
                <div class="collapse navbar-collapse"></div> 
      
                <div class="collapse navbar-collapse" 
                     id="navbarSupportedContent"> 
                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item active"> 
                            <a class="nav-link text-black font-weight-bold" 
                               href="index.php"> 
                              Home  
                          </a> 
                        </li> 
                        <li class="nav-item "> 
                            <a class="nav-link text-black font-weight-bold " 
                               href="cust.php"> 
                              View Customers
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link text-black font-weight-bold active"
                               href="#"> 
                               Transfer Money
                            </a> </li>
                            <li class="nav-item"> 
                            <a class="nav-link text-black font-weight-bold"
                               href="history.php"> 
                               Transaction History
                            </a> </li>
                      
                    </ul> 
                </div> 
            </div> 
        </nav><br><br><br><br>  
<div class="container col-sm-6 "><center>
<div class="card" style="opacity:.7; background-color: #a094d6;">
  <div class="card-body"><br>
<form class="form-horizontal" action="transfermoney.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-6" for="sender">Sender's Name:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="send" >
    </div><br>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-6" for="receiver">Receiver's Name:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="rece" >
    </div><br>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-6" for="amount">Transfer Amount:</label>
    <div class="col-sm-10">
      <input type="number" required min = "1" class="form-control" name="amt" ><br>
    </div>
  </div></center>
  </div></div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-12">
    <center><br>
      <button type="submit" class="btn btn-outline-light btn-lg">Transfer Money</button></center>
    </div><br> 
  
</form>
</body>
</html>