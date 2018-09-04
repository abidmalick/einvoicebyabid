@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Payments</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Received</th>
                                <th>Remaining</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($vpayments as $payment)
                        <tbody>
                            <tr>
                                <td>{{$payment['amount']}}</td>
                                <td>{{$payment['received']}}</td>
                                <td>{{$payment['remaining']}}</td>
                                <td>{{$payment['remarks']}}</td>
                                <td>
                                    <a href="{{action('paymentController@edit', $payment['id'])}}">Update</a> |
                                    <form action="{{url('payments', $payment['id'])}}" method="post">
                                    {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="submit" name="submit" class="btn btn-danger" value="delete">
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
