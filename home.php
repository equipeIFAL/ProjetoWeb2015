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
        <h1 class="text-inverse">SIMULADO DESTEMIDO \O/</h1>
        <p class="text-inverse">Aqui você vai acertar!!!</p>
		<img src="seta_baixo_fade2">
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
        <form class="form-horizontal" action="gabarito.php" role="form">
          <div class="form-group">
            <?php require('prova.php');?>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-default pull-right">Submeter</button>
              </div>
            </div>
          </div>
        </form>
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