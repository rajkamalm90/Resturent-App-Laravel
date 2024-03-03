@extends('forntend.layout.main')

@section('main-container')
    

<div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <!-- Bootstrap Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Your Logo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Menu Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Payment</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="card-body">
                <!-- Your card content goes here -->
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>


@endsection


