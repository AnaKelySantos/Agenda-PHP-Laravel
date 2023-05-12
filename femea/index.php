<?php


require_once 'garota.php';
$parametro = new glamur("crudrosa","localhost","root",""); 

if (isset($_GET['sexo'])) {
    $nomet = $_GET['nome'];
$profissaot = $_GET['profissao'];
$emailt = $_GET['numero'];
$numerot = $_GET['email'];

    $qt = $_GET['sexo'];

    
}

//create
if (isset($_GET['iduupp'])&& ($_GET['iduupp'])=="idcad") {
    if ($qt == "fem" ) {
       $parametro->casdastrarmulher($nomet,$profissaot,$emailt,$numerot);
    }else{
    $parametro->casdastrarhomem($nomet,$profissaot,$emailt,$numerot);
    }
    //header("location: http://localhost/femea/index.php");
//exit();

}

//delete
if(isset($_GET['id'])){
    $idd = $_GET['id'];
    if(isset($_GET['t'])){
        $parametro->excluirmulher($idd);
    }else{
        $parametro->excluirhomem($idd);
    }
   
   //header("location: http://localhost/femea/index.php");
//exit();

}

//update
if (isset($_GET['iduupp'])&&($_GET['iduupp'])!="idcad") {
    $idtu = $_GET['iduupp'];
    $parametro->atualizah($nomet,$profissaot,$emailt,$numerot,$idtu);

header("location:index.php");
//exit;


}

//update
if (isset($_GET['iidduupp'])&&($_GET['iidduupp'])!="idcad") {
    $idtu = $_GET['iidduupp'];
    $parametro->atualizam($nomet,$profissaot,$emailt,$numerot,$idtu);
//header("location: http://localhost/femea/index.php");
//exit;
}


    if (isset($_GET['um'])) {
        $linh = $_GET['idup'];
         $informacoesh = $parametro-> buscarDadosPessoah($linh);
        // echo "<pre>";
        // var_dump($informacoesh);
       // echo"</pre>";
         //echo $informacoesh['email'];
         
         //header("location: index.php");
     }

     if (isset($_GET['dois'])) {
        $linh = $_GET['idd_up'];
         $informacoes = $parametro-> buscarDadosPessoa($linh);
         //echo "<pre>";
        // var_dump($informacoes);
        //echo"</pre>";
         //echo $informacoesh['email'];
         
         //header("location: index.php");
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>crudmulher</title>
</head>
<body>
    <!--div formulario -->
    <div id="form">
        <form method="get" action="index.php">
            <!-- campo de entrada nome -->
            <input type="hidden" name="<?php  if(isset($_GET['dois'])){echo "iidduupp"; }else{echo "iduupp"; } ?>" maxlength="40" minlength="2" <?php if(isset($_GET['um'])){ $iduupp = $informacoesh['id']; echo "value = $iduupp"; }elseif(isset($_GET['dois'])){ $iidduupp = $informacoes['id']; echo "value = $iidduupp"; }else {
                echo "value = idcad";
            } ?>>
            <label for="nome">NOME</label>
            <input type="text" id="nome" name="nome" placeholder="seu nome max 40 caracteres" minlength="2" maxlength="40" size="40" required="required" <?php if(isset($_GET['um'])){ $nomeup = $informacoesh['nome']; echo "value = $nomeup"; } ?> <?php if(isset($_GET['dois'])){ $nomeup = $informacoes['nome']; echo "value = $nomeup"; } ?>>
            <!-- campo de entrada profissao --> 
            <label for="profissao">PROFISSÃO</label>
            <input type="text" id="profissao" name="profissao" placeholder="sua profissão" minlength="2" maxlength="30" size="30" required="required" <?php if(isset($_GET['um'])){ $profissaoup = $informacoesh['profissao']; echo "value = $profissaoup"; } ?> <?php if(isset($_GET['dois'])){ $profissaoup = $informacoes['profissao']; echo "value = $profissaoup"; } ?>>
            <!-- campo de entrada numero -->
            <label for="numero">NUMERO</label>
            <input type="tel" id="numero" name="numero" placeholder="(99) 99999-9999" maxlength="11" minlength="11" size="11" required="required" name="numbers" required="required" name="numbers" pattern="[0-9]+$" <?php if(isset($_GET['um'])){$emailup = $informacoesh['email']; echo "value = $emailup"; } ?> <?php if(isset($_GET['dois'])){$emailup = $informacoes['email']; echo "value = $emailup"; } ?>>
            <!-- campo de entrada email -->
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" placeholder="seu email" minlength="7" maxlength="300" size="300" required="required" <?php if(isset($_GET['um'])){$numeroup = $informacoesh['numero']; echo "value = $numeroup"; } ?> <?php if(isset($_GET['dois'])){$numeroup = $informacoes['numero']; echo "value = $numeroup"; } ?>>
            <div id="radio">SEXO:
            <label for="sexo" >
                feminino <input type="radio" id="sexo" name="sexo" value="fem" checked>
            </label>
            <label  for="sexo">
                masculino<input type="radio" id="sexo" name="sexo" value="mas" <?php if(isset($_GET['um'])){ echo "checked"; } ?> >
            </label>
            </div>
            
            <!-- botao de submeter os campos de entrada -->
            <input type="submit" name="enviar" id="enviar" value="<?php  if(isset($_GET['um'])){ echo "atualizar"; }elseif(isset($_GET['dois'])) {
                echo "atualizar";
            }else {
            echo "cadastrar";
            } ?>">
           
        </form>
        
    </div>
  
<div id="mulher">
    <table id="um">
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
                    <td><a href="index.php?idd_up=<?php echo $informacoes[$i]['id']; ?>&&dois='id'">editar</a><a href="index.php?id=<?php echo $informacoes[$i]['id']; ?>&&t='f'">excluir</a></td>
                    <?php
                    echo "</tr>";

               }

            ?>
            </div>
            <div id="homem">
        </table>
        <table id="dois">
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
                    <td><a href="index.php?idup=<?php echo $informacoesh[$i]['id']; ?>&&um='id'">editar</a><a href="index.php?id=<?php echo $informacoesh[$i]['id']; ?>&&b='m'">excluir</a></td>
                    <?php
                    echo "</tr>";

               }

            ?>
            
        </table>
        
</div>



</body>

</html>


