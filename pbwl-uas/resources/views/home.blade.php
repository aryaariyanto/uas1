@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You Enter The Application Login Page!') }}

                </div>
            </div>
        </div>
    </div>
</div>
<p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('WELCOME TO KONTER PAKET ARYA ARIYANTO!') }}

                </div>
                <div class="card-footer">{{ __('Copyright') }}
                 &copy; 2023. By  
                  <a href="https://www.instagram.com/mhd_aryasatrio/" target="__blank">Arya Ariyanto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
