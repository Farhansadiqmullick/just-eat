<?php get_header(); ?>
<!-- Masthead-->
<header class="masthead" style="background: linear-gradient(to bottom, rgb(255 248 243 / 0%) 0%, rgb(92 77 66 / 66%) 100%), url(<?php echo get_template_directory_uri() . '/assets/img/food-scooter.jpg'; ?>);  background-position: right; background-repeat: no-repeat; background-attachment: scroll; background-size: cover;">
    <div class="container px-0 px-lg-5 h-100">
        <div class="row gx-0 gx-lg-5 h-120 align-items-left justify-content-left">
            <div class="col-lg-6 col-md-12 align-self-start md-bg-image">
                <h1 class="text-white font-weight-bold my-5">Flexible Work.<br /> Great Perks</h1>
                <p class="my-3">Choose your schedule and cruise towards making extra money. <strong>Important - <a href="#questions">read before signing up</a>.</strong></p>
            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <form id="contactForm" class="contactForm">
                    <div class="form-floating mt-3 mb-4">
                        <h4 class="text-left">Sign Up Now</h4>
                    </div>

                    <!-- Name input -->
                    <div class="form-floating mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="first-name" id="first-name" placeholder="First name" data-sb-validations="required">
                                <div class="invalid-feedback" data-sb-feedback="first-name:required">First Name is
                                    required.</div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Last name">
                            </div>
                        </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email: </label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" placeholder="****" data-sb-validations="required,password" />
                        <label for="password">Password: </label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">Password is required</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Mobile Phone: </label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <select id="inputCity" class="form-control">
                            <option selected>Select</option>
                            <option>...</option>
                        </select>
                        <label for="inputCity">City/Town</label>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid mt-4"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                    <!-- Login Button-->
                    <div class="form-floating my-3 text-center">
                        <p style="font-size: 15px;" class="text-dark">Already have an account? <a href="//localhost:5500/login.html">Login</a> Here</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- schedule and earnings -->
<section class="schedule-earning my-5">
    <div class="container">
        <div class="d-flex flex-md-row flex-sm-column">
            <div class="card text-center my-5">
                <img src=<?php echo get_template_directory_uri() . "/assets/img/calender.svg" ?> class="card-img text-center mx-auto" alt="calender image">
                <div class="card-body card-section">
                    <h5 class="card-title">Choose Your Schedule</h5>
                    <p class="card-text">You are in control of your own schedule and can adjust your weekly
                        availability based on what works for you.</p>
                </div>
            </div>

            <div class="card text-center my-5">
                <img src=<?php echo get_template_directory_uri() . "/assets/img/money.svg" ?> class="card-img text-center mx-auto" alt="calender image">
                <div class="card-body card-section">
                    <h5 class="card-title">Get Paid Weekly</h5>
                    <p class="card-text">At the end of each week, your earnings will be directly deposited into your
                        account every week.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get Started -->
<section class="get-started">
    <div class="container-xl">
        <div class="py-3">
            <h4 class="text-white py-5 my-2">How To Get Started</h4>
            <div class="d-flex flex-lg-row flex-md-column flex-sm-column align-items-between">
                <div class="text-left my-5 px-2">
                    <h5 class="">Sign Up</h5>
                    <p class="">Create an account, upload your documents, and complete a quick screening call</p>
                </div>

                <div class="text-left my-5 px-2">
                    <h5 class="">Download the Courier App</h5>
                    <p class="">Set your availability within the Courier App and pick up any available open
                        runs.</p>
                </div>

                <div class="text-left my-5 px-2">
                    <h5 class="">Earn Money</h5>
                    <p class="">Once you have all the tools you need, you can start making deliveries to earn
                        extra money.</p>
                </div>
            </div>
            <div class="start-button">
                <button class="btn btn-primary btn-xl w-100" id="apply" type="submit">Apply Now</button>
            </div>
        </div>
    </div>

</section>
<!-- Questions -->
<section id="questions">
    <div class="container">
        <div class="py-3">
            <h4 class="pt-5 mt-2">Questions</h4>
        </div>
        <div class="row align-items-start">
            <div class="accordion-wrapper col-md-6 col-sm-12">
                <div class="accordion my-md-5 my-sm-0" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Why do I need to submit my availability every week?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We operate a closed network. This means we match the number of couriers online with
                                the
                                forecasted number of orders. If we were to operate an open network, there may be
                                times
                                when there are too many couriers online and not enough orders to deliver.

                                You must submit your availability in the courier app every Wednesday evening. If you
                                don’t, we’ll not be able to assign you runs.

                                If we’re very busy, you may be able to open the app and start delivering without
                                having
                                booked a run - we call these open runs. Remember, there is no guarantee of the
                                availability of open runs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What documents do I need?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You’ll need to provide:</p>
                                <ul>
                                    <li>Your driving licence - for motorised vehicles</li>
                                    <li>Business insurance (covering hire & reward) - for motorised vehicles</li>
                                    <li> Valid ID</li>
                                    <li>Proof of right to work in the UK</li>
                                    <li> Passport</li>
                                    <li>Remember, you need to keep the documents updated if they expire.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-wrapper col-md-6 col-sm-12">
                <div class="accordion my-md-5 my-sm-0" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Why do I need to submit my availability every week?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We operate a closed network. This means we match the number of couriers online with
                                the
                                forecasted number of orders. If we were to operate an open network, there may be
                                times
                                when there are too many couriers online and not enough orders to deliver.

                                You must submit your availability in the courier app every Wednesday evening. If you
                                don’t, we’ll not be able to assign you runs.

                                If we’re very busy, you may be able to open the app and start delivering without
                                having
                                booked a run - we call these open runs. Remember, there is no guarantee of the
                                availability of open runs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What documents do I need?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You’ll need to provide:</p>
                                <ul>
                                    <li>Your driving licence - for motorised vehicles</li>
                                    <li>Business insurance (covering hire & reward) - for motorised vehicles</li>
                                    <li> Valid ID</li>
                                    <li>Proof of right to work in the UK</li>
                                    <li> Passport</li>
                                    <li>Remember, you need to keep the documents updated if they expire.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>