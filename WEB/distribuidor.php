<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CHAT Distribuidores</title>
    
    <style>
        html, body {
          height: 100%;
          margin: 0;
        }
        
        .full-height {
          height: 100%;
        }
    </style>
    
      
  </head>
  <body>
      
      <div class="full-height" id="chat"></div>
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
          var blipClient = new BlipChat()
          .withTarget("chat")
          .withAppKey('cG9zdmVuZGFpbnRlbGJyYXMxOmViN2RjMmI2LTk2MjktNGE1OS1hNzYzLTkwZDk5NzIyZDFjOA==')
          .withButton({"color":"#555555","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/Services/Images/9c66a33c-5d94-4c98-82de-4fb434c2fb1f"})
          .withEventHandler(BlipChat.CREATE_ACCOUNT_EVENT, function () {
              blipClient.sendMessage({
                  "type": "application/vnd.lime.chatstate+json",
                  "content": {
                    "state": "starting"
                  }
              });
          });
          blipClient.build();
        }
    })();
</script>
</html>