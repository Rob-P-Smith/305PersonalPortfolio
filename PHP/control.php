<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $request=$_POST['actionTrigger'];
    $resume = '<div class="container col-11 pb-1 mt-4" id="page_contents" hx-boost="true">
            <div class="d-flex row">
            <div class="col-11 col-lg-9"><h1 class="text-left '.'fw-semibold">Robert Smith</h1></div>
                <hr>
            </div>
            <div class="accordion mb-4" id="resumeAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Summary
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div class="pt-2">
                                <p>Enthusiastic Developer located in Olympia, looking for a full-time position creating complex
                                    applications in a dynamic and challenging environment. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            SKills and Certifications
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                         data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div>
                                <ul>
                                    <li>Languages: Java, PHP, SQL, JavaScript, C++, Rust, C#</li>
                                    <li>Web: HTML/CSS, Bootstrap, jQuery, React, htmx, JSON, REST</li>
                                    <li>Agile: scrum master, pair programming, working in sprints</li>
                                    <li>Tools: Git, JetBrains IDEs, Visual Studio Code, DCGS, Palantir, SIPR, JWICS</li>
                                    <li>Army certifications in small group leadership, instructor/trainer positions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Projects and Achievements
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                         data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div>
                                <ul>
                                    <li>Implemented statistical analysis dashboard for Green River College librarians to improve
                                        the efficacy of
                                        training management and scheduling 
                                    </li>
                                    <ul>
                                    <li>Combined multiple legacy datastores into a singular repository and normalized for future additions of data
                                    </li>
                                    <li>Continuously adjusted project trajectory based on client feedback and evolving requirements
                                    </li>
                                    <li>One of five SDEs operating using Agile methodology with rotational roles; everyone filled each role in  differing sprints</li>
                                    </ul>
                                    <li>Numerous complex JAVA applications</li>
                                    <li>Hold multiple world records in PC overclocking</li>
                                    <li>Highly decorated veteran recognized for leadership ability under pressure in extreme
                                        circumstances
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Education
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                         data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div>
                                <ul>
                                    <li>
                                        <div class="row">
                                            <p class="col-12 col-md-8 col-xl-10">Bachelor of Applied Science, Software
                                                Development<br>Green
                                                River College, Auburn
                                                WA</p>
                                            <p class="text-md-end col-4 col-md-4 col-xl-2">2023-Current</p>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row">
                                            <p class="col-12 col-md-8 col-xl-10">Associates of Applied Science, Software
                                                Development, and Data
                                                Analysis<br>Green River College, Auburn WA <em>Magna Cum Laude</em></p>
                                            <p class="text-md-end col-4 col-md-4 col-xl-2">2021-2023</p>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row"><p class="col-12 col-md-8 col-xl-10">Senior Leaders Course<br>US Army
                                            NCO Academy Ft
                                            Huachuca</p>
                                            <p class="text-md-end col-4 col-md-4 col-xl-2">2017</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Experience
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive"
                         data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <p class="col-12 col-md-8 col-xl-10">Senior All-Source Intelligence Analyst(Strategic Level)</p>
                                <p class="col-4 col-xl-2 text-md-end">2016-2022</p>
                            </div>
                            <ul>
                                <li>Performed daily analysis of geopolitics in direct support of General Officers and
                                    USGOV
                                    elected
                                    officials
                                </li>
                                <li>Scope included 57 countries, 5 nuclear-armed nations, 4.4 billion people, and more
                                    than
                                    50% of the
                                    planet
                                </li>
                                <li>Prioritized and coordinated national-level collections, compiled daily situation
                                    reports
                                    and special
                                    response reports as required using advanced analytic software across all classified
                                    enclaves
                                </li>
                            </ul>
                            <hr>
                            <div class="row">
                                <p class="col-12 col-md-8 col-xl-10">General Manager of Automotive Division/Quality Assurance
                                    Manager for Aerospace
                                    Division</p>
                                <p class="col-4 col-xl-2 text-md-end">2007-2008</p>
                            </div>
                            <ul>
                                <li>PDeveloped products, scheduled production, and ensured quality assurance for a large
                                    portfolio of
                                    items
                                </li>
                                <li>Coordinated all aspects of daily operations for 20 employees in a
                                    multimillion-dollar
                                    business
                                </li>
                                <li>Earned ISO 9001/9100 preferential vendor status for Carbon by Design with multiple
                                    government agencies
                                    by implementing JIT logistics practices and Six Sigma processes
                                </li>
                            </ul>
                            <hr>
                            <div class="row">
                                <p class="col-12 col-md-8 col-xl-10">Nuclear, Biological, and Chemical Defense Specialist
                                    (Tactical Level)</p>
                                <p class="col-4 col-xl-2 text-md-end">2000-2007</p>
                            </div>
                            <ul>
                                <li>Counter Terrorism specialist with emphasis on supporting theatre-wide radar defense
                                    operations
                                </li>
                                <li>Enabled Iraq and Afghan national elections by providing predictive analysis and
                                    precise
                                    targeting
                                </li>
                                <li>Led more than 450 missions, and participated in over 800 with zero casualties</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>';;
    $webProjects = '<div class="container col-11 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class="col-11 col-lg-9"><h1 class="text-left '. 'fw-semibold">Web Projects</h1></div>
        </div>
        <div class="row justify-content-center justify-content-md-around" style="overflow: hidden;">
            <article class="col-11 m-2 col-md-11 col-lg-11 card textCard">
                <div class="card-title text-center"><h3>Nursing Nucleus Portal</h3></div>
                <div class="card-body text-left d-inline-block">
                        <img class="col-12" src="../images/Nursing_Portal.gif" alt="Alternating Screen Captures of the Nursing Portal">
                        <hr>
                        This project is ongoing. It is a portal for GRC Nursing students to have an easy reference tool
                        to view the requirements for participating in a clinical program.
                        <hr>
                        They can then submit their experience at the site through an anonymous survey. The survey
                        information is submitted to a database for GRC Staff use in identifying trends across
                        various clinical sites.
                        <hr>
                        The site is responsive and when complete, will have authentication for users and authorization
                        to differentiate students and staff. One of the other major goals is to have an easy-to-use
                        administrator control panel for updating the site use a GUI instead of markup/code.
                        <hr>
                </div>
            </article>
        </div>
        <div class="p-5 d-none d-md-block col-12"></div>
        <div class="p-3 d-block d-md-none col-12"></div>
    </div>';
    $librarianProj ='<div class="container col-11 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class="col-11 col-lg-9"><h1 class="text-left '.'fw-semibold">Librarian Dashboard</h1></div>
            <hr>
        </div>
    </div>';

    switch ($request) {
        case 'Resume': echo $resume;break;
        case 'WebProjects': echo $webProjects;break;
        case 'librarianProj': echo $librarianProj;break;
    }
}

