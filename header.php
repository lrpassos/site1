<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset')?>" >
    <title> <?php  wp_title('_',true,'ringt'); bloginfo()?> </title>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
    
    
    <?php wp_head(); ?>
    </head>
      <body>
    <div id="header">
          
          <div id="header-superior">
              
              <div id="header-superior-content">
                  
                  <div id="header-paginas">
                  
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Arquivos</a></li>
                          <li><a href="#">Sobre Nós</a></li>
                          <li><a href="#">Serviços</a></li>
                          <li><a href="#">Contato</a></li>
                      </ul>
                  
                  </div> <!-- header-paginas -->
                  
                  <div id="header-social">
                  
                      <a href=""><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" rel="" title=""/></a>
                      <a href=""><img src="<?php bloginfo('template_url'); ?>/images/Instagram.png" rel="" title=""/></a>
                      <a href=""><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" rel="" title=""/></a>
                      <a href=""><img src="<?php bloginfo('template_url'); ?>/images/youtube.png" rel="" title=""/></a>
                     
                  </div> <!-- header-social -->
              
              </div> <!-- fim header superior content -->
        
          </div> <!-- /fim header superior -->
        
        
        
                <!-- logo marca  inserir aqui -->
      <div id="header-content">
        <div id="logo">
         <a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/proded2.jpg" rel="" title="" /></a>
        </div> <!--fim logo -->
        
          
          
          <!-- pesquisar -->
        <div id="search">
            <form action="" method="post"> 
               <input type="text" name="" >
               <input type="submit" value="" class="btn-search" name="">
            </form>
        </div> <!--fim search-->
      
          
          
        <div id="login">
            <ul>
                <li class="logar"><a href="">Login</a>  </li>
                <li class="registre"><a href="">Registre-se </a>  </li>
            </ul>
        </div> <!--fim login -->
          
      </div> <!-- fim header content -->
        
        
        
        <div id="nav">
         <div id="nav-content">
            <ul>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Esportes</a>
                 <ul>
                     <li><a href= "#">Futebol</a></li>
                     <li><a href= "#">Natação</a></li>
                     <li><a href= "#">Basquete</a></li>
                     <li><a href= "#">Volei</a></li>
                </ul>
                
                </li>
                <li><a href="#">Tecnologia</a></li>
                <li><a href="#">Entreterimento</a></li>
                <li><a href="#">Multimidia</a></li>
                <li><a href="#">Saude</a></li>
                <li><a href="#">Politica</a></li>
                <li><a href="#">Games</a></li>
            </ul>
           </div> <!-- fim nav-content-->
      
        </div> <!-- fim nav -->
        
     </div> <!-- fim header -->
        