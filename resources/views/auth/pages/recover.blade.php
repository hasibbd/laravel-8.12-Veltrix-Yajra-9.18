
@extends('auth.app.layout')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
            <form action="{{url('change-password')}}" method="post" id="reset_pass">
                @csrf
                <input type="hidden" name="id" value="{{$target->id}}">
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block load">Change password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{url('/')}}">Login</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection

@extends('auth.app.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20">Welcome Back !</h5>
                            <p class="text-white-50">Sign in to continue to Veltrix.</p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <div class="p-3">
                            <form class="mt-4" action="{{url('change-password')}}" method="post" id="reset_pass">
                                @csrf
                                <input type="hidden" name="id" value="{{$target->id}}">

                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                </div>
                              <div class="mb-3">
                                    <label class="form-label" for="c_password">Password</label>
                                    <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Enter confirm password">
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light load" type="submit"">Change password</button>
                                    </div>
                                </div>

                                <div class="mt-2 mb-0 row">
                                    <div class="mt-5 text-center">
                                        <p>Remember It ? <a href="{{url('/')}}" class="fw-medium text-primary"> Sign In here </a> </p>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

                {{-- <div class="mt-5 text-center">
                     <p>Don't have an account ? <a href="pages-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                     <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                 </div>--}}


            </div>
        </div>
    </div>
@endsection
