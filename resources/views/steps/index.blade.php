@extends('layouts.app')
@section('title', 'Steps')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content block-conent-full">
                    <div class="mb-4">
                        <a href="javascript:void" data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-primary">
                            Add Step
                        </a>
                    </div>
                    <div class="table-responsive">
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
                        <h4 class="block-title">Add Step</h4>
                        <a href="javascript:void" data-bs-dismiss="modal" class="btn-close"></a>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-alt">
                            </div>
                            <div class="mb-5">
                                <label for="sequence">Sequence</label>
                                <input type="number" name="sequence" id="sequence" class="form-control form-control-alt">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Step</button>
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
