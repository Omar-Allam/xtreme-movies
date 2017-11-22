@extends('layouts.app')

@section('content')

    @if($movies->count())
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($movies as $movie)
                            <div class="col-sm-6 col-md-4">
                               @include('_partials.movie')
                            </div>
                        @endforeach

                    </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            <strong>No Favourite Movies Selected</strong>
                        </div>
                </div>
            </div>
        </div>
    @endif
    {{ $movies->links() }}



@endsection

@section('javascript')
    <script>
        var token = $('meta[name="csrf-token"]').attr('content');
        var user_id = {{\Illuminate\Support\Facades\Auth::user()->id}}
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection