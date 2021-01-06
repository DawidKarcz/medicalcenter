@extends('layouts.app')

@section('content')
<style>

      body{
        background:#D4EBED;
      }

    .colour{
      background: #C1BE11;
    }



        .btn-grad {background-image: linear-gradient(to right, #0575E6 0%, #021B79  51%, #0575E6  100%)}
        .btn-grad {
           margin: 10px;
           padding: 15px 45px;
           text-align: center;
           width: 200px;
           text-transform: uppercase;
           transition: 0.5s;
           background-size: 200% auto;
           color: white;
           box-shadow: 0 0 20px #eee;
           border-radius: 10px;
           display: block;
         }

         .btn-grad:hover {
           background-position: right center; /* change the direction of the change here */
           color: #fff;
           text-decoration: none;
         }



         .btn-grad1 {background-image: linear-gradient(to right, #FC354C 0%, #0ABFBC  51%, #FC354C  100%)}
         .btn-grad1 {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            width: 200px;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }


         .btn-grad2 {background-image: linear-gradient(to right, #3A1C71 0%, #D76D77  51%, #3A1C71  100%)}
         .btn-grad2 {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            width: 200px;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad2:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }


</style>
<div class="jumbotron colour">
    <div class="container ">
        <h1 class="display-8">Hello, {{ Auth::user()->name }}</h1>
        <p class="lead">Welcome to our Admin dashboard, for your medical center. We hope that you will find your way around easily.</p>
        <hr class="my-4">
        <p>Please use the buttons below to navigate around the Medical Center.</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <hr class="my-4">
        <a class="btn-grad btn-grad:hover" href="{{ route('admin.patients.index') }}" role="button">Patients</a>
        <a class="btn-grad1 btn-grad1:hover" href="{{ route('admin.doctors.index') }}" role="button">Doctors</a>
        <a class="btn-grad2 btn-grad2:hover" href="{{ route('admin.visits.index') }}" role="button">Visits</a>
    </div>
</div>
@endsection
