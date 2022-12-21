<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center my-5">Transacciones</h1>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">usuario</th>
                        <th scope="col">Jugador</th>
                        <th scope="col">Numero de identificación</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">meta</th>
                        <th scope="col">Cumpleaños</th>
                        <th scope="col">Estado Usuario</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($transactions as $item)
                        <tr>
                            <th scope="row">{{ $item["id"] }}</th>
                            <td>{{ $item["user_id"] }}</td>
                            <td>{{ $item["one_signal_player_id"] }}</td>
                            <td>{{ $item["identification_number"] }}</td>
                            <td>{{ $item["mobile_number"] }}</td>
                            <td>{{ $item["meta"] }}</td>
                            <td>{{ $item["birth_date"] }}</td>
                            <td>{{ $item["state_user_id"] }}</td>
                            <td>
                                <a href="{{ url('/user-transac/'. $item['id']) }}" type="button" class="btn btn-primary">Transacciones</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>




