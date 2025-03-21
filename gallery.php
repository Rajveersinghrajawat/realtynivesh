<?php
    include_once 'header.php';
?>

<style>
    header {
        background: black !important;
    }

    @media only screen and (min-width: 320px) and (max-width: 567px) {
        header {
            background: black !important;
            position: sticky !important;
            top: 0px !important;
        }
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
            <ul class="d-flex justify-content-between">
                <li class="active" data-target="#walkthrough">PROJECT WALK THROUGH</li>
                <li data-target="#sampleFlat">SAMPLE FLAT</li>
                <li data-target="#projectGallery">PROJECT GALLERY</li>
                <li data-target="#constructionUpdates">CONSTRUCTION UPDATES</li>
            </ul>
        </div>
    </div>
</section>

<div class="d-lg-none container tab bg-white">
            <ul>
                <li class="active" data-target="#walkthrough">PROJECT WALK THROUGH</li>
                <li data-target="#sampleFlat">SAMPLE FLAT</li>
                <li data-target="#projectGallery">PROJECT GALLERY</li>
                <li data-target="#constructionUpdates">CONSTRUCTION UPDATES</li>
            </ul>
</div>

<section id="walkthrough" class="content-section my-5 py-4">
    <div class="container text-center">
        <h2>PROJECT WALK THROUGH</h2>
        <p>Explore The Medallion Aurum Mohali Project Gallery & Construction Updates.</p>
    </div>
    <div class="container video">
        <video autoplay muted loop controls>
            <source src="https://medallionaurum.realtynivesh.com//videos/galleryVideo-background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<section id="sampleFlat" class="content-section my-5 py-4" style="display: none;">
    <div class="container text-center">
        <h2>SAMPLE FLAT</h2>
        <p>Explore The Medallion Aurum Mohali Project Gallery & Construction Updates.</p>
    </div>
    <section class="p-0 container">
        <div class="row d-flex">
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Living_Option.jpeg"
                        data-imgsrc="img/SampleFlat_Living_Option.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Bedroom_02.jpeg"
                        data-imgsrc="img/SampleFlat_Bedroom_02.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Dress.jpeg"
                        data-imgsrc="img/SampleFlat_Dress.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Entrance.jpeg"
                        data-imgsrc="img/SampleFlat_Entrance.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Kitchen.jpeg"
                        data-imgsrc="img/SampleFlat_Kitchen.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_LivingDinning_Changes01.jpeg"
                        data-imgsrc="img/SampleFlat_LivingDinning_Changes01.jpeg">
                </div>
            </div>
        </div>
    </section>
</section>

<section id="projectGallery" class="content-section my-5 py-4" style="display: none;">
    <div class="container text-center">
        <h2>PROJECT GALLERY</h2>
        <p>Explore The Medallion Aurum Mohali Project Gallery & Construction Updates.</p>
    </div>
    <section class="p-0 container">
        <div class="row d-flex">
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Living_Option.jpeg"
                        data-imgsrc="img/SampleFlat_Living_Option.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Bedroom_02.jpeg"
                        data-imgsrc="img/SampleFlat_Bedroom_02.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Dress.jpeg"
                        data-imgsrc="img/SampleFlat_Dress.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Entrance.jpeg"
                        data-imgsrc="img/SampleFlat_Entrance.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Kitchen.jpeg"
                        data-imgsrc="img/SampleFlat_Kitchen.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_LivingDinning_Changes01.jpeg"
                        data-imgsrc="img/SampleFlat_LivingDinning_Changes01.jpeg">
                </div>
            </div>
        </div>
    </section>

</section>

<section id="constructionUpdates" class="content-section my-5 py-4" style="display: none;">
    <div class="container text-center">
        <h2>CONSTRUCTION UPDATES</h2>
        <p>Explore The Medallion Aurum Mohali Project Gallery & Construction Updates.</p>
    </div>
    <section class="p-0 container">
        <div class="row d-flex">
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Living_Option.jpeg"
                        data-imgsrc="img/SampleFlat_Living_Option.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Bedroom_02.jpeg"
                        data-imgsrc="img/SampleFlat_Bedroom_02.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Dress.jpeg"
                        data-imgsrc="img/SampleFlat_Dress.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Entrance.jpeg"
                        data-imgsrc="img/SampleFlat_Entrance.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_Kitchen.jpeg"
                        data-imgsrc="img/SampleFlat_Kitchen.jpeg">
                </div>
            </div>
            <div class=" col-12 col-md-4 p-3">
                <div class="lightbox_img_wrap">
                    <img class="lightbox-enabled" src="img/SampleFlat_LivingDinning_Changes01.jpeg"
                        data-imgsrc="img/SampleFlat_LivingDinning_Changes01.jpeg">
                </div>
            </div>
        </div>
    </section>
</section>


<section class="lightbox-container">

    <span class="material-symbols-outlined material-icons lightbox-btn left" id="left">
        <i class="fa-solid fa-arrow-left"></i>
    </span>
    <span class="material-symbols-outlined material-icons lightbox-btn right" id="right">
        <i class="fa-solid fa-arrow-right-long"></i>
    </span>
    <span id="close" class="close material-icons material-symbols-outlined">
        <i class="fa-solid fa-xmark"></i>
    </span>
    <div class="lightbox-image-wrapper">
        <img alt="lightboximage" class="lightbox-image">


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

<section>
    <div class="container-fluid meet-session">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <h2 class="py-2 text-secondary">We Are Excited To Meet You</h2>
                    <div class="model-img py-4">
                        <img src="img/logo2.webp" class="py-3" alt="logo2" width="200px" />
                        <img src="img/realtynivesh-logo.webp" class="py-3" alt="logo2" width="200px" />
                    </div>

                </div>

                <div class="col-lg-6 p-5">
                    <div class="form-container">
                        <form>
                            <div class="mb-4">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required />
                            </div>

                            <div class="mb-4">
                                <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number*" required />
                                <small class="text-muted">You’ll receive OTP via SMS</small>
                            </div>

                            <div class="mb-4">
                                <input type="email" class="form-control" id="email" placeholder="Email Id" required />
                            </div>

                            <div class="mb-3 checkbox-container">
                                <input type="checkbox" id="agree" checked />
                                <p>
                                    I agree to receive newsletters, or relevant marketing content
                                    and Medallion Aurum Terms and Conditions
                                </p>
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Get OTP</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<?php include_once 'footer.php'?>