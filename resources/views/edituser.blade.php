@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Update User</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal" method="post" action={{url('user', $users->id)}}>
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-7">
                          <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-7">
                          <input type="text" name="designation" value="{{$users->designation}}" class="form-control" placeholder="Designation">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Select Type</label>
                        <div class="col-sm-7">
                           <select name="role" id="sell" class="form-control">
                              <option value="admin">{{$users->role}}</option>
                              <option value="author">{{$users->role}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-7">
                          <input type="email" name="email" value="{{$users->email}}" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-7">
                          <input type="password" name="password" value="{{$users->password}}" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      {{csrf_field()}}
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-7">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




