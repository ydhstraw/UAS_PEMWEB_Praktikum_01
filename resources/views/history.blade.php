@extends('layouts.app',[
'user' => $user
])

@section('content')


    <div class="container">
		<br>
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Booking History</h3>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
					<!--<th scope="col">#</th>-->
					<th scope="col">Booking ID</th>
					<th scope="col">Name</th>
					<th scope="col">Hotel</th>
					<th scope="col">Check in</th>
					<th scope="col">Check Out</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach ($bookings as $row)
				<tr>
					<!--<th scope="row">1</th>-->
					<td>{{ $row->id }}</td>
					<td>{{ $row->name }}</td>
					<td>{{ $row->hotel }}</td>
					<td>{{ $row->check_in }}</td>
					<td>{{ $row->check_out }}</td>
					<td>{{ $row->price }}</td>
					<td><a href="/invoice/{{ $row->id }}" class="btn btn-warning">Details </a></td>
				</tr>	
				@endforeach
				
			</tbody>
		</table>

    </div>

@endsection
