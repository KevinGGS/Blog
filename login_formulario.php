<!DOCTYPE html>
<html>
    <head>
        <title>Login | Projeto para Web com PHP</title>
        <link rel="stylesheet"
                href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
   </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/topo.php'; ?>
            </div>
        </div>
    <div class="row" style="min-height: 500px;">
        <div class="col-md-12">
            <?php include 'includes/menu.php'; ?>
        </div>
    <div class="col-md-10" style="padding-top: 50px;"> 
        <div class="card-header">Login</div>  
        <div class="card-body">
            <form method="post" action="core/usuario_repositorio.php"> 
                <input type="hidden" name="acao" value="login">
        <div class="form-group">
            <label for="email">E-mail</label>
        <input class="form-control" type="text" require="required" id="email" name="email">
    </div>
>