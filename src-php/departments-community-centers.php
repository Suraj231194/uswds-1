<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Centers - RFPMart + USWDS</title>
    <meta name="description" content="Find a community center near you. Explore programs, amenities, and rental information." />

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
                            <li class="usa-breadcrumb__list-item">
                                <a href="departments-community-centers.html" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Community Centers</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Community Centers
                        </span>
                    </h1>
                    <p>
                        Safe, inclusive spaces for recreation, learning, and gathering.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section view-card">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl">
                        Our Locations
                    </h2>
                    <p class="usa-intro">
                        Discover the variety of amenities and programs available at our centers across the city.
                    </p>
                </div>

                <ul class="usa-card-group grid-row grid-gap">
                    <!-- Center 1 -->
                    <li class="usa-card tablet:grid-col-4">
                        <div class="usa-card__container hover:shadow-4 border-primary-light">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">Northside Community Hub</h3>
                            </div>
                            <div class="usa-card__media">
                                <div class="usa-card__img">
                                    <img src="https://designsystem.digital.gov/img/introducing-uswds-2-0/built-for-government.svg" alt="Illustration of government building" style="height: 200px; width: 100%; object-fit: cover; background: #f0f0f0;">
                                </div>
                            </div>
                            <div class="usa-card__body">
                                <p><strong>Address:</strong> 123 North Ave</p>
                                <p><strong>Amenities:</strong> Gym, Pool, Computer Lab</p>
                                <p>A vibrant hub for youth programs and senior activities.</p>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">View Schedule</a>
                            </div>
                        </div>
                    </li>

                    <!-- Center 2 -->
                    <li class="usa-card tablet:grid-col-4">
                        <div class="usa-card__container hover:shadow-4 border-primary-light">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">Riverview Recreation Center</h3>
                            </div>
                            <div class="usa-card__media">
                                <div class="usa-card__img">
                                    <img src="https://designsystem.digital.gov/img/introducing-uswds-2-0/design-system-tokens.svg" alt="Illustration of design tokens" style="height: 200px; width: 100%; object-fit: cover; background: #f0f0f0;">
                                </div>
                            </div>
                            <div class="usa-card__body">
                                <p><strong>Address:</strong> 456 River Rd</p>
                                <p><strong>Amenities:</strong> Hiking Trails, Picnic Areas, Event Hall</p>
                                <p>Perfect for outdoor enthusiasts and community gatherings.</p>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">Reserve Space</a>
                            </div>
                        </div>
                    </li>

                    <!-- Center 3 -->
                    <li class="usa-card tablet:grid-col-4">
                        <div class="usa-card__container hover:shadow-4 border-primary-light">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">Downtown Arts & Culture Center</h3>
                            </div>
                            <div class="usa-card__media">
                                <div class="usa-card__img">
                                    <img src="https://designsystem.digital.gov/img/introducing-uswds-2-0/components.svg" alt="Illustration of UI components" style="height: 200px; width: 100%; object-fit: cover; background: #f0f0f0;">
                                </div>
                            </div>
                            <div class="usa-card__body">
                                <p><strong>Address:</strong> 789 Main St</p>
                                <p><strong>Amenities:</strong> Gallery, Theater, Classrooms</p>
                                <p>Celebrating local art and culture through exhibitions and workshops.</p>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">Upcoming Events</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="usa-section usa-section--light">
             <div class="grid-container">
                <div class="grid-row grid-gap">
                    <div class="tablet:grid-col-8">
                         <h2 class="font-heading-lg">Accessibility & Inclusion</h2>
                         <p>All our community centers are ADA compliant and strive to be inclusive for all residents. We offer adaptive programs and assistive listening devices upon request.</p>
                    </div>
                     <div class="tablet:grid-col-4">
                        <div class="bg-white padding-2 border-1px border-base-lighter">
                            <h3 class="font-heading-md margin-top-0">Contact Parks & Rec</h3>
                            <p class="margin-bottom-0">Phone: (555) 123-4567</p>
                            <p class="margin-top-0">Email: parks@rfpmart.city</p>
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
