@extends('main')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Car Brand') }}</div>

                <div class="card-body">
                    <ul>
                        @foreach($cars as $car)
                        <li>
                            {{$car->name}}
                        </li>
                        @endforeach()
                    </ul>
                </div>
            </div>

        </div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Car Brand\'s Model') }}</div>

                <div class="card-body">
                    <ul>
                        <li>...</li>
                    </ul>

                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
