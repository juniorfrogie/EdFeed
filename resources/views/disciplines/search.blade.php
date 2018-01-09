@extends('layouts.landing')

@section('content')

  <div class="columns is-mobile">
    <div class="column is-one-quarter">
      <div>
        <aside class="menu m-t-30 m-l-10">
          <p class="menu-label">
            Categories
          </p>
          @foreach ($majors as $major)
            <ul class="menu-list">
              <li><a class="navbar-item" href="major/{{$major->id}}">
                {{$major->name}}
              </a>
            </li>
          </ul>
        @endforeach
      </aside>
    </div>
  </div>
  <div class="column">
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <p>11 Degrees </p>
        </div>
      </div>
      <hr class="m-t-0">

      <section id="course-listing">
        @for ($i=0; $i < 10; $i++)
          <div class="card">
            <a href="http://localhost:8000/detail">
              <div class="card-content">
                <div class="columns">
                  <div class="column is-four-fifths">
                    <div class="media">
                      <div class="media-left">
                        <figure class="image is-48x48">
                          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                      </div>
                      <div>
                        <p class="title is-4">Course name</p>
                        <p class="subtitle is-6">@institute_name</p>
                      </div>
                    </div>

                    <div class="content">
                      The Department of International Trade is designed for students who want to gain an understanding ...
                      <br>
                      <span class="tag is-success">Bachlor</span>
                    </div>
                  </div>

                  <div class="column">
                    <p class="has-text-right">500 USD/year</p>
                    <p class="has-text-right">4years</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endfor
        <nav class="pagination m-t-10" role="navigation" aria-label="pagination">
          <a class="pagination-previous">Previous</a>
          <a class="pagination-next">Next page</a>
          <ul class="pagination-list">
            <li>
              <a class="pagination-link" aria-label="Goto page 1">1</a>
            </li>
            <li>
              <span class="pagination-ellipsis">&hellip;</span>
            </li>
            <li>
              <a class="pagination-link" aria-label="Goto page 45">45</a>
            </li>
            <li>
              <a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a>
            </li>
            <li>
              <a class="pagination-link" aria-label="Goto page 47">47</a>
            </li>
            <li>
              <span class="pagination-ellipsis">&hellip;</span>
            </li>
            <li>
              <a class="pagination-link" aria-label="Goto page 86">86</a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
  </div>
</div>

@endsection
