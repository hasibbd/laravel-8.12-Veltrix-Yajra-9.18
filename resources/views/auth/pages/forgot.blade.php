


@extends('auth.app.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                           {{-- <a href="index.html" class="logo logo-admin">
                                <img src="assets/images/logo-sm.png" height="24" alt="logo">
                            </a>--}}
                        </div>
                    </div>

                    <div class="card-body p-4">

                        <div class="p-3">

                            <div class="alert alert-success mt-5" >
                                Enter your Email and instructions will be sent to you!
                            </div>


                            <form class=" mt-4" action="{{url('user-forget')}}" method="post" id="user_forget">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                </div>

                                <div class="row  mb-0">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light load" type="submit">Reset</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

                <div class="mt-5 text-center">
                    <p>Remember It ? <a href="{{url('/')}}" class="fw-medium text-primary"> Sign In here </a> </p>
                </div>

            </div>
        </div>
    </div>
@endsection
