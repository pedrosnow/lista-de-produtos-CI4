

<main>


<a class="link" href="inserindo/">Adicionar Categorias</a>
<a class="link" href="inserindo/produto">Adicionar Produtos</a>

<br>
<?= $msg ?>

<table style="width:40%">
  <tr>
    <th>Codigo Categoria</th>
    <th>Nome Categoria</th> 
    <th>Editar</th> 
    <th>Deletar</th> 
   
  </tr>

    <?php foreach ($categorias as $value) { ?>
    
   
    <tr>
      
    <td><?= $value->id_ctg ?></td>
    <td> <?= $value->nome_ctg ?></td>
    <td> 
        <a href="editar/<?= $value->id_ctg?>">Editar</a>
        
    </td>
    <td>
    <a href="deletar/<?= $value->id_ctg?>">Deletar</a>
    </td>

    </tr>  
   
    
  
    
    <?php } ?>
  
</table>


</main>

