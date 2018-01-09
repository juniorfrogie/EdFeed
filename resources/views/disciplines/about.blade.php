@extends('layouts.landing')

@section('content')

  <section class="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('images/slider1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/slider2.jpg')}}" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section class="problem">
    <div class="container">
      <div class="section-title text-center">
        <h2>
          Problems
        </h2>
      </div>
      <div class="section-contain container">
        <div class="row">
          <div class="img col-12 col-md-6">
            <img src="https://d3fw5vlhllyvee.cloudfront.net/tophat/s/517c7f5/index-products-sponsoredjobs.png" alt="Find the right candidates faster">
          </div>
          <div class="description col-12 col-md-6 align-self-center">
            <h3>Students</h3>
            <p>Go on a mad rush after receiving results as they only have a week to apply to universities. <br> They often choose wrong school or miss deadline. </p>
          </div>
        </div>

        <div class="row flex-row-reverse">
          <div class="img col-12 col-md-6">
            <img src="https://d3fw5vlhllyvee.cloudfront.net/tophat/s/517c7f5/index-products-sponsoredjobs.png" alt="Find the right candidates faster">
          </div>
          <div class="description col-12 col-md-6 align-self-center">
            <h3>Universities</h3>
            <p>Find it hard to advertise or plan for their admission because of the lack of means and exposures. Normally, they have to be famouse in order to get students. <br> Smaller universities would have less applications. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="solution">

    <div class="section-title text-center">
      <h2>
        Solutions
      </h2>
    </div>

    <div class="section-contain container">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
          <div class="row">
            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Explore Opportunities</h4>
                <p>Learn about all fileds of study and career.</p>
              </div>
            </div>

            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-road" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Plan Education Path</h4>
                <p>Understand the requirement and the important dates.</p>
              </div>
            </div>

            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Never Miss Out</h4>
                <p>Updated about important opportunities and events.</p>
              </div>
            </div>

            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Compare</h4>
                <p>Fee, Course, Location, etc.</p>
              </div>
            </div>

            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Apply Online</h4>
                <p>No more traveling for hours to get application.</p>
              </div>
            </div>

            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Education Consultant</h4>
                <p>Talk to us anytime, anywhere.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">
          <div class="row">
            <div class="solution-container col-12 col-md-4">
              <div class="solution-image">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
              <div class="solution-content">
                <h4>Potential Students</h4>
                <p>Even before the application open - the list of students to later following.</p>
              </div>
            </div>
          </div>
        </div>


        <nav>
          <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Students</a>
            <a class="nav-item nav-link" id="nav-school-tab" data-toggle="tab" href="#nav-school" role="tab" aria-controls="nav-school" aria-selected="false">Schools</a>
          </div>
        </nav>
      </div>

      <div class="find-out text-center">
        {{-- <a class="btn btn-success" href="#" role="button"> Find out more</a> --}}
      </div>
    </div>

  </section>

  <section class="involve">
    <div class="section-title text-center">
      <h2>
        Get Involved
      </h2>
      <p>
        Help making the experience of EdFeed more accurate by filling this survey.
      </p>
    </div>

    <div class="text-center">
      <a class="btn btn-success" href="https://docs.google.com/forms/d/1ca_tBFJuop3jo5OD4LjGn4rhLx-KudxGgmcdWJuvFLg/" role="button"> Take Survey</a>
    </div>
  </section>
@endsection
