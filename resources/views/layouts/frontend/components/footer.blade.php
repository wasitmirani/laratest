<footer data-aos="fade-up" data-aos-duration="1000" style="background-image: url(frontend/assets/images/footer-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="logo"><img src="{{asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt=""></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the book.Lorem Ipsum is simply dummy text of the printing.</p>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{route('index')}}"  class="{{ Request::is('/') ? 'active' : '' }}" >Home</a></li>
                            <li><a href="{{route('about')}}"  class="{{ Request::is('/about-us') ? 'active' : '' }}">About Us</a></li>
                            <li><a href="{{route('packages')}}"  class="{{ Request::is('/packages') ? 'active' : '' }}">Packages </a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{route('contactus')}}"  class="{{ Request::is('/contactus') ? 'active' : '' }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h2>Contact Info</h2>
                        <ul class="list-unstyled">
                            <li class="mb-4"><a href="#" ><i class="fas fa-phone-alt"></i> 123-456-7890</a></li>
                            <li class="mb-4"><a href="#"><i class="far fa-envelope"></i> Info@company.com</a></li>
                            <li class="mb-4"><a href="#"><i class="fas fa-map-marker-alt"></i> 123 Street Ipsum Usa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright ">
        <div class="row">
            <div class="col-lg-6">
                <p>© 2021. All Right Reserved - Maui Rental Locators.</p>
            </div>
            <div class="col-lg-6">
                <div class="social-icons">
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
