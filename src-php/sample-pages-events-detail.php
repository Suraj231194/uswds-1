<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Details - RFPMart + USWDS</title>
    <meta name="description" content="Get full details about a city event, including date, time, location, and description." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <section class="usa-section tablet:padding-y-1">
        <div class="grid-container">
            <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                <ul class="usa-breadcrumb__list">
                    <li class="usa-breadcrumb__list-item">
                        <a href="./" class="usa-breadcrumb__link">
                            <span class="">Home</span>
                        </a>
                    </li>
                    <li class="usa-breadcrumb__list-item">
                        <a href="#" class="usa-breadcrumb__link">
                            <span class="">Pages</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="usa-section grid-container padding-top-0">
        <div class="grid-row grid-gap">

            <!-- MAIN ARTICLE -->
            <article class="tablet:grid-col-12 desktop:grid-col-8 margin-bottom-2">

                <!-- HEADER -->
                <header class="margin-bottom-3">
                    <h2 class="font-heading-xl margin-top-1">
                        Downtown Gallery Night
                    </h2>

                    <div class="display-flex flex-wrap">

                        <span class="usa-tag bg-primary radius-pill margin-bottom-1">
                            Arts & Culture
                        </span>

                        <!-- META ITEM -->

                        <div class="display-flex flex-align-center margin-x-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                            </svg>
                            <span>March 14, 2026</span>
                        </div>

                        <div class="display-flex flex-align-center margin-right-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                            </svg>
                            <span>6:00 PM – 9:00 PM</span>
                        </div>

                        <div class="display-flex flex-align-center margin-right-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M296 88C296 74.7 306.7 64 320 64C333.3 64 344 74.7 344 88L344 128L400 128C417.7 128 432 142.3 432 160C432 177.7 417.7 192 400 192L285.1 192C260.2 192 240 212.2 240 237.1C240 259.6 256.5 278.6 278.7 281.8L370.3 294.9C424.1 302.6 464 348.6 464 402.9C464 463.2 415.1 512 354.9 512L344 512L344 552C344 565.3 333.3 576 320 576C306.7 576 296 565.3 296 552L296 512L224 512C206.3 512 192 497.7 192 480C192 462.3 206.3 448 224 448L354.9 448C379.8 448 400 427.8 400 402.9C400 380.4 383.5 361.4 361.3 358.2L269.7 345.1C215.9 337.5 176 291.4 176 237.1C176 176.9 224.9 128 285.1 128L296 128L296 88z" />
                            </svg>
                            <span>Free</span>
                        </div>

                    </div>
                </header>

                <!-- FEATURE IMAGE -->
                <img
                    class="width-full maxh-mobile margin-bottom-4"
                    src="images/webp/card-events-arts-culture.webp"
                    alt="Emergency responders coordinating in the city" />

                <!-- LOCATION BLOCK -->
                <section class="grid-row grid-gap margin-bottom-4">
                    <div class="tablet:grid-col-7 desktop:grid-col-7 padding-bottom-2">
                        <h4 class="font-heading-lg margin-bottom-1">Location</h4>
                        <p class="line-height-body-4">
                            245 Market Street <br /> Springfield, IL 62701
                        </p>
                        <ul class="usa-list">
                            <li>Street parking available along Market Street</li>
                            <li>Public parking garage at 3rd & Market (2-hour free parking)</li>
                            <li>Bus Routes: 4, 7, and 12 stop within one block</li>
                        </ul>
                    </div>
                    <div class="tablet:grid-col-5 desktop:grid-col-5">
                        <iframe class="width-full height-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.7481467642788!2d-97.74680142475633!3d30.41488670092489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644ccf51fa9a8f7%3A0x6636307a160dcdf0!2s11615%20Angus%20Rd%20%23117c%2C%20Austin%2C%20TX%2078759!5e0!3m2!1sen!2sus!4v1766426725798!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>

                <!-- CONTENT BLOCK -->
                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Event Description</h4>
                    <p class="line-height-body-4">
                        Explore Springfield’s vibrant arts scene during Downtown Gallery Night, a monthly celebration featuring local artists, pop-up exhibits, and live creative demonstrations. Participating galleries and studios will stay open late, offering visitors the chance to meet artists, view new collections, and enjoy light refreshments while strolling through the Arts District.
                        <br />
                        <br />
                        This event is free and open to the public, making it a perfect evening outing for residents and visitors alike.
                    </p>
                </section>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Schedule</h4>
                    <ul class="usa-list">
                        <li><strong>6:00 PM</strong> – Galleries open to the public</li>
                        <li><strong>6:30 PM – 8:30 PM</strong> – Live art demonstrations and artist meet-and-greets</li>
                        <li><strong>7:30 PM</strong> – Featured artist talk at Market Street Gallery</li>
                        <li><strong>9:00 PM</strong> – Event concludes</li>
                    </ul>
                </section>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Organizer</h4>
                    <p class="line-height-body-4">
                        <strong>Arts Council</strong>
                        <br />
                        The Arts Council supports local artists and promotes cultural events throughout the city.
                    </p>
                    <ul class="usa-list">
                        <li><strong>Email:</strong> email@domain.com</li>
                        <li><strong>Phone:</strong> 123-456-7890</li>
                        <li><strong>Website:</strong> <a href="#" class="usa-link">www.domain.com</a></li>
                    </ul>
                </section>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Accessibility & Policies</h4>
                    <ul class="usa-list">
                        <li>Wheelchair accessible venues</li>
                        <li>Accessible restrooms available</li>
                        <li>Service animals welcome</li>
                        <li>Event takes place rain or shine</li>
                    </ul>
                </section>

                <!-- RESOURCES + SHARE -->
                <div class="grid-row grid-gap">

                    <div class="tablet:grid-col-7">
                        <h4 class="font-heading-lg margin-bottom-2">Registration</h4>
                        <ul class="usa-list usa-list--unstyled">
                            <li>
                                No registration required. Walk-ins welcome.
                            </li>
                        </ul>
                    </div>

                    <div class="tablet:grid-col-5">
                        <h4 class="font-heading-lg margin-bottom-2">Share</h4>
                        <ul class="usa-list usa-list--unstyled display-flex flex-row flex-wrap">
                            <li class="grid-col-auto">
                                <a href="javascript:void(0);" class="usa-social-link bg-transparent hover:bg-transparent" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" alt="Facebook"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#1877F2" d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="grid-col-auto">
                                <a href="javascript:void(0);" class="usa-social-link bg-transparent hover:bg-transparent" aria-label="Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" alt="Twitter"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="grid-col-auto">
                                <a href="javascript:void(0);" class="usa-social-link bg-transparent hover:bg-transparent" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" alt="Instagram"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill=" 	#c1558b" d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="grid-col-auto">
                                <a href="javascript:void(0);" class="usa-social-link bg-transparent hover:bg-transparent" aria-label="Linkedin">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" alt="Linkedin"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#0077B5" d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </article>

            <!-- SIDEBAR -->
            <aside class="tablet:grid-col-12 desktop:grid-col-4 desktop:border-left-1px desktop:border-base-lighter border-top-1px border-base-lighter desktop:border-top-0">

                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-lg">
                        Related Events
                    </h2>
                </div>

                <ul class="usa-card-group grid-row grid-gap-1">
                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="usa-tag bg-primary radius-pill">Arts & Culture</span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">Downtown Gallery Night</a>
                                </h4>
                            </div>
                            <div class="usa-card__body">
                                <div class="display-flex flex-align-center text-base">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                    </svg>
                                    <span>March 13, 2026</span>
                                </div>
                                <div class="display-flex flex-align-center text-base">
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

                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="usa-tag bg-primary radius-pill">Arts & Culture</span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">Downtown Gallery Night</a>
                                </h4>
                            </div>
                            <div class="usa-card__body">
                                <div class="display-flex flex-align-center text-base">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                    </svg>
                                    <span>March 13, 2026</span>
                                </div>
                                <div class="display-flex flex-align-center text-base">
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

                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="usa-tag bg-primary radius-pill">Arts & Culture</span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">Downtown Gallery Night</a>
                                </h4>
                            </div>
                            <div class="usa-card__body">
                                <div class="display-flex flex-align-center text-base">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                    </svg>
                                    <span>March 13, 2026</span>
                                </div>
                                <div class="display-flex flex-align-center text-base">
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
                </ul>

                <a href="#" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                    View All Related Events
                </a>

            </aside>

        </div>
    </section>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>