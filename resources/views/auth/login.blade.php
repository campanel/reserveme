@extends('app')

@section('content')
<div >

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label">e-mail</label>

							<input type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}">
						</div>
						</br>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label">Password</label>

							<input type="password" class="mdl-textfield__input" name="password">
						</div>

						</br>
						</br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Login</button>


						</div>
					</form>

</div>
@endsection
