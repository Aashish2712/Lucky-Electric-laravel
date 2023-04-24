@push('page')
    Login
@endpush
@extends('layouts._registration')
@section('form-section')
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form action="{{ url('/') }}/update_pass" method="POST">
            @csrf


            <div class="form-outline mb-4">
                <label class="form-label" for="lg-email">New Password</label>
                <input type="password" id="otp" name="password" class="form-control form-control-lg"
                    placeholder="Set your new password" />

                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="d-flex justify-content-between align-items-center">


                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0"> <a href="{{ url('/resend') }}" class="link-danger"> Resend OTP
                        </a></p>
                </div>

        </form>
    </div>
@endsection
