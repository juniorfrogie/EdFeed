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
      <form action="{{route('institutes.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="institute-container">
          <div class="columns">
            <div class="column">
              <p class="is-size-4">About</p>
            </div>
            <div class="column">
              <button class="button is-primary is-pulled-right">Save</button>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <input class="input" name="institute_name" type="text" placeholder="Institute Name">
              </div>
              <div class="field">

                <input class="input" name="description" type="text" placeholder="Description">
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
@endsection
