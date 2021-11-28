<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table class="table table-dark">
        <thead>
            <tr>

                <th scope="col">name</th>
                {{-- <th scope="col">user_image</th> --}}
                <th scope="col">email</th>
                <th scope="col">email_verified_at</th>
                <th scope="col">password</th>
                <th scope="col">role</th>
                <th scope="col">Create</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('edit.user', $user->id) }}" method='post'>
                @csrf
                @method('put')
                <tr>
                    <th scope="row"><input type="text" name="name" placeholder="name" value="{{ $user->name }}"></th>
                    {{-- <td><input type="text" placeholder="user_image" name='user_image' value={{ $user->user_image }}>
                    </td> --}}
                    <td><input type="text" name="email" placeholder="email" value="{{ $user->email }}"></td>
                    <td><input type="text" name="email_verified_at" placeholder="email_verified_at"
                            value="{{ $user->email_verified_at }}"></td>
                    <td><input type="text" name="password" placeholder="password" value="{{ $user->password }}"></td>
                    <td><input type="text" name="role" placeholder="role" value="{{ $user->role }}"></td>
                    <td><input type="submit" value="Create"></td>
                </tr>
            </form>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
