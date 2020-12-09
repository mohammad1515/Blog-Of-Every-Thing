@extends('layouts.main')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('blog_files/img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contact Me</h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <div class="row">
          <div class="col">
          <h2 class="mx-auto text-center">Send enquiry</h2>
        @if(session('message'))
          <div class='alert alert-success'>
          {{ session('message') }}
          </div>
        @endif
        @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </ul>
              </div>
        @endif
        <div class="col-12 col-md-6">
          
          <form class="form-horizontal" method="POST" action="/contact">
  
            {{ csrf_field() }}
               
           <div class="form-group">
            <label for="Name">Name: </label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
           </div>
           <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
           </div>
           <div class="form-group">
            <label for="message">Message: </label>
            <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" value="Send">Send</button>
           </div>
             
         </form>
         
        </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  <hr>

@endsection
