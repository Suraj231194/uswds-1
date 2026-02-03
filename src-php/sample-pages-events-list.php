<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Events - RFPMart + USWDS</title>
    <meta name="description" content="View a list of upcoming city events with dates and brief descriptions." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-events.webp'); max-width: 100%; height: auto;" aria-label="Introduction">
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
                                    <span class="text-base-lightest hover:text-base-light">Pages</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            City Events
                        </span>
                    </h1>
                    <p>
                        Stay informed with the latest announcements, public notices, and stories from City Hall.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap flex-column flex-wrap padding-y-4 padding-x-2 bg-primary-lighter">
                <form class="display-flex flex-row flex-wrap flex-align-end tablet:flex-no-wrap margin-bottom-2">
                    <div class="display-flex flex-column tablet:grid-col-5 padding-0 tablet:padding-right-2">
                        <label class="usa-label tablet:margin-top-0" id="event-date-start-label" for="event-date-start">From</label>
                        <div class="usa-date-picker">
                            <input
                                class="usa-input"
                                id="event-date-start"
                                name="event-date-start"
                                placeholder="mm/dd/yyyy"
                                aria-labelledby="event-date-start-label" />
                        </div>
                    </div>
                    <div class="display-flex flex-column tablet:grid-col-5 padding-0 tablet:padding-right-2">
                        <label class="usa-label tablet:margin-top-0" id="event-date-end-label" for="event-date-end">To</label>
                        <div class="usa-date-picker">
                            <input
                                class="usa-input"
                                id="event-date-end"
                                name="event-date-end"
                                placeholder="mm/dd/yyyy"
                                aria-labelledby="event-date-end-label" />
                        </div>
                    </div>
                    <button class="usa-button tablet:grid-col-2 height-5 margin-top-3 tablet:margin-0" type="submit">Find Event</button>
                </form>

                <div class="">
                    <label class="usa-label tablet:margin-top-0" for="news-categories">Event Type</label>
                    <ul class="usa-list usa-list--unstyled display-flex flex-row flex-wrap" id="news-categories">
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-base-dark text-no-underline hover:border-base-dark hover:bg-base-dark hover:text-white" data-category="all">All</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-primary text-no-underline hover:border-primary hover:bg-primary hover:text-white" data-category="arts_culture">Arts & Culture</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-warm text-no-underline hover:border-accent-warm hover:bg-accent-warm hover:text-white" data-category="entertainment">Entertainment</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-cool-dark text-no-underline hover:border-accent-cool-dark hover:bg-accent-cool-dark hover:text-white" data-category="food_drink">Food & Drink</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-warm-dark text-no-underline hover:border-accent-warm-dark hover:bg-accent-warm-dark hover:text-white" data-category="sports_recreation">Sports & Recreation</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-secondary-dark text-no-underline hover:border-secondary-dark hover:bg-secondary-dark hover:text-white" data-category="community">Community</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-primary-dark text-no-underline hover:border-primary-dark hover:bg-primary-dark hover:text-white" data-category="family">Family</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <ul class="usa-card-group grid-row">
                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="family">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-primary-dark radius-pill">Family</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">City Library Storytime & Crafts</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-family.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>February 28, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>10:30 AM – 11:45 AM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="arts_culture">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-primary radius-pill">Arts Culture</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">Downtown Gallery Night</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-arts-culture.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>March 13, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>6:00 PM – 9:00 PM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="community">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-secondary-dark radius-pill">Community</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">Neighborhood Clean-Up Day</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-community.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>March 28, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>8:00 AM – 12:00 PM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="food_drink">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-accent-cool-dark radius-pill">Food & Drink</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">Spring Food Truck Festival</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-food-drink.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>April 18, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>12:00 PM – 6:00 PM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="sports_recreation">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-accent-warm-dark radius-pill">Sports & Recreation</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">Community 5K Fun Run</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-sports-recreation.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>May 9, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>8:00 AM – 10:00 AM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag width-full padding-top-4 border-top-2px border-base-light" data-category="entertainment">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <span class="usa-tag bg-accent-warm radius-pill">Entertainment</span>
                            <h4 class="usa-card__heading margin-top-2">
                                <a href="sample-pages-events-detail.html" class="usa-link text-no-underline">Summer Jazz in the Park</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-events-entertainment.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg>
                                <span>June 21, 2026</span>
                            </div>
                            <div class="display-flex flex-align-center margin-right-2 text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                                </svg>
                                <span>7:00 PM – 9:30 PM</span>
                            </div>
                            <div class="display-flex flex-align-center text-base">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg>
                                <span>123 Main Street, Austin, TX</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <nav aria-label="Pagination" class="usa-pagination">
            <ul class="usa-pagination__list">
                <li class="usa-pagination__item usa-pagination__arrow">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__link usa-pagination__previous-page"
                        aria-label="Previous page"><svg class="usa-icon" aria-hidden="true" role="img">
                            <use href="uswds/dist/img/sprite.svg#navigate_before"></use>
                        </svg>
                        <span class="usa-pagination__link-text">Previous</span></a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 1">1</a>
                </li>
                <li
                    class="usa-pagination__item usa-pagination__overflow"
                    aria-label="ellipsis indicating non-visible pages">
                    <span>…</span>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 9">9</a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button usa-current"
                        aria-label="Page 10"
                        aria-current="page">10</a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 11">11</a>
                </li>
                <li
                    class="usa-pagination__item usa-pagination__overflow"
                    aria-label="ellipsis indicating non-visible pages">
                    <span>…</span>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Last page, page 24">24</a>
                </li>
                <li class="usa-pagination__item usa-pagination__arrow">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__link usa-pagination__next-page"
                        aria-label="Next page"><span class="usa-pagination__link-text">Next </span><svg class="usa-icon" aria-hidden="true" role="img">
                            <use href="uswds/dist/img/sprite.svg#navigate_next"></use>
                        </svg></a>
                </li>
            </ul>
        </nav>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>