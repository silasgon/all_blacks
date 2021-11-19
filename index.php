<?php

include 'config.php';

$buscarDados = 'SELECT * FROM torcedores';
$queryDados = mysqli_query($conexao, $buscarDados)


?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">AllBlacks</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Enviar Comunicado <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Importar XML <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

  </div>

  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Nome</th>
          <th>Documento</th>
          <th>Email</th>
          <th>DDD</th>
          <th>Telefone</th>
          <th>Cep</th>
          <th>Endereco</th>
          <th>Cidade</th>
          <th>UF</th>
          <th>Ativo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($list = mysqli_fetch_array($queryDados)) {
          $id = $list['id'];
          $nome = $list['nome'];
          $documento = $list['documento'];
          $email = $list['email'];
          $ddd = $list['ddd'];
          $telefone = $list['telefone'];
          $cep = $list['cep'];
          $endereco = $list['endereco'];
          $cidade = $list['cidade'];
          $uf = $list['uf'];
          $ativo = $list['ativo'];

        ?>
          <tr>
            <td scope="row"><? echo $id; ?></td>
            </td>
            <td><?php echo $nome; ?></td>
            <td><?php echo $documento; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $ddd; ?></td>
            <td><?php echo $telefone; ?></td>
            <td><?php echo $cep; ?></td>
            <td><?php echo $endereco; ?></td>
            <td><?php echo $cidade; ?></td>
            <td><?php echo $uf; ?></td>
            <td><?php echo $ativo; ?></td>
          </tr>

        <?php } ?>

      </tbody>
    </table>

  </div>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container">
          <div class="container center">
            <h1>Cadastro de Torcedores AllBlacks</h1>
          </div>
          <form method="post" action="cadastro.php" class="was-validated" novalidate>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome do torcedor" required>
            </div>
            <div class="form-group">
              <label for="documento">Documento</label>
              <input type="text" class="form-control" id="documento" placeholder="000.000.000-00" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <!-- Telefone -->
            <hr>
            <br>
            <div class="form-row">
              <div class="col-2">
                <label for="ddd">DDD</label>
                <input type="text" class="form-control" id="ddd" placeholder="00" required>
              </div>
              <div class="col-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" placeholder="00000000" required>
              </div>
            </div>
            <hr>
            <br>
            <div class="form-row">
              <div class="col-4">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="00000-000" required>
              </div>
              <div class="col-8">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Endereço do torcedor" required>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col-8">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" placeholder="Cidade do torcedor" required>
              </div>
              <div class="col-4">
                <label for="estado">Estado - UF</label>
                <select class="form-control" id="estado" required>
                  <option value="">Escolha um estado</option>
                  <option value="AC">AC</option>
                  <option value="AL">AL</option>
                  <option value="AP">AP</option>
                  <option value="AM">AM</option>
                  <option value="BA">BA</option>
                  <option value="CE">CE</option>
                  <option value="ES">ES</option>
                  <option value="DF">DF</option>
                  <option value="MA">MA</option>
                  <option value="MT">MT</option>
                  <option value="MS">MS</option>
                  <option value="MG">MG</option>
                  <option value="PA">PA</option>
                  <option value="PB">PB</option>
                  <option value="PR">PR</option>
                  <option value="PE">PE</option>
                  <option value="PI">PI</option>
                  <option value="RJ">RJ</option>
                  <option value="RN">RN</option>
                  <option value="RS">RS</option>
                  <option value="RO">RO</option>
                  <option value="RR">RR</option>
                  <option value="SC">SC</option>
                  <option value="SP">SP</option>
                  <option value="SE">SE</option>
                  <option value="TO">TO</option>
                </select>
              </div>
            </div>
            <hr>
            <br>
            <div class="form-group">
              <div class="form-row">
                <label for="email">Situação do cadastro</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="ativo" value="1" checked>
                <label class="form-check-label" for="ativo">Ativo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="ativo" value="">
                <label class="form-check-label" for="ativo">Desativado</label>
              </div>
            </div>
            <hr>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>