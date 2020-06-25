@include('partials.header')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">

            @yield('main-content')
        </div> <!-- co-sm-8 -->
    </div> <!-- row -->
</div> <!-- container -->

<div class="container-fluid p-8 bg-info">
    <div class="row">
        <div class="col-sm-12">
            @include('partials.footer')
        </div>
</div>

</div>



