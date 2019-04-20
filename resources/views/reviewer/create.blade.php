@extends('layouts.main')

@section('content')

    <div class="container" >
        <div class="col-md-8" style="margin: 80px; padding-right: 300px;">
            <h2>Get Started</h2>
            <br>
            <h4>Fill in the following details to become a Reviewer</h4>
            <br>

            <form role="form" method="post" action="{{route('makeRev.store')}}">
                @csrf
                <div class="form-group">
                    <label for="degree">Degree:</label>
                    <select class="form-control" id="degree" name="degree">
                        <option value="BS">BS</option>
                        <option value="MS">MS</option>
                        <option value="P.hd">P.hd</option>
                    </select>
                    <br>
                    <br>
                    <label for="major">Major:</label>
                    <select class="form-control" id="major" name="major">
                        <option value="Computer Science">Computer Science</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Physics">Physics</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="submit" class="btn btn-whatever form-control">

                </div>
            </form>


        </div>


    </div>


@endsection