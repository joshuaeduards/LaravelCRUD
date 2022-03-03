@extends('main')

@section('body')
<main>
    <section class="py-4 text-center container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Car Brand Update</h1>
            </div>
        </div>
    </section>

    <div class="album bg-light">
        <div class="container">
            <hr>
            @if($errors->any())
                <div class="row">
                    <div class="alert alert-warning" role="alert">
                        <?php $i = 1; ?>
                        @foreach($errors->all() as $error)
                            <div class="d-inline p-2 text-dark badge">{{ $i++; }}. {{ $error }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif()

            <div class="row">
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">
                            <a class="btn btn-outline-secondary" href="/cars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg> 
                                Car Album
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row  justify-content-center">
                <div class="card p-2" style="width: 60%">
                    <form action="/cars/{{ $cars->id }}" method="POST" > 
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" value="{{ $cars->name }}">
                        </div>
                        <div class="form-group py-2">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" name="description" placeholder="description" rows="3">{{ $cars->description }}</textarea>
                        </div>
                        <div class="form-group py-2">
                            <label for="imageurl">Image Url</label>
                            <textarea type="text" class="form-control" name="imageurl" placeholder="imageurl" rows="3">{{ $cars->imageurl }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary my-2">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection()