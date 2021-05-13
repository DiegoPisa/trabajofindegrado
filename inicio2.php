<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   
  
    <header>
      
    
        <div id="anuncio">
            <div >
            <div id="nose">
            <div id="otro nose"><marquee scrollamount="3"><p></p>
            <div style="display: inline-block; position: relative; top: 4px;"><img style="max-height: 30px;" src="logot.png" alt=""></div>
            <div style="display: inline-block; padding: 0 20px; text-transform: uppercase;"><a title="faq" href="https://g2esports.com/help/faq-bd/?r=EU#h-why-are-some-products-not-visible-in-my-region-but-available-in-others"><strong>Free shipping</strong> for orders <strong>over</strong> <span class="shipping-banner_amount visible-EU"><strong>110</strong><img style="display: inline-block; position: relative; top: 4px; max-height: 30px; margin-left: 20px; margin-right: 20px" src="logot.png" alt="">Learn more about Custom Issues and Charges. Please click <strong>HERE</strong> for more info.</span><span class="shipping-banner_amount visible-US"><strong>120</strong>.</span><span class="shipping-banner_amount hidden-EU hidden-US"><strong>150</strong><img style="display: inline-block; position: relative; top: 4px; max-height: 30px; margin-left: 20px; margin-right: 20px" src="logot.png" alt="">Learn more about Custom Issues and Charges. Please click <strong>HERE</strong> for more info.</span></a></div>
            <div style="display: inline-block; position: relative; top: 4px;"><img style="max-height: 30px;" src="logot.png" alt=""></div>
            <p></p></marquee></div>
            </div> 
            </div> 
            </div>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-menu"></span><img src="L3mao Gaming.png" id="logmenu"></a>
        </div>
        <nav>
        <ul>
            <li id="lilogo"><img src="L3mao Gaming.png" id="logo"></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Club</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Equipos</a></li>
            <li><a href="#">Influencers</a></li>
            <li><a href="#">Patrocinadores</a></li>
            
        </ul>
    </nav>
</header>
<main id="inicio">
    <video width="1065" height="599" controls>
        <source src="STAY HUNGRY - Esports Motivation.mp4" type="video/mp4">
        
      Your browser does not support the video tag.
      </video> 
      <div id="patrocinadores">
          <table>
              <tr>
                  <th colspan="3">PARTNERS</th>
                
              </tr>
              <tr>
                  <td><img src="bmw.png" class="sponsors"></td>
                  <td><img src="nike.png" class="sponsors"></td>
                  <td><img src="msi.png" class="sponsors"></td>
              </tr>
              <tr>
                <td><img src="aoc-logo-3.png" class="sponsors"></td>
                  <td><img src="secret lab.png" class="sponsors"></td>
                  <td><img src="monster.png" class="sponsors"></td>
              </tr>
              <tr>
               <td><img src="razer.png" class="sponsors"></td>
                  <td><img src="mastercard.png" class="sponsors"></td>
                  <td><img src="amd.png" class="sponsors"></td>
              </tr>
          </table>
      </div>
     
      <div id="partidos">
          <h2> Sigue nuestros partidos</h2> <?php 
        include 'partidos.php';
        while($mostrar=mysqli_fetch_array($resultados)){
        ?>
          <table id="lolm">
              <tr id="datos"><td colspan="3"><span class="fecha"><?php echo $mostrar['fecha'] ?></span><span class="competicion"><?php echo $mostrar['competicion'] ?></span></td></tr>
              <tr>
                  <td id="td11"><img src="lol.png" id="lol"></td>
                  <td id="clubs"><?php echo $mostrar['local'] ?><span>VS</span><?php echo $mostrar['visitante'] ?> </td>
                  <td id="td13"><span id="span13">WATCH&#10132;</span></td>
              </tr>
          </table>
        <?php }?>
      </div>
      <div id="videos">
          <h2>Nuestros ultimos videos</h2>
          <div id="miniaturas">
              <div id="1">
                <a href="#"><img src="miniatura.jpg" class="mini"></a>
                <a href="#"><img src="miniatura.jpg" class="mini"></a>
              </div>
              <div id="2">
                <a href="#"><img src="miniatura.jpg" class="mini"></a>
                <a href="#"><img src="miniatura.jpg" class="mini"></a>
              </div>
          </div>
      </div>
</main>

<footer>
       <h2>L3MAO GAMING</h2>
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion de la compañia</h1>

                    <p>Esta compañia se dedica a la venta de software integrado con un 
                    conjunto de cosas que no se lo que estoy escribiendo, este 
                    texto es solo para llenara informacion en el cuadro de informacion 
                    de la compañia.</p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>
                    
                    <div class="row">
                    <a href="#">    <span class="icon-facebook2"></a>
                        <label>Siguenos en Facebook</label>
                    </div>
                
                
                    <div class="row">
                    <a href="#">    <span class="icon-twitter"></a>
                        <label>Siguenos en Twitter</label>
                    </div>
                    
                    <div class="row">
                    <a href="#">    <span class="icon-instagram"></a>
                        <label>Siguenos en Instagram</label>
                    </div>
                    
                    <div class="row">
                        <a href="#"><span class="icon-twitch"></a>
                        <label>Siguenos en Twitch</label>
                    </div>
                    
                    <div class="row">
                    <a href="#">    <span class="icon-youtube"></a>
                        <label>Siguenos en Youtube</label>
                    </div>

                 
                    <!-- <a href="http://discord.gg/madlionslol" class="icon icon-discord" target="_blank"><i></i></a> -->
                   
                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        
                        <label>La Romana, 
                        Republica Dominicana
                        Manuel del Cabral
                        Casa # 27</label>
                    </div>

                    <div class="row2">
                      
                        <label>+1-829-395-2064</label>
                    </div>

                    <div class="row2">
                      
                         <label>L3MAOGAMING@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2021 Todos los Derechos Reservados
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="menu.js"></script>

</html>