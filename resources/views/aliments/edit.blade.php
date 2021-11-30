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
                    <select name="type" id="type" value="{{ $aliment->type }}">
                        <option selected value="{{ $aliment->type }}">{{ $aliment->type }}</option>
                        <option value="carne">Carne</option>
                        <option value="pesce">Pesce</option>
                        <option value="uova">Uova</option>
                        <option value="latte e derivati">Latte e derivati</option>
                        <option value="cereali e derivati">Cereali e derivati</option>
                        <option value="legumi">Legumi</option>
                        <option value="grassi">Grassi</option>
                        <option value="frutta">Frutta</option>
                        <option value="verdura">Verdura</option>
                        <option value="verdura">Bevande</option>
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
                    <input type="number" name="numero" value="{{ $aliment->numero }}" min="0" step="1" class="form-control" placeholder="Numero">
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
                    <select name="location" id="location" value="{{ $aliment->location }}">
                        <option selected value="{{ $aliment->location }}">{{ $aliment->location }}</option>
                        <option value="frigorifero">Frigorifero</option>
                        <option value="lista spesa">Lista spesa</option>
                        <option value="magazzino">Magazzino</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Scadenza:</strong>
                    <input type="date" name="scadenza" value="{{ $aliment->scadenza }}" class="form-control" placeholder="scadenza">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
