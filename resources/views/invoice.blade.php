@extends('layouts.app')

@section('content')
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
  </script>
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Invoice</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                      <div class="col-md-6">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Select Label</label>
                            <div class="col-sm-10">
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
                            <label  class="col-sm-2 control-label">Subject</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" placeholder="Subject">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-6">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Select Customer</label>
                            <div class="col-sm-10">
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
                            <label  class="col-sm-2 control-label">Invoice Date</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label  class="col-sm-2 control-label">Due Date</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Items</th>
                                <th>Qty</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><a href="">Add</a></td>
                                <td><a href="">Delete</a></td>
                            </tr>
                        </tbody>
                      </table>

                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                          <form class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Total</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Total">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Discount</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Discount">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Net Total</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Net Total">
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <form class="form-horizontal">
                         <div class="form-group">
                          <label class="col-sm-2 control-label">Terms & Condition</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" rows="10"></textarea>
                          </div>
                        </div>
                         <div class="form-group">
                        <label for="sell" class="col-sm-2 control-label">Select Status</label>
                        <div class="col-sm-5">
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
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
