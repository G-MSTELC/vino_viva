@extends('layouts.admin')
@section('title', 'Création d'un utilisateur')
@section('content')
<header>
    utilisateur
</header>
<main>
    <h1>
        Création d'un utilisateur
    </h1>
    <div>
        <a href="{{ route('site.index') }}" class="btn btn-info mt-5">@lang('lang.text_go_back')</a>
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-1 mb-5">
                @lang('lang.text_add_student')
                </h1>
            </div>
        </div>
        <form action="" method="post" class="gap-">
        @csrf
        <div class="card-header mb-3">
            <strong>@lang('lang.text_form')</strong>
        </div>
        <div class="card-body">   
                <!-- id de l'utilisateur passé en paramètres -->
                @if($user)
                <input type="number" name="user_id" hidden value="{{ $user->id }}">
                @endif
                <div class="control-grup col-12 mb-3">
                    <label for="name">@lang('lang.text_name')</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $user ? $user->name : '' }}" placeholder="Surname Name" minlength="2" maxlength="50" required>
                </div>
                    <label for="address">@lang('lang.text_address')</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="1234, Street">
                </div>
                <div class="control-grup col-12 mb-3">
                    <label for="phone">@lang('lang.text_phone')</label>
                    <input class="form-control" id="phone" name="phone" placeholder="(123) 123-1234"></input>
                </div>
                <div class="control-grup col-12 mb-3">
                    <label for="email">@lang('lang.text_email')</label>
                    <input class="form-control" id="email" name="email" placeholder="studentemail@outlook.com" value="{{ $user ? $user->email : '' }}" required></input>
                </div>
                <div class="control-grup col-12 mb-3">
                    <label for="birthdate">@lang('lang.text_birthdate')</label>
                    <input class="form-control" type="date" id="birthdate" name="birthdate" required></input>
                </div>
                <div class="control-grup col-12 mb-3">
                    <label for="city">@lang('lang.text_city')</label>
                    <select name="city_id" id="city" class="form-control">
                        <option value="">@lang('lang.text_select_city')</option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <input type="submit" class="ml-5 btn btn-success" value="@lang('lang.text_add')">
                </div>
        </div>
        </form>
    </div>
</main>
@endsection