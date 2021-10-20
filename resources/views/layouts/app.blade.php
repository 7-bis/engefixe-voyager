<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
@include('layouts.partials.htmlheader')
@show

<body class="">
<div class="preloader" style="display: none;"><div class="spinner"></div></div> <!-- /.preloader -->
    <div id="app">
        <div class="wrapper">

            @include('layouts.partials.mainheader')

            @yield('main-content')

            @include('layouts.partials.footer')

        </div><!-- ./wrapper -->
    </div>
    @section('scripts')
    @include('layouts.partials.scripts')
    @show

    <!-- <script src="{{ asset ('js/provi/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('js/provi/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('js/provi/bootstrap-datepicker.pt-BR.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset ('js/provi/custom.js') }}" type="text/javascript"></script> -->
</body>

</html>
