<?php 

?>
<html>
<body>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('Y2FsbGNlbnRlcmludGVsYnJhc2hvbW9sb2cyOjVhNGE4NDE4LTkxNTItNDEyYi05MWMxLWFjY2UyNmFmY2E3Yg==')
            .withButton({"color":"#2CC3D5","icon":""})
            .withCustomCommonUrl('https://chat.blip.ai')
            .build();
        }
    })();
</script>
</body>
</html>
