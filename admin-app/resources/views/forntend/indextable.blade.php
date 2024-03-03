@extends('admin.layout.main')
@section('main-container') 


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assest/pk.jpg'); 
            background-size: 700px;
            background-position: center;
            color: #ffffff; 
            margin-top:50px;
            
        }

        .container {
            margin-top: 50px; 
        }

        .table-container {
            background-color: rgba(0, 0, 0, 0.7); 
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <title>product Details</title>
</head>
<body>

<div class="container">
    <div class="table-container">
        <header class="modal-header">
            <h1>product Details</h1>
        </header>

        @if(session('message'))
        {{session('message')}}
        @endif

        @if(isset($details))
        <div class="table-responsive">
            <table class="table table-hover table-bordered text-white">
                
                    
                    <th>Name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>price</th>
                    <th>Action</th>
                    @foreach ($details as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{url('/edit/')}}{{$product->id}}"><button class="btn btn-sm btn-warning">Edit</button></a> 
                            <a href="{{url('/delete/')}}{{$product->id}}"> <button onclick="return confirm('Are you sure want to delete this?')" class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('uploads/' . $product->image) }}" alt="product Image" width="50">
                            @else
                             Image
                            @endif
                        </td>
                    </tr>
                 @endforeach
                 
            
            </table>
        </div>
        @endif
    </div>
</div>
    
@endsection