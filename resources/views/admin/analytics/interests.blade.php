@extends('layouts.admin')

@section('content')
    {{-- interests --}}
    <div class="row">
        <div class="col-md-6">
            @include('admin.partials.analytics.interests_affinity')
        </div>

        <div class="col-md-6">
            @include('admin.partials.analytics.interests_market')
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.partials.analytics.interests_other')
        </div>
    </div>
@endsection