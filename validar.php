<!DOCTYPE html>

<html lang="es">

 <meta charset="UTF-8">
      
        <?php
     
           //Conectar con el Servidor
           
           $fi=fopen("usuarios.txt","a");

         or die ("problemas al crear  el arhivo");
   
         
        fwrite($fi,"Datos");
        fwrite($fi,"\n");
        fwrite($fi,$_POST['usuario']);
        fwrite($ar,"\n");
        fwrite($fi,$_POST['contraseña']);
        fwrite($fi,"\n");
        fwrite($fi,$_POST['nombres']);
        fwrite($fi,"\n");
        fwrite($fi,$_POST['apellidos']);
        fwrite($fi,"\n");
        fwrite($fi,$_POST['correo']);
        fwrite($fi,"\n");
        fwrite($fi,$_POST['Teléfono']);
        fwrite($fi,"\n");
        fwrite($fi,"-------------- \n\n");
        fwrite($fi,);
        echo "Datos Guardados";
         
           ?>         
               
     </head>
      </body>
         <div aligin="center">
              <h2>Sus datos han sido enviados correctamente</h2>
              <h5><a href="validar.php">Pulse aquí para volver a llenarlo</a></h5>
      <div>
    </html>   