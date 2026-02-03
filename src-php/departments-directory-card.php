<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Departments Directory - RFPMart + USWDS</title>
    <meta name="description" content="Explore city departments through a visual directory showing services, contacts, and leadership information." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-department-directory.webp');" aria-label="Introduction">
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
                        </ul>
                    </nav>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Departments
                        </span>
                    </h1>
                    <p>
                        A directory of all RFPMart's departments.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section view-card">
            <div class="grid-container">
                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Mayor's Office</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        City Operations,
                                        Annual Budget,
                                        Inter-department policy</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Public Works</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Street maintenance & repair,
                                        Solid waste collection & recycling,
                                        Stormwater system maintenance
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Transportation</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Traffic Management,
                                        Public transit services,
                                        Parking regulation & permits</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Police</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Crime prevention & investigation,

                                        Emergency response,

                                        Community policing programs</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Fire & Rescue</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Fire suppression,

                                        Emergency medical response,

                                        Fire safety inspections & education</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Parks & Recreation</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Park maintenance & development,

                                        Recreation programs & events,

                                        Facility rental & management</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Planning & Development</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Land-use planning & zoning,

                                        Building plan review & permitting,

                                        Urban redevelopment initiatives</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Building & Safety</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Building inspections,

                                        Code enforcement,

                                        Construction permits</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Finance</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Tax collection,

                                        Payroll & accounting,

                                        Grants & financial reporting</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Economic Development</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Business licensing & support,

                                        Workforce development,

                                        Downtown revitalization</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Housing</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Affordable housing programs,

                                        Rental assistance,

                                        Homeless services</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Public Health</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Disease prevention & immunization,

                                        Environmental health inspections,

                                        Health education programs</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Human/Social Services</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Family counseling & support,

                                        Senior services,

                                        Food & utility assistance</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>information Technology</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Cybersecurity & systems management,

                                        Public data & GIS services,

                                        City website & communication systems</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Water & Utilities</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Water supply & treatment

                                        Wastewater management

                                        Customer utility billing</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="usa-card-group grid-row grid-gap text-center">
                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Emergency Management</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Disaster preparedness planning,

                                        Emergency alert systems,

                                        Coordination of crisis response</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Cultural Affairs</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Arts funding & programming,

                                        Museum & cultural venue management,

                                        Public art installations</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="usa-card tablet:grid-col">
                        <a class="usa-link text-no-underline" href="#">
                            <div class="usa-card__container flex-column flex-align-center flex-justify-center hover:shadow-4">
                                <div class="usa-icon margin-top-2 width-10 height-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#74C0FC" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                    </svg>
                                </div>

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading">
                                        <span>Procurement</span>
                                    </h3>
                                </div>
                                <div class="usa-card__body">
                                    <p class="text-italic text-bold text-base margin-top-0 margin-bottom-0 margin-left-2 flex-wrap">
                                        Vendor contracts & bidding,

                                        Asset purchasing,

                                        Compliance oversight</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>