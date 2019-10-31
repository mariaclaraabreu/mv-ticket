<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Movies system</title>
<link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="meuestilo.css">
<link href="iconic/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>
<body>
<!-- Imagem do topo !-->

<div class="container">
<h1 class="text-center">Movies System</h1>



<!-- <form action="/system-cine/view/MovieRegister.php" method="get">
    <input type="submit" value="Movie register" 
         name="Submit" id="frm1_submit" class="btn btn-primary" />
</form>
<form action="/my/link/location" method="get">
    <input type="submit" value="Ticket" 
         name="Submit" id="frm1_submit" class="btn btn-primary mt-3" />
</form> -->
<div class="nav justify-content-center">
    <div class="nav-item mr-3">
        <a class="btn btn-primary" href="./index.php?p=MovieRegister"> Movie Register</a>
    </div>
    <div class="nav-item">
    <a class="btn btn-primary" href="./index.php?p=SellTicket"> Sell Ticket</a>
    </div>

</div>


<!-- <a class="btn btn-primary" href="./index.php?p=MovieRegister"> Movie Register teste</a>
<a class="btn btn-primary" href="./index.php?p=SellTicket"> Sell Ticket teste</a> -->


<!-- <a href="./index.php?p=pagina2">Pag 2</a> -->
<?php
    $val = @$_GET['p'];

    if($val == 'MovieRegister'){
        require_once 'view/MovieRegister.php';
    }
    if($val == 'SellTicket'){
       require_once 'view/SellTicket.php';
   }
    

    
?>


	
</div>

<script src="./jquery/dist/jquery.slim.min.js"></script>
<script src="./popper.js/dist/popper.min.js"></script>
<script src="./bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>