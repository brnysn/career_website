@hasSection ('banner')
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('{{asset('assets/images/bg/bg-page-header.jpeg')}}') center center; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">@yield('banner')</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="{{ route('home') }}" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="{{ url()->full() }}" class="text-uppercase font-weight-bold">@yield('banner')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
@endif
