<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Departments Directory - RFPMart + USWDS</title>
    <meta name="description" content="Find city departments, services, contacts, and leadership through an organized and easy-to-navigate directory." />

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

        <section class="usa-section view-accordion">
            <div class="grid-container">
                <div class="grid-row">
                    <div class="usa-accordion usa-accordion--bordered">
                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a1">
                                <span class="margin-0 font-body-lg text-black">Animal Services</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Pet adoption, licensing, and stray animal control.</span>
                            </button>
                        </h4>
                        <div id="a1" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Animal Services</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a2">
                                <span class="margin-0 font-body-lg text-black">City Clerk</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Public records, meeting minutes, and election administration.</span>
                            </button>
                        </h4>
                        <div id="a2" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of City Clerk</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a3">
                                <span class="margin-0 font-body-lg text-black">City Council</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Legislative policy, budget approval, and constituent representation.</span>
                            </button>
                        </h4>
                        <div id="a3" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of City Council</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <a href="departments-city-council.html" class="usa-button" type="button">Visit Department Page</a>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a4">
                                <span class="margin-0 font-body-lg text-black">Communications</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Media relations, press releases, and public alerts.</span>
                            </button>
                        </h4>
                        <div id="a4" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Communications</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a5">
                                <span class="margin-0 font-body-lg text-black">Economic Development</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Business attraction, incentives, and local growth strategies.</span>
                            </button>
                        </h4>
                        <div id="a5" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Economic Development</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a6">
                                <span class="margin-0 font-body-lg text-black">Finance</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Budgeting, tax collection, payroll, and purchasing.</span>
                            </button>
                        </h4>
                        <div id="a6" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Finance</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a7">
                                <span class="margin-0 font-body-lg text-black">Fire</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Emergency response, fire suppression, and safety inspections.</span>
                            </button>
                        </h4>
                        <div id="a7" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Fire</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <a href="departments-fire.html" class="usa-button" type="button">Visit Department Page</a>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a8">
                                <span class="margin-0 font-body-lg text-black">Human Resources</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Recruitment, employee benefits, and workplace training.</span>
                            </button>
                        </h4>
                        <div id="a8" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Human Resources</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a9">
                                <span class="margin-0 font-body-lg text-black">Information Technology</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Network security, computer support, and digital infrastructure.</span>
                            </button>
                        </h4>
                        <div id="a9" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Information Technology</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a10">
                                <span class="margin-0 font-body-lg text-black">Inspection</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Building code compliance and construction permit reviews.</span>
                            </button>
                        </h4>
                        <div id="a10" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Inspection</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a11">
                                <span class="margin-0 font-body-lg text-black">Legal</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Legal counsel, contract review, and liability management.</span>
                            </button>
                        </h4>
                        <div id="a11" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Legal</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a12">
                                <span class="margin-0 font-body-lg text-black">Mayor's Office</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Executive leadership, policy direction, and public relations.</span>
                            </button>
                        </h4>
                        <div id="a12" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Mayor's Office</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <a href="departments-mayors-office.html" class="usa-button" type="button">Visit Department Page</a>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a13">
                                <span class="margin-0 font-body-lg text-black">Parks and Recreation</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Park maintenance, sports leagues, and community events.</span>
                            </button>
                        </h4>
                        <div id="a13" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Parks and Recreation</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a14">
                                <span class="margin-0 font-body-lg text-black">Planning and Zoning</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Land use regulation, development reviews, and maps.</span>
                            </button>
                        </h4>
                        <div id="a14" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Planning and Zoning</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a15">
                                <span class="margin-0 font-body-lg text-black">Police</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Law enforcement, crime prevention, and emergency response.</span>
                            </button>
                        </h4>
                        <div id="a15" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Police</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <a href="departments-police.html" class="usa-button" type="button">Visit Department Page</a>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a16">
                                <span class="margin-0 font-body-lg text-black">Public Transportation</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Bus routes, transit schedules, and accessibility services.</span>
                            </button>
                        </h4>
                        <div id="a16" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Public Transportation</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a17">
                                <span class="margin-0 font-body-lg text-black">Public Works</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Road maintenance, streetlights, and infrastructure repair.</span>
                            </button>
                        </h4>
                        <div id="a17" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Public Works</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a18">
                                <span class="margin-0 font-body-lg text-black">Sanitation</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Trash collection, recycling pickup, and waste disposal.</span>
                            </button>
                        </h4>
                        <div id="a18" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Sanitation</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
                            </div>
                        </div>

                        <h4 class="usa-accordion__heading">
                            <button
                                type="button"
                                class="usa-accordion__button display-flex flex-column minh-10 bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                                aria-expanded="false"
                                aria-controls="a19">
                                <span class="margin-0 font-body-lg text-black">Water/Utilities</span>
                                <span class="margin-top-1 font-body-md text-left text-normal text-base-dark">Water service, sewer treatment, and utility billing.</span>
                            </button>
                        </h4>
                        <div id="a19" class="usa-accordion__content">
                            <p class="text-bold font-body-lg">123-456-7890</p>
                            <a href="#" class="usa-link text-no-underline text-bold">123 Main Street, Austin, TX 78759</a>
                            <p class="margin-top-0">Hours: Monday - Friday, 8:00 AM to 5:00 PM</p>

                            <p class="margin-bottom-0 text-bold">John Doe, Director of Water/Utilities</p>
                            <a href="#" class="usa-link text-no-underline text-bold">john.doe@domain.gov</a>
                            <hr class="margin-y-2">
                            <div class="display-flex flex-justify-end">
                                <button class="usa-button" type="button">Visit Department Page</button>
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