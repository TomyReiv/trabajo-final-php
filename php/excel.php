<?php
include 'cn.php';
include 'sesionPhp.php';

$query = mysqli_query($conexion, "SELECT * FROM hoja4");
/* $documento = "habilitacion.xls"; */
header("Pragma: public");
header("Expires: 0");
$filename = "habilitaciones.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
echo  '<table border=1>';
echo    '<tr><th>Numero de habilitacion</th><th>Razon social</th><th>Citacion a control de frio</th><th>Firma</th><th>Rubro</th><th>Fecha</th><th>Acta</th><th>Patente</th><th>Control de frio/Constataciones</th>';
         while($row = mysqli_fetch_array($query)){ 
            echo '<tr>';
            echo '<td>'.$row['numero'].'</td>';
            echo '<td>'.$row['R.social'].'</td>';
            echo '<td>'.$row['C.inicial'].'</td>';
            echo '<td>'.$row['firma'].'</td>';
            echo '<td>'.$row['rubros'].'</td>';
            echo '<td>'.$row['fecha'].'</td>';
            echo '<td>'.$row['acta'].'</td>';
            echo '<td>'.$row['patente'].'</td>';
            echo '<td>'.$row['control2'].'</td>';
            echo '</tr>';

         }
            echo '</table>';
?>

                
                
                
                
                