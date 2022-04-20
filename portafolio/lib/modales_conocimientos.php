<style type="text/css">
    
    progress {
border: none;
border-radius: 2rem;
width: 100%;
height: 9px;
animation: prog 2s linear;
}

::-webkit-progress-bar-value {background-color: #1DA1F2; border-radius: 2rem;}
::-webkit-progress-value {background-color: #1DA1F2; border-radius: 2rem;}
::-moz-progress-bar {background-color: #1DA1F2; border-radius: 2rem;}

@keyframes prog {
0% {width: 0%; background-color: #f1f1f1;}
100% {width: 100% color: #000;}
}

h2{

    color: aqua;
    text-shadow: 2px 2px black;
    font-family: georgia;
}

</style>

<?php 

include("conocimientos_seleccion.php");

?>


<!-- COMPUTO -->

<div id="computo" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $computo;   ?></h2>
        <p><text>  <?php echo $text_computo; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_computo); $x++)
  echo "- ".$lista_computo[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_computo."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_computo; ?>"></progress>

    </div>
</div>


<!-- MOBILES -->

<div id="mobiles" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $mobiles;   ?></h2>
        <p><text>  <?php echo $text_mobiles; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_mobiles); $x++)
  echo "- ".$lista_mobiles[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_mobiles."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_mobiles; ?>"></progress>

    </div>
</div>


<!-- IMPRESORAS -->

<div id="impresoras" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $impresoras;   ?></h2>
        <p><text>  <?php echo $text_impresoras; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_impresoras); $x++)
  echo "- ".$lista_impresoras[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_impresoras."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_impresoras; ?>"></progress>

    </div>
</div>


<!-- PERIFERICOS -->


<div id="perifericos" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $perifericos;   ?></h2>
        <p><text>  <?php echo $text_perifericos; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_perifericos); $x++)
  echo "- ".$lista_perifericos[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_perifericos."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_perifericos; ?>"></progress>

    </div>
</div>




<!-- red -->

<div id="red" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $red;   ?></h2>
        <p><text>  <?php echo $text_red; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_red); $x++)
  echo "- ".$lista_red[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_red."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_red; ?>"></progress>

    </div>
</div>




<!-- SOFTWARE -->

<!-- SO -->







<div id="so" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $so;   ?></h2>
        <p><text>  <?php echo $text_so; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_so); $x++)
  echo "- ".$lista_so[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_so."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_so; ?>"></progress>

    </div>
</div>


<div id="ofimatica" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $ofimatica;   ?></h2>
        <p><text>  <?php echo $text_ofimatica; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_ofimatica); $x++)
  echo "- ".$lista_ofimatica[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_ofimatica."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_ofimatica; ?>"></progress>

    </div>
</div>

<div id="herramientasso" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $herramientasso;   ?></h2>
        <p><text>  <?php echo $text_herramientasso; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_herramientasso); $x++)
  echo "- ".$lista_herramientasso[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_herramientasso."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_css; ?>"></progress>

    </div>
</div>



<div id="dispositivos" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $dispositivos;   ?></h2>
        <p><text>  <?php echo $text_dispositivos; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_dispositivos); $x++)
  echo "- ".$lista_dispositivos[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_dispositivos."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_dispositivos; ?>"></progress>

    </div>
</div>


<div id="procesos" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $procesos;   ?></h2>
        <p><text>  <?php echo $text_procesos; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_procesos); $x++)
  echo "- ".$lista_procesos[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_procesos."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_procesos; ?>"></progress>

    </div>
</div>




















<div id="css" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2  class="uk-modal-title titulo_modal"><?php  echo $css;   ?></h2>
        <p><text>  <?php echo $text_css; ?>  </text></p>
        <span>
            <?php for ($x=0;$x<count($lista_css); $x++)
  echo "- ".$lista_css[$x]."<br>";
   ?>
       
   </span>
  <center><h2> <?php echo $por_css."%"; ?> </h2> </center>
        <progress max="100" value="<?php echo $por_css; ?>"></progress>

    </div>
</div>


