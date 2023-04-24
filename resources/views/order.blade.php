@extends('layouts.profile_temp')
@push('menu')
    active
@endpush
@section('content-section')
    <div class="container my-3">

        <table class="table  table-bordered  ">
            <thead>
                <tr class="table-danger">
                    <th scope="col">S.no</th>
                    <th scope="col">Order Id</th>
                    <th scope="col"> Products </th>
                    <th scope="col"> Amount </th>
                    <th scope="col"> Status </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            @if ($results->count())
                <tbody>
                    @php
                        
                        $sno = 1;
                    @endphp
                    @foreach ($results as $entry)
                        <tr class="table-info">
                            <th scope="row">{{ $sno }}</th>
                            <td>{{ $entry->od_id }}</td>
                            <td class="text-success fw-bold">{{ $entry->p_name }}</td>
                            <td>₹{{ $entry->amount }}</td>
                            <td>{{ $entry->status }}</td>

                            <td><a href="cancel/{{ $entry->p_id }}/{{ $entry->od_id }}" class="btn btn-danger"> Cancel
                                    Order</a>
                            </td>
                        </tr>
                        @php
                            $sno++;
                        @endphp
                    @endforeach
                </tbody>
        </table>
    </div>
@else
    </table>
    <h3 class="my-5">No Order's</h3>
    </div>
    </form>
    </div>
    @endif
@endsection
