<?php
include_once('banco.php');

$id = $_GET['id'];
$query= "Select * from cadastro where id = {$id}";
$result = mysqli_query($conn1,$query);
$exibe = mysqli_fetch_assoc($result);

if(isset($_GET['update']))
{
    echo
    "<script>   
alert('Cadastro alterado com sucesso!');
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel='icon' type='image/jpg' href="anuncio.jpg">
    <title>Exibir Eventos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="base.css" media="screen">
    <link rel="stylesheet" href="https://code.google.com/p/css3-mediaqueries-js">

    <script src="js/jquery-1.7.2.min.js"></script>

    <link href="css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">

   
    <link id="favicon" href="images/image.png" rel="icon" type="image/x-icon">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<h1 style="text-align:center;">Exibir Eventos</h1>

<br>


<div class="container">

    <div id="meuSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li href="#" data-target="#meuSlider" data-slide-to="0" class="active"></li>
            <li data-target="#meuSlider" data-slide-to="1"></li>
            <li data-target="#meuSlider" data-slide-to="2"></li>
            <li data-target="#meuSlider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div href="#lightbox" data-toggle="modal" class="item active"><img src="<?php echo $exibe['imagem1']; ?>"  alt="Slider 1" style= "margin-left:450px; width:400px; height:500px;"/></div>
            <div href="#lightbox" data-toggle="modal" class="item"><img src="<?php echo $exibe['imagem2']; ?>" alt="Slide 2" style= "margin-left:450px; width:400px; height:500px;" /></div>
            <div href="#lightbox" data-toggle="modal" class="item"><img src="<?php echo $exibe['imagem3']; ?>" alt="Slide 3" style= "margin-left:450px; width:400px; height:500px;/"></div>
            <div href="#lightbox" data-toggle="modal" class="item"><img src="<?php echo $exibe['imagem4']; ?>" alt="Slide 4" style= "margin-left:450px; width:400px; height:500px;"/></div>
        </div>
        <a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <br><br>


    <div class="modal fade and carousel slide" id="lightbox">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                        <li data-target="#lightbox" data-slide-to="1"></li>
                        <li data-target="#lightbox" data-slide-to="2"></li>
                        <li data-target="#lightbox" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo $exibe['imagem1']; ?>" alt="First slide" style="margin:0 auto;"/></>
                        </div>
                        <div class="item">
                            <img src="<?php echo $exibe['imagem2']; ?>" alt="Second slide" style="margin:0 auto;"/></>
                        </div>
                        <div class="item">
                            <img src="<?php echo $exibe['imagem3']; ?>" alt="Third slide" style="margin:0 auto;"/></>
                        </div>
                        <div class="item">
                            <img src="<?php echo $exibe['imagem4']; ?>" alt="Four slide" style="margin:0 auto;"/></>
                            <div class="carousel-caption"></div>
                        </div>
                    </div><!-- /.carousel-inner -->
                    <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div><!-- /.modal-body -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div><!-- /.container -->

<div>
    <form name="signup" enctype="multipart/form-data" method="post" action="">
        &nbsp&nbsp&nbsp&nbsp<label class="control-label"><?= $exibe['nome']; ?></label><br><br>
        &nbsp&nbsp&nbsp&nbsp<label class="control-label"><?= $exibe['data']; ?><br><br>
    

        <input  type="hidden" name="id" value="<?= $exibe['id']; ?>"  />
    </form>
</div>


<form action="exibirimagens.php">
    <button class="btn btn-primary">Voltar</button>
</form><br><br>

<section class="footer">
    <div class="container">
        <div class="agileinfo-grids">
            <div class="agile-grid-left agile-grid-right">
                <h4>Wari</h4>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agile-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#about" class="scroll">Sobre</a></li>              
                <li><a href="#contact" class="scroll">Contato</a></li>
            </ul>
        </div>
    </div>
</section>

<div class="copyright">
    <div class="container">
        <p>© 2018 wari. All Rights Reserved<a href="http://w3layouts.com/"></a> </p>
    </div>
</div>

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type='text/javascript'>
    jQuery("document").ready(function($){
        var nav = $('.conteudo');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 570) {
                nav.addClass("menu-fixo");
            } else {
                nav.removeClass("menu-fixo");
            }
        });
    });
    </script>
    
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
            type: 'default',            
            width: 'auto', 
            fit: true,   
            closed: 'accordion', 
            activate: function(event) { 
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            }
            });
            $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
            });
        });
    </script>
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script> 
    
    <script src="js/responsiveslides.min.js"></script>
    <script>
        
        $(function () {
          
          $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });
    
        });
     </script>
    
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
            });
                                                                                            
        });
        </script>
    
    <script src="js/waypoints.min.js"></script> 
    <script src="js/counterup.min.js"></script> 
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000 
            });
        });
    </script>
    
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
    </script>
    
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    
</body>
</html>


