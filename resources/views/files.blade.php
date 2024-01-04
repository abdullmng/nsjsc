@extends('layouts.app')
@section('title', 'Documents')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Documents</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-4">
                        <a href="javascript:void" data-bs-toggle="modal" data-bs-target="#officeModal" class="btn btn-primary">Upload Document</a>
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
                                    <th>Number</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ $file->number }}</td>
                                        <td><a href="{{ $file->path }}">{{ $file->name }}</a></td>
                                        <td>
                                            <a href="{{ $file->path }}" download="{{ str_replace(' ', '_', $file->name) }}" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a>

                                            <a href="{{ $file->path }}"  class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> View</a>

                                            <a href="/documents/delete/{{ $file->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this file?')"><i class="fa fa-trash-can"></i> Delete</a>

                                            <a href="/documents/transfer/{{ $file->id }}" class="btn btn-secondary btn-sm"><i class="fa fa-share"></i> Send</a>
                                        </td>
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
                        <h4 class="block-title">Upload Document</h4>
                        <a href="#" data-bs-dismiss="modal" class="btn-close"></a>
                    </div>
                    <div class="block-content">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-control-alt" placeholder="Enter Document Title">
                            </div>
                            <div class="mb-4">
                                <label for="number">Number</label>
                                <input type="text" name="number" id="number" class="form-control form-control-alt" placeholder="Enter document number">
                            </div>
                            <div class="mb-4">
                                <label for="file">File <span class="text-danger">*</span></label>
                                <input type="file" name="file" id="file" class="form-control form-control-alt">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Upload Document</button>
                                <a href="#" data-bs-dismiss="modal" class="btn btn-danger">Close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
