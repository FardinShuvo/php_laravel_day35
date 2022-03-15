@extends('master.admin.master')
@section('body')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">User form layout</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('new-user')}}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input"  class="col-sm-3 col-form-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="horizontal-password-input">
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div class="custom-control custom-checkbox mb-4">
                                <input type="checkbox" class="custom-control-input" id="horizontal-customCheck">
                                <label class="custom-control-label" for="horizontal-customCheck">Remember me</label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

