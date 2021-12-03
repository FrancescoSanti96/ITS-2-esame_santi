@extends('locations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong>Location management: </strong>&#127830; &#127838; &#127850; &#127844; &#127866;</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('locations.create') }}"> Create New Location</a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($locations as $location)
        <tr>
            <td>{{ $location->id }}</td>
            <td>{{ $location->name }}</td>
            <td>
                <form action="{{ route('locations.destroy',$location->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('locations.show',$location->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('locations.edit',$location->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <button type="button" class="btn btn-outline-info"><a href="{{ route('aliments.index') }}">Food managmet</a></button>
    <button type="button" class="btn btn-outline-info"><a href="{{ route('types.index') }}">Type managment</a></button>

    {!! $locations->links() !!}


@endsection
