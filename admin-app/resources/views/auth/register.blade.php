
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
                background-image: url('admin/assest/pkj.jpg'); 
                background-size: 1200px;
                background-position: center;
                color: #ffffff; 
                margin-top: 50px;
            }
        /* Add your custom styles here */
        .register-card {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color:greenyellow; /* Light gray background */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-card">
        <header class="modal-header text-center">
            <h1 class="mb-4"><span style="color:rgb(255, 185, 127)">Register New Admin </span></h1> 
        </header>

        @if(session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
        @endif

        <form method="post" action="{{url('/register')}}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>

        @if(isset($details))
            <div class='table-responsive'>
                <table class='table table-hover table-bordered'>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td>{{$details['username']}}</td>
                        <td>{{$details['password']}}</td>
                    </tr>
                </table>
            </div>
        @endif
    </div>
</div>

</body>
</html>
