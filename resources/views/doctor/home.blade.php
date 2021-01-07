@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello You Are Logged in Doctors Dashboard.</div>
                <br>
                <div class="col-12">
                    <a href="{{ route('doctor.visits.create') }}" class="btn btn-primary float-right btn-lg">Add Visit</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Visits</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Cost</th>
                                <th>Patient</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->doctor->visits as $visit)
                            <tr>
                                <td>{{ date("d M Y", strtotime($visit->date)) }}</td>
                                <td>{{ $visit->time }}</td>
                                <td>{{ $visit->duration }}</td>
                                <td>{{ $visit->cost }}</td>
                                <td><a href="{{ route('doctor.patient.view', $visit->patient->user) }}">{{ $visit->patient->user->name }}</a></td>
                                <td>
                                  <a href="{{ route('doctor.visits.edit', $visit) }}" class="btn btn-warning">Edit</a>
                                </td>
                                <td><form action="{{ route('doctor.visit.destroy', $visit)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete_item">Cancel Visit</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
