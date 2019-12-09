@extends('Includes.layout')

@section('title','About')





    @section('content')

 <!--   <section class="container pb-5">

      <h2 class="h3 block-title text-center mt-4 mb-4">Meet Our Team<small>People behind your great experience</small></h2>

      <div class="row">

        <!-- Team member--

        @foreach($teamMembers as $teamMember)

        <div class="col-lg-3 col-sm-6">

          <div class="team-card-style-1 mx-auto">

            <div class="team-card-inner">

              <div class="team-thumb"><img src="{{$teamMember->image}}" alt="Team Member Picture"/>

              </div>

             <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-4 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i class="socicon-skype"></i></a></div>

             

              <a class="team-contact-link" href="tel:+19871625346"><i class="fe-icon-phone"></i>&nbsp;{{$teamMember->phone}}</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;{{$teamMember->email}}</a>

            </div><span class="team-position">{{$teamMember->designation}}</span>

            <h4 class="team-name">{{$teamMember->name}}</h4>

          </div>

        </div>

        @endforeach

        <!-- Team member--

        <!-- Team member--

      </div>

    </section>-->


<!----nwe  Map cover image Map cover image---------->
<!----nwe  Board MEMBERS---------->
      <section class="container pt-4 pt-sm-5 pb-4">
      <h2 class="h3 pt-2 text-center">Board Members</h2>
      <h4 class="block-title" style="color: #1AA687">Leaders</h4>
      <div class="row pt-4">
        <!-- Team member-->
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #32498b;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/aka-richy.jpeg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/thailand-01.png" style="width:50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Thailand | Country Head</span>
              <h4 class="team-name">Richy Minds</h4><a class="team-contact-link" href="tel:+66632826596"><i class="fe-icon-phone"></i>&nbsp;+66 63 282 6596</a><a class="team-contact-link" href="mailto:bizzcenter19@gmail.com"><i class="fe-icon-mail"></i>&nbsp;bizzcenter19@gmail.com</a>
               
             <!--  <div class="team-social-bar-wrap"> 
                <div class="team-social-bar mx-auto mx-sm-0"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #d2373d;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/luis.jpg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/usa-01.png" style="width: 50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">USA | Country Head</span>
              <h4 class="team-name">Dr. Luis</h4><a class="team-contact-link" href="tel:+404075833877"><i class="fe-icon-phone"></i>&nbsp;+404075833877</a><a class="team-contact-link" href="mailto:luis@devsbeta.com"><i class="fe-icon-mail"></i>&nbsp;luis@devsbeta.com</a>
               
             <!--  <div class="team-social-bar-wrap"> 
                <div class="team-social-bar mx-auto mx-sm-0"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #0152B3;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/waqas.jpeg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/austrailia-01.png" style="width: 50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Cheif Technical Officer</span>
              <h4 class="team-name">M. Waqas</h4><a class="team-contact-link" href="tel:+61466493899"><i class="fe-icon-phone"></i>&nbsp;+61466493899</a><a class="team-contact-link" href="mailto:waqas@devsbeta.com"><i class="fe-icon-mail"></i>&nbsp;waqas@devsbeta.com</a>
               
             <!--  <div class="team-social-bar-wrap"> 
                <div class="team-social-bar mx-auto mx-sm-0"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #496E2D;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/danish-sb.jpg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/pakistan.png" style="width:50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Country Representative</span>
              <h4 class="team-name">Hafiz Danish Habib</h4><a class="team-contact-link" href="tel:+923145284331"><i class="fe-icon-phone"></i>&nbsp;+92-314-5284331</a><a class="team-contact-link" href="mailto:danish@devsbeta.com"><i class="fe-icon-mail"></i>&nbsp;danish@devsbeta.com</a>
               
             <!--  <div class="team-social-bar-wrap"> 
                <div class="team-social-bar mx-auto mx-sm-0"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Team member-->
        <!-- <div class="col-xl-5 col-md-6 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100">
            
            <div class="team-thumb d-sm-table-cell align-middle"><img src="img/team/style-3/06.jpg" alt="Team Member Picture"/>
            </div>
            <div class="d-table-sm-cell align-middle pl-sm-4 text-center text-sm-left"><span class="team-position">Marketing Manager</span>
              <h4 class="team-name">Sara Palson</h4><a class="team-contact-link" href="tel:+57872336590"><i class="fe-icon-phone"></i>&nbsp; +5 (787) 233 65 90</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;info@example.com</a>
              <img src="assets/img/flags/pakistan.png" style="    width: 75px;
    float: right;
    margin-top: -72px;">
            
              </div>
            </div>
          </div> -->
        <!-- <div class="vertical text col-xl-1">
          <h2 class="side-heading" style="color:#496e2d;">Pakistan</h2>
        </div> -->
        </div>
