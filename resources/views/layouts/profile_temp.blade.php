@extends('layouts._main')
@push('page')
    profile
@endpush
@section('main-section')
    <ul class="nav justify-content-center" style="background-color: #b8b84e;">
        <li class="nav-item ">
            <a class="nav-link navcontents " aria-current="page" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link navcontents" href="/order">Order's</a>
        </li>

    </ul>
    @yield('content-section')
@endsection
