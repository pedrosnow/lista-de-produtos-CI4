<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($acao) || !empty($acao)){ ?>
        
        <form method="post">

    <?php }else{ ?>
    
        <form action="/inserindo" method="post">

    <?php }?>   
    <?= $mensage ?>
    <br>
    <label>
    Categoria

    <?php if(isset($categoria) && !empty($categoria)){ ?>

        <input type="text" name="nome_ctg" value="<?= $categoria->nome_ctg ?>" >

    <?php }else{?>

        <input type="text" name="nome_ctg" >

    <?php  }   ?>
    
    <button>Salvar</button>
    </label>
    </form>

    <?php if(!isset($acao) || empty($acao)){ ?>
    
        <a href="/">Lista Categoria</a>

     <?php } ?>   
</body>
</html>