@extends('main')

@section('body')

<main>
    <section class="py-4 text-center container">
        <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Car Brand Album</h1>
        </div>
        </div>
    </section>
    
    <div class="album bg-light">
        <div class="container">
        <hr>
            
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="btn btn-outline-secondary" href="/cars/create">Add Car</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($cars as $car)
                    <div class="col">
                        <div class="card shadow-sm">

                            <img style="width: 100%; height: 8vw; object-fit: cover;" src="{{ $car->imageurl }}" alt="" class="img-thumbnail">

                            <div class="card-body">
                            <h4>{{ $car->name }}</h4>
                            <p class="card-text">{{ $car->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
   
                                        <a class="btn btn-sm btn-outline-secondary" href="cars/{{ $car->id }}/edit">Edit</a>
                                        <form action="cars/{{ $car->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-warning">Delete</button>
                                        </form>
                                </div>
                                <!-- <small class="text-muted">9 mins</small> -->
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </div>
</main>

@endsection()
