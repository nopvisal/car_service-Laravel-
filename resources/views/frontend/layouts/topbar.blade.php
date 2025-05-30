<!-- Topbar Start -->
<div class="container-fluid  p-0">
    <div class="row gx-0 d-lg-flex nav-top">
        <div class="col-lg-5 col-11 nav-p text-start">
            <a href="#" class="navbar-brand d-flex align-items-center ">
                <h2 class="m-0 text-warning"><i class="fa fa-car me-3"></i>VI-FIX</h2>
            </a>

        </div>
        <div class="col-lg-1 col-1  text-end dis">
            <div class="navbar-brand d-flex align-items-center ">
                <i class="fa fa-list toggle-btn" id="toggleBtn"></i>
                <div class="sidebar" id="sidebar">
                    <div class="col-12 nav-p text-start">
                        <a href="index" class="navbar-brand d-flex align-items-center ">
                            <h2 class="m-0 text-warning"><i class="fa fa-car me-3"></i>VI-FIX</h2>
                        </a>
                        <div
                            style="width:120%; height: 5px; background-color: darkgray; margin-top: 50px; opacity:0.5; margin-left:-20px;">
                        </div>
                    </div>
                        <ul class="sidelink">
                            <a href="/home" class="">Home</a>
                            <a href="/aboutus" class="">Aboutus</a>
                            <a href="/service" class="">Services</a>
                            <a href="/shop" class="">Spare Part</a>
                            <a href="/contact" class="">Contact</a>
                        </ul>
                        <div
                            style="width:120%; height: 5px; background-color: darkgray; margin-top: 20px; opacity:0.5; margin-left:-20px;">
                        </div>
                        <div class="h-20 d-inline-flex align-items-center col-12" style="padding-top:20px; padding-left:-30px;">
                <!-- Booking -->
                <div class="buttons" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Booking
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" style="color:white; background-color:white;"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div id="booking" class="section">
                                        <div class="">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="bg-blue h-100 d-flex flex-column justify-content-center text-center p-5 ">
                                                        <h1 class="text-white mb-4">Book For A Service</h1>
                                                        <form>
                                                            <div class="row g-3">
                                                                <div class="col-12 col-sm-6">
                                                                    <input type="text" class="form-control border-0"
                                                                        placeholder="Your Name" style="height: 55px;">
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <input type="email" class="form-control border-0"
                                                                        placeholder="Your Email" style="height: 55px;">
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <select class="form-select border-0"
                                                                        style="height: 55px;">
                                                                        <option selected>Select A Service</option>
                                                                        <option value="1">Service 1</option>
                                                                        <option value="2">Service 2</option>
                                                                        <option value="3">Service 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="date" id="date1"
                                                                        data-target-input="nearest">
                                                                        <input type="text"
                                                                            class="form-control border-0 datetimepicker-input"
                                                                            placeholder="Service Date"
                                                                            data-target="#date1"
                                                                            data-toggle="datetimepicker"
                                                                            style="height: 55px;">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <textarea class="form-control border-0"
                                                                        placeholder="Special Request"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button class="btn btn-secondary w-100 py-3"
                                                                        type="submit">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Booking -->
                @auth


                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="p-1 px-4 btn-primary rounded-lg">Logout</button>
                    </form>


                @else
                    <a href="/login">
                        <div class="buttons">Login</div>
                    </a>

                @endauth

                        </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-7 px-2 text-end d-non">

            <div class="h-100 d-inline-flex align-items-center py-3 me-4">

                <a href="index" class="text-light">Customer Support</a>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <a href="index" class="text-light"><img style="width:30px;height:20px;"
                        src="{{ asset('frontend/img/flag.png') }}" alt="">
                    USD</a>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <!-- Booking -->
                <div class="buttons" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Booking
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" style="color:white; background-color:white;"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div id="booking" class="section">
                                        <div class="">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="bg-blue h-100 d-flex flex-column justify-content-center text-center p-5 ">
                                                        <h1 class="text-white mb-4">Book For A Service</h1>
                                                        <form>
                                                            <div class="row g-3">
                                                                <div class="col-12 col-sm-6">
                                                                    <input type="text" class="form-control border-0"
                                                                        placeholder="Your Name" style="height: 55px;">
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <input type="email" class="form-control border-0"
                                                                        placeholder="Your Email" style="height: 55px;">
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <select class="form-select border-0"
                                                                        style="height: 55px;">
                                                                        <option selected>Select A Service</option>
                                                                        <option value="1">Service 1</option>
                                                                        <option value="2">Service 2</option>
                                                                        <option value="3">Service 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="date" id="date1"
                                                                        data-target-input="nearest">
                                                                        <input type="text"
                                                                            class="form-control border-0 datetimepicker-input"
                                                                            placeholder="Service Date"
                                                                            data-target="#date1"
                                                                            data-toggle="datetimepicker"
                                                                            style="height: 55px;">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <textarea class="form-control border-0"
                                                                        placeholder="Special Request"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button class="btn btn-secondary w-100 py-3"
                                                                        type="submit">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Booking -->
                @auth


                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="p-1 px-4 btn-primary rounded-lg">Logout</button>
                    </form>


                @else
                    <a href="/login">
                        <div class="buttons">Login</div>
                    </a>

                @endauth

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->