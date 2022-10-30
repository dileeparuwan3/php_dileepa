<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
    <div class="text-right">
        <button>
            <a href="{{ route('sales-representatives.index') }}">Back to List</a>
        </button>
    </div>

    <table>
        <tr>
            <td>ID</td>
            <td>{{ $salesRepresentative->id }}</td>
        </tr>

        <tr>
            <td>Full name</td>
            <td>{{ "$salesRepresentative->first_name $salesRepresentative->last_name" }}</td>
        </tr>
    </table>
</div>
</body>
</html>

