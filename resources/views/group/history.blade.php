@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	
	Recent post sent to buffer
	<form method="post" >
		<input onchange="this.form.submit()" type="text" name="search">
	<input onchange="this.form.submit()" type="date" name="date">
	<select onchange="this.form.submit()">
		@foreach ($group as $g)
        <option value="volvo">{{$g->type}}</option>
    @endforeach
	  
	</select>
	</form>
	
	<br><br>
	<table>
		<tr>
			<th>Group Name</th>
			<th>Group Type</th>
			<th>Account Name</th>
			<th>Post Text</th>
			<th>Time</th>
		</tr>
		@foreach ($result as $r)
        	
			<tr>
				<td>{{$r->name}}</td>
				<td>{{$r->type}}</td>
				<td>{{$r->account_service}}</td>
				<td>{{$r->status}}</td>
				<td>{{$r->start_time}}</td>
			</tr>

    	@endforeach
	</table>

{{$result->links()}}

    
</div>
@endsection