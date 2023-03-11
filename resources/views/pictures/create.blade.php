
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Aprašykite savo paveikslą</div>

                        <div class="card-body">

                            <form method="post" action="{{ route("pictures.store") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo pavadinimas</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo kaina</label>
                                    <input class="form-control" type="text" name="price">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paveikslo aprašymas</label>
                                    <input class="form-control" type="text" name="description">
                                </div>
                                <div class="mb-3 visually-hidden">
                                    <label class="form-label">user ID</label>
                                    <input class="form-control" type="text" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
{{--                                <div class="mb-3">--}}
{{--                                    <label class="form-label">Sąvininkas</label>--}}
{{--                                    <select class="form-select" name="user_id">--}}
{{--                                        @foreach($users as $user)--}}
{{--                                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->surname }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <button class="btn btn-success">Pridėti</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


