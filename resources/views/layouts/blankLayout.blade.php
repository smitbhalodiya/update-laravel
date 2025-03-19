@extends('layouts.commonMaster')

@section('layoutContent')
    <!-- Content -->
    {{ $slot ?? '' }}
    @yield('content')
    <!--/ Content -->
@endsection
