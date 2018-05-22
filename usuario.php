<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Wari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

    
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link id="favicon" href="images/image.png" rel="icon" type="image/x-icon">    
        
</head>

<body>
                    

<section class="w3ls-section contact" id="contact">
    <div class="container">
        <div class="w3ls-title">
            <h3 class="heading">Cadastro de <span>Usuários</span></h3>
</div>
        <div class="contact_wthreerow agileits-w3layouts">
        
            <div class="col-md-7 w3l_contact_form">
            
                <form name="signup" enctype="multipart/form-data" method="post" action="salva_mensagem.php">
                    <input type="text" name="nome" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome';}"
                        required="">
                    <br><br>
                    <input type="password" name="senha" value="senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'data';}"
                        required="">
                    <br><br>
                    
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
    </div>

    <form action="index.html">
    <button class="btn btn-primary">Voltar</button>
</form><br><br>

</section>

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