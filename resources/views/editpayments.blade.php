@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Update Payments</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal" method="post" action="{{url('payments', $id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                     <!-- <div class="form-group">
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
                      </div> -->
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-7">
                          <input type="text" name="amount" value="{{$payments->amount}}" class="form-control" placeholder="Amount">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Received</label>
                        <div class="col-sm-7">
                          <input type="text" name="received" value="{{$payments->received}}" class="form-control" placeholder="Received">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Remaining</label>
                        <div class="col-sm-7">
                          <input type="text" name="remaining" value="{{$payments->remaining}}" class="form-control" placeholder="Remaining">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Remarks</label>
                        <div class="col-sm-7">
                        <textarea class="form-control" name="remarks" rows="6">{{$payments->remarks}}</textarea>
                        </div>
                      </div>
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




