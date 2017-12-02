@extends('layouts.landing')

@section('content')

  <section id="logo" class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Hero title
        </h1>
        <h2 class="subtitle">
          Hero subtitle
        </h2>
      </div>
    </div>
  </section>
  <section id="quick-fact" class="info-tiles m-t-10">


    <div class="container">
      <ul id="QuickFact">
        <li class="QuickFact">
          <i class="fa fa-calendar fa-1 QuickFactIcon" aria-hidden="true"></i>
          <span class="QFDetails">
            <p>May 2018</p>
            <p>Application Deadline</p>
          </span>
        </li>
        <li class="QuickFact">
          <i class="fa fa-clock-o QuickFactIcon" aria-hidden="true"></i>
          <span class="QFDetails">
            <p>48 months</p>
            <p>Duration</p>
          </span>
        </li>
        <li class="QuickFact">
          <i class="fa fa-money QuickFactIcon" aria-hidden="true"></i>
          <span class="QFDetails">
            <p>500 USD/year</p>
            <p>Tuition fee</p>
          </span>
        </li>
      </ul>
    </div>


  </section>

  <section id="short-description" class="m-t-10">
    <div class="container">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>Computer Science and Engineering</strong> <small>@Royal Univerity of Phnom Penh</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <a>visit school websit</a>
              </div>
            </div>
          </nav>
        </div>
      </section>

      <section class="m-t-30">
        <div class="container">
          <tab-widget></tab-widget>
        </div>
      </section>
    @endsection

    @section('scripts')
      <script>
      var app = new Vue({
        el: '#app',
        data: {

        }
      });
      </script>
    @stop
