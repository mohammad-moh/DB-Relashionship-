@extends('frontend.main')

@section('title', 'Get All Items')

@section('body')
    @foreach ($items as $item )
<div class="container  col-sm-4">
    <div class="row"></div>
    <div class="col">
        <div class="card text-dark bg-warning mb-3 text-center" style="max-width: 18rem;">
            <div class="card-header">{{ $item->Fname }}</div>
            <div class="card-body">
                <h5 class="card-title">{{ $item->Lname }}</h5>
                <p class="card-text">{{ $item->Salary }} </p>
            </div>
        </div>
        </div>
        </div>
        </div>
    @endforeach
@stop
