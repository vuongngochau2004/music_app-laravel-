@extends('client.layouts.main')

@section('title', 'Register')

@section('content-wrapper')
<div class="content-wrapper">
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset ('clients/img/bg-img/breadcumb3.jpg') }});">
        <div class="bradcumbContent">
            <p>Create a new account</p>
            <h2>Register</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Registration Area Start ##### -->
    <section class="registration-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="registration-content">
                        <h3>Join Us Today</h3>
                        <!-- Registration Form -->
                        <div class="registration-form">
                            <div>
                                @error('register_failed')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter Name" required>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter E-mail" required>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Confirm Password" required>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30" required>Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Registration Area End ##### -->
</div>
@endsection