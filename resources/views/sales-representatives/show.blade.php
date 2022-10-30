<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>

table, th, td {
  border: 1px solid;
}
</style>
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
            <td>First name</td>
            <td>{{ $salesRepresentative->first_name }}</td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td>{{ $salesRepresentative->last_name }}</td>
        </tr>

        <tr>
            <td>email</td>
            <td>{{ $salesRepresentative->email }}</td>
        </tr>

        <tr>
            <td>Telephone</td>
            <td>{{ $salesRepresentative->telephone }}</td>
        </tr>
        <tr>
            <td>Joined Date</td>
            <td>{{  $salesRepresentative->joined_at }}</td>
        </tr>
        <tr>
            <td>Comments</td>
            <td>{{ $salesRepresentative->comments }}</td>
        </tr>
    </table>
</div>
</body>
</html>

