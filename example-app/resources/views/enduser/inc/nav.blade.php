<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
        <div class="container">
            <div class="navbar-brand">
                <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.html">VCare</a>
            </div>
            <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                    <a type="button" class="btn btn-outline-light navigation--button" href="{{route('enduser.index')}}">Home</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{route('majorindex')}}">majors</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{route('doctorindex')}}">Doctors</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{route('admin.index')}}">Admin</a>

                    <a type="button" class="btn btn-outline-light navigation--button" href="{{route('login')}}">login</a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-blue text-white pt-3">
        <div class="container pb-5">
            <div class="row gap-2">
                <div class="col-sm order-sm-2">
                    @yield('adminpage')
                    @yield('userpage')
                    <img src="{{asset('EnduserAsset')}}/assets/images/banner.jpg" class="img-fluid banner-img banner-img" alt="banner-image"
                        height="200">
                </div>
                <div class="col-sm order-sm-1">
                    <h1 class="h1">Have a Medical Question?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                        laborum
                        saepe
                        enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                        consequatur
                        cum
                        iure
                        quod facere.</p>
                </div>
            </div>
        </div>
    </div>


</div>
