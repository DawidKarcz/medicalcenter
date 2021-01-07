@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Visit</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('doctor.visits.store' )}}">
                        @csrf
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td><input type="date" name="date" value="{{ old('date') }}"/></td>
                                    <td>{{ $errors->first('date') }}</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td><input type="time" name="time"  value="{{ old('time') }}"/></td>
                                    <td>{{ $errors->first('time') }}</td>
                                </tr>
                                <tr>
                                    <td>Duration (minutes)</td>
                                    <td><input type="text" name="duration"  value="{{ old('duration') }}"/></td>
                                    <td>{{ $errors->first('duration') }}</td>
                                </tr>

                                <tr>
                                    <td>Cost</td>
                                    <td><input type="text" name="cost"  value="{{ old('cost') }}"/></td>
                                    <td>{{ $errors->first('cost') }}</td>
                                </tr>
                                <tr>
                                    <td>Patient</td>
                                    <td>
                                      <select name="patient_id">
                                        @foreach ($patients as $patient)
                                         <option value="{{ $patient->id }}" {{ (old('patient_id') == $patient->id) ? "selected" : "" }} >{{ $patient->user->name }}</option>
                                        @endforeach
                                      </select>
                                    </td>
                                    <td>{{ $errors->first('patient_id') }}</td>
                                </tr>
                                <tr>
                                    <td>Doctor</td>
                                    <td>
                                          <select name="doctor_id">
                                            @foreach ($doctors as $doctor)
                                             <option value="{{ $doctor->id }}" {{ (old('doctor_id') == $doctor->id) ? "selected" : "" }} >{{ $doctor->user->name }}</option>
                                            @endforeach
                                          </select>
                                    </td>
                                    <td>{{ $errors->first('doctor_id') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <a class="btn btn-danger" href="{{ route('doctor.home') }}" role="button">Go Back To Visits</a>
                        <button type="submit" value="Store" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
