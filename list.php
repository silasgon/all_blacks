<?php

include 'config.php';

$buscarDados = 'SELECT * FROM torcedores';
$queryDados = mysqli_query($conexao, $buscarDados)


?>


<!doctype html>
<html lang="en">

<head>
    <title>Cadastro de Torcedores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
                    while ($list = mysqli_fetch_array($queryDados) ) {
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
                    <td scope="row"><? echo $id; ?></td> </td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $documento;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $ddd;?></td>
                    <td><?php echo $telefone;?></td>
                    <td><?php echo $cep;?></td>
                    <td><?php echo $endereco;?></td>
                    <td><?php echo $cidade;?></td>
                    <td><?php echo $uf;?></td>
                    <td><?php echo $ativo;?></td>
                </tr>

                <?php }?>

            </tbody>
        </table>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>