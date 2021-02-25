<!doctype html>
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
    font-family: 'Ben', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
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
  <body background-color = "#F7FAFB">
        <div class="row">
            <div class="col-md-2">
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
                                <a href="#">Disparo de mensagens</a>
                            </li>
                            <li>
                                <a href="#">Cadastros de parceiros</a>
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
            <div class="col-md-10">   
                <div class="row justify-content-center mt-5">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 mt-5">
                        <div class="card text-center">
                            <div class="card-header">
                              <ul class="nav nav-pills card-header-pills">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Aqui vai o disparo de HSM</h5>
                              <p class="card-text">Abaixo terão campos de contato e templates</p>
                              <a href="#" class="btn btn-primary">Enviar</a>
                            </div>
                          </div>
                          
                    </div>
                    <div class="col-md-2">
                        
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
  <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            var blipClient = new BlipChat()
            .withAppKey('b3BlcmFjb2VzZXN1cG9ydGVob21vbG9nOmVkYzAyNmU1LTY5ZDItNGQ5Ni1iNTBjLWQyMjUyNjQ1Yzk1Yw==')
            .withButton({"color":"#00A75D","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/iris/Media_6997bb92-d476-4151-b00c-811ee394d637"})
            .withCustomCommonUrl('https://chat.blip.ai/')
            .withEventHandler(BlipChat.CREATE_ACCOUNT_EVENT, function () {
              blipClient.sendMessage({
                  "type": "application/vnd.lime.chatstate+json",
                  "content": {
                    "state": "starting",
                    "channel" : "openShift"
                  }
              });
          });
          blipClient.build();
        }
    })();
</script>

  </body>
</html>
