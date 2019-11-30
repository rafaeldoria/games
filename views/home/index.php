<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Loteria</title>
</head>

<body>
    <div class="row">
        <div class="container">
            <form action="Raffle" method="post">
                <h3>Realizar Jogo</h3>

                <div class="form-group">
                    <label for="total_games">Total de jogos</label>
                    <input type="number" min="1" class="form-control" id="total_games" name="total_games" placeholder="Total de jogos a realizar" required>
                </div>

                <div class="form-group">
                    <label for="amount_dozens">Dezenas a sortear para jogos</label>
                    <select class="form-control" id="amount_dozens" name="amount_dozens">
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Jogar</button>

            </form>
        </div>
    </div>
</body>

</html>