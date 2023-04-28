<h1>Attendence Report</h1>

<form action="{{route('attendence.dailyreport')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="date"> date:</label>
        <input name="date" type="date" class="form-control">

    
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Daily Attendence Report</button>
    </div>
</div>

</form>