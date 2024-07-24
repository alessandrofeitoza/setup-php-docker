<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php 


$alunos = [
    [
        'id' => 1,
        'nome' => 'Maria',
    ],
    [
        'id' => 2,
        'nome' => 'Chiquim',
    ],
    [
        'id' => 3,
        'nome' => 'Leticia',
    ],
];

echo "<hr>oi som, ei A";

include __DIR__."/conexao.php";
?>

<body style="background-color: #EFEFEF" class="container">
    <div class="card card-body mt-5">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($alunos as $cada) {
                        echo "
                            <tr>
                                <td>{$cada['id']}</td>
                                <td>{$cada['nome']}</td>
                                <td>
                                    <a href='' class='btn btn-outline-warning btn-sm'>Editar</a>
                                    <a href='' class='btn btn-outline-danger btn-sm'>Excluir</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>