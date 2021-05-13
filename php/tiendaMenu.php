<?php
    $conexion=mysql_connect("localhost","root","");
    $hoy=date("Y-m-d");
       if(!$conexion){
           echo 'error conexion'.mysql_error();
       }else{
           $base=mysql_select_db('tfg',$conexion);
           if(!$base){
               echo 'no se encontro la db'.mysql_error();
           }else{
                $sql="SELECT * FROM tiendamenu";
                $ejecuta=mysql_query($sql);
              
               if(!$ejecuta){
                   echo 'no ejecuta0'.$sql;
               }else{
                   
                //    $tienda=mysql_fetch_array($ejecuta);
                   
               }
           }
       }
    
    ?>