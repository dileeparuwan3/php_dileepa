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
                    <a href="{{ route('sales-representatives.create') }}">Add New</a>
                </button>
            </div>

            <table class="table table-bordered m-5 mt-3">
                <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Current Route</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($salesRepresentatives as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ "$data->first_name $data->last_name" }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->telephone }}</td>
                        <td>{{ $data->current_route }}</td>
                        <td>
                            <a href="{{ route('sales-representatives.show', $data->id) }}">View</a>
                        </td>
                        <td>
                            <a href="{{ route('sales-representatives.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form
                                action="{{ route('sales-representatives.destroy', $data->id) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
             Pagination
            <div class="d-flex justify-content-center">
                {!! $salesRepresentatives->links() !!}
            </div>
        </div>
    </body>
</html>
