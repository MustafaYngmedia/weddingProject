@extends('layouts.app')

@section('content')
<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-xl-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>Registration Form</h3>
              <!-- RD Mailform-->
              <form class="" action="{{route('guest.register_custom')}}" method="post" novalidate="novalidate">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-name">Name</label>
                  <div class="icon form-icon mdi mdi-account-outline"></div>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-email">E-mail</label>
                  <div class="icon form-icon mdi mdi-email-outline"></div>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-password" type="password" name="password" data-constraints="@Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-password">Password</label>
                  <div class="icon form-icon mdi mdi-key"></div>
                </div>
                <div class="form-wrap form-wrap-group group-1 group-middle">
                  <button class="button button-lg button-primary" type="submit">Sign Up</button>
                  <p class="font-italic">or</p>
                  <div>
                    <div class="group-sm"><a class="link-1 link-1-social icon mdi mdi-facebook" href="#"></a><a class="link-1 link-1-social icon mdi mdi-google" href="#"></a><a class="link-1 link-1-social icon mdi mdi-twitter" href="#"></a></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
@endsection
