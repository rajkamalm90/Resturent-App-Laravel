<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-success">
            <div class="card-body">
                <header class="modal-header">
                    <h1>Please edit product</h1>
                </header>
                @if(isset($edit_details))
    <form method="post" action="{{url('/update')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="hidden_id" value="{{$edit_details->id}}" class="form-control">
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" value="{{$edit_details->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" value="{{$edit_details->description}}" class="form-control">
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" value="{{$edit_details->price}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="picture">Image Upload</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
        @if($edit_details->image)
            <div class="form-group">
                <img src="{{ asset('uploads/' . $edit_details->image) }}" alt="Product Image" class="img-fluid">
            </div>
        @endif
        <div class="form-group">
            <button class="btn btn-sm btn-primary">Update</button>
        </div>
         </form>
         @endif
         </div>
        </div>
    </div>
</body>
</html>
