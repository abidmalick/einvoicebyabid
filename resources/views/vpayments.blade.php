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
                                <th>Payment Type</th>
                                <th>Amount</th>
                                <th>Received</th>
                                <th>Remaining</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Evenctco Creation</td>
                                <td>Example</td>
                                <td>12345</td>
                                <td>abc@gmail.com</td>
                                <td>
                                    <a href="">Update</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Evenctco Creation</td>
                                <td>Example</td>
                                <td>12345</td>
                                <td>abc@gmail.com</td>
                                <td>
                                    <a href="">Update</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Evenctco Creation</td>
                                <td>Example</td>
                                <td>12345</td>
                                <td>abc@gmail.com</td>
                                <td>
                                    <a href="">Update</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
