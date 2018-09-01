@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">View All Users</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Eamil</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($users as $users)
                        <tbody>
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->designation}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->password}}</td>
                                <td>
                                    <a href="{{url('user', $users->id)}}">View</a> |
                                    <a href="{{url('user', [$users->id,'edit'])}}">Update</a> |
                                    <form method="post" action="{{url('user', $users->id)}}">
                                        <input type="hidden" name="_method" value="delete">
                                        {{csrf_field()}}
                                        <input type="submit" name="submit" value="delete">         
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
