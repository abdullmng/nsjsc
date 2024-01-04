@extends('layouts.app')
@section('title', 'Send')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">{{ $file->name }}</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="mb-4">
                                <h4>Document Details</h4>
                                <p>File Number: {{ $file->number }}</p>
                                <p>Document Name: {{ $file->name }} </p>
                                <p><a href="{{ $file->path }}">Click here to view file</a></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="office">Select Office</label>
                                    <select name="office_id" id="office" class="form-control form-control-alt form-select">
                                        <option value="">Select Office</option>
                                        @foreach ($offices as $office)
                                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('office_id'))
                                        <span class="text-danger fs-sm">{{ $errors->first('office_id') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="user">User (Receiver) <span id="userLoad" style="display: none"><i>Fetching..</i></span></label>
                                    <select name="user_id" id="user" class="form-control form-control-alt form-select">
                                        <option value="">Select user</option>
                                    </select>
                                    @if ($errors->has('user_id'))
                                        <span class="text-danger fs-sm">{{ $errors->first('user_id') }}</span>
                                    @endif
                                </div>
                                <div>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-share"></i> Forward document</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Tranfer History</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped js-dataTable-responsive">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>File No.</th>
                                    <th>File</th>
                                    <th>Sent to (user)</th>
                                    <th>Sent to (office)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transfers as $transfer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transfer->file->number }}</td>
                                        <td><a href="{{ $transfer->file->path }}" download="{{ $transfer->file->name }}">{{ $transfer->file->name }}</a></td>
                                        <td>{{ $transfer->receiver->full_name }}</td>
                                        <td>{{ $transfer->receiving_office->name }}</td>
                                        <td><span class="badge bg-{{ $transfer->status == 'pending' ? 'warning': 'success' }} p-2">{{ ucfirst($transfer->status) }}</span></td>
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
@section('scripts')
    <script>
        $('#office').on('change', async function () {
            let office_id = $(this).val()
            $('#user').html('<option value="">Select user</option>')
            $.ajax({
                url: '/api/get-users',
                type: 'POST',
                data: {user_id: "{{ auth()->id() }}", office_id: office_id},
                beforeSend: () => {
                    $('#userLoad').show()
                },
                success: res => {
                    res.forEach(user => {
                        $('#user').append(`<option value="${user.id}">${user.full_name} - (${user.rank})</option>`)
                    });
                    $('#userLoad').hide()
                },
                error: err => {
                    console.log(err);
                }
            })
        })
    </script>
@endsection
