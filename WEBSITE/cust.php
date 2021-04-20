<html>
    <head>
        <meta charset = "utf-8" /> 
        <title> View Customers </title>
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
                            <a class="nav-link text-black font-weight-bold active" 
                               href="#"> 
                              View Customers
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link text-black font-weight-bold"
                               href="transfer.php"> 
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
        </nav><br><br>
<div class="container">
    <table class = "table table-striped">
        <tr>
            <th> Customer ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> Balance </th>
        </tr>
    
        <?php include 'view.php';?>
</div>
    </table>
    </body>
    </html>