@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Receive Payments</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal">
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Payment Type</label>
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
                        <label  class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Amount">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Received</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="Received">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Remaining</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" placeholder="Remaining">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Remarks</label>
                        <div class="col-sm-7">
                        <textarea class="form-control" rows="6"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-7">
                          <button type="submit" class="btn btn-success">Receive</button>
                        </div>
                      </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




