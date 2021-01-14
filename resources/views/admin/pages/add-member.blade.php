@extends('admin.index')

@section('content')
	<a href="{{ route('admin.list-member') }}"><button class="btn btn-warning">Quay lại</button></span></a>
	<form action="{{ route('admin.add-member') }}" method="POST" role="form">
		<legend>Thêm mới học viên</legend>
	
		<div class="form-group">
			<label for="name">Name <span style="color: red;">(*)</span></label>
			<input type="text" required="" class="form-control" name="name" id="name" placeholder="Input name">
		</div>

		<div class="form-group">
			<label for="faculty">Faculty <span style="color: red;">(*)</span></label>
			<select class="form-control" name="faculty" id="faculty">
				@foreach ($rs as $value)
					<option value="{{$value->id}}">{{$value->title}}</option>
				@endforeach			
			</select>
		</div>

		<div class="form-group">
			<label for="email">Email <span style="color: red;">(*)</span></label>
			<input type="email" required="" class="form-control" name="email" id="email" placeholder="Input email">
		</div>

		<div class="form-group">
			<label for="phone">Phone <span style="color: red;">(*)</span></label>
			<input type="number" maxlength="10" required="" class="form-control" name="phone" id="phone" placeholder="">
		</div>

		<div class="form-group">
			<label for="addres">Addres <span style="color: red;">(*)</span></label>
			<input type="text" min="10" max="10" required="" class="form-control" name="addres" id="addres" placeholder="">
		</div>
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button type="submit" name="submit" class="btn btn-primary">Add Member</button>
	</form>

@endsection