@extends('layouts.app')
@section('content')
<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-xl-between">
            <div class="col-md-12 col-lg-12 col-xl-5">
              <h3>Registration Form</h3>
              <!-- RD Mailform-->
              <form class="registerDetailForm" action="" method="post" novalidate="novalidate">
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

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @include('pages.form.user-details')
              </form>
            </div>
          </div>
        </div>
      </section>
@endsection
