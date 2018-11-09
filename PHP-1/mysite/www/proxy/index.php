<html>
<head>
    <script>
        function getURL(url){
            document.getElementById('frame').src
                = 'proxy.php?url='+encodeURIComponent(url);
        }
    </script>
</head>
<body>
<button onclick="getURL( 'http://ngs.ru/')">Google</button>
<button onclick="test()">Google</button>
<iframe id="frame" width="600px" height="400px" src=""></iframe>




<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    function test() {
        $("#frame").contents().find("h3").html("Hello");

    }
</script>
</body>
</html>