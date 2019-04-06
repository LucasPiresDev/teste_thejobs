<div class="jumbotron">
    <h1 class="text-center">Alteração de Modulos</h1>
</div>
<?php
    include './app/models/ModulosDAO.php';
    $md = new ModulosDAO();
    $item = $md->modulosin($_GET['id']);
?>
<form action="app/controllers/modulos.php" method="GET" role="form">
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título" value="<?php echo $item['titulo']?>">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição" value="<?php echo $item['descricao']?>">
  </div>

  <input type="hidden" name="id" value="<?php echo $item['id']?>">
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="./index.php?pg=modulos" class="btn btn-success">Voltar</a>
</form>