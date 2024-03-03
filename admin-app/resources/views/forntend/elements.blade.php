<!-- resources/views/frontend/food-menu/create.blade.php -->

@extends('forntend.layout.main')

@section('main-container')   
    <!-- Login / Signup Modal -->
    <div class="modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="loginSignupModalLabel">Login / Signup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Login form -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- Login form fields go here -->

                        <p><i><span style="color:blue">have you already user?</span> <i></p><br>
                            <center><h1><span style="color:blue"<bold>Budha Resturent</bold></span><h1></center>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                    <hr>
                    


                    <p><i><span style="color:rgb(0, 255, 149)">are you new user?</span></i></p>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <!-- Signup form fields go here -->
                        <button type="submit" class="btn btn-success">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Your existing code -->
     
     <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Fill Address and Payment</h2>
                    </div>

                    <!-- Form -->
                    @if(session('message'))
                    {{session('message')}}
                @endif
                    
            <form method="post" action="{{ url('/User') }}" enctype="multipart/form-data">

                        @csrf

                  <div class="media-body align-self-center">
                    
                    <img src="{{ url('uploads/' . $product->image) }}" class="mr-3" alt="{{ $product->name }}" height="150px" width="200px">
            
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                            <h5>Rupees{{ number_format($product->price, 2) }}</h5>
                            
                        </div>
                        

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="payment-mode">Payment Mode:</label>
                            <select name="payment" id="payment_mode" class="form-control" required>
                                <option value="online">Online-phonepay</option>
                                <option value="cash_on_delivery">CashonDelivery</option>
                                <option value="emi">EMI</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">FoodName:</label>
                            <input type="text" name="description" id="description" class="form-control" rows="4" required></input>
                        </div>



                        <div class="form-group">
                            <label for="description">Foodprice:</label>
                            <input type="text" name="price" id="description" class="form-control" rows="4" required></input>
                        </div>

                        

                        <div class="form-group">
                            <label for="subscribe">Subscribe for WhatsApp:</label>
                            <input type="checkbox" name="subscribe" id="subscribe">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Finally Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery and Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#loginSignupModal').modal('show');
        });
    </script>
@endsection

<style>
    /* Add your inline CSS here */
    .modal-body {
        padding: 10px;
        box-sizing: border-box;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        height: 50vh;
        overflow: hidden;
        display: flex;
        font-family: 'Anton', sans-serif;
        justify-content: center;
        align-items: center;

        <>
    .modal-body {
        padding: 10px;
        box-sizing: border-box;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        height: 50vh;
        overflow: hidden;
        display: flex;
        font-family: 'Anton', sans-serif;
        justify-content: center;
        align-items: center;
    }

    section.food_menu {
        padding: 40px 0; /* Adjust top and bottom padding as needed */
    }

    .food_menu .container {
        max-width: 75%;
        padding: 0 15px; /* Adjust left and right padding as needed */
    }

    .food_menu .form-group {
        margin-bottom: 15px;
    }

    .food_menu button {
        width: 75%;
    }


    /* Add more styles as needed */
</style>