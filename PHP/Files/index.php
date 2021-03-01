<?php 

?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    
    <link rel="icon" type="image/png" href="https://desk.blip.ai/favicon.png"/>
    <title>BLiP HSM</title>

    <style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
h5
{
    font-family: 'Poppins', sans-serif;
    font-size: 2 em;
    font-weight: 500;
    line-height: 2em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #242B36;
    color: #fff;
    transition: all 0.3s;
    min-width: 100%;
    max-width: 100%;
    min-height: 100vh;
    text-align: center;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #242B36;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #242B36;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    
}
#sidebar ul li a:hover {
    color: #242B36;
    background: #fff;
}

    </style>
  </head>
  <body style = "background-color: #F7FAFB">
        <div class="row">
            <div class="col-md-2 col-sm-1">
                <div class="wrapper">
                    <!-- Sidebar -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <img src="https://portal.blip.ai/fonts/blip_logo.svg?4d7df62009a68ad9765c504f2c70ba68" alt="bliplogo"><h3> <b>HSM</b></h3></img>
                            
                        </div>
                
                        <ul class="list-unstyled components justify-content-center">
                            <br><br>
                            <h4><b>Operações e Suporte</b></h4>
                            <br><br> <br><br>
                            <li>
                                <a href="index.html">Disparo de mensagens</a>
                            </li>
                            <li>
                                <a href="./parceiros.html">Cadastros de parceiros</a>
                            </li>
                            <li>
                                <a href="https://desk.blip.ai/">BLiP Desk</a>
                            </li>
                            <li>
                                <a href="https://portal.blip.ai/">BLiP Portal</a>
                            </li>
                        </ul>
                    </nav>
                
                </div>
            </div>
            <div class="col-md-10 mt-5" >   
                <div class="row justify-content-center mt-5">
            
                    <div class="col-md-8 col-lg-6 mt-5">
                        <div class="card text-center">
                            <div class="card-header" style="background-color: #2e3745">
                                <h5 class="card-title text-white">Começar uma nova conversa no WhatsApp</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row mt-5 pt-5">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label"><p class="font-weight-light"> Parceiros:</p> </label>
                                        <div class="col-md-4 col-sm-8">
                                            <select id="inputState" class="form-control">
                                                <option selected>Escolha o parceiro</option>
                                                <option>parceiro 1</option>
                                                <option>parceiro 2</option>
                                                <option>parceiro 3</option>
                                                <option>parceiro 4</option>
                                            </select>
                                        </div>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label"> <p class="font-weight-light"> Templates: </p> </label>
                                            <div class="col-md-4 col-sm-8 ">
                                                <select id="inputState" class="form-control">
                                                    <option selected >Templates </option>
                                                    <option>Cotação</option>
                                                    <option>Status</option>
                                                    <option>Cobrança</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label"> <p class="font-weight-light">  Váriavel 1: </p></label>
                                            <div class="col-sm-4"> <input type="text" class="form-control" placeholder="{{1}}"> </div>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label"> <p class="font-weight-light">  Váriavel 2: </p></label>
                                            <div class="col-sm-4"> <input type="text" class="form-control" placeholder="{{2}}"> </div>
                                        </div>
                                        <div class="form-group row justify-content-center my-5 pt-5">   
                                            <div class="col-7">
                                                <button type="submit" class="btn btn-outline-success w-100">Enviar</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                          </div>
                    </div>
            
                </div>               
            </div>
        </div>
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
  </body>
</html>
