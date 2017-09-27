
<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );


'image_slide'.$count_slide



?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo('name') ?></title>

    <link href="./wp-content/themes/telecon/css/bootstrap.css" rel="stylesheet">
    <link href="./wp-content/themes/telecon/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./wp-content/themes/telecon/js/bootstrap.min.js"></script>
    <script src="./wp-content/themes/telecon/js/app.js"></script>







   </head>


  <body>
    
<div class="container-fluid">
<div class="row row-menu">
  <div class="col-xs-12 col-md-3"> 
      <div class="div-logo">
        <img class="img-responsive logo-telecon" src="<?php  echo $image[0]; ?>">
        </div>
    </div>
  <div class="col-md-9 col-xs-12"> 
  <div class="bs-example" data-example-id="inverted-navbar">
    <nav class="navbar">
        <div class="container-menu">
          <div class="navbar-header">
         
               <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                 </button> 
         
               

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                
                              <?php 
             
            $menu = array(
                'theme_location'  => 'menu-topo',
                'menu'            => 'navbar-nav',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => FALSE,
                'fallback_cb'     => '__return_false',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
                );


           
            $menu_top = wp_nav_menu($menu);
          
          if ( ! empty ( $menu_top  ) )
{
    echo  $menu_top;

}   else{
              echo '                    <ul class="nav navbar-nav navbar-right"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10" id="menu-item-10"><a href="#empresa">A EMPRESA</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11" id="menu-item-11"><a href="#cursos">CURSOS</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12" id="menu-item-12"><a href="#exames">EXAMES</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13" id="menu-item-13"><a href="#laudos">LAUDOS</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14" id="menu-item-14"><a href="#contato">CONTATO</a></li>
</ul>         ';
            }

              ?>
            </div>
          </div>
         </div> 
      </nav>
      </div>  
  </div>
</div>

<div class="row row-slide">
  <div class="area-slide">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
                <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Slide -->
            <div class="carousel-inner" role="listbox">
                        <?php 
                        for($count_slide = 1; $count_slide < 4; $count_slide++){ 
                        $slide_url = get_theme_mod('image_slide'.$count_slide);
                        $slide = esc_url($slide_url);
                        ?>
                    <div class="item  <?php if($count_slide == 1){ echo "active";  }?>">
                          <img src="<?php echo $slide_url?> " alt="...">
                        <div class="carousel-caption">
                            <span class="titulo-slide"><?php echo get_theme_mod('slide_titulo'.$count_slide); ?></span><br>
                            <span class="texto-slide"> <?php echo get_theme_mod('slide_texto'.$count_slide); ?></span>
                        </div>
                    </div>
                        <?php } ?>
                  
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
            </div>
      </div>
  </div>          
</div>    


<div class="row row-newsletter">

      <div class="newsletter ">
           
              <div class="col-md-2 col-md-offset-2  col-xs-12">
                    <h3 class="titulo-news"><?php echo get_theme_mod('news_titulo');?></h3>
              </div>   

              <div class="col-md-4  col-xs-8 col-xs-offset-3 form-news"> 
                      
                          <div class=""><img class="btn-adress"  src="./wp-content/themes/telecon/img/icones/adress.png"></div>
                        <form name="cadastroNews" id="cadastroNews" method="post" action="./wp-content/themes/telecon/mail/enviar-news.php">
                        <input type="email" placeholder="Digite seu e-mail" class="form-transparent input-news" name="emailNews">
                         <input type="hidden" name="emailEnviarNews" value="<?php echo get_theme_mod('mail_titulo'); ?>">
                          <div class=""><img class="btn-plus" src="./wp-content/themes/telecon/img/icones/plus.png" onclick="document.cadastroNews.submit();"></div>
                        </form>
                           

                           

                    
              </div>

          
      </div>

</div>

 
                           