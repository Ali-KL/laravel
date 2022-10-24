
@extends('layouts.master')

@section('content')


    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
Good health is not something we can buy. However, it can be an extremely valuable savings account                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                 <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
You can’t control what goes on outside, but you CAN control what goes on inside                   <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
              <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
Keeping your body healthy is an expression of gratitude to the whole cosmos- the trees, the clouds, everything             <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>



  <!-- about section -->
<br>
<br>


  <section class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="https://cdn.optimoroute.com/wp-content/uploads/2021/03/Pharmacy-Delivery-Hero.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3 style=" padding:5px ; margin-left: 80px ;color:white ;background-color : #2a4054">
                 <center> Pharmacy Management System  </h3>
                     <img style="margin-left: 210px" src="{{asset('index/images/rose.png')}}"> </center>


            </div>
            <p> <center>
  We helps automate the pharmacy workflow. This includes such tasks as reviewing physician orders and preparing medications, controlling the inventory and making drug orders, handling billing and insurance, providing counseling, identifying incompatibilities,
               and more — all while following legal protocols and compliances.
            </p>
            </center>
            <center>
            <a href="http://127.0.0.1:8000/about">
              Read More
            </a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						 <center><h2 > <b>OUR TEAM </b></h2> </center>
                        <center> <img src="{{asset('index/images/rose.png')}}"> </center>
					</div>
				</div>
			</div>
            <br>

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div style="height: 400px" class="pic">
                            <img src="{{asset('index/images/asma.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title"> Asma'a Alnsour</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div style="height: 400px" class="pic">
                            <img src="{{asset('index/images/ghayda.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Ghayda Alrabee</h5></h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/ghayda.alrabee.1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div style="height: 400px"  class="pic">
                            <img src="{{asset('index/images/majd.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title"> Majd Atyyat</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                  <div  class="col-md-4 col-sm-6 mt-5">
                    <div class="our-team">
                        <div style="height: 400px"  class="pic">
                            <img src="{{asset('index/images/bayan.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Bayan AbuAlroos </h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-6 mt-5">
                    <div class="our-team">
                        <div style="height: 400px"  class="pic">
                            <img src="{{asset('index/images/osama.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title"> Osama saaideh   </h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-6 mt-5">
                    <div style="height: 400px"  class="our-team">
                        <div class="pic">
                            <img src="{{asset('index/images/ali.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Ali Kholani</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

		</div>
	</div>

	<!-- End Team -->








@endsection

