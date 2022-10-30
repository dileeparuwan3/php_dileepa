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

    <form action="{{ route('sales-representatives.store') }}" method="POST">
        @csrf

        <div>
            <div>
                <label for="first_name">First name</label>

                <input style="display: block" id="first_name" name="first_name" type="text">

                @if($errors->has('first_name'))
                    <div class="mt-2" style="color: red">{{ $errors->first('first_name') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="last_name">Last name</label>

                <input style="display: block" id="last_name" name="last_name" type="text">

                @if($errors->has('last_name'))
                    <div class="mt-2" style="color: red">{{ $errors->first('last_name') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="email">Email</label>

                <input style="display: block" id="email" name="email" type="text">

                @if($errors->has('email'))
                <div class="mt-2" style="color: red">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="telephone">Telephone</label>

                <input style="display: block" id="telephone" name="telephone" type="text">

                @if($errors->has('telephone'))
                <div class="mt-2" style="color: red">{{ $errors->first('telephone') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="joined_at">Joined Date</label>

                <input style="display: block" id="joined_at" name="joined_at" type="text">

                @if($errors->has('joined_at'))
                <div class="mt-2" style="color: red">{{ $errors->first('joined_at') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="current_route">Current Route</label>

                <input style="display: block" id="current_route" name="current_route" type="text">

                @if($errors->has('current_route'))
                <div class="mt-2" style="color: red">{{ $errors->first('current_route') }}</div>
                @endif
            </div>

            <div class="mt-3">
                <label for="comments">Comments</label>

                <input style="display: block" id="comments" name="comments" type="text">

                @if($errors->has('comments'))
                <div class="mt-2" style="color: red">{{ $errors->first('comments') }}</div>
                @endif
            </div>
        </div>

        
        <button type="submit" class="mt-5">Submit</button>
    </form>
</div>
</body>
</html>

