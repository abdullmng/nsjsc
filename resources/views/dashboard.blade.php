@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-file-pdf fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">{{ $stats['total_files'] }}</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Documents</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-file-pdf fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">{{ $stats['sent_files'] }}</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Sent</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-file-pdf fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">{{ $stats['received_files'] }}</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Received</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
          <div class="d-none d-sm-block">
            <i class="fa fa-file-pdf fa-2x opacity-25"></i>
          </div>
          <div>
            <div class="fs-3 fw-semibold">{{ $stats['acknowledged_files'] }}</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Acknowledged</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>


  <div class="row">
    <!-- Row #5 -->
    @if(auth()->user()->role == 'admin')
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="/offices">
        <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
          {{-- <div class="ribbon-box">15</div> --}}
          <p class="my-3">
            <i class="fa fa-building fa-2x"></i>
          </p>
          <p class="fw-semibold">Offices</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="/users">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-users fa-2x"></i>
          </p>
          <p class="fw-semibold">Users</p>
        </div>
      </a>
    </div>
    @endif
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="/documents">
        <div class="block-content">
          <p class="my-3">
            <i class="fa fa-upload fa-2x"></i>
          </p>
          <p class="fw-semibold">Documents</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="/sent">
        <div class="block-content">
          <p class="my-3">
            <i class="fa fa-file-pdf fa-2x"></i>
          </p>
          <p class="fw-semibold">Transfers</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-shadow text-center" href="/recevied">
          <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
            <p class="my-3">
              <i class="fa fa-file-pdf fa-2x"></i>
            </p>
            <p class="fw-semibold">Received</p>
          </div>
        </a>
      </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded block-link-shadow text-center" href="/logout">
        <div class="block-content">
          <p class="my-3">
            <i class="si si-power fa-2x"></i>
          </p>
          <p class="fw-semibold">Sign Out</p>
        </div>
      </a>
    </div>
    <!-- END Row #5 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="block block-rounded">
            <div class="block-header">
                <h4 class="block-title">Received Documents</h4>
            </div>
            <div class="block-content block-content-full">
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
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
                                    <td>
                                        @if ($transfer->status != "acknowledged")
                                            <a href="/documents/transfer/acknowledge/{{ $transfer->id }}" class="btn btn-sm btn-primary">Acknowledge</a>
                                        @else
                                            No Action
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="/transfer">View all</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
