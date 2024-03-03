<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="modal-header">
        <h1><mark> fill in below form </mark></h1>
        </header>
     @if(isset($message))
        {{$message}}
        @endif
        <form method="post" action="{{url('/submit')}}" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone</label>
    <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
    <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="picture" class="form-control">
            </div>
            <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
   <button class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    @if(isset($details))
        <div class='table-responsive'>
            <table class='table table-hover table-bordered'>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <td>{{$details['cname']}}</td>
                    <td>{{$details['cphone']}}</td>
                    <td>{{$details['cemail']}}</td>
                    <td>{{$details['cpassword']}}</td>
                </tr>
            </table>
        </div>
    @endif
    </div>
</body>
</html>