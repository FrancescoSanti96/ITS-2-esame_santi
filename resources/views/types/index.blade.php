@extends('types.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong>Type management: </strong>&#127830; &#127838; &#127850; &#127844; &#127866;</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Create New Type</a>
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
        @foreach ($types as $type)
        <tr>
            <td>{{ $type->id }}</td>
            <td>{{ $type->name }}</td>
            <td>
                <form action="{{ route('types.destroy',$type->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('types.show',$type->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <button type="button" class="btn btn-outline-info"><a href="{{ route('aliments.index') }}">Food managmet</a></button>
    <button type="button" class="btn btn-outline-info"><a href="{{ route('locations.index') }}">Location managment</a></button>
    {!! $types->links() !!}


@endsection
