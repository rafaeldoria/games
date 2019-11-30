<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body>
    
    <div class="container">
        <h1>Resultado</h1>
        
        <div class="row">
            <div>
                <h2>Números Sorteados</h2>
                <p>
                    <?= implode(" | ", $raffle_result) ?></p>
                </p>
            </div>
        </div>

        <div class="row">
            <div>
                <h2>Seus jogos</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jogos</th>
                            <th scope="col">Acertos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($player_result as $key => $result) : ?>
                            <tr>
                                <th scope="row"><?= $key; ?></th>
                                <td><?= implode(" | ", $result['game']) ?></td>
                                <td><?= $result['hits'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
