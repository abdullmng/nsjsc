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
                        <a href="javascript:void" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#modal">Import Users</a>
                        <a href="javascript:void" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#promotionModal">Export Users Due for Promotion</a>
                    </div>

                    <div class="table-responsive mb-">
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block block-rounded">
                    <div class="block-header">
                        <h4 class="block-title">Import Users</h4>
                        <a href="javascript:void" data-bs-dismiss="modal" class="btn-close"></a>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="file">Excel File</label>
                                <input type="file" name="file" id="file" class="form-control form-control-alt"
                                    accept=".xlsx,.xls,.csv">
                            </div>
                            <div class="mb-3">
                                <label for="grade_level">Grade Level</label>
                                <select name="grade_level" id="grade_level"
                                    class="form-control form-control-alt form-select">
                                    <option value="" disabled selected>Select Grade Level</option>
                                    @foreach ($grade_levels as $grade_level)
                                        <option value="{{ $grade_level->id }}">{{ $grade_level->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="step">Step</label>
                                <select name="step" id="step" class="form-control form-control-alt form-select">
                                    <option value="" disabled selected>Select Step</option>
                                    @foreach ($steps as $step)
                                        <option value="{{ $step->id }}">{{ $step->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Import Users</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="promotionModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block block-rounded">
                    <div class="block-header">
                        <h4 class="block-title">Export Users Due for Promotion</h4>
                        <a href="javascript:void" data-bs-dismiss="modal" class="btn-close"></a>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="{{ route('users.export') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <label for="grade_level">Grade Level</label>
                                <select name="grade_level" id="grade_level"
                                    class="form-control form-control-alt form-select">
                                    <option value="" disabled selected>Select Grade Level</option>
                                    @foreach ($grade_levels as $grade_level)
                                        <option value="{{ $grade_level->id }}">{{ $grade_level->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Export Users</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
