<?php
    require('conexion.php');

        $sql = "SELECT * FROM contabilidad WHERE idcuentas='". $id ."'";

        $res = $mysql->query($sql);

        $totCuentas = mysqli_num_rows($res);
        
        if ($totCuentas>0) {
            while($rowCunt = mysqli_fetch_array($res)){
                echo'<link rel="stylesheet" href="Style/admin.css" />
                <title>Modificar</title>
                <link rel="shortcut icon" href="icono.ico" type="image/x-icon" />';
               
                echo '<form id="FRMModif">';
                echo '<center><input type="text" name="id" id="id" class="border-hidden" autocomplete="off"  onlyread=" " value="'.$rowCunt['idcuentas'].'">';
                echo '<input type="text" class="border-hidden" name="cuenta" id="cuenta" autocomplete="off" onlyread=" " value="'.$rowCunt['cuentas'].'"></center><br>';
                echo '<input type="text" name="valor" id="valor" value="'.$rowCunt['valor'].'"><br>';
                echo '<input type="date" name="fecha" id="fecha" value="'.$rowCunt['fecha'].'"><br>';
                echo '<input type="submit" class="cambiar" value="Cambiar">';
                echo '</form>';
                echo '<script>
                let form_modif = document.getElementById('."'FRMModif'".');
               
                form_modif.addEventListener("submit",function(e){
                    let data_to_change = new FormData(form_modif);
                    e.preventDefault();
                    fetch("./Backend/Admin_modif.php", {
                        method: "POST",
                        body: data_to_change
                    })
                    .then((res) => {
                        return res.text();
                    })
                    .then((data1) => {
                        alert(data1);
                        window.close()
                    })
                    .catch(function(error) {
                        console.log(error);
                    })
                })</script>';

          }
     }else {
         echo "<script>
         alert('error');
         window.close();
         </script>";
     }


