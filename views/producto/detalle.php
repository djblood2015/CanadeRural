<?php
$this->title = 'Canade Rural';
?>
<body>
    <div class='contenedor'>
<div class="row">
    <div class="col-md-12">
         <img src='../web/images/iconos/Productodetalle.png' width="1135px" height="200px">
    </div>
</div>
<br>
<br>

<div class="row">
    <div class="col-md-6">
        <img style=" border-radius: 15px;" width='500px' height="300px" src="<?=yii\helpers\Url::base()."/images/productos/pro_".$producto->ID.".jpg";?>"/>
    </div>
    <div class="col-md-6">
        <div class="inner-producto">
            <p style="font-size: 15pt; align-content: center;"><?=$producto->Nombre;?></p> 
            <br>
            <div style="font-size: 11pt;align-content: center;"><?=$producto->Descripcion;?></div>
        </div> 
        <div>
            <p style="font-size: 13pt;"><?="$".$producto->Valor;?></p> 
        </div> 
    </div>
</div>
</div>
</body>
<style>
   .inner-producto{
       
        padding:1px;
   }
 
</style>
    
  