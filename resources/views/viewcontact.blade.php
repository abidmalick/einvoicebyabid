@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">View All Contacts</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Business Name</th>
                                <th>Label Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Receive Payments</th>
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
                                <td>Something</td>
                                <td>59000</td>
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
                                <td>Something</td>
                                <td>59000</td>
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
                                <td>Something</td>
                                <td>59000</td>
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
