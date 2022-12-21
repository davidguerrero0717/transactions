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

<h1 class="text-center my-5">Transacciones Por Usuario</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-success table-stcls
            riped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Segmentación</th>
                    <th scope="col">Tipo Transacción</th>
                    <th scope="col">Transacción Estado</th>
                    <th scope="col">Currencia Transacción</th>
                    <th scope="col">Codigo Transacción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha Expiración</th>
                    <th scope="col">Detalles Transacción</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($userTransac as $item)
                    <tr>
                        <th scope="row">{{ $item["id"] }}</th>
                        <td>{{ $item["client_id"] }}</td>
                        <td>{{ $item["segmentation_id"] }}</td>
                        <td>{{ $item["transaction_type_id"] }}</td>
                        <td>{{ $item["transaction_status_id"] }}</td>
                        <td>{{ $item["transaction_currency_id"] }}</td>
                        <td>{{ $item["transaction_source_id"] }}</td>
                        <td>{{ $item["year"]."/".$item["month"] }}</td>
                        <td>{{ $item["amount"] }}</td>
                        <td>{{ $item["savings_expiration_date"] }}</td>
                        <td>{{ $item["transaction_detail"] }}</td>
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