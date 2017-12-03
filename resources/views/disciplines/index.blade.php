@extends('layouts.landing')

@section('content')

  {{-- <section class="hero is-link is-large video"> --}}

  <section class="hero is-large video">
    <div class="hero-video">
      <video poster="" id="bgvid" src="https://player.vimeo.com/external/235437806.sd.mp4?s=d3ab01af15cf6829669a1a13419e7d0f14b63c84&amp;profile_id=165" playsinline autoplay muted loop>
        <source src="vid/BGvid.webm" type="video/webm">
          <source src="vid/BGvid.mp4" type="video/mp4">
          </video>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns is-vcentered">
              <div class="column">
                <p class="title">
                  Documentation
                </p>
                <p class="subtitle">
                  Everything you need to <strong>create a website</strong> with Bulma
                </p>
                <a class="button is-info is-inverted is-outlined" href="http://localhost:8000/search">View all courses</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="discipline"  class="m-t-50">
        <div class="container">
          <div class="level">
            <div class="level-item">
              <h1 class="title">Browse by Major</h1>
            </div>
          </div>
          <ul>
            {{-- @foreach ($institutes as $institute)
              <li data-clickable="clickable">
                <a href="{{$institute->id}}" title="{{$institute->name}}">
                  {{$institute->name}}
                </a>
              </li>
            @endforeach --}}
          </ul>
        </div>
      </section>
      <section id="opportunity" class="m-t-50">
        <div class="container">

          <div class="level is-mobile">
            <div class="level-item">
              <h1 class="title">Opportunity</h1>
            </div>
            <p class="level-right">
              <a class="link is-info">See all</a>
            </p>
          </div>

          <div class="columns is-multiline">
            @for ($i = 0; $i < 4; $i++)
              {{-- @foreach ($roles as $role) --}}
              <div class="column is-one-quarter">
                <div class="card">
                  <a href="#">
                    <div class="card-image">
                      <figure class="image">
                        <img title="Yii Framework Translation" alt="Translated Yii core messages, system views and various documentation to Dutch." src="https://udemy-images.udemy.com/course/240x135/1178124_76bb_5.jpg">
                      </figure>
                    </div>

                    <div class="card-content">
                      <p class="title is-6">Postdoctoral Research Fellowship at RUPP</p>
                      <p class="subtitle is-7">Deadline: 31 Dec 2017</p>
                    </div>
                    <div class="card-content level-right has-text-centered">
                      <a href="https://github.com/yiisoft/yii2" target="_blank" title="Interested" class="m-r-10">
                        <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                      </a>
                      <a href="http://www.yiiframework.com" target="_blank" title="Share">
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                      </a>
                    </div>
                  </a>


                </div>

              </div>
              {{-- @endforeach --}}
            @endfor
          </div>
        </div>
      </section>

    @stop
    @section('scripts')
      <script>
      var app = new Vue({
        el: '#app',
        data: {
        }
      });
      </script>
    @endsection
