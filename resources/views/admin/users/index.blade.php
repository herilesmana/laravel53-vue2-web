@foreach($users as $user)
	<li>Nama saya : {!! $user['first_name'] !!} {!! $user['last_name'] !!}</li>
	<li>Alamat saya : {!! $user['address'] !!}</li><br>
@endforeach