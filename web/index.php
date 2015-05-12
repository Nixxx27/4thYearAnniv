<!DOCTYPE html>
<html>
<head>
    <title>Our Cute Story : Nikko & Jinnevib!</title>
<meta charset="UTF-8">
<style>
body{ margin:0px; background:url(images/bg.png) fixed;}
#prlx_lyr_1{
    position:fixed;
    background: url(images/parallax_bg1.png) no-repeat 0px 200px;
    width:100%;
    height:800px;
}
#prlx_lyr_2{
    position:fixed;
    background: url(images/parallax_bg1.png) no-repeat 600px 400px;
    width:100%;
    height:1000px;
}
#content_layer{ position:absolute; }
</style>
<script>
function parallax(){
    var prlx_lyr_1 = document.getElementById('prlx_lyr_1');
    var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
    prlx_lyr_1.style.top = -(window.pageYOffset / 4)+'px';
    prlx_lyr_2.style.top = -(window.pageYOffset / 8)+'px';
}
window.addEventListener("scroll", parallax, false);
</script>
</head>
<body>
<div id="prlx_lyr_1"></div>
<div id="prlx_lyr_2"></div>
<div id="content_layer"> <script> for(var i=1; i < 50; i++){ document.write('<h1>This is dummy line '+i+'</h1>'); } </script> </div>
</body>
</html>