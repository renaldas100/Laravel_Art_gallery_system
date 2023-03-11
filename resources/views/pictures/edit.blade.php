
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Redaguokite savo paveikslo aprašymą</div>

                        <div class="card-body">

                            <form method="post" action="{{ route("pictures.update", $picture->id) }}">
                                @csrf
                                @method("put")
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo pavadinimas</label>
                                    <input class="form-control" type="text" name="name" value="{{ $picture->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo kaina</label>
                                    <input class="form-control" type="text" name="price" value="{{ $picture->price }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo aprašymas</label>
                                    <input class="form-control" type="text" name="description" value="{{ $picture->description }}">
                                </div>
                                <button class="btn btn-success">Išsaugoti</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


