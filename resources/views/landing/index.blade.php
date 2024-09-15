@extends('layout.landing')

@section('content')
  <div class="welcome-image-area" data-stellar-background-ratio="0.6">
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-text text-center">
                <h2>WELCOME</h2>
                <p>ada tugas bikin video atau foto, pakai jasa kami</p>
                <br />
                <div class="home-arrow-down">
                  <a href="#about" class="smoth-scroll btn"><i class="fa fa-angle-double-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!-- / END HOMEPAGE DESIGN AREA -->

  <!-- START ABOUT DESIGN AREA -->
  <section id="about" class="about-me-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <!-- START ABOUT TEXT AREA -->
          <div class="about-text">
            <h2 class="wow fadeInDown" data-wow-delay="0.4s">
              {{ $about->title }}
            </h2>
            <p class="wow fadeInDown" data-wow-delay="0.6s">
              {!! $about->deskripsi !!}
            </p>
          </div>
          <!-- / END ABOUT TEXT AREA -->
        </div>
      </div>
    </div>
  </section>
  <!-- / END ABOUT DESIGN AREA -->

  <!-- START SERVICES DESIGN AREA -->
  <section class="service-area section-padding">
    <div class="container">
      <div class="row">
        @foreach ($service as $get)
        <!-- START SINGLE SERVICE DESIGN AREA -->
        <div class="col-md-3 col-sm-6">
            <div class="single-service wow fadeInUp" data-wow-delay="0.2s">
                <i class="bx {{ $get->icon }}"></i>
                <h2>{{ $get->title }}</h2>
                <p>
                    {!! $get->deskripsi !!}
                </p>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- / END SERVICES DESIGN AREA -->

  <!-- START SKILLS DESIGN AREA -->
  <section id="skill" class="skills-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title">
            <h2>Our key skills.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- START KEY SKILL DESIGN AREA -->
          <div class="my-skill">
            <!-- START SINGLE PROGRESS BAR DESIGN AREA -->
            <div class="single-progress-bar">
              <div class="row">
                <div class="col-md-4">
                  <p class="progress-bar-text">Adobe Premiere Pro</p>
                </div>
                <div class="col-md-8">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                      style="width: 63%"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / END SINGLE PROGRESS BAR DESIGN AREA -->
            <!-- START SINGLE PROGRESS BAR DESIGN AREA -->
            <div class="single-progress-bar">
              <div class="row">
                <div class="col-md-4">
                  <p class="progress-bar-text">Adobe Photoshop</p>
                </div>
                <div class="col-md-8">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                      style="width: 50%"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / END SINGLE PROGRESS BAR DESIGN AREA -->
            <!-- START SINGLE PROGRESS BAR DESIGN AREA -->
            <div class="single-progress-bar">
              <div class="row">
                <div class="col-md-4">
                  <p class="progress-bar-text">Adobe Illustrator</p>
                </div>
                <div class="col-md-8">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                      style="width: 20%"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / END SINGLE PROGRESS BAR DESIGN AREA -->
            <!-- START SINGLE PROGRESS BAR DESIGN AREA -->
            <div class="single-progress-bar">
              <div class="row">
                <div class="col-md-4">
                  <p class="progress-bar-text">HTML, CSS, PHP, JS</p>
                </div>
                <div class="col-md-8">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                      style="width: 70%"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / END SINGLE PROGRESS BAR DESIGN AREA -->
          </div>
          <!-- / END KEY SKILL DESIGN AREA -->
        </div>
      </div>
    </div>
  </section>
  <!-- / END SKILLS DESIGN AREA -->

  <!-- START WORK DESIGN AREA -->
  <section id="work" class="work section-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title">
            <h2>creative works.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <ul class="work">
          <li class="filter" data-filter="all">all</li>
          @foreach ($kategori as $get)
            <li class="filter" data-filter=".{{ $get->id }}">{{ $get->nama_kategori }}</li>
          @endforeach
        </ul>
      </div>
      <div class="work-inner">
        <div class="row work-posts grid">
            @foreach ($portofolio as $get)
            <!-- START SINGLE WORK DESIGN AREA -->
            <div class="col-md-4 col-sm-6 mix {{ $get->kategori_id }}">
                <div class="item">
                    <a href="/detail/{{ $get->token }}">
                        <figure class="effect-bubba">
                            <img src="{{ asset('thumbnail/' . $get->foto) }}" alt="image" />
                            <figcaption>
                                <h2>{{ $get->nama_portofolio }}</h2>
                                <p><strong>Client:</strong> {{ $get->client }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            @endforeach
          <!-- END SINGLE WORK DESIGN AREA -->
          <!-- START SINGLE WORK DESIGN AREA -->
          <div class="col-md-4 col-sm-6 mix 1 2 3 4 5">
            <div class="item">
              <a href="{{ asset('cavoni') }}/assets/images/work/work.png" class="work-popup">
                <figure class="effect-bubba">
                  <img src="{{ asset('cavoni') }}/assets/images/work/work.png" alt="image" />
                  <figcaption>
                    <h2>Web development</h2>
                    <p><strong>Client:</strong> Jonathon doe</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
          <!-- END SINGLE WORK DESIGN AREA -->
        </div>
      </div>
    </div>
  </section>
  <!-- / END START WORK DESIGN AREA -->

  <!-- START COMPLETE PROJECT DESIGN AREA -->
  <!-- <section class="complete-project-area section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="single-project-complete">
                  <i class="fa fa-handshake-o"></i>
                  <h2 class="counter-num">352</h2>
                  <h3>complete project</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="single-project-complete">
                  <i class="fa fa-users"></i>
                  <h2 class="counter-num">121</h2>
                  <h3>Happy clients</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="single-project-complete">
                  <i class="fa fa-coffee"></i>
                  <h2 class="counter-num">560</h2>
                  <h3>cup of coffie</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="single-project-complete">
                  <i class="fa fa-child"></i>
                  <h2 class="counter-num">11</h2>
                  <h3>awards</h3>
                </div>
              </div>
            </div>
          </div>
        </section> -->
  <!-- / END COMPLETE PROJECT DESIGN AREA -->

  <!-- START BLOG PAGE DESIGN AREA -->
  <!-- <section id="blog" class="blog-area section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2>recents blogs</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="blog-list"> -->
  <!-- START SINGLE BLOG DESIGN AREA -->
  <!-- <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('cavoni') }}/assets/images/blog/blog1.jpg" alt="" />
                    <a href="#" class="blog-title">create website step by step</a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry.
                    </p>
                    <a href="blog.html" class="read-more">Read more</a>
                  </div> -->
  <!-- / END SINGLE BLOG DESIGN AREA -->
  <!-- START SINGLE BLOG DESIGN AREA -->
  <!-- <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                    <img src="{{ asset('cavoni') }}/assets/images/blog/blog2.jpg" alt="" />
                    <a href="#" class="blog-title">create website step by step</a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry.
                    </p>
                    <a href="blog.html" class="read-more">Read more</a>
                  </div> -->
  <!-- / END SINGLE BLOG DESIGN AREA -->
  <!-- START SINGLE BLOG DESIGN AREA -->
  <!-- <div class="single-blog wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{ asset('cavoni') }}/assets/images/blog/blog3.jpg" alt="" />
                    <a href="#" class="blog-title">create website step by step</a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry.
                    </p>
                    <a href="blog.html" class="read-more">Read more</a>
                  </div> -->
  <!-- / END SINGLE BLOG DESIGN AREA -->
  <!-- START SINGLE BLOG DESIGN AREA -->
  <!-- <div class="single-blog wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{ asset('cavoni') }}/assets/images/blog/blog3.jpg" alt="" />
                    <a href="#" class="blog-title">create website step by step</a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry.
                    </p>
                    <a href="#" class="read-more">Read more</a>
                  </div> -->
  <!-- / END SINGLE BLOG DESIGN AREA -->

  <!-- START SINGLE BLOG DESIGN AREA -->
  <!-- <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('cavoni') }}/assets/images/blog/blog1.jpg" alt="" />
                    <a href="#" class="blog-title">create website step by step</a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry.
                    </p>
                    <a href="blog.html" class="read-more">Read more</a>
                  </div> -->
  <!-- / END SINGLE BLOG DESIGN AREA -->
  <!-- </div>
              </div>
            </div>
          </div>
        </section> -->
  <!-- / END BLOG PAGE DESIGN AREA -->

  <!-- START AVAILABLE DESIGN AREA -->
  <section class="available-work-area" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="available-text text-center">
            <h2>we are available for <br />freelance work</h2>
          </div>
          <div class="social-links text-center">
            <h3>
              <a href="#contact" class="smoth-scroll">anddived@gmail.com</a>
              <p class="hubungi">
                Hubungi kami dengan klik email di atas atau melalui sosial
                media yang ada di bawah
              </p>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / END AVAILABLE DESIGN AREA -->

  <!-- START CONTACT DESIGN AREA -->
  <section id="contact" class="contact-me-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>say hello!</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- START CONTACT FORM DESIGN AREA -->
          <div class="contact-form">
            <form id="contact-form" method="post" enctype="multipart/form-data"
              action="https://formspree.io/f/mgegyzle">
              <div class="row">
                <div class="form-group col-md-12">
                  <input type="text" name="name" class="form-control" id="first-name" placeholder="Name"
                    required="required" />
                </div>
                <div class="form-group col-md-12">
                  <input type="text" name="hp" class="form-control" id="hp" placeholder="No. HP"
                    required="required" />
                </div>
                <div class="form-group col-md-12">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                    required="required" />
                </div>
                <div class="form-group col-md-12">
                  <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message"
                    required="required"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="actions wow fadeInDown" data-wow-delay=".4s">
                    <!-- <button class="btn btn-lg btn-contact-bg" type="submit">

                          </button> -->
                    <input type="submit" value="submit now" name="submit" id="submitButton"
                      class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- / END CONTACT FORM DESIGN AREA -->
        </div>
      </div>
    </div>
  </section>
  <!-- / END CONTACT DESIGN AREA -->
@endsection
