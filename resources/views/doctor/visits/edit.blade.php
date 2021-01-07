@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <h1 class="display-4">Edit Visit</h1>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('doctor.visits.update', $visit )}}">
                        @csrf
                        @method('PUT')
                        <table class="mb-3">
                            <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td><input type="date" class="form-control" name="date" value="{{ old('date', $visit->date) }}"/></td>
                                    <td>{{ ($errors->has('date')) ? $errors->first('date') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td><input type="time" class="form-control" name="time"  value="{{ old('time', date("H:i", strtotime($visit->time))) }}"/></td>
                                    <td>{{ ($errors->has('time')) ? $errors->first('time') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Duration (minutes)</td>
                                    <td><input type="text" class="form-control" name="duration"  value="{{ old('duration', $visit->duration) }}"/></td>
                                    <td>{{ ($errors->has('duration')) ? $errors->first('duration') : "" }}</td>
                                </tr>

                                <tr>
                                    <td>Cost</td>
                                    <td><input type="text" class="form-control" name="cost"  value="{{ old('cost', $visit->cost) }}"/></td>
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
                                    <td>{{ ($errors->has('patient_id')) ? $errors->first('patient_id') : "" }}</td>
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
                                    <td>{{ ($errors->has('doctor_id')) ? $errors->first('doctor_id') : "" }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <a class="btn btn-danger" href="{{ route('admin.visits.index') }}" role="button">Go Back To Visits</a>
                        <button type="submit" value="Store" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
