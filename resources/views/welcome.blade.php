<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  opacity:1;
}
  
.dropdown-menu {
  opacity:.3;
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  display: block; 
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
}

        </style>
  </head>
  <body>
    <<div class="navbar navbar-default navbar-static-top">
  <div class="container bootstrap snippets bootdey">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Grones</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">Music <b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                <li role="presentation"><a href="#" role="menuitem">Bootdey.com</a></li>
                <li role="presentation"><a href="#" role="menuitem">Option 2</a></li>
                <li role="presentation"><a href="#" role="menuitem">Option 3</a></li>
                <li role="presentation"><a href="#" role="menuitem">New Snippets</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container bootstrap snippets bootdey">
  
 
</div><!-- /.container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>