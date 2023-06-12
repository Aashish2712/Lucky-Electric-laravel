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
                    <th scope="col"> Amount </th>
                    <th scope="col"> Status </th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            @if ($results->count())
                <tbody>
                    @php
                        
                        $sno = 1;
                    @endphp
                    @foreach ($results as $entry)
                        <tr class="table-warning">
                            <th scope="row">{{ $sno }}</th>
                            <td>{{ $entry->od_id }}</td>

                            <td>₹{{ $entry->amount }}</td>
                            <td class="text-success fw-bold">{{ $entry->status }}</td>
                            <td><button type="button" id="view" class="btn btn-info" data-toggle="modal"
                                    data-target="#modal-{{ $entry->od_id }}" data-custom-data={{ $entry->od_id }}>
                                    View Details
                                </button>
                            </td>
                            <td><a href="cancel/{{ $entry->od_id }}" class="btn btn-danger"> Cancel
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


    @foreach ($results as $entry)
        <!-- Modal -->
        <div class="modal fade" id="modal-{{ $entry->od_id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content py-5">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <p class="text-success h5 m-3" for=""> Order Id :-
                            {{ $entry->od_id }}
                        </p>
                        <p class="text-success h6 m-3"> Order Status :- {{ $entry->status }} </p>
                        <p class="text-danger h5 m-3"> Order Amount :- ₹{{ $entry->amount }}</p>



                        <table class="table table-info">
                            <thead>
                                <tr>
                                    <th scope="col">Sno</th>
                                    <th scope="col">Product Name </th>
                                    <th scope="col">Product Price </th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                            </thead>

                            @php
                                
                                $sn = 1;
                            @endphp

                            @foreach ($rest as $item)
                                @if ($entry->od_id == $item->od_id)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $sn }}</th>
                                            <td>{{ $item->p_name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->t_price }}</td>

                                        </tr>

                                    </tbody>
                                    @php
                                        
                                        $sn++;
                                    @endphp
                                @else
                                    @continue
                                @endif
                            @endforeach
                        </table>






                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach
@endsection
