<?php 

include('header.php');

                    $exame_img = get_theme_mod( 'image_exame' ); 
                   
?>   
    <div class="row row-empresa">
        <session id="empresa">
            <div class="area-empresa text-center">
                <h3 class="titulo-empresa"><?php echo get_theme_mod( 'empresa_titulo' ); ?></h3>
                
                <div class="col-md-10 col-md-offset-1 texto-empresa">
                    <p class="texto-empresa"><?php echo get_theme_mod( 'empresa_texto' ); ?></p>
                </div>
            </div>
        </session>
    </div>

<div class="row row-cursos">
    <session id="cursos">
            <div class="area-cursos text-center">
            <h3 class="titulo-cursos"><?php echo get_theme_mod( 'curso_titulo' ); ?></h3>
            <p><?php echo get_theme_mod( 'curso_texto' );?></p>           
        <div class="paineis-cursos">
                <?php for($count_painel = 1; $count_painel < 4 ; $count_painel++){?>
                            <div class="col-md-4">
                                <div class="painel-curso 
                                    <?php if($count_painel == 2){ echo "painel-color-green";} else{echo "painel-color";}?>">
                                    <h4 class="titulo-curso"><?php echo get_theme_mod('painel_titulo'.$count_painel); ?></h4>
                                    <div class="risco-curso"></div>
                                    <p class="texto-curso"><?php echo get_theme_mod('painel_texto'.$count_painel); ?></p>
                                    <div class="btn"><?php echo get_theme_mod('painel_btn'.$count_painel); ?></div>
                                </div>
                            </div>
                <?php } ?>
            </div>
        </div> 
     </session>
</div>

<?php

$exame_img = esc_url($exame_img);
 $exame_img_back =  "style='background-image: url('$exame_img');'"; 

 ?>

 <div class="row row-exames">
    <session id="exames">
             <div class="area-exames text-left">
                <div class="col-md-6 col-xs-12 col-img-exame">
                    <img class="img-exame" src="<?php echo $exame_img; ?>">
                </div>
                <div class="col-md-6 col-xs-12 textos-exames ">
                    <div class="col-md-12" >
                        <h3 class="titulo-exame">
                            
                            <?php echo get_theme_mod('exames_titulo'); ?>
                        </h3>
                        <h4 class="texto-exame">
                            <?php echo get_theme_mod('exames_texto'); ?> 
                        </h4>
                        <div class="col-md-12 area-itens">    
                            <?php for($count_item = 1; $count_item < 6; $count_item++ ){?>
                                <p class="item-texto">
                                <span class="glyphicon glyphicon-check green-color" aria-hidden="true"></span>
                                    <?php echo get_theme_mod('itens_exames_texto'.$count_item);?>
                                </p>                        
                            <?php } ?>
                        </div>  
                    
                    </div>    
                    <div class="col-xs-10 col-xs-offset-1  text-center div-btn-exame">
                                <div class="btn btn-primary btn-transparent"><?php echo get_theme_mod('exames_btn');?></div>
                    </div>
                  </div>   
            </div>     
    </session>
 </div>




 <div class="row row-laudos">
    <session id="laudos">
        <div class="area-laudos text-center">
                 <h3 class="titulo-laudo"><?php echo get_theme_mod( 'laudo_titulo' ); ?></h3>
                <p class="texto-laudo"><?php echo get_theme_mod( 'laudo_texto' );?></p>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-paineis-laudo">
        <?php for($count_painel_laudo = 1; $count_painel_laudo < 4 ; $count_painel_laudo++){?>
            
                <div class="col-md-4 col-md-laudo">
                    <div class="col-laudo">    
                        <div class=" <?php if($count_painel_laudo == 2){ echo "laudo-centro";} else{echo "laudo-canto";}?>">
                            
                                    <h4 class="titulo-painel-laudo"><?php echo get_theme_mod('painel_titulo_laudo'.$count_painel_laudo); ?></h4>
                                <div class="risco-painel-laudo"></div>
                                
                                <p class="texto-painel-laudo"><?php echo get_theme_mod('painel_texto_laudo'.$count_painel_laudo); ?>
                                </p>
                                <div class="btn btn-primary  <?php if($count_painel_laudo == 2){ echo "btn-orange";} ?>"><?php echo get_theme_mod('painel_btn_laudo'.$count_painel_laudo);?></div>
                            
                        </div> 
                    </div>          
                </div>
             <?php } ?>
             </div> 
         </div>
        </div>
    </session>
</div>

 <div class="row row-orcamento">
    <session id="orcamento">
        <div class="area-orcamento text-center">

            <div class="col-md-8 col-xs-12">
                <p><?php echo get_theme_mod('trei_titulo'); ?></p>
            </div>
            <div class="col-md-4 col-xs-12">        
                 <div class="btn btn-transparent"><?php echo get_theme_mod('trei_btn'); ?></div>
            </div>
            
            
        </div>
    </session>
</div>

<div class="row row-contato">
    <session id="contato">
        <div class="area-contato">
              <h3 class="text-center">CONTATO</h3>
            <div class="col-md-6 col-md-offset-3  div-contato">
               
               <form class="form-contato" method="post" action="./wp-content/themes/telecon/mail/enviar-contato.php" name="contato" id="contato">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">NOME:</label>  
                            <input class="form-control" id="nome" name="nome">
                        </div> 
                        <div class="form-group">
                            <label for="email">E-MAIL:</label>  
                            <input class="form-control" id="email" name="email">
                        </div>   
                        <div class="form-group">
                            <label for="telefone">TELEFONE:</label>  
                            <input class="form-control" id="telefone" name="telefone">
                        </div>                                    
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="assunto">ASSUNTO:</label>  
                            <input class="form-control" id="assunto" name="assunto">
                        </div>    
                        <div class="form-group">
                            <label for="mensagem">MENSAGEM:</label>  
                            <input class="form-control" id="mensagem" name="mensagem">
                        </div>    
                         <div class="form-group">
                             <label for="mensagem"></label>  
                             <input type="hidden" name="emailEnviar" value="<?php echo get_theme_mod('mail_titulo'); ?>">
                            <input class="form-control" type="submit" value="ENVIAR">
                        </div>    
                     
                    </div>   
                </form>

            </div>
        </div>
    </session>
</div>

<div class="row row-sobre">
    <session id="sobre">
        <div class="area-sobre">
      
            <?php for($count_sobre = 1; $count_sobre < 4; $count_sobre++ ){?>
                <div class="col-md-4">
                    <div class="painel-sobre">
                                        <h3>  <?php echo get_theme_mod('sobre_titulo'.$count_sobre);?></h3><br><br>
                                        <h4><?php echo get_theme_mod('sobre_texto'.$count_sobre);?><h4>
                     </div>
               </div>

            <?php } ?>
        </div>
    
</session>
</div>



<?php 

include('footer.php');
?>