<h4 class="block-title" style="color: #0152B3">Team Leads</h4>
      <div class="row pt-4">
        <!-- Team member-->
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #EC1C24;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(assets/img/team/style-1/abdulwaisihi.jpeg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/1.png" style="width: 50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Marketing | Advertisement </span>
              <h4 class="team-name">Abdul waasihi</h4><a class="team-contact-link" href="tel:+8613086692035"><i class="fe-icon-phone"></i>&nbsp;+2347067322498</a><a class="team-contact-link" href="mailto:ms.umaraftab@yahoo.com"><i class="fe-icon-mail"></i>&nbsp;kolapowasiu22@gmail.com</a>
               
          
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #EC1C24;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/umarafb.jpg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/china-01.png" style="width: 50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Team Lead</span>
              <h4 class="team-name">M. Umar Aftab</h4><a class="team-contact-link" href="tel:+8613086692035"><i class="fe-icon-phone"></i>&nbsp;+86 13086692035</a><a class="team-contact-link" href="mailto:ms.umaraftab@yahoo.com"><i class="fe-icon-mail"></i>&nbsp;ms.umaraftab@yahoo.com</a>
               
          
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 mb-30 board-members">
          <div class="team-card-style-4 d-sm-table w-100 p-0" style="border:none;box-shadow: 0 0.75rem 1.25rem 0.0625rem rgba(64,64,64,0.09);border-bottom: 7px solid #496E2D;border-radius: 0px 0px 7px 7px;padding: 0 0 7px 0 !important;">
            
            <div class="align-middle" style="height: 200px;background-image: url(storage/uploads/aboutus/usmanaftab.jpeg);background-repeat: no-repeat;background-position: center top;background-size: cover;border-radius: 0px 0px 15px 15px;">
              <img src="assets/img/flags/pakistan-01.png" style="width:50px;position: absolute;right: 10px;/* margin-top: 5px; */bottom: 30px;">
            </div>
            <div class=" align-middle pl-sm-4 text-center text-sm-left" style="padding: 10px 15px!important;"><span class="team-position">Team Lead</span>
              <h4 class="team-name">Hafiz M. Usman</h4><a class="team-contact-link" href="tel:+19871625346"><i class="fe-icon-phone"></i>&nbsp;+92-3339941145</a><a class="team-contact-link" href="mailto:hmusman@devsbeta.com"><i class="fe-icon-mail"></i>&nbsp;hmusman@devsbeta.com</a>
               
            
            </div>
          </div>
        </div>
        
       
       
        </div>
      
     

    </section>
  <!-- Skills-->
<!--
    <section class="d-lg-table bg-secondary">

      <div class="d-none d-lg-table-cell align-middle w-50 bg-center bg-no-repeat bg-cover text-center" style="background-image: url(assets/img/pages/about-skills-bg.jpg);"><a class="video-player-button" href="https://player.vimeo.com/video/93641234?color=ac32e4&amp;title=0&amp;byline=0&amp;portrait=0" data-fancybox data-width="1000" data-height="563"><i class="fe-icon-play"></i></a><span class="d-block video-player-label text-muted pt-3">Click me to watch video!</span></div>

      <div class="d-lg-table-cell py-5 my-lg-5 px-2 px-lg-5">

        <div class="p-3">

          <h2 class="h3 block-title mb-4">Our Key Skills</h2>

          <p class="text-muted pb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>


          <div class="progress mb-3">

            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-globe"></i>Web Development - 60%</span></div>

          </div>


          <div class="progress mb-3">

            <div class="progress-bar bg-accent" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-monitor"></i>UX/UI Design - 50%</span></div>

          </div>


          <div class="progress mb-3">

            <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-edit"></i>Illustration - 45%</span></div>

          </div>


          <div class="progress mb-3">

            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-feather"></i>Iconography - 55%</span></div>

          </div>


          <div class="progress mb-3">

            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-database"></i>Back-End Dev - 75%</span></div>

          </div>


          <div class="progress mb-3">

            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span><i class="fe-icon-settings"></i>Front-End Dev - 65%</span></div>

          </div>

        </div>

      </div>

    </section> -->



        <!-- Partners-->

    <!-- <section class="container py-5 my-2">

      <h2 class="h3 block-title text-center mt-3 mb-5">Our Partners<small>Well respected people and companies from around the world</small></h2>

      <div class="row">

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/assets/img/partners/01.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/02.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/03.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/04.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/07.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/05.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/08.png" width="165" alt="Partner"></a></div>

        <div class="col-6 col-md-3"><a class="d-block box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="assets/img/partners/09.png" width="165" alt="Partner"></a></div>

      </div>

    </section> -->



    <!-- Contact Us CTA-->

    <section class="bg-gradient py-4">

      <div class="container position-relative bg-no-repeat bg-center py-5 text-center" style="background-image: url(assets/img/pages/dotted-map.png);">

        <h2 class="block-title text-white mt-5 mb-4">Let's Connect<small class="text-white">Share your ideas with us and we do our best to turn your ideas into reality.</small></h2><a class="btn btn-light mb-5" href="contactus" style="background-color: white !important">Contact Us</a>

      </div>

    </section>

@endsection





