<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Моя тайна: Анонимные признания</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="keywords" content="признания, анонимные признания, секреты, мой секрет, это мой секрет, как поделиться анонимно, посекретувсемусвету, по секрету всему свету, моя тайна, как признаться, наболело, выговориться">
  <meta name="description" content="Вэбсайт для анонимных признаний. Поделись своим секретом анонимно.">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="http://moyatajna.ru/images/favi.png">

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://www.moyatajna.ru" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Моя тайна: Анонимные признания" />
  <meta property="og:description"   content="Вэбсайт для анонимных признаний. Поделись своим секретом анонимно." />
  <meta property="og:image"         content="http://moyatajna.ru/images/sm.jpg" />



</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        Моя тайна.ру
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-clock-o"></i> Новейший</a></li>
        <li><a href="popular.php"><i class="fa fa-fire"></i> Популярные</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="add_confession"><a href="add_post.php" style="color: #31708f; font-weight: 600"><i class="fa fa-plus-circle"></i> Добавьте ваше признание</a></li>
        <div class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск по ID" id="search_input" onkeydown="if (event.keyCode == 13)
                        document.getElementById('search_button').click()">
          </div>
          <button type="submit" class="btn btn-default mysearch" onclick="searchById()" id="search_button"><span class="glyphicon glyphicon-search"></span>
 </button>
        </div>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- BODY STARTS HERE: -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3  text-center">
      <div class="empty80px"></div>
			<div class="fb-like" data-href="http://www.moyatajna.ru/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 empty80px" >
            <div class="jumbotron">
              <img class="logo" src="images/logo.png">
        <!--         <h2>Моя тайна</h2>
                <p>Не думай, скажи!</p> -->
            </div>
          </div>
        </div>