@extends('layouts.app')
@section('title', 'Edit Grade Level');
@section('content')
    <div class="row push">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-5">
                            <p>Edit Grade Level; update name, sequence or years to promote</p>
                        </div>
                        <div class="col-md-5">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control form-control-alt" value="{{ $gradeLevel->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="sequence">Sequence</label>
                                    <input type="number" name="sequence" id="sequence"
                                        class="form-control form-control-alt" value="{{ $gradeLevel->sequence }}">
                                </div>
                                <div class="mb-5">
                                    <label for="years_to_promote">Years to Promote</label>
                                    <input type="number" name="years_to_promote" id="years_to_promote"
                                        class="form-control form-control-alt" value="{{ $gradeLevel->years_to_promote }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Grade Level</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
