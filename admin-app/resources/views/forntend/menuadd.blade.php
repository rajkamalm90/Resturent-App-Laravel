@extends('admin.layout.main')
@section('main-container')  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ResData</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-body">
                <header class="modal-header">
                    <h1>ADD Product</h1>
                </header>
                <header class="modal-header">
                    <h1>ADD Product</h1>
                </header>

                @if(session('message'))
                    {{ session('message') }}
                @endif
                <form method="post" action="{{ url('/submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>image upload</label>
                        <input type="file" name="picture" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
