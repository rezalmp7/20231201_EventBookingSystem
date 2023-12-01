@extends('layouts')

@section('content')
<div class="row">
    <div class="mx-auto my-5 px-5 col-12">
        <div class="row">
            @foreach ($bookedEvent as $item)
            <div class="col-md-4 p-3">
                <div class="card text-center m-0 p-0">
                    <div class="card-header">
                    {{ $item->title }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ date('H:i', strtotime($item->time))." ".date('d F Y', strtotime($item->date)).", ".$item->location }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
