@extends('layouts.landing')

@section('content')

  {{-- START SECTION HEADER VIDEO--}}
  <section class="landing-hero" data-template="hero">
    <div class="Hero Hero--cubetto u-overlay u-marginBottom">
      <div class="Hero-background u-mediaContainer">
        <img src="https://www.primotoys.com/wp-content/uploads/2016/03/PrimoToys91-1-960x0-c-default.jpg" srcset="https://www.primotoys.com/wp-content/uploads/2016/03/PrimoToys91-1-1280x0-c-default.jpg 2048w,
        https://www.primotoys.com/wp-content/uploads/2016/03/PrimoToys91-1-960x0-c-default.jpg 1024w,
        https://www.primotoys.com/wp-content/uploads/2016/03/PrimoToys91-1-640x0-c-default.jpg 640w" alt="">
        <video src="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" autoplay="" muted="" playsinline="" data-src-lg-mp4="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg-1.mp4" data-src-sm-mp4="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" data-src-lg-webm="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" data-src-sm-webm="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_sm.webm" data-video-bg=""></video>
      </div>

      <div class="Hero-inner">
        <div class="hero-body">
          <div class="container">
            <p class="title">
              EXPLORE ALL YOUR OPPORTUNITIES
            </p>
            <p class="subtitle">
              Find and compare B.Sc., B.A., BBA, LLB and other Bachelor’s Degrees and
              Undergraduate Studies (Diplomas, Certificates) from top universities countrywide.
            </p>
          </div>
        </div>
        <div class="Hero-buttons">
          <a id="btnWatchVideo" class="button is-primary is-inverted is-outlined">
            <span class="icon">
              <i class="fa fa-play"></i>
            </span>
            <span>Watch Video</span>
          </a>
        </div>
      </div>

      <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">

          <video src="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" autoplay="" muted="" playsinline="" data-src-lg-mp4="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg-1.mp4" data-src-sm-mp4="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" data-src-lg-webm="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_lg.webm" data-src-sm-webm="https://www.primotoys.com/wp-content/uploads/2017/11/Carioca_Hero_2_sm.webm" data-video-bg=""></video>

        </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
    </div>
  </section>
  {{-- END SECTION HEADER VIDEO--}}

  {{-- START SECTION TESTIMONIAL--}}
  <section class="project-testimonial">
    <blockquote class="slate">“Quality work from a quality designer. We couldn't have asked for a better experience.”</blockquote>
    <div class="project-testimonial-avatar"><img src="http://mattfarley.ca/images/avatar-sean.jpg"></div>
    <div class="project-testimonial-name">Sean Moore, ENG.L, Wedler Engineering</div>
  </section>
  {{-- END SECTION TESTIMONIAL--}}


  {{-- START SECTION ABOUT--}}
  <section class="about">
    <div class="container">
      <p class="title has-text-centered">CATEGORIES</p>
      <div class="columns">
        <div class="column">
          <span><i class="fa fa-file-text-o fa-5x" aria-hidden="true"></i></span>
          <p class="title-dark">DISCIPLINES</p>
          <p class="subtitle-dark">Find out which country would be the best fit for a student like you!</p>

        </div>
        <div class="column">

          <span><i class="fa fa-gift fa-5x" aria-hidden="true"></i></i></span>
          <p class="title-dark">SCHOLARSHIPS</p>
          <p class="subtitle-dark">Built to manage innovation
            ecosystems, our software provides
            the single source for truth.</p>

          </div>
          <div class="column">

            <span><i class="fa fa-paper-plane-o fa-5x" aria-hidden="true"></i></span>
            <p class="title-dark">EVENTS</p>
            <p class="subtitle-dark">Learn what you’ll need to complete this simple process.</p>

          </div>

        </div>
      </div>
    </section>
    {{-- END SECTION ABOUT--}}




    {{-- START SECTION CHAT--}}
    <div id="chat">
      <a href="">
        <span>
          <i class="fa fa-comments-o fa-4x" aria-hidden="true"></i>
        </span>
      </a>
    </div>

    {{-- START SECTION CHAT--}}


    {{-- START SECTION SUBCRIBE--}}
    <section class="subscribe is-alternative is-inquire-as-employer">
      <div class="container">
        <div class="section-body">
          <div class="columns is-multiline is-mobile">
            <div class="artwork column is-3-desktop is-6-mobile">
              <img src="https://hellogustav.com/assets/images/svg/blank/mailbox-4b687d2a.svg?1511747897">
            </div>
            <div class="column is-6-desktop is-12-mobile content-center">
              <div class="box is-signup is-centered">
                <div class="box-body">
                  <p class="has-text-centered">
                    Interested but don't want to create your own doppelganger?
                    For people like you we have a public newsletter where we occasionally
                    inform you about new features, progress, etc. Feel free to Signup.
                  </p>


                </div>
                <div class="box-footer m-t-20">

                  <div class="field has-addons">
                    <div class="control">
                      <input class="input tb_email" type="text" placeholder="Enter your email...">
                    </div>
                    <div class="control">
                      <a class="button is-primary">
                        Subscribe
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="artwork column is-3-desktop is-6-mobile">
              <img src="https://hellogustav.com/assets/images/svg/blank/gustav-paperplane-87cbeeee.svg?1511747897">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END SECTION SUBCRIBE--}}

  @stop


  @section('scripts')
    <script type="text/javascript">
    document.querySelector('a#btnWatchVideo').addEventListener('click', function(event) {
      event.preventDefault();
      var modal = document.querySelector('.modal');  // assuming you have only 1
      var html = document.querySelector('html');
      modal.classList.add('is-active');
      html.classList.add('is-clipped');

      modal.querySelector('.modal-background').addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('is-active');
        html.classList.remove('is-clipped');
      });
    });

    </script>
  @endsection
