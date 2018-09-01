@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @include('sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Labels</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Label Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Example</td>
                                <td>
                                    <a href="">Update</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Example</td>
                                <td>
                                    <a href="">Update</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mr. Khan</td>
                                <td>Example</td>
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
