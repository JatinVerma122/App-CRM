@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <div class="card">
                <div class="card-header">
                    Create Employee
                </div>
                <div class="card-body">
                    <form class="g-3 needs-validation" novalidate method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">First Name *</label>
                            <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" name="first_name" placeholder="Enter First Name">
                            @if ($errors->has('first_name'))
                            <span class="invalid-feedback is-invalid" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Last Name *</label>
                            <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="last_name" name="last_name" placeholder="Enter Last Name">
                            @if ($errors->has('last_name'))
                            <span class="invalid-feedback is-invalid" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" type="email" name="email" placeholder="Enter Email Address">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback is-invalid" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="company">Company</label>
                            <select name="company_id" class="form-select {{ $errors->has('company_id') ? 'is-invalid' : '' }}" aria-label="Company">
                                <option selected>Select Company</option>
                                @foreach($companies as $key => $company)
                                <option value="{{$key}}">{{$company}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('company_id'))
                            <span class="invalid-feedback is-invalid" role="alert">
                                <strong>{{ $errors->first('company_id') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" name="phone" placeholder="Enter Phone Number">
                            @if ($errors->has('phone'))
                            <span class="invalid-feedback is-invalid" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
