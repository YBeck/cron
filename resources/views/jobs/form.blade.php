@extends('layouts.app') 
@section('style') body { padding-top: 54px; } @media (min-width: 992px) { body { padding-top: 56px;
} }
@endsection
 
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-10 col-lg-6">
            <form action="/jobs" method="POST">
                @csrf
                <div class="form-group">
                    <label for="sname">Senders Name</label>
                    <input type="text" class="form-control" id="sname" placeholder="Enter Senders Name" name="sname" value="{{ old('sname') }}">
                </div>
                <div class=" form-group">
                    <label for="rname">Recipient Name</label>
                    <input type="text" class="form-control" id="rname" placeholder="Enter Recipient Name" name="rname" value="{{ old('rname') }}">
                </div>
                <div class="form-group" id="typeInput">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="sdate">Start Date</label>
                        <input type="date" class="form-control" name="sdate" value="{{ old('sdate') }}">
                    </div>
                    <div class="col">
                        <label for="startTime">Start Time</label>
                        <input type="time" class="form-control" id="startTime" name="startTime" value="{{ old('startTime') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="edate">End Date</label>
                        <input type="date" class="form-control" name="edate" value="{{ old('edate') }}">
                    </div>
                    <div class="col">
                        <label for="edate">End Time</label>
                        <input type="time" class="form-control" name="etime" value="{{ old('etime') }}">
                    </div>
                </div>
                <div><label for="intervalType">How Often</label></div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="daily" name="intervalType" class="custom-control-input" value="daily">
                    <label class="custom-control-label" for="daily">Daily</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="hourly" name="intervalType" class="custom-control-input" value="hourly">
                    <label class="custom-control-label" for="hourly">Hourly</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="min" name="intervalType" class="custom-control-input" value="min">
                    <label class="custom-control-label" for="min">Minute</label>
                </div>
                <div class="form-row" id="howOften">
                    <div class="form-group col-sm-5">
                        <label for="intervalInput"><span id="howMany"></span></label>
                        <input type="number" class="form-control" id="intervalInput" name="intervalInput">
                    </div>
                </div>
                <div class="form-group">
                    <div id="msg">
                        <label for="msg">Message</label>
                        <textarea class="form-control" id="msg" rows="4" name="msg">{{ old('msg') }}</textarea>
                    </div>
                </div>
                <input type="hidden" name="type" value={{ $type }}>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            <script>
                const type ="{{ $type }}";
                const update = false;
            </script>
        </div>
    </div>
</div>

<script src="{{ asset( 'js/form.js') }}" defer></script>
@endsection