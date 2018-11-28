@extends('client.layouts.app') 

@section('content')
<div class="uk-container uk-margin-xlarge uk-flex uk-flex-center uk-margin-large-top">
	<div class="uk-card uk-card-default uk-width-2-3@s">
		<form class="uk-form-stacked uk-padding" method="POST" action="{{ route('register') }}" novalidate>
			@csrf
			<legend class="uk-legend uk-text-muted uk-text-center">حساب جديد</legend>
			<hr class="uk-divider-icon uk-margin-remove">
			{{-- Form Title --}}
			
			<div class="uk-flex uk-flex-center uk-grid-small uk-margin" uk-grid>
				<div class="uk-width-1-2@s">
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon uk-form-icon-flip
						{{ $errors->has('name') ? ' ee-border-red uk-text-danger' : '' }}">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3">
							</polygon>
						</svg>
						</span>
						<input
						id="name"
						type="name"
						class="uk-input {{ $errors->has('name') ? ' ee-border-red' : '' }}"
						name="name"
						value="{{ old('name') }}"
						placeholder="الإسم الأول"
						required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				{{-- First Name --}}
				<div class="uk-width-1-2@s">
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon uk-form-icon-flip
						{{ $errors->has('name') ? ' ee-border-red uk-text-danger' : '' }}">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3">
							</polygon>
						</svg>
						</span>
						<input
						id="name"
						type="name"
						class="uk-input {{ $errors->has('name') ? ' ee-border-red' : '' }}"
						name="name"
						value="{{ old('name') }}"
						placeholder="العائلة"
						required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				{{-- Last Name --}}
			</div>
			{{-- Full Name --}}
			
		</form>
	</div>
</div>
{{-- Wrap Form --}}
@endsection