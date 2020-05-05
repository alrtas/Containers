<script>
    (function () {
        window.onload = function () {
          var blipClient = new BlipChat()
          .withAppKey('Y2FsbGNlbnRlcmludGVsYnJhc2hvbW9sb2cyOjVhNGE4NDE4LTkxNTItNDEyYi05MWMxLWFjY2UyNmFmY2E3Yg==')
          .withButton({"color":"#474747","icon":""})
          .withEventHandler(BlipChat.LOAD_ACCOUNT_EVENT, function () {
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
