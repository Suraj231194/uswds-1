<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Contracts - RFPMart + USWDS</title>
    <meta name="description" content="Browse active city contracts with vendor details, terms, and transparency information." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-base-lighter" style="background-image: url('images/webp/bg-purchasing-procurement.webp');" aria-label="Introduction">
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
                    <p class="margin-top-0 margin-bottom-0">
                        RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Current City Contracts
                        </span>
                    </h1>
                    <p>
                        Search, view, and download city contracts.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row bg-primary-lighter padding-4">
                <form class="usa-form display-flex flex-column width-full maxw-full" action="">
                    <div class="display-flex flex-row flex-wrap">
                        <div class="tablet:grid-col tablet:margin-right-2">
                            <label class="usa-label margin-top-0 margin-bottom-1" for="search-field">Search</label>
                            <input class="usa-input height-5 border-1px" id="search-field" type="search" name="search" placeholder="Keywords, bid number, or project title..." />
                        </div>
                        <div class="tablet:grid-col-3">
                            <label class="usa-label tablet:margin-top-0" for="options">Status</label>
                            <select class="usa-select" name="options" id="options">
                                <option value>All</option>
                                <option value="Active">Active</option>
                                <option value="Ending Soon">Ending Soon</option>
                                <option value="Ended">Ended</option>
                            </select>
                        </div>
                    </div>
                    <div class="display-flex flex-row flex-wrap flex-align-end">
                        <div class="tablet:grid-col tablet:margin-right-2">
                            <label class="usa-label" for="options">Category</label>
                            <select class="usa-select" name="options" id="options">
                                <option value>All Categories</option>
                                <option value="construction">Construction</option>
                                <option value="professional_services">Professional Services</option>
                                <option value="technology">Technology</option>
                                <option value="supplies_equipment">Supplies & Equipment</option>
                                <option value="fleet_vehicles">Fleet & Vehicles</option>
                            </select>
                        </div>
                        <div class="tablet:grid-col margin-bottom-2 tablet:margin-bottom-0 tablet:margin-right-2">
                            <label class="usa-label" for="options">Department</label>
                            <select class="usa-select" name="options" id="options">
                                <option value>All Departments</option>
                                <option value="public_works">Public Works</option>
                                <option value="parks_recreation">Parks & Recreation</option>
                                <option value="public_safety">Public Safety</option>
                                <option value="finance">Finance</option>
                                <option value="information_technology">Information Technology</option>
                            </select>
                        </div>
                        <button class="usa-button tablet:grid-col-2 height-5 margin-right-0 tablet:margin-right-2" type="submit">
                            <svg class="usa-icon usa-icon--size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M96 128C78.3 128 64 142.3 64 160C64 177.7 78.3 192 96 192L182.7 192C195 220.3 223.2 240 256 240C288.8 240 317 220.3 329.3 192L544 192C561.7 192 576 177.7 576 160C576 142.3 561.7 128 544 128L329.3 128C317 99.7 288.8 80 256 80C223.2 80 195 99.7 182.7 128L96 128zM96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L342.7 352C355 380.3 383.2 400 416 400C448.8 400 477 380.3 489.3 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L489.3 288C477 259.7 448.8 240 416 240C383.2 240 355 259.7 342.7 288L96 288zM96 448C78.3 448 64 462.3 64 480C64 497.7 78.3 512 96 512L150.7 512C163 540.3 191.2 560 224 560C256.8 560 285 540.3 297.3 512L544 512C561.7 512 576 497.7 576 480C576 462.3 561.7 448 544 448L297.3 448C285 419.7 256.8 400 224 400C191.2 400 163 419.7 150.7 448L96 448z" />
                            </svg>
                            Apply
                        </button>
                        <button class="usa-button tablet:grid-col-2 height-5 margin-right-0" type="reset">
                            <svg class="usa-icon usa-icon--size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M129.9 292.5C143.2 199.5 223.3 128 320 128C373 128 421 149.5 455.8 184.2C456 184.4 456.2 184.6 456.4 184.8L464 192L416.1 192C398.4 192 384.1 206.3 384.1 224C384.1 241.7 398.4 256 416.1 256L544.1 256C561.8 256 576.1 241.7 576.1 224L576.1 96C576.1 78.3 561.8 64 544.1 64C526.4 64 512.1 78.3 512.1 96L512.1 149.4L500.8 138.7C454.5 92.6 390.5 64 320 64C191 64 84.3 159.4 66.6 283.5C64.1 301 76.2 317.2 93.7 319.7C111.2 322.2 127.4 310 129.9 292.6zM573.4 356.5C575.9 339 563.7 322.8 546.3 320.3C528.9 317.8 512.6 330 510.1 347.4C496.8 440.4 416.7 511.9 320 511.9C267 511.9 219 490.4 184.2 455.7C184 455.5 183.8 455.3 183.6 455.1L176 447.9L223.9 447.9C241.6 447.9 255.9 433.6 255.9 415.9C255.9 398.2 241.6 383.9 223.9 383.9L96 384C87.5 384 79.3 387.4 73.3 393.5C67.3 399.6 63.9 407.7 64 416.3L65 543.3C65.1 561 79.6 575.2 97.3 575C115 574.8 129.2 560.4 129 542.7L128.6 491.2L139.3 501.3C185.6 547.4 249.5 576 320 576C449 576 555.7 480.6 573.4 356.5z" />
                            </svg>
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row flex-justify-end">
                <a href="#" class="usa-button padding-y-05 margin-bottom-2">
                    <svg class="usa-icon usa-icon--size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M320 64C306.7 64 296 74.7 296 88L296 97.7C214.6 109.3 152 179.4 152 264L152 278.5C152 316.2 142 353.2 123 385.8L101.1 423.2C97.8 429 96 435.5 96 442.2C96 463.1 112.9 480 133.8 480L506.2 480C527.1 480 544 463.1 544 442.2C544 435.5 542.2 428.9 538.9 423.2L517 385.7C498 353.1 488 316.1 488 278.4L488 263.9C488 179.3 425.4 109.2 344 97.6L344 87.9C344 74.6 333.3 63.9 320 63.9zM488.4 432L151.5 432L164.4 409.9C187.7 370 200 324.6 200 278.5L200 264C200 197.7 253.7 144 320 144C386.3 144 440 197.7 440 264L440 278.5C440 324.7 452.3 370 475.5 409.9L488.4 432zM252.1 528C262 556 288.7 576 320 576C351.3 576 378 556 387.9 528L252.1 528z" />
                    </svg>
                    Subscribe
                </a>
                <a href="#" class="usa-button padding-y-05 margin-bottom-2">
                    <svg class="usa-icon usa-icon--size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z" />
                    </svg>
                    Export to CSV
                </a>
            </div>

            <div class="padding-y-1 padding-x-2 font-body-md text-bold text-white bg-primary-darker">
                <span>Featured Contracts</span>
            </div>

            <div class="grid-row">
                <div class="usa-table-container--scrollable width-full" tabindex="0">
                    <table class="usa-table usa-table--borderless usa-table--stacked-header width-full">
                        <thead>
                            <tr>
                                <th scope="col" role="columnheader">ID</th>
                                <th data-sortable scope="col" role="columnheader">Title</th>
                                <th data-sortable scope="col" role="columnheader">Vendor</th>
                                <th data-sortable scope="col" role="columnheader">Status</th>
                                <th data-sortable scope="col" role="columnheader">Utilization</th>
                                <th data-sortable scope="col" role="columnheader">Department</th>
                                <th data-sortable scope="col" role="columnheader">Renewable</th>
                                <th data-sortable scope="col" role="columnheader">End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-24-110
                                </th>
                                <td data-label="Title" data-sort-value="Microsoft 365 Enterprise Licensing">
                                    <a href="#" class="usa-link text-no-underline text-bold">Microsoft 365 Enterprise Licensing</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="SoftChoice Corp.">
                                    <a href="#" class="usa-link text-no-underline text-bold">SoftChoice Corp.</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="45">
                                    $405k / $900k (45%) <br>
                                    <progress max="100" value="45">45%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="IT" class="text-wrap">
                                    IT Department
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2027-06-01">
                                    06/01/2027
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-21-002
                                </th>
                                <td data-label="Title" data-sort-value="Main St. Bridge Structural Repair">
                                    <a href="#" class="usa-link text-no-underline text-bold">Main St. Bridge Structural Repair</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Acme Construction Inc.">
                                    <a href="#" class="usa-link text-no-underline text-bold">Acme Construction Inc.</a>
                                </td>
                                <td data-label="Status" data-sort-value="Ending Soon" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#ffbe2e" d="M160 64C142.3 64 128 78.3 128 96C128 113.7 142.3 128 160 128L160 139C160 181.4 176.9 222.1 206.9 252.1L274.8 320L206.9 387.9C176.9 417.9 160 458.6 160 501L160 512C142.3 512 128 526.3 128 544C128 561.7 142.3 576 160 576L480 576C497.7 576 512 561.7 512 544C512 526.3 497.7 512 480 512L480 501C480 458.6 463.1 417.9 433.1 387.9L365.2 320L433.1 252.1C463.1 222.1 480 181.4 480 139L480 128C497.7 128 512 113.7 512 96C512 78.3 497.7 64 480 64L160 64zM224 139L224 128L416 128L416 139C416 158 410.4 176.4 400 192L240 192C229.7 176.4 224 158 224 139zM240 448C243.5 442.7 247.6 437.7 252.1 433.1L320 365.2L387.9 433.1C392.5 437.7 396.5 442.7 400.1 448L240 448z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="96">
                                    $4.8M / $5.0M (96%) <br>
                                    <progress max="100" value="96">96%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Public Works" class="text-wrap">
                                    Public Works
                                </td>
                                <td data-label="Renewable" data-sort-value="No" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#d83933" d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-02-28">
                                    02/28/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-23-405
                                </th>
                                <td data-label="Title" data-sort-value="City Hall Security & Guard Services">
                                    <a href="#" class="usa-link text-no-underline text-bold">City Hall Security & Guard Services</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="SecureGuard Inc.">
                                    <a href="#" class="usa-link text-no-underline text-bold">SecureGuard Inc.</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="75">
                                    $1.1M / $1.5M (75%) <br>
                                    <progress max="100" value="75">75%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Facilities" class="text-wrap">
                                    Facilities
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-12-31">
                                    12/31/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-20-999
                                </th>
                                <td data-label="Title" data-sort-value="Downtown Master Plan Consulting">
                                    <a href="#" class="usa-link text-no-underline text-bold">Downtown Master Plan Consulting</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Urban Design Group">
                                    <a href="#" class="usa-link text-no-underline text-bold">Urban Design Group</a>
                                </td>
                                <td data-label="Status" data-sort-value="Ended" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#d83933" d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM231 231C240.4 221.6 255.6 221.6 264.9 231L319.9 286L374.9 231C384.3 221.6 399.5 221.6 408.8 231C418.1 240.4 418.2 255.6 408.8 264.9L353.8 319.9L408.8 374.9C418.2 384.3 418.2 399.5 408.8 408.8C399.4 418.1 384.2 418.2 374.9 408.8L319.9 353.8L264.9 408.8C255.5 418.2 240.3 418.2 231 408.8C221.7 399.4 221.6 384.2 231 374.9L286 319.9L231 264.9C221.6 255.5 221.6 240.3 231 231z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="100">
                                    $150k / $150k (100%) <br>
                                    <progress max="100" value="100">100%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Planning" class="text-wrap">
                                    Planning
                                </td>
                                <td data-label="Renewable" data-sort-value="No" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#d83933" d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2025-11-30">
                                    11/30/2025
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-25-001
                                </th>
                                <td data-label="Title" data-sort-value="Annual Fleet Fuel Supply">
                                    <a href="#" class="usa-link text-no-underline text-bold">Annual Fleet Fuel Supply (Diesel/Unleaded)</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Petrol Traders LLC">
                                    <a href="#" class="usa-link text-no-underline text-bold">Petrol Traders LLC</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="15">
                                    $37k / $250k (15%) <br>
                                    <progress max="100" value="15">15%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Fleet Management" class="text-wrap">
                                    Fleet Management
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-12-31">
                                    12/31/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-22-150
                                </th>
                                <td data-label="Title" data-sort-value="ERP System Maintenance & Support">
                                    <a href="#" class="usa-link text-no-underline text-bold">ERP System Maintenance & Support</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Oraclie America">
                                    <a href="#" class="usa-link text-no-underline text-bold">Oraclie America</a>
                                </td>
                                <td data-label="Status" data-sort-value="Ending Soon" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#ffbe2e" d="M160 64C142.3 64 128 78.3 128 96C128 113.7 142.3 128 160 128L160 139C160 181.4 176.9 222.1 206.9 252.1L274.8 320L206.9 387.9C176.9 417.9 160 458.6 160 501L160 512C142.3 512 128 526.3 128 544C128 561.7 142.3 576 160 576L480 576C497.7 576 512 561.7 512 544C512 526.3 497.7 512 480 512L480 501C480 458.6 463.1 417.9 433.1 387.9L365.2 320L433.1 252.1C463.1 222.1 480 181.4 480 139L480 128C497.7 128 512 113.7 512 96C512 78.3 497.7 64 480 64L160 64zM224 139L224 128L416 128L416 139C416 158 410.4 176.4 400 192L240 192C229.7 176.4 224 158 224 139zM240 448C243.5 442.7 247.6 437.7 252.1 433.1L320 365.2L387.9 433.1C392.5 437.7 396.5 442.7 400.1 448L240 448z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="92">
                                    $276k / $300k (92%) <br>
                                    <progress max="100" value="92">92%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Finance" class="text-wrap">
                                    Finance
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-01-30">
                                    01/30/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-23-088
                                </th>
                                <td data-label="Title" data-sort-value="Police Uniforms & Duty Gear">
                                    <a href="#" class="usa-link text-no-underline text-bold">Police Uniforms & Duty Gear</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Galls Inc.">
                                    <a href="#" class="usa-link text-no-underline text-bold">Galls Inc.</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="60">
                                    $120k / $200k (60%) <br>
                                    <progress max="100" value="60">60%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Police Department" class="text-wrap">
                                    Police Department
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-06-30">
                                    06/30/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-24-005
                                </th>
                                <td data-label="Title" data-sort-value="Water Treatment Chemicals">
                                    <a href="#" class="usa-link text-no-underline text-bold">Water Treatment Chemicals</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="ChemTrade Logistics">
                                    <a href="#" class="usa-link text-no-underline text-bold">ChemTrade Logistics</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="35">
                                    $175k / $500k (35%) <br>
                                    <progress max="100" value="35">35%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Water Utilities" class="text-wrap">
                                    Water Utilities
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2027-01-15">
                                    01/15/2027
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-25-010
                                </th>
                                <td data-label="Title" data-sort-value="Legal Services: Union Negotiation">
                                    <a href="#" class="usa-link text-no-underline text-bold">Legal Services: Union Negotiation</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="Smith & Associates LLP">
                                    <a href="#" class="usa-link text-no-underline text-bold">Smith & Associates LLP</a>
                                </td>
                                <td data-label="Status" data-sort-value="Ending Soon" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#ffbe2e" d="M160 64C142.3 64 128 78.3 128 96C128 113.7 142.3 128 160 128L160 139C160 181.4 176.9 222.1 206.9 252.1L274.8 320L206.9 387.9C176.9 417.9 160 458.6 160 501L160 512C142.3 512 128 526.3 128 544C128 561.7 142.3 576 160 576L480 576C497.7 576 512 561.7 512 544C512 526.3 497.7 512 480 512L480 501C480 458.6 463.1 417.9 433.1 387.9L365.2 320L433.1 252.1C463.1 222.1 480 181.4 480 139L480 128C497.7 128 512 113.7 512 96C512 78.3 497.7 64 480 64L160 64zM224 139L224 128L416 128L416 139C416 158 410.4 176.4 400 192L240 192C229.7 176.4 224 158 224 139zM240 448C243.5 442.7 247.6 437.7 252.1 433.1L320 365.2L387.9 433.1C392.5 437.7 396.5 442.7 400.1 448L240 448z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="85">
                                    $85k / $100k (85%) <br>
                                    <progress max="100" value="85">85%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="HR / Legal" class="text-wrap">
                                    HR / Legal
                                </td>
                                <td data-label="Renewable" data-sort-value="No" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#d83933" d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-03-15">
                                    03/15/2026
                                </td>
                            </tr>

                            <tr>
                                <th data-label="ID" scope="row">
                                    CON-23-112
                                </th>
                                <td data-label="Title" data-sort-value="Citywide Landscape Maintenance">
                                    <a href="#" class="usa-link text-no-underline text-bold">Citywide Landscape Maintenance</a>
                                </td>
                                <td data-label="Vendor" data-sort-value="GreenThumb Landscaping">
                                    <a href="#" class="usa-link text-no-underline text-bold">GreenThumb Landscaping</a>
                                </td>
                                <td data-label="Status" data-sort-value="Active" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                </td>
                                <td data-label="Utilization" data-sort-value="50">
                                    $300k / $600k (50%) <br>
                                    <progress max="100" value="50">50%</progress>
                                </td>
                                <td data-label="Department" data-sort-value="Parks & Rec" class="text-wrap">
                                    Parks & Rec
                                </td>
                                <td data-label="Renewable" data-sort-value="Yes" class="text-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                                    </svg>
                                </td>
                                <td data-label="End Date" data-sort-value="2026-10-01">
                                    10/01/2026
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="grid-row flex-row flex-justify-center bg-base-lightest">
                <div class="display-flex flex-row flex-align-center margin-right-2 padding-1">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#04c585" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                    </svg>
                    <span>Active</span>
                </div>
                <div class="display-flex flex-row flex-align-center margin-right-2 padding-1">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffbe2e" d="M160 64C142.3 64 128 78.3 128 96C128 113.7 142.3 128 160 128L160 139C160 181.4 176.9 222.1 206.9 252.1L274.8 320L206.9 387.9C176.9 417.9 160 458.6 160 501L160 512C142.3 512 128 526.3 128 544C128 561.7 142.3 576 160 576L480 576C497.7 576 512 561.7 512 544C512 526.3 497.7 512 480 512L480 501C480 458.6 463.1 417.9 433.1 387.9L365.2 320L433.1 252.1C463.1 222.1 480 181.4 480 139L480 128C497.7 128 512 113.7 512 96C512 78.3 497.7 64 480 64L160 64zM224 139L224 128L416 128L416 139C416 158 410.4 176.4 400 192L240 192C229.7 176.4 224 158 224 139zM240 448C243.5 442.7 247.6 437.7 252.1 433.1L320 365.2L387.9 433.1C392.5 437.7 396.5 442.7 400.1 448L240 448z" />
                    </svg>
                    <span>Ending Soon</span>
                </div>
                <div class="display-flex flex-row flex-align-center margin-right-2 padding-1">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#d83933" d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM231 231C240.4 221.6 255.6 221.6 264.9 231L319.9 286L374.9 231C384.3 221.6 399.5 221.6 408.8 231C418.1 240.4 418.2 255.6 408.8 264.9L353.8 319.9L408.8 374.9C418.2 384.3 418.2 399.5 408.8 408.8C399.4 418.1 384.2 418.2 374.9 408.8L319.9 353.8L264.9 408.8C255.5 418.2 240.3 418.2 231 408.8C221.7 399.4 221.6 384.2 231 374.9L286 319.9L231 264.9C221.6 255.5 221.6 240.3 231 231z" />
                    </svg>
                    <span>Ended</span>
                </div>

                <div class="display-flex flex-row flex-align-center margin-right-2 padding-1">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#04c585" d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z" />
                    </svg>
                    <span>Yes</span>
                </div>
                <div class="display-flex flex-row flex-align-center margin-right-2 padding-1">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#d83933" d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                    </svg>
                    <span>No</span>
                </div>
            </div>
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