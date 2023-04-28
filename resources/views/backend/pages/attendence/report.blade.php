@extends('master')

@section('content')
<h1>Attendence Report</h1>

<form action="{{route('attendence.report.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="date"> date:</label>
        <input name="date" type="date" class="form-control">

    
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>
<div id="attendenceReport">

<h1>Attendence Report- {{request()->date}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">In_Time</th>
            <th scope="col">Out_Time</th>
            <th scope="col">Date</th>
            

        </tr>
        </thead>
        <tbody>
        @if(isset($attendence))
        @foreach($attendence as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->user->name}}</td>
            <td>{{$data->in_time}}</td>
            <td>{{$data->out_time}}</td>
            <td>{{$data->date}}</td>
          

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<div class="col-md-4">
<button onclick="printDiv('attendenceReport')" class="btn btn-success">Print</button>
</div>

<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection