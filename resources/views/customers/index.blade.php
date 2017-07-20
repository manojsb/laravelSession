@extends('layouts.app')


@section('content')

    <div class="container">
        <table class="table">
            <tr>
                <th>CID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->_id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at }}</td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection