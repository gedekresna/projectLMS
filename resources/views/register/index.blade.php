@extends('layouts.app')

@section('title','Register Page')

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://img.freepik.com/free-vector/sign-up-concept-illustration_114360-7965.jpg?w=826&t=st=1679921376~exp=1679921976~hmac=e9a14891e0ccfe88839a37666259d0e9f1064b9d7eeb02e31682a4ea87abfe3f"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/register" method="POST">
          @csrf
            <h3 class="mb-3">Register</h3>
          
        <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text"  name="name" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your name here" />
            <label class="form-label" for="form3Example3">Enter name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login" class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
 
</section>