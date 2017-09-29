<!DOCTYPE HTML>
<html lang ="ru">
  <head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="Supaslider/orbit.css">
    <script type="text/javascript" src="Supaslider/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="Supaslider/jquery.orbit.min.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
        $('#featured').orbit({
          'bullets': true,
          'timer' : true,
          'animation' : 'horizontal-slide'
        });
      });
    </script>
</head>
<body>

<div class="wrapper">
    <header>
    <h1>
     <img SRC="IMAGES/logo.png" onclick=imgchange(this,"IMAGES/logo.png","IMAGES/logo1.png")>
<script>
  var x=false
  function imgchange(obj,imgX,imgY) {
   if  (x){
   obj.src=imgX
  } else {
   obj.src=imgY
   }
  x=!x
 }

 </script>
 </h1>          
    <nav>
      <ul>
          <li class="current"><a href="contact.html" title="contact">c&nbsp;o&nbsp;n&nbsp;t&nbsp;a&nbsp;c&nbsp;t</a></li>
          <li><a href="portfolio.html" title="portfolio">p&nbsp;o&nbsp;r&nbsp;t&nbsp;f&nbsp;o&nbsp;l&nbsp;i&nbsp;o</a></li>
          <li><a href="service.html" title="service">s&nbsp;e&nbsp;r&nbsp;v&nbsp;i&nbsp;c&nbsp;e</a></li>
          <li><a href="about.html" title="about">a&nbsp;b&nbsp;o&nbsp;u&nbsp;t</a></li>
          <li><a href="index.html" title="home">h&nbsp;o&nbsp;m&nbsp;e</a></li>
          
        </ul>
    </nav>

<li class="valley"><a href="#" class="button1"/>Войти</a></li>
          <li class="valley1"><a href="index.php" class="button2"/>Регистрация</a></li>
          


    <div id="featured"> 
      <img src="JS/slides/slide1.jpg" alt="slide1" />
      <img src="JS/slides/slide2.jpg" alt="slide2" /></a>
      <img src="JS/slides/slide3.jpg" alt="slide3" />
      <img src="JS/slides/slide4.jpg" alt="slide4"/>
    </div> 
  </div>
</header>

  <div class="content">
  <h5>“Hello, I am Goodware, a very easy and clean PSD template!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Feel free to use me and like me on facebook.”</h5>
    <h6><a href="service.html" class="button"/>Get it now for free!</a></h6>
    <li>
      
      <img src="IMAGES/content1.jpg" alt="content">
      <h2>Get the new Photoshop</h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna<br> aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&nbsp;&nbsp;</p>
      <a href="index.html" class="read"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read more</a>
      </li>
    <li>
      
      <img src="IMAGES/content2.jpg" alt="content1">  
      <h2>New Freebies on our site</h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna<br> aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&nbsp;&nbsp;</p>
      <a href="index.html" class="read1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read more</a>
      </li>
    <li>
      
      <img src="IMAGES/content3.jpg" alt="content2"/> 
      <h2>Be the first who get this!</h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna<br> aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&nbsp;&nbsp;</p>
      <a href="index.html" class="read2"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read more</a>
      </li>
</div>

    
<div class="footer">      
  <h3>From our Blog</h3>
  



      <ul>
      <code>

  <?php
 if(copy($_FILES["filename"]["tmp_name"],
 "../site/files/".$_FILES["filename"]["name"]))
{
  $wimage = "";
    $fimg = "";
    $path = "files/"; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    if (is_array($images)) { // если изображения найдены
    foreach($images as $image) { // делаем проход по массиву
    $fimg .= "<img src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />";
  }
    $wimage .= $fimg;
} else { // иначе, если нет изображений
    $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
    }
  } else { // иначе, если директория пуста или произошла ошибка
    $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>";
}
    echo $wimage; // выводим полученный результат
    } else {
 echo("Ошибка загрузки файла");
}
    ?></code>
     <style> code{position: relative;top:50px;left:140px; width: 80px;height: 80px;}</style>
   
      <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p></li>
      <font>March 13, 2012 | 5 Comments</font>
      <style>
      font{
        font-family: 'Verdana',Helvetica, sans-serif;
        font-style: italic;
        font-size: 75%;
        position: relative;
        top: 45px;
        text-align: left;
        right: 180px;
        color:#999999;
      }
      </style>
      </ul>

      <ul>
      <i><img src="IMAGES/avatar.png"></i>
      <style> i{position: relative;top:100px;left:-320px;}</style>
      <li><b>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</b></li>
      <li><dfn>March 13, 2012 | 5 Comments</dfn></li>
      <style>
      dfn{
        font-family: 'Verdana',Helvetica, sans-serif;
        font-style: italic;
        font-size: 75%;
        position: relative;
        top: 100px;
        left:-400px;
        text-align: left;
        right: 180px;
        color:#999999;
      }
      </style>
      </ul> 

      <h4>Latest Tweets</h4>
      <em><p>Dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p></em>
      <style>
        em p{
          color: white;
          font-style:normal; ;
          position: relative;
          top:-250px;
          right: -550px;
          width:180px;
        height: 50px;
        text-align: left;
        font-size: 110%;
        }
      </style>

      <kbd><p>GOODWARE<br>Easy psd template<br><br>Dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
</kbd>
<style>
kbd p{
          font-family: 'Verdana', Helvetica, sans-serif;
          font-size: 100%;
          color: white;
          font-weight:bold; ;
          position: relative;
          top:-290px;
          right: -850px;
          width:300px;
        height: 50px;
        text-align: left;
        font-size: 110%;
        }
  }</style>

</div>
      
      


</body>

  
  
</html>