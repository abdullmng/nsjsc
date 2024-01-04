@extends('layouts.app')
@section('title', 'Manage Users')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Users</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-4">
                        <a href="/users/add" class="btn btn-primary">Add User</a>
                    </div>

                    <div class="table-responsive mb-">
                        <table class="table table-bordered table-striped js-dataTable-responsive">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>PF Number</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->pf_number }}</td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td><a href="/users/edit/{{ $user->id }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
