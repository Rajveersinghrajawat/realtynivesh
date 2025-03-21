<?php
include_once 'header.php';
?>

<style>
    header {
        background: black !important;
    }

    .tab-menu li {
        list-style: none;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 20px;
        background:rgb(0, 0, 0);
        color: #000;
        font-weight: 600;
    }

</style>

<section>
    <div class="container-fluid banner">


        <div class="row">
            <div class="overlay"></div>
            <div class="amenities-heading mx-auto">
                <h1 class="text-white">LIVE AT THE HEART OF ALL THE ACTION!</h1>
            </div>

        </div>

        <div class="container tab bg-white">
            <ul class="d-flex tab-menu justify-content-between">
                <li class="active"><a href="#price"> PRICE</a></li>
                <li><a href="#payment"> PAYMENT STRUCTURE</a></li>
                <li><a href="#current"> CURRENT OFFERS</a></li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid" id="price">
        <div class="row text-center py-5">
            <h2 class="pb-2">
                <dt>PRICE List</dt>
            </h2>
            <p>Explore The Medallion Aurum Mohali Price List, Payment Plan And Latest Offers</p>
        </div>

        <div class="container price-container">
            <div class="row justify-content-center">
                <div class="col-lg-4 price-section p-0">
                    <img src="img/price-section-apartmentImg1.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-4 price">
                    <div class="price-card">
                        <h4>3+1 BHK</h4>
                        <p>2950 SQFT.</p>
                        <span>Introducing Our 3+1 BHK Apartments @ THE MEDALLION AURUM MOHALI , A Magnificent Testament To Luxury And Modern Living. These Stunning Towers Offer Spacious Living Spaces.</span>
                    </div>
                </div>


                <div class="col-lg-4 unlock">
                        <img src="img/unlock.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment  my-5" id="payment">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <h2 class="text-center payment-heading py-5">
                <dt>PAYMENT STRUCTURE</dt>
            </h2>

            <div class="paymeny-list">
                <h2>Milestone Details</h2>

                <div class="scrollable-list p-3">
                    <div class="payment-step">
                        <div class="step-number">01</div>
                        <div class="step-description">Within 30 Days of Booking</div>
                        <div class="step-amount">25% of Sale Price</div>
                    </div>
                    <hr>
                    <div class="payment-step">
                        <div class="step-number">02</div>
                        <div class="step-description">On Start of Raft</div>
                        <div class="step-amount">10% of Sale Price</div>
                    </div>
                    <hr>
                    <div class="payment-step">
                        <div class="step-number">03</div>
                        <div class="step-description">On Completion of Stilt</div>
                        <div class="step-amount">10% of Sale Price</div>
                    </div>
                    <hr>
                    <div class="payment-step">
                        <div class="step-number">04</div>
                        <div class="step-description">On Completion of 3rd Floor</div>
                        <div class="step-amount">5% of Sale Price</div>
                    </div>
                    <hr>
                    <div class="payment-step">
                        <div class="step-number">05</div>
                        <div class="step-description">On Completion of 6th Floor</div>
                        <div class="step-amount">5% of Sale Price</div>
                    </div>
                    <hr>
                    <div class="payment-step">
                        <div class="step-number">06</div>
                        <div class="step-description">On Completion of 9th Floor</div>
                        <div class="step-amount">5% of Sale Price</div>
                    </div>
                    <hr>
                </div>

            </div>
        </div>


    </div>
</section>

<section  id="current">
    <div class="container-fluid my-5">
        <h2 class="text-center py-4">
            <dt>CURRENT OFFERS</dt>
        </h2>

        <div class="row">
            <div class="col-12 p-0 current-offer-banner">
                <img src="img/current-offer-banner.jpeg" class="img-fluid banner-dek" alt="">
                <img src="img/currentofferbanner-mobile.jpeg" class="img-fluid d-lg-none" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-dark mb-4 text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 property-heading">
                <h2 class="py-4">Are you interested in this Property?</h2>
            </div>

            <div class="col-lg-6 col-12 property text-end">
                <button type="button" data-bs-target="#exampleModal" data-bs-toggle="modal">CONNECT WITH US
                    <i class="fa-solid fa-arrow-right-long"></i></button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container text-center my-5">
        <h2>
            <dt>APPROVED BANKS</dt>
        </h2>
        <p>Easy & Hassle-Free Bank Loan Options For Your Dream Home</p>

        <div class="row my-5 align-items-center">
            <div class="owl-carousel owl-theme">

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-sbi.png" class="img-fluid" />
                    </div>
                </div>

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-kotak.png" class="img-fluid" />
                    </div>
                </div>

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-icici.png" class="img-fluid" />
                    </div>
                </div>

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-hdfc.png" class="img-fluid" />
                    </div>
                </div>

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-bob.png" class="img-fluid" />
                    </div>
                </div>

                <div class="item my-3">
                    <div class="bank-logo">
                        <img src="img/hlf-axisBank.png" class="img-fluid" />
                    </div>
                </div>



            </div>
        </div>
    </div>


</section>

<section>
    <div class="container faq">
        <div class="row my-5">
            <h2 class="text-center text-blod">
                <dt>FREQUENTLY ASKED QUESTIONS</dt>
            </h2>

            <div class="accordion accordion-flush pt-3" id="accordionFlushExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What types of apartments are available at Medallion Aurum?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Medallion Aurum offers luxurious 3+1 BHK and 4+1 BHK apartments designed for spacious living, featuring modern amenities and high-end finishes.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Where is Medallion Aurum located?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Medallion Aurum is located in Sector 67, Mohali, with convenient access to Chandigarh International Airport, IT City Mohali, educational institutions, hospitals, and major business hubs.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            What are the key amenities provided at Medallion Aurum?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Residents enjoy a range of amenities, including a clubhouse, gymnasium, swimming pool, spa, indoor games, landscaped green spaces, sports facilities like tennis and basketball courts, and 24x7 security with a 5-tier system.</div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>



<?php include_once('footer.php') ?>