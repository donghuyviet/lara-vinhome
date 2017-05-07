@include('errors.error')

<div class="form-info" id="form-info">
	<form method="POST" action="{{ url('/store') }}">
		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		<div class="title text-center">Nhận thông tin về dự án</div>
		<div class="form-group col-xs-12 col-sm-12 text-center">
		    <label for="exampleInputName">Họ Tên (*)</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Họ Tên">
		</div>
		<div class="form-group col-xs-12 col-sm-12 text-center">
		    <label for="exampleInputPassword1">Điện Thoại (*)</label>
		    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Number phone">
		</div>
		<div class="form-group col-xs-12 text-center">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		</div>
		<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
		<button type="submit" class="btn btn-default btn-submit form-group ">Gửi thông tin</button>
		</div>
	
	</form>
</div>