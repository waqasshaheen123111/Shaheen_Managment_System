@include('layouts.inc.admin-header')
@include('layouts.inc.admin-sidebar')



<div class="page-wrapper">
  <div class="content container-fluid">
    @yield('content')

    {{-- Footer --}}
    @include('layouts.inc.admin-footer')