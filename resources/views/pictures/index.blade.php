
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Visi paveikslai</div>

                        <div class="card-body">

                            @if (Auth::user()!==null && Auth::user()->type=='customer')
                            <div class="clearfix">
                                <a href="{{ route('pictures.create') }}" class="btn btn-success float-end">Įtraukti naują paveikslą</a>
                            </div>
                            @else
                                <i>Įtraukti naują paveikslą gali tik prisiregistravęs ir NEadmin vartotojas</i>
                            @endif

{{--                            <hr>--}}
{{--                            <form method="post" action="{{ route("cars.search") }}">--}}
{{--                                @csrf--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="form-label">Sąvininkas</label>--}}
{{--                                        <select class="form-select" name="ownerSearch">--}}
{{--                                            <option value="">-</option>--}}
{{--                                            @foreach($owners as $owner)--}}
{{--                                                <option value="{{ $owner->id }}"  {{ ($owner->id==$ownerSearch)?'selected':'' }}>{{ $owner->name }} {{ $owner->surname }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Automobilio registracijos numeris</label>--}}
{{--                                            <input class="form-control" type="text" value="{{ $reg_numberSearch }}" name="reg_numberSearch">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Gamintojas</label>--}}
{{--                                            <input class="form-control" type="text" value="{{ $brandSearch }}" name="brandSearch">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Modelis</label>--}}
{{--                                            <input class="form-control" type="text" value="{{ $modelSearch }}" name="modelSearch">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="btn btn-info">Ieškoti</button>--}}
{{--                            </form>--}}
{{--                            <form class="mt-2" method="post" action="{{ route("cars.forget") }}">--}}
{{--                                @csrf--}}
{{--                                <button class="btn btn-info">Išvalyti paiešką</button>--}}
{{--                            </form>--}}
                            <hr>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Pavadinimas</th>
                                    <th>Kaina</th>
                                    <th>Aprašymas</th>
                                    <th>Sąvininkas</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pictures as $picture)
                                    <tr>
                                        <td>{{ $picture->name }}</td>
                                        <td>{{ $picture->price }}</td>
                                        <td>{{ $picture->description }}</td>

                                        <td>{{ $picture->user->name }} {{ $picture->user->surname }}</td>

{{--                                        @if (Auth::user()!==null && Auth::user()->type=='admin')--}}
{{--                                            <td>--}}
{{--                                                <a href="{{ route("cars.edit", $car->id) }}" class="btn btn-success">Redaguoti</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <form method="post" action="{{ route("cars.destroy", $car->id) }}">--}}
{{--                                                    @csrf--}}
{{--                                                    @method("DELETE")--}}
{{--                                                    <button class="btn btn-danger">Ištrinti</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        @else--}}
{{--                                            <td><i>tik admin vartotojams</i></td>--}}
{{--                                            <td><i>tik admin vartotojams</i></td>--}}
{{--                                        @endif--}}

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


