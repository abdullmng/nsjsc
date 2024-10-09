@extends('layouts.app')
@section('title', 'Edit Step');
@section('content')
    <div class="row push">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-5">
                            <p>Edit Step; update name or sequence</p>
                        </div>
                        <div class="col-md-5">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control form-control-alt" value="{{ $step->name }}">
                                </div>
                                <div class="mb-6">
                                    <label for="sequence">Sequence</label>
                                    <input type="number" name="sequence" id="sequence"
                                        class="form-control form-control-alt" value="{{ $step->sequence }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Step</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
