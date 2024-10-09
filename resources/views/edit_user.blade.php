@extends('layouts.app')
@section('title', 'Add User')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4 class="block-title">Add User</h4>
                </div>
                <div class="block-content block-content-full">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="form-control form-control-alt" value="{{ $user->first_name }}">
                                    @if ($errors->has('first_name'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name"
                                        class="form-control form-control-alt" value="{{ $user->middle_name }}">
                                    @if ($errors->has('middle_name'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('middle_name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="surname">Surname <span class="text-danger">*</span></label>
                                    <input type="text" name="surname" id="surname"
                                        class="form-control form-control-alt" value="{{ $user->surname }}">
                                    @if ($errors->has('surname'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('surname') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control form-select form-control-alt">
                                        <option value="" disabled selected>Select gender</option>
                                        @php
                                            $genders = ['m' => 'male', 'f' => 'female'];
                                        @endphp
                                        @foreach ($genders as $index => $value)
                                            <option value="{{ $index }}"
                                                {{ $user->gender == $index ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('gender')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dob">DOB <span class="text-danger">*</span></label>
                                    <input type="date" name="dob" id="dob"
                                        class="form-control form-control-alt" value="{{ $user->dob }}">
                                    @error('dob')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="pf_number">PF Number <span class="text-danger">*</span></label>
                                    <input type="text" name="pf_number" id="pf_number"
                                        class="form-control form-control-alt" value="{{ $user->pf_number }}">
                                    @if ($errors->has('pf_number'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('pf_number') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="dofa">Date of First Appointment <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="date_of_first_appoitment" id="dofa"
                                        class="form-control form-control-alt"
                                        value="{{ $user->date_of_first_appointment }}">
                                    @error('date_of_first_appoitment')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dopa">Date of Present Appointment <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="date_of_present_appoitment" id="dopa"
                                        class="form-control form-control-alt"
                                        value="{{ $user->date_of_present_appointment }}">
                                    @error('date_of_present_appoitment')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="qualifications">Qualifications</label>
                                    <input type="text" name="qualifications" id="qualifications"
                                        class="form-control form-control-alt" value="{{ $user->qualifications }}">
                                    @error('qualifications')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email"
                                        class="form-control form-control-alt" value="{{ $user->email }}">
                                    @if ($errors->has('email'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="grade_level">Grade Level</label>
                                    <select name="grade_level_id" id="grade_level"
                                        class="form-control form-control-alt form-select">
                                        <option value="" disabled selected>Select Grade Level</option>
                                        @foreach ($grade_levels as $grade_level)
                                            <option value="{{ $grade_level->id }}"
                                                {{ $user->grade_level_id == $grade_level->id ? 'selected' : '' }}>
                                                {{ $grade_level->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('grade_level')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="step">Step</label>
                                    <select name="step_id" id="step"
                                        class="form-control form-control-alt form-select">
                                        <option value="" disabled selected>Select Step</option>
                                        @foreach ($steps as $step)
                                            <option value="{{ $step->id }}"
                                                {{ $user->step_id == $step->id ? 'selected' : '' }}>{{ $step->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('step')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="phone_number">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number" id="phone_number"
                                        class="form-control form-control-alt" value="{{ $user->phone_number }}">
                                    @if ($errors->has('phone_number'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('phone_number') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="address">Address </label>
                                    <input type="text" name="address" id="address"
                                        class="form-control form-control-alt" value="{{ $user->address }}">
                                    @if ($errors->has('address'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="lga">LGA </label>
                                    <input type="text" name="lga" id="lga"
                                        class="form-control form-control-alt" value="{{ $user->lga }}">
                                    @error('lga')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="office_id">Office <span class="text-danger">*</span></label>
                                    <select name="office_id" id="office_id"
                                        class="form-control form-control-alt form-select">
                                        <option value="">Select Office</option>
                                        @foreach ($offices as $office)
                                            <option value="{{ $office->id }}"
                                                {{ $user->office_id == $office->id ? 'selected' : '' }}>
                                                {{ $office->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('office_id'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('office_id') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="rank">Rank </label>
                                    <input type="text" name="rank" id="rank"
                                        class="form-control form-control-alt" value="{{ $user->rank }}">
                                    @if ($errors->has('rank'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('rank') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="cj">CJ (Conjuss) </label>
                                    <input type="text" name="cj" id="cj"
                                        class="form-control form-control-alt" value="{{ $user->cj }}">
                                    @error('cj')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="psn">PSN </label>
                                    <input type="text" name="psn" id="psn"
                                        class="form-control form-control-alt" value="{{ $user->psn }}">
                                    @error('psn')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="cno">CNO </label>
                                    <input type="text" name="cno" id="cno"
                                        class="form-control form-control-alt" value="{{ $user->cno }}">
                                    @error('cno')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-4">
                                    <label for="role">Role <span class="text-danger">*</span></label>
                                    <select name="role" id="role"
                                        class="form-control form-control-alt form-select">
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    @if ($errors->has('role'))
                                        <span
                                            class="text-danger text-sm text-small fs-sm">{{ $errors->first('role') }}</span>
                                    @endif
                                </div> --}}
                                <div class="mb-4">
                                    <label for="remark">Remark </label>
                                    <input type="text" name="remark" id="remark"
                                        class="form-control form-control-alt" value="{{ $user->remark }}">
                                    @error('remark')
                                        <span class="text-danger text-sm text-small fs-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <button type="submit" class="btn btn-primary">Update Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
