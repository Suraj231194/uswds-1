<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Garbage Collection - RFPMart + USWDS</title>
    <meta name="description" content="View curbside garbage collection schedules, service details, and waste pickup guidelines for residents." />


    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-residential-garbage-collection.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Departments</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Garbage & Recycling</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Residential Garbage Collection
                        </span>
                    </h1>
                    <p>
                        Here’s everything you need to know about curbside collection, schedules, and available services.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Curbside Collection
                    </h2>
                </div>
                <div class="grid-row grid-gap-2">
                    <div class="usa-card widescreen:grid-col-12 tablet:grid-col-12">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">What goes in the Trash</h4>
                            </div>
                            <div class="usa-card__body">
                                <p>
                                    Your garbage cart is for everyday household waste that can’t be recycled or composted.
                                </p>
                                <div class="display-flex flex-no-wrap flex-row">
                                    <span>✅</span>
                                    <span>Acceptable Items:</span>
                                    <ul class="usa-list margin-left-2 margin-top-0">
                                        <li>Food scraps and leftovers</li>
                                        <li>Non-recyclable plastics (like plastic wrap or chip bags)</li>
                                        <li>Broken household items</li>
                                        <li>Bathroom trash</li>
                                    </ul>
                                </div>
                                <p class="display-flex flex-no-wrap flex-row">
                                    <span>🚫</span>
                                    Do not place recyclables, yard debris, construction materials, electronics, or hazardous waste in your trash can.
                                </p>
                                <p class="display-flex flex-no-wrap flex-row">
                                    <span>💡</span>
                                    Pro Tip: Bag loose waste to help keep your cart and street clean.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-row grid-gap-2">
                    <div class="usa-card widescreen:grid-col-6 tablet:grid-col-6">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Yard Waste</h4>
                            </div>
                            <div class="usa-card__body">
                                <p>
                                    Keep your yard waste out of the landfill by setting it out separately. </p>
                                <ul class="usa-list usa-list--unstyled">
                                    <li class="display-flex flex-no-wrap flex-row">
                                        <span>✅</span>
                                        Accepted: Grass clippings, leaves, branches under XX inches thick and XX feet long.
                                    </li>
                                    <li class="display-flex flex-no-wrap flex-row">
                                        <span>🪴</span>
                                        Place yard waste in paper bags or your city-issued yard waste cart.
                                    </li>

                                    <li class="display-flex flex-no-wrap flex-row">
                                        <span>📅</span>
                                        Collected every other week on your neighborhood’s yard waste day.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="usa-card widescreen:grid-col-6 tablet:grid-col-6">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Guidelines & Fees</h4>
                            </div>
                            <div class="usa-card__body">
                                <ul class="usa-list">
                                    <li>Put carts out by <b>6:00 A.M.</b> on collection day.</li>
                                    <li>Leave at least <b>3 feet</b> of space around your cart (keep clear of mailboxes, cars, and recycling bins).</li>
                                    <li>Remove carts from the street within <b>24 hours</b> after pickup.</li>
                                    <li>One cart is included in standard service.</li>
                                    <li>Extra carts or overweight loads may have additional fees — check the rate schedule for details.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="usa-section">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Collection Schedule
                    </h2>
                </div>

                <div class="grid-row grid-gap-2">
                    <div class="usa-card widescreen:grid-col-4 tablet:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Regular Trash</h4>
                            </div>
                            <div class="usa-card__body">
                                <p>Trash is collected <b>once a week</b> on your assigned day.</p>
                                <p>If your pickup falls on a holiday, collection will shift to the next business day.</p>
                                <p class="display-flex flex-no-wrap flex-row flex-align-center">
                                    <span>👉</span>
                                    <a class="usa-link margin-left-1 text-bold padding-2px text-no-underline"
                                        href="#">
                                        View your Schedule
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="usa-card widescreen:grid-col-4 tablet:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Yard & Bulky Waste</h4>
                            </div>
                            <div class="usa-card__body">
                                <p>It is collected <b>every two weeks</b> on your assigned day.</p>
                                <p>Bulky items (mattresses, furniture, appliances) pickup by <b>appointment only</b></p>
                                <p class="display-flex flex-no-wrap flex-row flex-align-center">
                                    <span>👉</span>
                                    <a class="usa-link margin-left-1 text-bold padding-2px text-no-underline"
                                        href="#">
                                        Request Pickup
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="usa-card widescreen:grid-col-4 tablet:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Upcoming Holidays</h4>
                            </div>
                            <div class="usa-card__body">
                                <ul class="usa-list">
                                    <li>Jan 1, 2025 - New year's Day</li>
                                    <li>Jan 20, 2025 - MLK Jr. Day</li>
                                    <li>May 26, 2025 - Memorial Day</li>
                                    <li>Jan 1, 2025 - New year's Day</li>
                                    <li>Jan 20, 2025 - MLK Jr. Day</li>
                                </ul>
                                <p class="display-flex flex-no-wrap flex-row flex-align-center">
                                    <span>👉</span>
                                    <a class="usa-link margin-left-1 text-bold padding-2px text-no-underline"
                                        href="#">
                                        View All Holidays
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Services
                    </h2>
                </div>
                <div class="grid-row grid-gap-2">
                    <div class="usa-card widescreen:grid-col-3 tablet:grid-col-3">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container display-flex flex-justify-center hover:bg-primary-darker hover:text-white">
                                <div class="usa-card__header">
                                    <h4 class="usa-card__heading font-heading-lg text-center">Request a Trash Cart</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="usa-card widescreen:grid-col-3 tablet:grid-col-3">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container display-flex flex-justify-center hover:bg-primary-darker hover:text-white">
                                <div class="usa-card__header">
                                    <h4 class="usa-card__heading font-heading-lg text-center">Request<br>Off-Street Collection</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="usa-card widescreen:grid-col-3 tablet:grid-col-3">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container display-flex flex-justify-center hover:bg-primary-darker hover:text-white">
                                <div class="usa-card__header">
                                    <h4 class="usa-card__heading font-heading-lg text-center">Report an Issue</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="usa-card widescreen:grid-col-3 tablet:grid-col-3">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container display-flex flex-justify-center hover:bg-primary-darker hover:text-white">
                                <div class="usa-card__header">
                                    <h4 class="usa-card__heading font-heading-lg text-center">Request Service Suspension</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Frequently Asked Questions (FAQs)
                    </h2>
                </div>
                <div class="grid-row grid-gap-2">
                    <div class="usa-accordion usa-accordion--bordered">
                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button height-7 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a1">
                                Can I leave paint cans or batteries next to my trash bin?
                            </button>
                        </h4>
                        <div id="a1" class="usa-accordion__content">
                            <p>No — these items must be taken to the hazardous waste facility or a drop-off event.</p>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button height-7 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a2">
                                What should I do with empty paint cans?
                            </button>
                        </h4>
                        <div id="a2" class="usa-accordion__content">
                            <p>If they’re completely dry and empty, they can go in your regular trash.</p>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button height-7 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a3">
                                Can businesses use the facility?
                            </button>
                        </h4>
                        <div id="a3" class="usa-accordion__content">
                            <p>No, it’s for residential waste only. Businesses must use a certified hazardous waste contractor.</p>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button height-7 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a4">
                                What if I can’t drive to the facility?
                            </button>
                        </h4>
                        <div id="a4" class="usa-accordion__content">
                            <p>You can authorize someone else to drop off waste on your behalf. Just make sure they bring proof of your residency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>