<?php

//DB FETCHING FOR GUESTBOOK DISPLAY
include('/home/rsmithsg/db/db_connect_rob.php');
$sql = "SELECT * FROM `guests`;";
$result = @mysqli_query($conn, $sql);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $request=$_POST['actionTrigger'];

    //GUESTBOOK PAGE
    $guestbookentries="";
    while ($row = mysqli_fetch_assoc($result)) {
        if($row['visFlag']==1){
            $guestbookentries.='
            <p><strong>From:</strong></p><p>'.$row['email'].'</p>
            <p><strong>Message:</strong></p><p>'.$row['message'].'</p>
            <hr>'
            ;
        }

    }

    $guestbook = '<div class="container col-12 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class=""><h1 class="text-center fw-semibold">Guest Book</h1></div>
        </div>
        <div class="row justify-content-center justify-content-md-around" style="overflow: hidden;">
            <article class="col-12 m-2 col-md-10 col-lg-8 card textCard">
                <div class="card-title text-center"><h3>Guest Messages</h3></div>
                <div class="card-body text-left d-inline-block">
                <hr>
                '.$guestbookentries.'
                </div>
            </article>
        </div>
        <div class="p-5 d-none d-md-block col-12"></div>
        <div class="p-3 d-block d-md-none col-12"></div>
    </div>';

    //RESUMEPAGE
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
                                    <li>Languages: Java, PHP, SQL, JavaScript, C++, C#</li>
                                    <li>Web: HTML/CSS, Bootstrap, jQuery, htmx, JSON, REST</li>
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
                                <ul><strong>Nurses Nucleus</strong>
                                    <li>Member of a team who build a portal for the Green River College nursing program to centralize and aggregate data about
                                    clinicals required by students for certification.
                                    </li>
                                        <ul>
                                            <li>Fullstack project that uses SQL, PHP, HTML/CSS, HTMX, Bootstrap, and Javascript to provide a custom, tailored experience
                                            for the nursing department.
                                            </li>
                                            <li>Provides a graphical means to adjust and modify the site for the end user without needing to adjust code.
                                            </li>
                                            <li>Implements data aggregation services to provide metrics about clinical sites, and the associated attributes so school administrators
                                            can rapidly gauge the quality of training students are receiving on a per-site basis.
                                            </li>
                                        </ul>
                                        <strong>Librarian Dashboard</strong>
                                    <li>Implemented statistical analysis dashboard for Green River College librarians to improve
                                        the efficacy of training management and scheduling 
                                    </li>
                                        <ul>
                                            <li>Combined multiple legacy datastores into a singular repository and normalized for future additions of data
                                            </li>
                                            <li>Continuously adjusted project trajectory based on client feedback and evolving requirements
                                            </li>
                                            <li>One of five SDEs operating using Agile methodology with rotational roles; everyone filled each role in  differing sprints</li>
                                        </ul>
                                        <strong>Java Experience</strong>
                                    <li>Numerous JAVA applications covering a wide range of data-structures, algorithms, and small programs.</li>
                                        <ul>
                                            <li>Includes implementing trees, graphs, OOP, recursion, and other programing concepts.                                                
                                            </li>
                                            <li>Projects that include swing (Body fat calculator), javafx (Warhammer Army Builder), and AWT (pong clone with random pin-ball style bumpers on the court)                                    
                                            </li>
                                            <li>Currently working in Springboot paired with htmx to create dynamic SPAs that are light, fast, responsive, exclusively track state on the server.
                                            </li>
                                        </ul>
                                        <strong>World Ranked Overclocking</strong>
                                    <li>Hold multiple world records in PC overclocking</li>
                                        <ul>
                                            <li>
                                            Fastest 5800X3D in all 3dmark tests, all productivity tests, and all RAM tests
                                            </li>
                                            <li>
                                            Fastest 7800X3D in nearly 3dmark tests, all productivity tests, and all RAM tests
                                            </li>
                                            <li>
                                            Fastest ranks with a long list of hardware including 6950XT, 3080ti, 2080ti, 1080ti, 980, 5950x, 3900x, Xeon 2650v2
                                            </li>
                                        </ul>
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
                                            <p class="col-12 col-md-8 col-xl-9">Bachelor of Applied Science, Software
                                                Development<br>Green
                                                River College, Auburn
                                                WA</p>
                                            <p class="text-md-end col-12 col-md-4 col-xl-3">September 2023-Current</p>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row">
                                            <p class="col-12 col-md-8 col-xl-9">Associates of Applied Science, Software
                                                Development, and Data
                                                Analysis<br>Green River College, Auburn WA <em>Magna Cum Laude</em></p>
                                            <p class="text-md-end col-12 col-md-4 col-xl-3">September 2021- June 2023</p>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row"><p class="col-12 col-md-8 col-xl-9">Senior Leaders Course<br>US Army
                                            NCO Academy Ft
                                            Huachuca</p>
                                            <p class="text-md-end col-12 col-md-4 col-xl-3">March 2017</p></div>
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
                                <p class="col-12 col-md-8 col-xl-9">Senior All-Source Intelligence Analyst(Strategic Level)</p>
                                <p class="col-12 col-xl-3 text-md-end">March 2008 - January 2022</p>
                            </div>
                            <ul>
                                <li>Performed daily analysis of geopolitics in direct support of General Officers and
                                    USGOV elected officials
                                </li>
                                <li>Scope included 57 countries, 5 nuclear-armed nations, 4.4 billion people, and more
                                    than 50% of the planet
                                </li>
                                <li>Prioritized and coordinated national-level collections, compiled daily situation
                                    reports and special response reports as required using advanced analytic software
                                    across all classified enclaves
                                </li>
                            </ul>
                            <hr>
                            <div class="row">
                                <p class="col-12 col-md-8 col-xl-9">General Manager of Automotive Division/Quality Assurance
                                    Manager for Aerospace
                                    Division</p>
                                <p class="col-12 col-xl-3 text-md-end">March 2007 - March 2008</p>
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
                                <p class="col-12 col-md-8 col-xl-9">Nuclear, Biological, and Chemical Defense Specialist
                                    (Tactical Level)</p>
                                <p class="col-12 col-xl-3 text-md-end">March 2000 - March 2007</p>
                            </div>
                            <ul>
                                <li>Counter Terrorism specialist with emphasis on supporting theatre-wide radar defense
                                    operations
                                </li>
                                <li>Enabled Iraq and Afghan national elections by providing predictive analysis and
                                    precise
                                    targeting
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>';

    //WEBPROJECTS PAGE
    $webProjects = '<div class="container col-12 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class=""><h1 class="text-center fw-semibold">Web Projects</h1></div>
        </div>
        <div class="row justify-content-center justify-content-md-around" style="overflow: hidden;">
            <article class="col-12 m-2 col-md-10 col-lg-8 card textCard">
                <div class="card-title text-center"><h3>Nursing Nucleus Portal</h3></div>
                <div class="card-body text-left d-inline-block">
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
                        Tools usd include: Bootstrap, MySQL, PHPStorm, HTMX, Javascript, HTML, and CSS
                        <hr>
                        <img class="col-12" src="../images/Nursing_Portal.gif" alt="Alternating Screen Captures of the Nursing Portal">
                        <hr>
                </div>
            </article>
        </div>
        <div class="p-5 d-none d-md-block col-12"></div>
        <div class="p-3 d-block d-md-none col-12"></div>
    </div>';
    $librarianProj ='<div class="container col-12 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class=""><h1 class="text-center fw-semibold">Dashboard Projects</h1></div>
            </div>
                  <div class="row justify-content-center justify-content-md-around" style="overflow: hidden;">
            <article class="col-12 m-2 col-md-11 col-lg-11 card textCard">
                <div class="card-title text-center"><h3>Librarian PowerBI Portal</h3></div>
                <div class="card-body text-left d-inline-block">
                        <hr>
                        This project brought rapid information visualization to the Green River College librarians to 
                        help focus training efforts where they\'re most needed to have the greatest efficacy.
                        <hr>
                        Following a training event the survey data is entered into a web form, parsed into a database,
                        and integrated once per minute into the PowerBI dashboard for near real time availability.
                        <hr>
                        Full documentation was provided for both database rebuilding, modification, and PowerBI use and
                        maintenance as part of the project.
                        <hr>
                        Tools usd include: Excel, Power BI, MySQL, and Python
                        <hr>
                        <img class="col-12" src="../images/Librarian_Dashboard.gif" alt="Alternating Screen Captures of the Librarian Portal">
                        <hr>
                </div>
            </article>
        </div>
        </div>
        <div class="p-5 d-none d-md-block col-12"></div>
        <div class="p-3 d-block d-md-none col-12"></div>
    </div>';

    //GIT PROJECTS PAGE
    $gitProjects ='<div class="container col-12 pb-1 mt-4" id="page_contents" hx-boost="true">
        <div class="d-flex row">
            <div class=""><h1 class="text-center fw-semibold">Java and C Projects</h1></div>
            <hr>
            <div class="card textCard">
            <div class="card-title"><a href="https://github.com/tcclaviger/javatoyapps" target="_blank">Java Projects (GitHub)</a></div>
            <ul>
                <li>
                These are samples of the data structures, algorithms, and other small projects implemented using Java during my associates and bachelors courses.
                </li>
                <li>
                Most of these projects assume perfect path and are meant only to practice specific concepts and ideas. 
                </li>
                <li>
                <p>Code sample from html validation checker</p>
                   <em> public boolean isValid() {<br>
                    ArrayList<\String> singleTags = new ArrayList<>(List.of(<br>
                            "area", "base", "br", "col", "!doctype", "embed", "hr",<br>
                            "img", "input", "link", "meta", "param", "source", "track", "wbr"<br>
                    ));<br>
                    Queue<\String> foundTags = new LinkedList<>();       //tag queue for regex use<br>
                    Stack<\String> tagValidation = new Stack<>();        //stack for the tag matching use<br>
                    buildTagQueue(foundTags);                           //build the tag queue<br>
                    System.out.println("All Tags : " + foundTags);      //print out all identified tags<br>
            <br>
                    Queue<\String> filteredTags = new LinkedList<>();    //filter tags found by exclusion list<br>
                    for (String tag : foundTags) {<br>
                        if (!singleTags.contains(tag)) filteredTags.add(tag);<br>
                    }<br>
            <br>
                    for (String tag : filteredTags) {<br>
                        String leadChar = String.valueOf(tag.charAt(0));//identify if the tag is a closing tag<br>
            <br>
                        if (leadChar.equals("/") && tagValidation.size() == 0) {<br>
                            return false;<br>
                        } else if (leadChar.equals("/") && (!tagValidation.peek().equals(tag.substring(1)))) {<br>
                            return false;<br>
                        } else if (leadChar.equals("/")) {<br>
                            tagValidation.pop();<br>
                            System.out.println("Tag Stack:" + tagValidation);<br>
                        } else {<br>
                            tagValidation.push(tag);<br>
                            System.out.println("Tag Stack: " + tagValidation);<br>
                        }<br>
                    }<br>
                    return tagValidation.size() == 0;                   //return if the stack is empty or not as boolean<br>
                }</em><br>
                </li>
            </ul>
            </div>
            <div class="p-3 d-md-block col-12"></div>
            <div class="card textCard">
            <div class="card-title"><a href="https://github.com/tcclaviger/ChillerControl/blob/main/ChillerControl%20v1" target="_blank">Chiller Control Project (GitHub)</a></div>
            <ul>
                <li>
                A Microcontroller project that uses a hygrometer,a thermistor measuring air-temperature,and thermistor
                measuring water-temperature,to calculate the dew point in real time. It then compares the 
                calculated dew-point to the coolant temperature of a cooling loop. It has a user-definable offset to
                provide an offset above or below dew point, and a hysteresis range that allows for reduced cycling of
                the chiller.
                </li>
                <li>
                Used for controlling a remote switchable power strip to cycle a water-chiller on and off. I use this to
                cool my desktop PC and keep the coolant at 2�� Fahrenheit above the current dew point in my office.
                </li>
                <li>
                <p>Code Sample:</p>
                </li>
                
                  <em><p>"// DHT22 data error check section<br>
                    if (isnan(H) || isnan(C) || isnan(F))<br>
                      {<br>
                      Serial.println("Failed to read from DHT sensor!");<br>
                      lcd.setCursor(0, 0); lcd.print("                ");<br>
                      lcd.setCursor(0, 0); lcd.print(" Failed to read ");<br>
                      lcd.setCursor(0, 1); lcd.print("                ");<br>
                      lcd.setCursor(0, 1); lcd.print("DHT sensor Fail!");<br>
                      return;   //  returns to start of loop<br>
                      }<br>
                <br>
                  //  calculations and conversions section<br>
                    DewPoint = (C - (14.55 + 0.114 * C) * (1 - (0.01 * H)) - pow(((2.5 + 0.007 * C) * (1 - (0.01 * H))),3) - (15.9 + 0.117 * C) * pow((1 - (0.01 * H)), 14)); // more advanced humidity calcuation, dead right<br>
                    //DewPoint = (C - ((100 - H) / 5));   //  dew-point calculation using Celsius value basic rough calculation ---OBSOLETE---<br>
                    DP = (DewPoint * 1.8) + 32;         //  converts dewPoint calculation to Fahrenheit<br>
                    W = (waterTemperature * 1.8) + 32;  //converts water temp to Fahrenheit<br>
                    minW = DP+1;                        //sets low water target minimum value<br>
                    maxW = DP+5;                        //sets high water target max value<br>
                <br>
                    //rotary encoder control of the chiller relay alarmLed trigger output<br>
                    if (counter == -1)<br>
                    {<br>
                      digitalWrite(alarmLed, HIGH);<br>
                    }<br>
                    else if (counter == 1)<br>
                    {<br>
                      digitalWrite(alarmLed, LOW);<br>
                    }<br>
                    else if (counter == 0)<br>
                    {<br>
                        //  alarm output section can be used to trigger relay for power to device instead of led output. Creates a 5 degree hysteresis<br>
                    if(W < minW)<br>
                      {digitalWrite(alarmLed, LOW);}<br>
                    else if (W > maxW)<br>
                        {digitalWrite(alarmLed, HIGH);}<br>
                    }"</em><br>
                    </p>
            </ul></div>
            </div>
        <div class="p-5 d-none d-md-block col-12"></div>
        <div class="p-3 d-block d-md-none col-12"></div>
        </div>';

    switch ($request) {
        case 'Resume': echo $resume;break;
        case 'WebProjects': echo $webProjects;break;
        case 'librarianProj': echo $librarianProj;break;
        case 'GitProjects': echo $gitProjects;break;
        case 'guestBook' : echo $guestbook;break;
        case 'approve' :
            $sql1 = "SELECT * FROM `guests`;";
            $result2 = @mysqli_query($conn, $sql1);
            $code = $_POST['code-input'];

            $sql2="UPDATE `guests` SET `visFlag` = 1 WHERE `extra` = '$code';";
            $found = mysqli_query($conn, $sql2);
            header("Location: https://rsmiths.greenriverdev.com/index.html"); ;
            break;
    }
}