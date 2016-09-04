@extends('master')
@section('title','View a ticket')
@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
		<h2>Tickets</h2>
		<form action="/send_to" method="post">
			Send to: <input type="email" name="email">


			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <br>

            <center><input type="submit" name="submit" value="Send" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
		</form>
		</div>
	</div>
</div>

@endsection