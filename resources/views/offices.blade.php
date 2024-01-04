@extends('layouts.app')
@section('title', 'Manage Offices')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Offices</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-4">
                        <a href="javascript:void" data-bs-toggle="modal" data-bs-target="#officeModal" class="btn btn-primary">Add Office</a>
                    </div>
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">{{ $err }}</div>
                    @endforeach
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive mb-">
                        <table class="table table-bordered table-striped js-dataTable-responsive">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offices as $office)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $office->name }}</td>
                                        <td>{{ $office->address }}</td>
                                        <td><a href="/offices/edit/{{ $office->id }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a> <a href="/offices/delete/{{ $office->id }}" class="btn btn-sm btn-danger" onclick="return confirm('are you sure you want to delete this office, all users registered in this office will be deleted along?')"><i class="fa fa-trash"></i> Delete</a></td>
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
@section('modals')
    <div class="modal fade" id="officeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block block-rounded shadow-none mb-0">
                    <div class="block-header block-header-default">
                        <h4 class="block-title">Add Office</h4>
                        <a href="#" data-bs-dismiss="modal" class="btn-close"></a>
                    </div>
                    <div class="block-content">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-alt" placeholder="Enter office name">
                            </div>
                            <div class="mb-4">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control form-control-alt" placeholder="Enter office address">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Add Office</button>
                                <a href="#" data-bs-dismiss="modal" class="btn btn-danger">Close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
