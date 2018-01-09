@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Institutes</h1>
      </div>
      <div class="column">
        <a href="{{route('institutes.create')}}"data-method="delete" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Institute</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns is-multiline">
      @foreach ($institutes as $institute)
        <div class="column is-one-third">
          <div class="card card-equal">
            <header class="card-header">
              <p class="card-header-title">
                {{$institute->name}} 
              </p>

              <form action="{{action('InstituteController@destroy', $institute->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">

                <button class="card-header-icon button is-white" type="submit">
                  <span class="icon">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </span>
                </button>

              </form>
            </header>
            <div class="card-image">
              <figure class="image">
                <img src="http://d125fmws0bore1.cloudfront.net/assets/shared/nd-cards/nd100@2x-93c68b1a83901b5cecca142bace5e42f2cb2b06a8904db75537f61501c2b3f22.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">

                <p>
                  {{substr($institute -> description, 0, 100)}}
                  {{ strlen($institute -> description) > 100 ? "..." : ""}}
                </p>
              </div>

            </div>
            <footer class="card-footer">
              <a href="{{route('institutes.show', $institute->id)}}" class="card-footer-item">Details</a>
              <a href="{{route('institutes.edit', $institute->id)}}" class="card-footer-item">Edit</a>
            </footer>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
