<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/showdown/1.8.6/showdown.js"></script>
    <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">
    <title>WEB 1.0</title>
</head>
<body>    
    <div id = "scrollscroll">
    </div>
<script>

scroll = "";
rawhtml = "";
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true')
    

var httpc666 = new XMLHttpRequest();
httpc666.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scroll = this.responseText;
        rawhtml = converter.makeHtml(scroll);
        document.getElementById("scrollscroll").innerHTML = rawhtml;

    };
}
httpc666.open("GET", "fileloader.php?filename=data/scroll.txt", true);
httpc666.send();

</script>
    <style>
        body{
            color:#00ff00;
        }
        a{
            color:#ff2cb4;
        }
        #scrollscroll{
            position:absolute;
            left:0px;
            top:0px;
            bottom:0px;
            right:0px;
            padding:1em 1em 1em 1em;
            background-color:black;
            overflow:scroll;
            text-align:justify;
            font-size:2em;
    
        }
        h1,h2,h3,h4{
            text-align:center;
        }
        img{
            max-width:70%;
            display:block;
            margin:auto;
            background-color:none;
        }

</style>
</body>
</html>
