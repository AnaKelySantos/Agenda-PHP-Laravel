<?php
require_once 'garota.php';


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilotab.css">
    <title>Document</title>
</head>
<body>
        <table>
            <tr>
                <th>NOME</th>
                <th>PROFISSÃO</th>
                <th>NUMERO</th>
                <th colspan="2">EMAIL</th>
            </tr>

            <?php
                $informacoes = $parametro-> encontrar();
                //echo "<pre>";
                //var_dump($informacoes);
                //echo"</pre>";

               for ($i=0; $i < count($informacoes); $i++) { 
                echo "<tr>";
                //meinha chave é l e meu value é d
                    foreach ($informacoes[$i] as $l => $d) {
                        if($l != "id"){
                            echo "<td>".$d."</td>";
                        }
                    }   
                    ?>
                    <td><a href="edittabela.php?id_up=<?php echo $informacoes[$i]['id']; ?>">editar</a><a href="edittabela.php?id=<?php echo $informacoes[$i]['id']; ?>&&t='f'">excluir</a></td>
                    <?php
                    echo "</tr>";

               }

            ?>
        </table>
        <table>
            <tr>
                <th>NOME</th>
                <th>PROFISSÃO</th>
                <th>NUMERO</th>
                <th colspan="2">EMAIL</th>
            </tr>
            <?php
                $informacoesh = $parametro-> encontrarh();
                //echo "<pre>";
                //var_dump($informacoesh);
               //echo"</pre>";
               for ($i=0; $i < count($informacoesh); $i++) { 
                echo "<tr>";
                //meinha chave é k e meu value é v
                    foreach ($informacoesh[$i] as $k => $v) {
                        if($k != "id"){
                            echo "<td>".$v."</td>";
                        }
                    }   
                    ?>
                    <td><a href="edittabela.php?id_up=<?php echo $informacoesh[$i]['id']; ?>">editar</a><a href="edittabela.php?id=<?php echo $informacoesh[$i]['id']; ?>&&b='m'">excluir</a></td>
                    <?php
                    echo "</tr>";

               }

            ?>
            
        </table>
        <button onclick="window.location.href = 'index.php'">formulario</button>
</div>
</body>
</html>


<?php

if(isset($_GET['id'])){
    $idd = $_GET['id'];
    if(isset($_GET['t'])){
        $parametro->excluirmulher($idd);
    }else{
        $parametro->excluirhomem($idd);
    }
    
}

$parametro->atualizah('mateus','suporte','le@n','874512','0');
//header("location: http://localhost/femea/edittabela.php");
exit();
?>