@extends('master.admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit teacher form layout</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('update-teacher', ['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input"  class="col-sm-3 col-form-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$teacher->name}}" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="{{$teacher->email}}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="number" name="mobile" value="{{$teacher->mobile}}" class="form-control" id="horizontal-password-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <textarea name="address" class="form-control" value="{{$teacher->address}}" id="horizontal-password-input"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" accept="image/*">
                            <img src="{{asset($teacher->image)}}" alt="" height="100" width="150">
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update Teacher Info</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


