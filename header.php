<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Моя тайна: Add your confession</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Моя тайна.ру</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-fire"></i> Популярные</a></li>
        <!-- <li><a href="#"><i class="fa fa-clock-o"></i> Новейший</a></li> -->
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="font-weight: 700"><a href="add_post.php"><i class="fa fa-plus-circle"></i> Добавьте ваше признание</a></li>
        <div class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by ID" id="search_input">
          </div>
          <button type="submit" class="btn btn-default mysearch" onclick="searchById()"><span class="glyphicon glyphicon-search"></span>
 </button>
        </div>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- BODY STARTS HERE: -->

<div class="container-fluid">
    <div class="row">

      <div class="col-sm-2">
        <div class="affix" data-spy="affix" data-offset-top="0" data-offset-bottom="0" style="width: 200px">
          <div style="margin-top: 80px"></div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Like us</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12" style="padding-top: 80px;">
            <div class="jumbotron">
              <h1>
                Признания
              </h1>
              <blockquote>
                <p>Не думай, скажи!</p>
              </blockquote>
            </div>
          </div>
        </div>