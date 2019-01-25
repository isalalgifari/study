@extends('layouts.admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                    <a class="btn btn-success" href="{{route('users.create')}}">Creater User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Role
                            </th>
                            <th class="text-right">
                                Action
                            </th>
                            </thead>
                            <tbody>
                            @foreach($data as $users)
                                <tr>
                                    <td>
                                        {{$users->name}}
                                    </td>
                                    <td>
                                        {{$users->email}}
                                    </td>
                                    <td>
                                        {{$users->role->name}}
                                </td>
                                    <td class="text-right">
                                    </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection