<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Details - RFPMart + USWDS</title>
    <meta name="description" content="Read a city blog post with full details, publication date, author information, and related links." />

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
                        City Updates Emergency Response Protocols
                    </h2>

                    <div class="display-flex flex-wrap">

                        <span class="usa-tag bg-secondary-dark radius-pill margin-bottom-1">
                            Safety
                        </span>

                        <!-- META ITEM -->
                        <div class="display-flex flex-align-center margin-x-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M128.1 64C92.8 64 64.1 92.7 64.1 128L64.1 512C64.1 547.3 92.8 576 128.1 576L274.3 576L285.2 521.5C289.5 499.8 300.2 479.9 315.8 464.3L448 332.1L448 234.6C448 217.6 441.3 201.3 429.3 189.3L322.8 82.7C310.8 70.7 294.5 64 277.6 64L128.1 64zM389.6 240L296.1 240C282.8 240 272.1 229.3 272.1 216L272.1 122.5L389.6 240zM332.3 530.9L320.4 590.5C320.2 591.4 320.1 592.4 320.1 593.4C320.1 601.4 326.6 608 334.7 608C335.7 608 336.6 607.9 337.6 607.7L397.2 595.8C409.6 593.3 421 587.2 429.9 578.3L548.8 459.4L468.8 379.4L349.9 498.3C341 507.2 334.9 518.6 332.4 531zM600.1 407.9C622.2 385.8 622.2 350 600.1 327.9C578 305.8 542.2 305.8 520.1 327.9L491.3 356.7L571.3 436.7L600.1 407.9z" />
                            </svg>
                            <span>City Communications Office</span>
                        </div>

                        <div class="display-flex flex-align-center margin-right-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                            </svg>
                            <span>June 21, 2026</span>
                        </div>

                        <div class="display-flex flex-align-center margin-right-2 margin-bottom-1 text-base">
                            <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                            </svg>
                            <span>3 min read</span>
                        </div>

                    </div>
                </header>

                <!-- FEATURE IMAGE -->
                <img
                    class="width-full maxh-mobile margin-bottom-4"
                    src="images/webp/card-blog-safety.webp"
                    alt="Emergency responders coordinating in the city" />

                <!-- CONTENT BLOCK -->
                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Summary</h4>
                    <p class="line-height-body-4">
                        Police and fire officials announced new emergency response protocols
                        designed to reduce response times and improve coordination during large public events.
                    </p>
                </section>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Background</h4>
                    <p class="line-height-body-4">
                        The city’s Department of Public Safety reviewed existing procedures
                        to improve readiness for routine and high-profile incidents.
                    </p>
                </section>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Key Changes</h4>
                    <ul class="usa-list">
                        <li><strong>Faster Dispatch:</strong> Centralized communication hubs.</li>
                        <li><strong>Improved Coordination:</strong> Joint police, fire, and EMS drills.</li>
                        <li><strong>Technology Upgrades:</strong> GPS and real-time traffic monitoring.</li>
                        <li><strong>Community Awareness:</strong> Public workshops and alerts.</li>
                    </ul>
                </section>

                <!-- QUOTE -->
                <div class="bg-primary-lighter border-left-1 border-primary margin-bottom-4">
                    <p class="padding-4 font-body-lg line-height-body-4">
                        <em>
                            “These protocols are designed to keep everyone safer while ensuring
                            our emergency responders have the tools they need.”
                        </em>
                        <br />
                        <br />
                        — Chief Maria Lopez, City Fire Department
                    </p>
                </div>

                <section class="margin-bottom-4">
                    <h4 class="font-heading-lg margin-bottom-1">Expected Benefits</h4>
                    <p class="line-height-body-4">
                        Officials expect faster response times, improved public safety,
                        and stronger coordination across departments.
                    </p>
                </section>

                <!-- RESOURCES + SHARE -->
                <div class="grid-row grid-gap">

                    <div class="tablet:grid-col-7">
                        <h4 class="font-heading-lg margin-bottom-2">Related Resources</h4>
                        <ul class="usa-list usa-list--unstyled">
                            <li>
                                <a href="#" class="usa-link display-flex flex-align-center margin-bottom-1">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z" />
                                    </svg>
                                    <span>Download Emergency Response Protocol PDF</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="usa-link display-flex flex-align-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M384 64C366.3 64 352 78.3 352 96C352 113.7 366.3 128 384 128L466.7 128L265.3 329.4C252.8 341.9 252.8 362.2 265.3 374.7C277.8 387.2 298.1 387.2 310.6 374.7L512 173.3L512 256C512 273.7 526.3 288 544 288C561.7 288 576 273.7 576 256L576 96C576 78.3 561.7 64 544 64L384 64zM144 160C99.8 160 64 195.8 64 240L64 496C64 540.2 99.8 576 144 576L400 576C444.2 576 480 540.2 480 496L480 416C480 398.3 465.7 384 448 384C430.3 384 416 398.3 416 416L416 496C416 504.8 408.8 512 400 512L144 512C135.2 512 128 504.8 128 496L128 240C128 231.2 135.2 224 144 224L224 224C241.7 224 256 209.7 256 192C256 174.3 241.7 160 224 160L144 160z" />
                                    </svg>
                                    <span>City Public Safety Department Website</span>
                                </a>
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
                        Related Articles
                    </h2>
                </div>

                <ul class="usa-card-group grid-row grid-gap-1">
                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="font-body-xs">March 12, 2025</span>
                                <br />
                                <span class="usa-tag bg-secondary-dark radius-pill margin-bottom-1">
                                    Safety
                                </span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">City Updates Emergency Response Protocols</a>
                                </h4>
                            </div>
                        </div>
                    </li>

                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="font-body-xs">March 12, 2025</span>
                                <br />
                                <span class="usa-tag bg-secondary-dark radius-pill margin-bottom-1">
                                    Safety
                                </span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">City Updates Emergency Response Protocols</a>
                                </h4>
                            </div>
                        </div>
                    </li>

                    <li class="usa-card tablet:grid-col-4 desktop:grid-col-12">
                        <div class="usa-card__container">
                            <div class="padding-x-3 padding-top-3">
                                <span class="font-body-xs">March 12, 2025</span>
                                <br />
                                <span class="usa-tag bg-secondary-dark radius-pill margin-bottom-1">
                                    Safety
                                </span>
                            </div>
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a href="#" class="usa-link text-no-underline">City Updates Emergency Response Protocols</a>
                                </h4>
                            </div>
                        </div>
                    </li>
                </ul>

                <a href="#" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                    View All Related Articles
                </a>

            </aside>

        </div>
    </section>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>