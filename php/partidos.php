<?php
    $db_host="localhost:3306";
    $db_nombre="tfg";
    $db_usuario="root";
    $db_clave="";
    $conexion=mysql_connect("localhost","root","");
$hoy=date("Y-m-d");
   if(!$conexion){
       echo 'error conexion'.mysql_error();
   }else{
       $base=mysql_select_db('tfg',$conexion);
       if(!$base){
           echo 'no se encontro la db'.mysql_error();
       }else{
            $sql="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'lol'";
            $ejecuta=mysql_query($sql);
            $sql2="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'fortnite'";
            $ejecuta2=mysql_query($sql2);
            $sql3="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'rl'";
            $ejecuta3=mysql_query($sql3);
            $sql4="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'r6'";
            $ejecuta4=mysql_query($sql4);
            $sql5="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'valorant'";
            $ejecuta5=mysql_query($sql5);
            $sql6="SELECT * FROM partidos where fecha LIKE '%$hoy%' and sport like 'csgo'";
            $ejecuta6=mysql_query($sql6);
           if(!$ejecuta){
               echo 'no ejecuta0'.$sql;
           }else{
               $partidos=mysql_fetch_array($ejecuta);
               $partidos2=mysql_fetch_array($ejecuta2);
               $partidos3=mysql_fetch_array($ejecuta3);
               $partidos4=mysql_fetch_array($ejecuta4);
               $partidos5=mysql_fetch_array($ejecuta5);
               $partidos6=mysql_fetch_array($ejecuta6);
           }
       }
   }
    // 

    // $consulta="SELECT * from partidoslol ";
    // $resultados=mysqli_query($conexion,$consulta);
  
    // $consulta2="SELECT * from partidosfortnite where fecha LIKE '%$hoy%'";
    // $resultados2=mysqli_query($consulta2);
    // $consulta3="SELECT * from partidoscsgo where fecha LIKE '%$hoy%'";
    // $resultados3=mysqli_query($consulta3);
    // $consulta4="SELECT * from partidosvalorant where fecha LIKE '%$hoy%'";
    // $resultados4=mysqli_query($consulta4);
    // $consulta5="SELECT * from partidosrl where fecha LIKE '%$hoy%'";
    // $resultados5=mysqli_query($consulta5);
    // $consulta6="SELECT * from partidosr6 where fecha LIKE '%$hoy%'";
    // $resultados6=mysqli_query($consulta6);
  

    
    ?>