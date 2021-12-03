@extends('aliments.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong>Edit Aliment</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('aliments.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('aliments.update',$aliment->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" >
                    <strong>Type:</strong>
                    <select name="type_id" id="type_id" value="{{ $aliment->type->id }}">
                    <option selected value="{{ $aliment->type->id }}">{{ $aliment->type->name }}</option>
                    @foreach($types as $type )
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $aliment->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number:</strong>
                    <input type="number" name="number" value="{{ $aliment->number }}" min="0" step="1" class="form-control" placeholder="Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand:</strong>
                    <input type="text" name="brand" class="form-control" placeholder="brand" value="{{ $aliment->brand }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <select name="location_id" id="location_id" value="{{ $aliment->location->id }}">
                        <option selected value="{{ $aliment->location->id }}">{{ $aliment->location->name }}</option>
                        @foreach($locations as $location )
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Expiry date:</strong>
                    <input type="date" name="expiryDate" value="{{ $aliment->expiryDate }}" class="form-control" placeholder="Expiry date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
