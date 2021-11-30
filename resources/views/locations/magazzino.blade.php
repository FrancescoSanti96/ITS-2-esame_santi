@extends('locations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong>Food warehouse management: </strong>
                    <img style="height:35px;" src="{{ URL('images/cabinet.svg') }}" alt="">
                </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aliments.create') }}"> Create New Aliment</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Name</th>
            <th>Number</th>
            <th>Brand</th>
            <th>Location</th>
            <th>Expiry date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aliments as $aliment)
        {{-- @if ($aliment->location == 'magazzino') --}}
            <tr>
                <td>{{ $aliment->id }}</td>
                <td>{{ $aliment->type }}</td>
                <td>{{ $aliment->name }}</td>
                <td>{{ $aliment->number }}</td>
                <td>{{ $aliment->brand }}</td>
                <td>{{ $aliment->location }}</td>
                <td>{{ $aliment->scadenza }}</td>
                <td>
                    <form action="{{ route('aliments.destroy',$aliment->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('aliments.show',$aliment->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('aliments.edit',$aliment->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        {{-- @endif --}}
        @endforeach
    </table>

    <button type="button" class="btn btn-outline-light"><a href="{{ route('aliments.index') }}">Home</a></button>
    <button type="button" class="btn btn-outline-light"><a href="{{ route('spesa') }}">Lista spesa</a></button>
    <button type="button" class="btn btn-outline-light"><a href="{{ route('frigorifero') }}">Frigorifero</a></button>
    <button type="button" class="btn btn-outline-light"><a href="{{ route('frigorifero') }}">In scadenza</a></button>


    {!! $aliments->links() !!}

@endsection
