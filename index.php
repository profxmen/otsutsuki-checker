<?php require('_login.php'); ?>
 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> SK BASED CHECKER </title>
	<link href="reboot13.css" rel="stylesheet" id="bootstrap-css">
	<link href="xiety.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<center

    <body>
        <font size="4" style="color: gold"><marquee> THINK BEFORE YOU CLICK.... </marquee></font>
    </body>
  <h5 class="card-body h6">
      <!--LOGO-->
      <!--LOGO-->
  <h5 class="card-body h6">
  <img src="tenor.gif" height="80" width="90">
  <h1><strong> OTSUTSUKI'S CHECKER </strong></h1>
  
<!-- INPUT/TEXTAREAS -->
<div>
<div class="card col-sm-12">
  <div class="card-body">
<div class="md-form">
	<div class="col-md-12">
     <!--DITO ILAGAY ANG SK-->
       <br>
  <text style="font-size: 20">
    <span>CVV✔️</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>CCN✔️</span>&nbsp<span id="cWarn" class="badge badge-warning">0</span>
    <span>Declined❌</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
    <br>
       </text>
       <br>
  <h6><b>𝐂𝐫𝐞𝐝𝐢𝐭 𝐂𝐚𝐫𝐝𝐬</b></h6>
      <b> <textarea placeholder="xxxxxxxxxxxxxxxx|xx|xxxx|xxx" class="md-textarea" style="border-radius: 10px; width:100%; outline: none; height: 180px; text-align: center;" id="lista"></textarea> <br><br>
      <h6><b>𝐒𝐞𝐜𝐫𝐞𝐭 𝐤𝐞𝐲</b></h6><b> <textarea placeholder="sk_live_xxxxxxxxxxxxxxxx" class="md-textarea" style="border-radius: 10px; width:100%; outline: none; height:30px; text-align: center;" id="sec"></textarea> 
</div>
</div>

&nbsp;<br>
<center>
<script> function play() { var audio = document.getElementById("audio"); audio.play(); } </script><button class="btn btn-blue" style="outline: none; width: 60%; color : green" id="testar" onclick="play();enviar()"> 𝐒𝐓𝐀𝐑𝐓 </button><audio id="audio" src="moan2.mp3"></audio>
 <br>
 <bold>
<font size="3">Reload to Stop</font>
  <br>
  <font size="2">(Save your Checks First!)</font>
 </bold>
  <bold>
  <br>
 <a style="color: gold" href="http://siska.video/"> 𝐀𝐝𝐝 𝐦𝐞 𝐨𝐧 𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦 </a>
  </bold>
  <br>
  <i>
  <font size="2" style="color: gold">
가브리엘</font>
  </i>
</center>
</div>

 
      <font size="4" style="color:gold">𝐍𝐨𝐰 𝐏𝐥𝐚𝐲𝐢𝐧𝐠: </font>
      <font size="3" style="color: white"><marquee> Twerk it like Miley.𝚖𝚙𝟹 </marquee></font>

</div>
</div>
</div>
&nbsp;<br>
</div>
</center>
</div>

<center>
<!--BUTTONS-->
<div>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra" class="buttonfx1 slideleft1">Show</button>
  <button data-clipboard-action="copy" data-clipboard-target=".aprovadas" class="buttonfx1 slideright">Copy</button>
</div>

  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title"> 𝐂𝐕𝐕  - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>

<br>
<br>
<br>

<div>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra3" class="buttonfx3 slideleft2">Show</button>
  <button data-clipboard-action="copy" data-clipboard-target=".edrovadas" class="buttonfx3 slideright2">Copy</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title"> 𝐂𝐂𝐍 - <span  id="cWarn2" class="badge badge-warning">0</span></h6>
    <div id="bode3"><span id=".edrovadas" class="edrovadas"></span>
</div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>

<div class="col-md-12" style="text-overflow: ellipsis; overflow: hidden;">
<div class="card">
  <div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra2" class="buttonfx2 slideleft3">Show</button>
  <button onclick="document.getElementById('.reprovadas').innerHTML = ''" id="stop" class="buttonfx2
  slideright1">Clear</button>
</div>
  <div class="card-body" style="text-overflow: ellipsis; overflow: hidden;">
    <h6 style="font-weight: bold;" class="card-title"> 𝐃𝐞𝐜𝐥𝐢𝐧𝐞𝐝 - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2" style="text-overflow: ellipsis; overflow: hidden;"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>

</center>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
 
$(document).ready(function(){


    $("#bode").hide();
  $("#esconde").show();
  
  $('#mostra').click(function(){
  $("#bode").slideToggle();
  });

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
  $("#esconde2").show();
  
  $('#mostra2').click(function(){
  $("#bode2").slideToggle();
  });

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode3").hide();
  $("#esconde3").show();
  
  $('#mostra3').click(function(){
  $("#bode3").slideToggle();
  });

});

</script>

<script src="clipboard.min.js"></script>

        <script>
    var clipboard = new ClipboardJS('.slideright');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  
      <script src="clipboard.min.js"></script>

        <script>
    var clipboard = new ClipboardJS('.slideright2');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  



<script title="ajax do checker">
    function enviar() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
    var ed = 0;
        var rp = 0;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
        var sec = $("#sec").val();
                    $.ajax({
                        url: 'api.php?lista=' + value + '&sec=' + sec,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("#CVC")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else if(resultado.match("#LIVE")) {
                                removelinha();
                                ed++;
                                edrovadas(resultado + "");
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
              
                            $('#carregadas').html(total);
                var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            $('#cLive').html(ap);
                $('#cWarn').html(ed);
              $('#cDie').html(rp);
              $('#total').html(fila);
              $('#cLive2').html(ap);
              $('#cWarn2').html(ed);
              $('#cDie2').html(rp);
                        }
                    });
                }, 100 * index);
        });
    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "<br>");
    }
    function edrovadas(str) {
      $(".edrovadas").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>

</html>
<br>
<center>
<div>
</div>
<footer>

  <font size="4" style="color: green"> ᴹᵃᵈᵉ ʷⁱᵗʰ 💖 </font>
</footer>
<footer>
    𝐀𝐥𝐥 𝐑𝐢𝐠𝐡𝐭𝐬 𝐑𝐞𝐬𝐞𝐫𝐯𝐞𝐝 ©️️ 𝟐𝟎𝟐𝟎 ©️
</footer>
</center>
<center>
    <footer>
      <a href="logout.php"  class="buttonfx1 slideright2"style="width: 90px; height: 20px;text-align: center; outline: none;color :green" ><strong> 𝐋𝐎𝐆𝐎𝐔𝐓 </strong></strong></a></div>
    </footer>
</center>