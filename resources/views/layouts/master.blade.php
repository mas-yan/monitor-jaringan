@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>
                @yield('header')
            </h1>
        </div>

        <div class="section-body">
            @yield('content')
        </div>
    </section>
</div>
@include('layouts.footer')
