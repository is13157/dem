@extends('main')
@section('content')
    <div id="wrapper" class="dataTables_wrapper dt-bootstrap5">
        <div class="row justify-content-end">
            <div class="col-4">
                <div id="filter" class="dataTables_filter d-flex flex-nowrap">
                    <label>
                        Search: <input type="search" class="form-control form-control-sm" placeholder aria-controls="table">
                    </label>
                </div>
            </div>
        </div>
        <div class="row dt-row">
            <div class="col-sm-12">
                <table id="table" class="table table-striped dataTable w-100" aria-describedby="info">
                    <thead>
                    <tr>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name">Name</th>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Photo">Photo</th>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date">Date</th>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Age">Age</th>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Price">Price</th>
                        <th class="sorting sorting-asc col-sm-2" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Genres">Genres</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($perfomances as $perfomance)
                        <tr>
                            <td class="sorting_1">{{$perfomance->name}}</td>
                            <td><img src="{{$perfomance->photo}}" class="d-block w-100" alt=""></td>
                            <td>{{$perfomance->date}}</td>
                            <td>{{$perfomance->age}}</td>
                            <td>{{$perfomance->price}}</td>
                            <td>{{$perfomance->genre}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
