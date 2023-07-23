@include('backend.includes.header')
@include('backend.includes.top-nav')

        <div id="layoutSidenav">
            @include('backend.includes.side-nav')
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-content')
                </main>
                @include('backend.includes.copyright')
            </div>
        </div>

@include('backend.includes.footer')