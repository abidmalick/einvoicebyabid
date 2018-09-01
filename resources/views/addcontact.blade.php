@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Contact</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Select Label</label>
                        <div class="col-sm-7">
                           <select name="" id="sell" class="form-control">
                              <option value="">abc1</option>
                              <option value="">abc2</option>
                              <option value="">abc3</option>
                              <option value="">abc4</option>
                              <option value="">abc5</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Business Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Business Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Contact">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="sell" class="col-sm-2 control-label">Select Status</label>
                        <div class="col-sm-7">
                          <select name="" id="sell" class="form-control">
                              <option value="">abc1</option>
                              <option value="">abc2</option>
                              <option value="">abc3</option>
                              <option value="">abc4</option>
                              <option value="">abc5</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-7">
                          <button type="submit" class="btn btn-success">Create</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
