@extends('layouts.app')
@section('title', 'Office')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">{{ $office->name }}</h4>
                </div>
                <div class="block-content block-content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-alt" placeholder="Enter office name" value="{{ $office->name }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-sm text-small fs-sm">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control form-control-alt" placeholder="Enter office address" value="{{ $office->address }}">
                                    @if ($errors->has('address'))
                                        <span class="text-danger text-sm text-small fs-sm">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
