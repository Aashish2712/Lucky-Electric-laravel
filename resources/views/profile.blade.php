@extends('layouts.profile_temp')
@push('menu')
    active
@endpush

@section('content-section')
    <div class="container border bg-white my-3 p-5">

        <h1 class="mx-3 mb-3">Profile</h1>
        <form>
            <fieldset disabled>
                <div class="form-group">
                    <label for="disabledTextInput">Name </label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                        value="{{ session('User_name') }}">
                </div>
                <div class="form-group">
                    <label for="disabledTextInput">Email </label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                        value="{{ session('User_email') }}">
                </div>
                {{-- <div class="form-group">
                    <label for="disabledSelect">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                </div> --}}
                <button type="submit" class="btn btn-primary center">Submit</button>
            </fieldset>
        </form>
    </div>
@endsection
