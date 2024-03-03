
@extends('admin.layout.main')
@section('main-container') 

<div class="container">
    <div class="table-container">
        <header class="modal-header">
            <h5><mark> my costumers Details</mark></h5>
        </header>

        @if(session('message'))
        {{session('message')}}
        @endif

        @if(isset($details))
        <div class="table-responsive">
            <table class="table table-hover table-bordered text-white">
                
                    <th>Name</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>payment</th>
                    <th>price</th>
                    <th>foodname</th>
                    <th>subscribe</th>
                    <th>Action</th>
                    @foreach ($details as $User)
                    <tr>
                        <td>{{ $User->name }}</td>
                        <td>{{ $User->phone }}</td>
                        <td>{{ $User->address }}</td>
                        <td>{{$User->payment}}</td>
                        <td>{{$User->price}}</td>
                        <td>{{$User->description}}</td>
                        <td>{{$User->subscribe}}</td>
                        <td>
    <a href="{{ url('/edit/') . $User->id }}"><button class=" custom-btn">Edit</button></a>
<a href="{{url('/delete/')}}{{$User->id}}"> <button onclick="return confirm('Are you sure want to delete this?')" class=" custom-btn">Delete</button></a>
                        </td>
                        
                    </tr>
                 @endforeach
                 
            
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
<style>
    body {
        //background-image: url(''); 
        background-size: 700px;
        background-position: center;
        color: #ffffff; 
        
        
        
    }

    .container {
        margin-top: 10px;
        

    }

    .table-container {
        background-color: rgba(0, 0, 0, 0.7); 
        padding: 20px;
        border-radius: 10px;
        width:1000px;
    }
    .custom-btn {
    width: 50px;
    height: 75px;
    /* Add any other styles you want */
}

</style>
 

