@extends('layouts.admin.admin')

@section('content')
    <div class="row">
        <div class="card">
            <div class="col-md-12">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::open(['route' => 'users.store']) }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                                <label>Role</label>
                                {{Form::select('role_id',[''=> '--||--']+$roles,'',
                                ['class'=> 'form-control'])}}
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success" name="" value="Save">
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection