@extends('client.layouts.app') 

@section('content')
<div class="uk-container uk-margin uk-flex uk-flex-center">
	<div class="uk-card uk-card-default uk-width-1-2@s">
		<div class="uk-card-header">
			<h3 class="uk-card-title uk-margin-remove">تسجيل الحساب</h3>
		</div>
		<form class="uk-form-stacked" method="POST" action="{{ route('register') }}" novalidate>
			{{ csrf_field() }}
			<div class="uk-card-body">
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('name') ? ' uk-text-danger' : '' }}">
						الإسم
					</label>
					<div class="uk-width-1-1 uk-inline">
						<input id="name" type="name" class="uk-input {{ $errors->has('name') ? ' uk-form-danger' : '' }}"
							name="name" value="{{ old('name') }}" required autofocus>
						<span class="uk-form-icon uk-form-icon-flip {{ $errors->has('name') ? ' uk-text-danger' : '' }}" uk-icon="icon: user"></span>
						@if ($errors->has('email'))
							<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
				</div>
				{{-- Name --}}
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
						البريد الإلكتروني
					</label>
					<div class="uk-width-1-1 uk-inline">
						<input id="email" type="email" class="uk-input {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
							name="email" value="{{ old('email') }}" required autofocus>
						<span class="uk-form-icon uk-form-icon-flip {{ $errors->has('email') ? ' uk-text-danger' : '' }}" uk-icon="icon: mail"></span>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				{{-- Mail --}}
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('password') ? ' uk-text-danger' : '' }}">
						كلمة المرور
					</label>
					<div class="uk-width-1-1 uk-inline">
							<span class="uk-form-icon uk-form-icon-flip {{ $errors->has('password') ? ' uk-text-danger' : '' }}"uk-icon="icon: lock"></span>
						<input id="password" type="password" class="uk-input {{ $errors->has('password') ? ' uk-form-danger' : '' }}"name="password" required>
					</div>
					@if ($errors->has('password'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				{{-- Password --}}
				<div class="uk-margin">
					<label class="uk-form-label">
						تأكيد كلمة المرور
					</label>
					<div class="uk-width-1-1 uk-inline">
						<input id="password" type="password" class="uk-input" name="password_confirmation" required>
						<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
					</div>
				</div>
				{{-- Confirm Password --}}
			</div>
			{{-- Card Body --}}
			<div class="uk-card-footer uk-clearfix">
				<button type="submit" class="uk-button uk-button-primary uk-box-shadow-medium">
					تسجيل الحساب
				</button>
			</div>
			{{-- Card Footer --}}
		</form>
	</div>
</div>
@endsection