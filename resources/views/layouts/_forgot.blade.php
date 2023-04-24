@push('page')
    Login
@endpush
@extends('layouts._registration')
@section('form-section')
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{ url('/') }}/reset" method="POST">
            @csrf


            <div class="form-outline mb-4">
                <label class="form-label" for="lg-email">Email address</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="Enter your email address" value="{{ old('email') }}" />

                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="d-flex justify-content-between align-items-center">


                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ url('/register') }}"
                            class="link-danger"> Sign Up </a></p>
                </div>

        </form>
    </div>
@endsection
