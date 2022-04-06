
@extends('layout.v_template')
@section('title','Appointment')
@section('content')

@auth
<section id="appointment" class="appointment section-bg">
<div class="container" data-aos="fade-up">

  <div class="section-title">
    <h2>Appointment Form</h2>
    <p>You can make an appointment with a doctor through the MEDIKA website</p>
  </div>

  <form action="" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
    @csrf
    <div class="row">
      
      <div class="col-md-4 form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
      </div>
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
      </div>
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" class="form-control" name="phoneNumber" id="phone" placeholder="Your Phone" required>
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-4 form-group mt-3">
        <label for="date">Date of Appointment</label>
        <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
      </div>
      
      <div class="col-md-4 form-group mt-3">
        <label for="department">Department</label>
        <select id="department" class="form-select">
          <option value="">Select Department</option>
          @foreach ($department as $data)
            <option value="">{{ $data->s_name }}</option>
          @endforeach
        </select>
      </div>
      
      <div class="col-md-4 form-group mt-3">
        <label for="doctor">Doctor</label>
        <select name="doctor" id="doctor" class="form-select">
          <option value="">Select Doctor</option>
          @foreach ($doctor as $data)
            <option value="{{ $data->name }}" >{{ $data->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
    </div>
    <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
    </div>
    <div class="text-center"><button type="submit">Make an Appointment</button></div>
  </form>

</div>
</section>
@endauth
@endsection 
