<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
</head><body>
<div class="cover">
  <div class="background-image-fixed cover-image" style="background-image : url('img/bg.jpg')"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-inverse">Resultado abaixo</h1>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <?php 
          require('questoes.php');
          
          $respostas_subimetidas = $_GET['resposta'];
          $questoes_corretas = '';
          $questoes_incorretas = '';
          $acertos = 0;

          for ($i = 0; $i<count($gabarito); $i++) {
            if($respostas_subimetidas[$i] == $gabarito[$i]){
              $acertos++;
              $questoes_corretas .= $i + 1 . ', ';
            }else{
              $questoes_incorretas .= $i + 1 . ', ';
            }
          }

          echo "<p>Acertos: $acertos</p>";
          echo "<p>Questões corretas: $questoes_corretas</p>";
          echo "<p>Questões incorretas: $questoes_incorretas</p>";

        ?>
      </div>
    </div>
  </div>
</div>
<footer class="section section-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p>Copyright</p>
      </div>
    </div>
  </div>
</footer>
</body></html>