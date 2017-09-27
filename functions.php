<?php


define( 'WP_DEBUG', true );

add_theme_support( 'custom-logo' );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
    'default-image'          => get_site_url().'/wp-content/themes/telecon/img/logo.png',
) );


register_nav_menus( array(
  'menu-topo' => __( 'Menu topo', '' )
));


add_theme_support( 'custom-header' );
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );



add_action( 'customize_register', 'telecon_register_theme_customizer' );
function telecon_register_theme_customizer( $wp_customize ) {

// =====================
    //  = NEWSLETTER =
    //  =====================

 $wp_customize->add_section( 'news_area' , array(
 'title' => __('Newsletter','telecon'),
  'priority' => 10
 ) );

// =====================
    //  = NEWSLETTER TITULO =
    //  =====================
 $wp_customize->add_setting( 'news_titulo', array(
 'default' => __( 'NEWSLETTER', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'news_area[titulo]',
 array(
 'label' => __( 'Newsletter', 'telecon' ),
 'section' => 'news_area',
 'settings' => 'news_titulo',
 'type' => 'text'
 )
 )
 ); /* FIM NEWSLETTER */




// =====================
    //  = TREINAMENTO =
    //  =====================

 $wp_customize->add_section( 'trei_area' , array(
 'title' => __('Treinamentos','telecon'),
  'priority' => 10
 ) );

// =====================
    //  = NEWSLETTER TITULO =
    //  =====================
 $wp_customize->add_setting( 'trei_titulo', array(
 'default' => __( 'Treinamentos e Consultoria em Segurança e Medicina do Trabalho', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'trei_area[titulo]',
 array(
 'label' => __( 'Texto', 'telecon' ),
 'section' => 'trei_area',
 'settings' => 'trei_titulo',
 'type' => 'text'
 )
 )
 );
 
 // =====================
    //  = NEWSLETTER BTN =
    //  =====================
 $wp_customize->add_setting( 'trei_btn', array(
 'default' => __( 'SOLICITAR ORÇAMENTO', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'trei_area[btn]',
 array(
 'label' => __( 'Botão', 'telecon' ),
 'section' => 'trei_area',
 'settings' => 'trei_btn',
 'type' => 'text'
 )
 )
 );
 
 
  /* FIM NEWSLETTER */





// =====================
    //  = Contato =
    //  =====================

 $wp_customize->add_section( 'mail_area' , array(
 'title' => __('Contato','telecon'),
  'priority' => 10
 ) );

// =====================
    //  = EMAIL PARA MENSAGEM =
    //  =====================
 $wp_customize->add_setting( 'mail_titulo', array(
 'default' => __( 'contato@alvitre.net', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'mail_area[titulo]',
 array(
 'label' => __( 'E-mail', 'telecon' ),
 'section' => 'mail_area',
 'settings' => 'mail_titulo',
 'type' => 'text'
 )
 )
 );
 
 
  /* FIM NEWSLETTER */







// =====================
    //  = EMPRESA =
    //  =====================

 $wp_customize->add_section( 'custom_footer_text' , array(
 'title' => __('Empresa','telecon'),
  'priority' => 10
 ) );

// =====================
    //  = EMPRESA TITULO =
    //  =====================
 $wp_customize->add_setting( 'empresa_titulo', array(
 'default' => __( 'A Empresa', 'telecon' ),
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_footer_text[titulo]',
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'custom_footer_text',
 'settings' => 'empresa_titulo',
 'type' => 'text'
 )
 )
 );

// =====================
    //  = EMPRESA TEXTO =
    //  =====================

 $wp_customize->add_setting( 'empresa_texto', array(
 'default' => __( 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, 
 vel sagittis velit mauris vel metus. Aenean fermentum risus id tortor. Integer imperdiet lec tus quis justo. Integer tempor. 
 Vivamus ac urna vel leo pretium faucibu s. Mauris elementum mauris vitae tortor. In dapibus augue no n sapien. Aliquam ante. 
 Curabitur bibendum <br><br> justo non orci. Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere e u, velit.
  Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. Nunc tincidunt ante vitae massa. 
  Duis ante orci, molestie vitae, v ehicula venenatis, tincidunt ac, pede.
   Nulla acc umsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. 
   Etiam commodo dui eget wisi. Donec i aculis gravida nulla.
  Donec quis nibh at felis congue commodo. Etiam bibendum elit eget erat.', 'telecontext' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_footer_text[texto]',
 array(
 'label' => __( 'Texto', 'telecontext' ),
 'section' => 'custom_footer_text',
 'settings' => 'empresa_texto',
 'type' => 'textarea'
 )
 )
 );




// =====================
    //  = CURSO =
    //  =====================

$wp_customize->add_panel( 'painel_curso', array(
 'priority' => 10,
 'theme_supports' => '',
 'title' => __( 'Curso', 'telecon' ),
 'description' => __( 'Set editable text for certain content.', 'telecon' ),
 ) );


// =====================
    //  = AREA TOPO CURSO =
    //  =====================


 $wp_customize->add_section( 'curso_area' , array(
 'title' => __('Curso','telecon'),
  'priority' => 10,
  'panel' => 'painel_curso',
 ) );

// =====================
    //  = CURSO TITULO =
    //  =====================
 $wp_customize->add_setting( 'curso_titulo', array(
 'default' => __( 'Curso', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'curso_area[titulo]',
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'curso_area',
 'settings' => 'curso_titulo',
 'type' => 'text'
 )
 )
 );
 
// =====================
    //  = CURSO TEXTO =
    //  =====================

 $wp_customize->add_setting( 'curso_texto', array(
 'default' => __( 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet phar<br>
fermentum risus id tortor. Integer imperdiet lec tus quis justo. Integer te' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'curso_area[texto]',
 array(
 'label' => __( 'Texto', 'telecontext' ),
 'section' => 'curso_area',
 'settings' => 'curso_texto',
 'type' => 'textarea'
 )
 )
 );


for($count_painel = 1; $count_painel < 4; $count_painel++ ){

// =====================
    //  = CURSO PAINEIS =
    //  =====================

 $wp_customize->add_section( 'painel_area'.$count_painel , array(
 'title' => __('Painel Curso'.$count_painel,'telecon'),
  'priority' => 10,
  'panel' => 'painel_curso',
 ) );

// =====================
    //  = CURSO PAINEL TITULO =
    //  =====================
 $wp_customize->add_setting( 'painel_titulo'.$count_painel, array(
 'default' => __( 'MAECENAS <br> Morbi $ 99,00 a metus.', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area[titulo]'.$count_painel,
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'painel_area'.$count_painel,
 'settings' => 'painel_titulo'.$count_painel,
 'type' => 'text'
 )
 )
 );

// =====================
    //  = CURSO PAINEL TEXTO =
    //  =====================
 $wp_customize->add_setting( 'painel_texto'.$count_painel, array(
 'default' => __( 'Maecenas ipsum velit, consectetuer eu, lobortis ut, 
                    dictum at, dui. In rutrum. Sed ac dolor sit amet purus
                    malesuada congue. In laoreet, magna', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area[texto]'.$count_painel,
 array(
 'label' => __( 'Texto', 'telecon' ),
 'section' => 'painel_area'.$count_painel,
 'settings' => 'painel_texto'.$count_painel,
 'type' => 'textarea'
 )
 )
 );


// =====================
    //  = CURSO PAINEL BOTÃO =
    //  =====================
 $wp_customize->add_setting( 'painel_btn'.$count_painel, array(
 'default' => __( 'GET START NOW', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area[btn]'.$count_painel,
 array(
 'label' => __( 'Botão', 'telecon' ),
 'section' => 'painel_area'.$count_painel,
 'settings' => 'painel_btn'.$count_painel,
 'type' => 'text'
 )
 )
 );


} /* FINAL PAINEL */




// =====================
    //  = laudo =
    //  =====================

$wp_customize->add_panel( 'painel_laudo', array(
 'priority' => 10,
 'theme_supports' => '',
 'title' => __( 'Laudo', 'telecon' ),
 'description' => __( 'Set editable text for certain content.', 'telecon' ),
 ) );


// =====================
    //  = AREA TOPO laudo =
    //  =====================


 $wp_customize->add_section( 'laudo_area' , array(
 'title' => __('Laudo','telecon'),
  'priority' => 10,
  'panel' => 'painel_laudo',
 ) );

// =====================
    //  = laudo TITULO =
    //  =====================
 $wp_customize->add_setting( 'laudo_titulo', array(
 'default' => __( 'LAUDOS TÉCNICOS', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'laudo_area[titulo]',
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'laudo_area',
 'settings' => 'laudo_titulo',
 'type' => 'text'
 )
 )
 );
 
// =====================
    //  = laudo TEXTO =
    //  =====================

 $wp_customize->add_setting( 'laudo_texto', array(
 'default' => __( 'Maecenas ipsum velit, consectetuer eu, lobortis ut,<br>
Aenean placerat. In vulputate urna eu' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'laudo_area[texto]',
 array(
 'label' => __( 'Texto', 'telecontext' ),
 'section' => 'laudo_area',
 'settings' => 'laudo_texto',
 'type' => 'textarea'
 )
 )
 );


for($count_painel_laudo = 1; $count_painel_laudo < 4; $count_painel_laudo++ ){

// =====================
    //  = laudo PAINEIS =
    //  =====================

 $wp_customize->add_section( 'painel_area_laudo'.$count_painel_laudo , array(
 'title' => __('Painel laudo '.$count_painel_laudo,'telecon'),
  'priority' => 10,
  'panel' => 'painel_laudo',
 ) );

// =====================
    //  = laudo PAINEL TITULO =
    //  =====================
 $wp_customize->add_setting( 'painel_titulo_laudo'.$count_painel_laudo, array(
 'default' => __( 'Nome do curso  <br><br>$99,00 ', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area_laudo[titulo]'.$count_painel_laudo,
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'painel_area_laudo'.$count_painel_laudo,
 'settings' => 'painel_titulo_laudo'.$count_painel_laudo,
 'type' => 'text'
 )
 )
 );

// =====================
    //  = laudo PAINEL TEXTO =
    //  =====================
 $wp_customize->add_setting( 'painel_texto_laudo'.$count_painel_laudo, array(
 'default' => __( 'Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit. Nullam feugiat, 
 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat,Lorem ipsum dolor sit amet,', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area_laudo[texto]'.$count_painel_laudo,
 array(
 'label' => __( 'Texto', 'telecon' ),
 'section' => 'painel_area_laudo'.$count_painel_laudo,
 'settings' => 'painel_texto_laudo'.$count_painel_laudo,
 'type' => 'textarea'
 )
 )
 );


// =====================
    //  = laudo PAINEL BOTÃO =
    //  =====================
 $wp_customize->add_setting( 'painel_btn_laudo'.$count_painel_laudo, array(
 'default' => __( 'GET WIGH', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'painel_area_laudo[btn]'.$count_painel_laudo,
 array(
 'label' => __( 'Botão', 'telecon' ),
 'section' => 'painel_area_laudo'.$count_painel_laudo,
 'settings' => 'painel_btn_laudo'.$count_painel_laudo,
 'type' => 'text'
 )
 )
 );


} /* FINAL PAINEL */




// =====================
    //  = SLIDE CURSO =
    //  =====================
  

 $wp_customize->add_section( 'slide_area' , array(
 'title' => __('Slide','telecon'),
  'priority' => 10,
    
 ) );




// =====================
    //  = PAINEL SLIDE =
    //  =====================

$wp_customize->add_panel( 'slide_one', array(
 'priority' => 10,
 'theme_supports' => '',
 'title' => __( 'Slide', 'telecon' ),
 'description' => __( 'Set editable text for certain content.', 'telecon' ),
 ) );

 // =====================
    //  = SLIDE =
    //  =====================
  

for($count_slide = 1; $count_slide < 4;  $count_slide++){
   
 $wp_customize->add_section( 'slide_area'.$count_slide , array(
 'title' => __('Slide'.$count_slide,'telecon'),
  'priority' => 10,
    'panel' => 'slide_one',
 ) );


// =====================
    //  = SLIDE IMG  =
    //  =====================
 $wp_customize->add_setting( 'image_slide'.$count_slide, array(
     'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'default'           => get_site_url().'/wp-content/themes/telecon/img/exame/exame.png',
      
 ) );

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_slide'.$count_slide, array(
        'label'    => __('imagem do Slide', 'telecon'),
        'section'  => 'slide_area'.$count_slide,
        	'priority' => 9,
    )));



 // =====================
    //  = SLIDE TITULO =
    //  =====================

 $wp_customize->add_setting( 'slide_titulo'.$count_slide, array(
 'default' => __( 'TELECON BR' ),


 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'slide_area[titulo]'.$count_slide,
 array(
 'label' => __( 'TITULO', 'telecontext' ),
 'section' => 'slide_area'.$count_slide,
 'settings' => 'slide_titulo'.$count_slide,
 'type' => 'text'
 )
 )
 );

 

// =====================
    //  = SLIDE TEXTO =
    //  =====================

 $wp_customize->add_setting( 'slide_texto'.$count_slide, array(
 'default' => __( 'Praesent in mauris eu tortor porttitor<br> accumsan. Mauris suscipit, ligula sit amet phar<br>
fermentum risus id tortor. Integer imperdiet lec tus quis justo. Integer te' ),


 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'slide_area[texto]'.$count_slide,
 array(
 'label' => __( 'Texto', 'telecontext' ),
 'section' => 'slide_area'.$count_slide,
 'settings' => 'slide_texto'.$count_slide,
 'type' => 'textarea'
 )
 )
 );






} /*fim Slide*/



// =====================
    //  = Exames =
    //  =====================


$wp_customize->add_panel( 'exames_curso', array(
 'priority' => 10,
 'theme_supports' => '',
 'title' => __( 'Exames', 'telecon' ),
 'description' => __( 'Set editable text for certain content.', 'telecon' ),
 ) );


 $wp_customize->add_section( 'exames_area' , array(
 'title' => __('Painel Exame','telecon'),
  'priority' => 10,
  'panel' => 'exames_curso'
 ) );

// =====================
    //  = EXAMES FOTO =
    //  =====================


 $wp_customize->add_setting( 'image_exame', array(
     'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
        'default'           => get_site_url().'/wp-content/themes/telecon/img/exame/exame.png',
      
 ) );

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_exame', array(
        'label'    => __('imagem do Exame', 'telecon'),
        'section'  => 'exames_area',
        	'priority' => 9,
    )));



// =====================
    //  = EXAMES PAINEL TITULO =
    //  =====================
 $wp_customize->add_setting( 'exames_titulo', array(
 'default' => __( 'Exame', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'exames_area[titulo]',
 array(
 'label' => __( 'Titulo', 'telecon' ),
 'section' => 'exames_area',
 'settings' => 'exames_titulo',
 'type' => 'text'
 )
 )
 );

 $wp_customize->add_setting( 'exames_texto', array(
 'default' => __( 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, <br>
ligula  sit amet phar fermentum risus id tortor. Integer imperdiet lec tus quis ', 'telecon' ),

 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'exames_area[texto]',
 array(
 'label' => __( 'Texto', 'telecon' ),
 'section' => 'exames_area',
 'settings' => 'exames_texto',
 'type' => 'text'
 )
 )
 );

    // =====================
    //  = ITENS EXAMES PAINEL =
    //  =====================

 $wp_customize->add_section( 'itens_exames_area' , array(
 'title' => __('Itens Exame','telecon'),
  'priority' => 10,
  'panel' => 'exames_curso',
 ) );

for($count_item = 1; $count_item < 6; $count_item++ ){
        $wp_customize->add_setting( 'itens_exames_texto'.$count_item, array(
        'default' => __( ' Lorem ipsum dolor <br> sit', 'telecon' ),

        ) );

        $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'itens_exames_area[texto]'.$count_item,
        array(
        'label' => __( 'Item'.$count_item, 'telecon' ),
        'section' => 'itens_exames_area',
        'settings' => 'itens_exames_texto'.$count_item,
        'type' => 'text'
        )
        )
        );
}

$wp_customize->add_setting( 'exames_btn', array(
 'default' => __( 'GET START NOW', 'telecon' ),

   'panel' => 'exames_curso',
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'exames_area[btn]',
 array(
 'label' => __( 'Botão', 'telecon' ),
 'section' => 'exames_area',
 'settings' => 'exames_btn',
 'type' => 'text'
 )
 )
 );


    // =====================
    //  = AREA SOBRE =
    //  =====================


$wp_customize->add_panel( 'sobre_one', array(
 'priority' => 10,
 'theme_supports' => '',
 'title' => __( 'Sobre', 'telecon' ),
 'description' => __( 'Set editable text for certain content.', 'telecon' ),
 ) );




for($count_sobre = 1; $count_sobre < 4;  $count_sobre++){



if($count_sobre == 1){
    $titulo_default = "SOBRE";
    $texto_default = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Cras ullamcorper urna in lorem laoreet, in consectetur felis dignissim.
Donec id neque ut tellus cursus facilisis in at ex.
Morbi sed arcu facilisis, semper velit in, consequat lorem.
In mattis dolor luctus consectetur placerat.
Aliquam ut libero tempor, vulputate velit a, posuere risus.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Cras ullamcorper urna in lorem laoreet, in consectetur felis dignissim.
Donec id neque ut tellus cursus facilisis in at ex.
Morbi sed arcu facilisis, semper velit in, consequat lorem.
In mattis dolor luctus consectetur placerat.
Aliquam ut libero tempor, vulputate velit a, posuere risus.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Cras ullamcorper urna in lorem laoreet, in consectetur felis dignissim.
Donec id neque ut tellus cursus facilisis in at ex.
Morbi sed arcu facilisis, semper velit in, consequat lorem.
In mattis dolor luctus consectetur placerat.
Aliquam ut libero tempor, vulputate velit a, posuere risus.";
}

if($count_sobre == 2){
        $titulo_default = "USER FAL LINKS";
        $texto_default = "Duis ac sapien eu dolor lobortis gravida a vel tellus.
Donec eget turpis id velit auctor vulputate at sed lacus.
Vestibulum vel sem mollis, posuere leo id, finibus nibh.
Aenean euismod dolor eu efficitur venenatis.
Sed fermentum felis sed elit gravida porta.
Vivamus eget ipsum condimentum, iaculis lectus ac, dapibus mi.Du
is ac sapien eu dolor lobortis gravida a vel tellus.
Donec eget turpis id velit auctor vulputate at sed lacus.
Vestibulum vel sem mollis, posuere leo id, finibus nibh.
Aenean euismod dolor eu efficitur venenatis.
Sed fermentum felis sed elit gravida porta.
Vivamus eget ipsum condimentum, iaculis lectus ac, dapibus mi.
Duis ac sapien eu dolor lobortis gravida a vel tellus.
Donec eget turpis id velit auctor vulputate at sed lacus.
Vestibulum vel sem mollis, posuere leo id, finibus nibh.
Aenean euismod dolor eu efficitur venenatis.
Sed fermentum felis sed elit gravida porta.
Vivamus eget ipsum condimentum, iaculis lectus ac, dapibus mi.
Duis ac sapien eu dolor lobortis gravida a vel tellus.
Donec eget turpis id velit auctor vulputate at sed lacus.
Vestibulum vel sem mollis, posuere leo id, finibus nibh.
Aenean euismod dolor eu efficitur venenatis.
";
}

if($count_sobre == 3){
         $titulo_default = "HELP";
         $texto_default = "Duis ac sapien eu dolor lobortis gravida a vel tellus.
Donec eget turpis id velit auctor vulputate at sed lacus.
Vestibulum vel sem mollis, posuere leo id, finibus nibh.
Aenean euismod dolor eu efficitur venenatis.
Sed fermentum felis sed elit gravida porta.
Vivamus eget ipsum condimentum, iaculis lectus ac, dapibus mi.";
}



   
 $wp_customize->add_section( 'sobre_area'.$count_sobre , array(
 'title' => __('Sobre '.$count_sobre,'telecon'),
  'priority' => 10,
    'panel' => 'sobre_one',
 ) );

 /* TITULOS SOBRE */
 
  $wp_customize->add_setting( 'sobre_titulo'.$count_sobre, array(
 'default' => __( $titulo_default ),


 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'sobre_area[titulo]'.$count_sobre,
 array(
 'label' => __( 'Titulo', 'telecontext' ),
 'section' => 'sobre_area'.$count_sobre,
 'settings' => 'sobre_titulo'.$count_sobre,
 'type' => 'text'
 )
 )
 );

/* TEXTOS SOBRE */
 
  $wp_customize->add_setting( 'sobre_texto'.$count_sobre, array(
 'default' => __( $texto_default ),


 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'sobre_area[texto]'.$count_sobre,
 array(
 'label' => __( 'Titulo', 'telecontext' ),
 'section' => 'sobre_area'.$count_sobre,
 'settings' => 'sobre_texto'.$count_sobre,
 'type' => 'textarea'
 )
 )
 );

} /*fim SOBRE*/




    // =====================
    //  = AREA RODAPE =
    //  =====================


 $wp_customize->add_section( 'rodape_area', array(
 'title' => __('Rodapé ','telecon'),
  'priority' => 10,
 ) );

for($count_rodape = 1; $count_rodape < 5;  $count_rodape++){

if($count_rodape == 1){
    $titulos_rodape_default = "R. Tomé de Souza - Lapa -São Paulo - SP";
    $nome_area_rodape = "Endereço";
}

if($count_rodape == 2){
    $titulos_rodape_default = "11 2541-5946  /  3222-4049";
    $nome_area_rodape = "Telefone";
}

if($count_rodape == 3){
    $titulos_rodape_default = "+55 11 943481623";
    $nome_area_rodape = "WhatsApp";
}

if($count_rodape == 4){
    $titulos_rodape_default = "contato@telecon.com.br";
    $nome_area_rodape = "E-mail";
}

 /* TITULOS rodape */
 
  $wp_customize->add_setting( 'rodape_titulo'.$count_rodape, array(
 'default' => __( $titulos_rodape_default ),


 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'rodape_area[titulo]'.$count_rodape,
 array(
 'label' => __( $nome_area_rodape, 'telecontext' ),
 'section' => 'rodape_area',
 'settings' => 'rodape_titulo'.$count_rodape,
 'type' => 'text'
 )
 )
 );


}/* FIM RODAPE */

 $wp_customize->add_setting( 'copright', array(
 'default' => __('TELECONBR - TODOS OS DIREITOS RESERVADOS '),
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'rodape_area[copright]',
 array(
 'label' => __( 'Copright', 'telecontext' ),
 'section' => 'rodape_area',
 'settings' => 'copright',
 'type' => 'text'
 )
 )
 );




}


 ?>