<main>
   <a class="link" href="/">Voltar</a>
   <br>
    
   <?php if(isset($msg)){ ?>
      <?= $msg ?>
   <?php } ?>


   <form action="" method="POST" class="form-produtos">

       <label>
           Categoria
        </label>
        <?= $BoxProdutos ?>
        <br>
        <input type="text" name="nome_produto" placeholder="Nome Produto">
        <br>
        <input type="text" name="valor" placeholder="valor Produto">
         <br>
        <button>Cadastrar</button>

   </form>

   


</main>