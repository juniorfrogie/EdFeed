@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">New Institute</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <section id="institute-detail">

      <div class="institute-container">
        <div class="columns">
          <div class="column">
            <p class="is-size-4">About</p>
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <div class="field">
              <input class="input" name="institute_name" type="text" placeholder="{{$institute->name}}">
            </div>

            <div class="field">

              <input class="input" name="description" type="text" placeholder="{{$institute->description}}">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="course-list">
      <div class="institute-container">
        <div class="columns">
          <div class="column">
            <p class="is-size-4">Courses</p>
          </div>
        </div>
        <div class="columns is-multiline">
          @foreach ($institute->courses as $course)
            <div class="column is-one-quarter">
              <div class="box">
                <article class="media">
                  <div class="media-content">
                    <div class="content">
                      <h4 class="subtitle"><em>{{$course->name}}</em></h4>
                      <p>
                        {{substr($course -> description, 0, 100)}}
                        {{ strlen($course -> description) > 100 ? "..." : ""}}
                      </p>
                    </div>

                    <div class="columns is-mobile">
                      <div class="column is-one-half">
                        <a href="{{route('roles.show', $course->id)}}" class="button is-primary is-fullwidth">Details</a>
                      </div>
                      <div class="column is-one-half">
                        <a href="{{route('roles.edit', $course->id)}}" class="button is-light is-fullwidth">Edit</a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection
