<script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
          var blipClient = new BlipChat()
          .withAppKey('Y2FsbGNlbnRlcmludGVsYnJhczo4NjY2YmVlNS04Y2FkLTQ3NTgtODc4NS1jNDNmZGJjNTQ4NzM=')
          .withButton({"color":"#474747","icon":""})
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
