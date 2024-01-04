@extends('layouts.app')
@section('title', 'Transfers')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Received Documents</h4>
                </div>
                <div class="block-content block-content-full">
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">{{ $err }}</div>
                    @endforeach
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped js-dataTable-responsive">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>File No.</th>
                                    <th>File</th>
                                    <th>Sent By</th>
                                    <th>Sent From</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transfers as $transfer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transfer->file->number }}</td>
                                        <td><a href="{{ $transfer->file->path }}" download="{{ $transfer->file->name }}">{{ $transfer->file->name }}</a></td>
                                        <td>{{ $transfer->sender->full_name }}</td>
                                        <td>{{ $transfer->sending_office->name }}</td>
                                        <td><span class="badge bg-{{ $transfer->status == 'pending' ? 'warning': 'success' }} p-2">{{ ucfirst($transfer->status) }}</span></td>
                                        <td><a href="/documents/transfer/acknowledge/{{ $transfer->id }}" class="btn btn-sm btn-primary">Acknowledge</a></td>
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
