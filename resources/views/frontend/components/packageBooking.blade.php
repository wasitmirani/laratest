
<section class="main-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="row text-center">
                    <h2 class="heading-three">Book Now</h2>
                </div>
                @if(count($errors->all()) > 0)
<div class="alert alert-danger" role="alert">

    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
                <form action="" method="post">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                           <select class="form-control" name="package">
                               <option>Select Package</option>
                               <option></option>
                           </select>
                        </div>
                        <div class="col-lg-12">
                            <select class="form-control" name="tour">
                                <option>Select Tour</option>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" data-type="date" id="date-input" / placeholder="Booking Date">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" data-type="date" id="date-input" / placeholder="Start Date">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" data-type="date" id="date-input" / placeholder="End Date">
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-business">Submit Now <i class="fas fa-arrow-right ml-3"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
