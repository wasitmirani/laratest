
<!doctype html>
<html lang="en" dir="ltr">
@include('layouts.admin.component.head')

<body class="font-montserrat sidebar_dark">

{{-- <div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div> --}}
<div id="main_content">
@include('layouts.admin.component.topbar')
@include('layouts.admin.component.leftsidebar')

@include('layouts.admin.component.sidebar')
@include('layouts.admin.component.pagetop')
@yield('content')




</div>
<div class="section-body">
@include('layouts.admin.component.footer')
</div>
</div>
@include('layouts.admin.partials.script')
</body>
</html>
