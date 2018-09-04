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
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($contact as $vcontact)
                        <tbody>
                            <tr>
                                <td>{{$vcontact['owner_name']}}</td>
                                <td>{{$vcontact['b_name']}}</td>
                                <td>{{$vcontact['email']}}</td>
                                <td>{{$vcontact['contact']}}</td>
                                <td>{{$vcontact['address']}}</td>
                                <td>
                                    <a href="{{action('contactController@edit', $vcontact['id'])}}">Update</a> |
                                    <form method="post" action="{{url('contact', $vcontact['id'])}}">
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
