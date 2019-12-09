@extends('Includes.layout')
@section('title','Contact')
    <!-- Page Content-->
    <!-- Hero-->
    @section('content')
    <!-- Contact Details-->
    <section class="container-fluid mb-5">
      <div class="row">
        @if(isset($contents))
        @foreach($contents as $content)
        <div class="col-md-3 col-sm-6 border-right py-2 border-bottom"><a class="scroll-to icon-box text-center mx-auto box-shadow-none px-0" href="#map">
            <div class="icon-box-icon"><i class="{{$content->icon}}"
              style="color:green;"></i></div>
            <h3 class="icon-box-title">{{$content->title}}</h3>
            <p class="icon-box-text font-weight-medium">{{$content->value}}</p></a></div>
       
      @endforeach
      @endif
      </div>
    </section>
    <!-- Contact Form-->
    <section class="container mb-5 pb-3">
      <div class="wizard">
        <div class="wizard-body pt-3">
          <h2 class="h4 text-center">Drop us a line</h2>
          <p class="text-muted text-center">We will get back to you as soon as possible</p>
          <form class="needs-validation" method="post" action="{{route('/message')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row pt-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-name">Your Name <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="text" id="contact-name" name="name" placeholder="Your good name here" required>
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-email">Your Email <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="email" id="contact-email" name="email" placeholder="abc@email.com" required>
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-subject">Subject</label>
                  <input class="form-control" type="text" id="contact-subject" name="subject" placeholder="Provide short title of you request">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-file">Attachment</label>
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" id="contact-file" name="uploadFile">
                    <label class="custom-file-label" for="contact-file">Choose file...</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="contact-message">Message <span class='text-danger font-weight-medium'>*</span></label>
              <textarea class="form-control" rows="7" id="contact-message" placeholder="Let us know more what's on your mind..." name="description" required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
           @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

          </form>
        </div>
      </div>
    </section>
    <!-- Map-->
  
    <!-- Footer-->
@endsection