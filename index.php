<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>Loja Interativa</title>

  </head>
  <form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Loja Interativa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novo">Novo Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Lista de Produtos</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar Produto" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

   <div class="container">
     <div class="row">
       <div class="col mt-5">
           <?php


        switch(@$_REQUEST['page']){
        case 'novo':
          include 'novo-produto.php';
          break;
          
          case 'listar':
           include 'lista-produtos.php';
            break;

             case 'salvar':
           include 'salvar-produto.php';
            break;
            
            default:
            
    }
   ?>

 

    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>