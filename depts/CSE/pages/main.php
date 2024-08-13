<section id="main">
    <div id="row1">
        <div class="section1" id="updatesContainer">
            <div id="updates">
                <h3>Latest @ CSE</h3>
                <hr/>
            </div>
        </div>
        <div class="section1" id="carouselContainer">
            <div class="carousel">
                <button class="carousel__button carousel__button--left is-hidden">◀</button>
                <div class="carousel__track-container">
                    <ul class="carousel__track">
                        <li class="carousel__slide current-slide"><span class="imgDesc">Jaya Krishna Sir</span><img class="carousel__images" src="assets/img/Gallery/g(1).jpg" alt="background-image" /></li>
                        <li class="carousel__slide"><span class="imgDesc">Chiranjeevi Sir</span><img class="carousel__images" src="assets/img/Gallery/g(2).jpg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="background-image"/></li>
                        <li class="carousel__slide"><span class="imgDesc">Thought Works Session</span><img class="carousel__images" src="assets/img/Gallery/g(3).jpg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="background-image"/></li>
                        <li class="carousel__slide"><img class="carousel__images" src="assets/img/Gallery/g(4).jpg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="background-image"/></li>
                        <li class="carousel__slide"><img class="carousel__images" src="assets/img/Gallery/g(5).jpg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="background-image"/></li>
                    </ul>
                </div>
                <button class="carousel__button carousel__button--right">▶</button>
                <div class="carousel__nav">
                    <button class="carousel__indicator current-slide"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                </div>
            </div>
            <script src="assets/js/carousel.js"></script>
            <script>
                $(document).ready(function(){
                    const nextButton = document.querySelector(".carousel__button--right");
                    const prevButton = document.querySelector(".carousel__button--left");
                    var imgCount = document.querySelectorAll(".carousel__indicator");
                    imgCount = imgCount.length;
                    let iter =0;
                    let go = "f"
                    setInterval(function(){
                        if (iter == 0){go = "f";}
                        if (iter==imgCount){go = "b";}
                        if (go == "f"){$(nextButton).click();iter++;}
                        if (go == "b"){$(prevButton).click();iter--;}
                    },3000);
                });
            </script>
        </div>
        <div class="section1" id="announcementsContainer">
            <div id="announcements">
                <h3>Announcements</h3>
                <hr/>
            </div>
        </div>
    </div>
    <div id="row2">
        <div id="leftContainer">
            <h3>Quick Links</h3>
            <hr style="width:75%;"/>
            <ul>
                <li><a href=""> Faculty Recruitment</a></li>
                <hr>
                <li><a href=""> Admissions - Recommended</a></li>
                <hr>
                <li><a href=""> Current Courses</a></li>
                <hr>
                <li><a href=""> Course Time Table</a></li>
                <hr>
                <li><a href=""> Research Labs</a></li>
                <hr>
                <li><a href=""> Summer Research Fellowship 2023</a></li>
                <hr>
                <li><a href=""> Dept Grevience Resolution Committee</a></li>
                <hr>
                <li><a href=""> UG & PG Curriculum</a></li>
                <hr>
                <li><a href=""> Minor Streams</a></li>
                <hr>
                <li><a href=""> Faculty Websites</a></li>
                <hr>
            </ul>
        </div>
        <div id="rightContainer">
            <div id="tabs">
                <button class="tab content1">About the Dept.</button>
                <!-- &nbsp; -->
                <button class="tab content2">Message from the HoD</button>
            </div>
            <script>
                $(document).ready(function(){
                    $(".tab").click(function(){
                        let reqContentClass = this.className.split(" ")[1];
                        // alert(reqContentClass)
                        $(".contents").css("display", "none");
                        $("#" + reqContentClass).css("display", "block");
                        // ----------buttons styling----------
                        $(".tab").css("background", "rgb(139, 112, 112)");
                        $("." + reqContentClass).css("background", "rgb(139, 58, 58)");
                    });
                });
            </script>
            <hr style="margin: 0 0 1.4em 0;padding: 0;width: 97%;border:none;border-top: 1px solid rgba(50, 50, 50, 0.6);" >
            <div class="contents" id="content1">
                <div id="aboutDept">
                    <span style="margin-right:40px;"></span>The Department of Computer Science and Engineering, RGUKT Nuzvid campus was established in the year 2010. Since inception, the Department has maintained top standards in the context of the academics and evolving discipline. The Department has a strong core curriculum complemented by electives in the important emerging areas. It is provided with very good experimental facilities for research and a strong technical staff.
                    <br><br>
                    <strong>Vision:</strong>
                    <br>
                    <span style="margin-right:40px;"></span>To be among the nation's premier research and teaching institutions in Computer Science and Engineering.
                    <br><br>
                    <strong>Mission:</strong>
                    <br>
                    <span style="margin-right:40px;"></span>To create, share, and apply knowledge in the field of Computer Science, including in interdisciplinary areas that extend the scope of Computer Science and benefit humanity; to educate students to be successful, ethical and effective problem-solvers and life-long learners who will contribute positively to the economic well-being of the nation and who are prepared to tackle complex challenges facing the world.                    
                    <br><br>
                    <!-- Global excellence and local relevance in research, teaching, and technology development is the vision of the Department. The Department was started as the Computer Centre in 1973 with the acquisition of an IBM 370, perhaps the most powerful computer in India at that time. It offered M.Tech, M.S and PhD degree programmes. In 1983, the B.Tech degree programme was started.
                    <br>
                    <br>
                    Today the Department has a vibrant student body numbering about 700. Over 60% are postgraduate, mostly supported by scholarships. The Department also offers several attractive industry-sponsored Fellowships for outstanding PhD scholars and liberally supports participation in top-ranking international conferences.
                    <br>
                    <br>
                    The department has been funded by FIST program from DST, Govt. of India in 2002 and 2017. The Secure Systems Laboratory is funded by FIST program 2017.
                    <br>
                    <br>
                    The report on the department activities presented by the Head of the Department at the Department Degree Distribution Program, 2020 is available here.
                    <br>
                    <br>
                    The video of the Department Degree Distribution Program is now available here. -->
                </div>
                <div id="UpcomingSeminars">
                    <div id="UShead">
                        <h3 style="font-size: 1em;padding: 0 0 0em 0;">Upcoming Seminars : </h3>
                        <div id="UpcomingSeminarsFilter">
                            Filter:
                            <select name="SeminarsFilter" id="SeminarsFilter">
                                <option value="all">All Seminars</option>
                                <option value="dept">Dept Seminars</option>
                                <option value="all">Faculty Research Seminars</option>
                            </select>
                            <a class="maroon" href="seminars.php" >(View All)</a>
                        </div>
                    </div>
                    <hr/>
                    <div id="SeminarsLinks">
                        <ol>
                            <li>Date : <span>ipsum dolor, sit amet consectetur adipisicing elit.</span> </li>
                            <li>Date : <span>ipsum dolor, sit amet consectetur adipisicing elit.</span> </li>
                            <li>Date : <span>ipsum dolor, sit amet consectetur adipisicing elit.</span> </li>
                            <li>Date : <span>ipsum dolor, sit amet consectetur adipisicing elit.</span> </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="contents" id="content2">
                <h3 style="text-align:center;">Message from the Head of the Department</h3>
                <hr>
                Welcome to the Department of Computer Science and Engineering at IIT Madras. IIT Madras was ranked first amongst several other similar Research and Teaching institutions in Engineering, for the continuous seventh time in the 2022 edition of National Institute Ranking Framework established by the Ministry for Human Resources Development (MHRD), the Government of India. IIT Madras was ranked amongst the top 50 Asian Universities in the QS rankings 2018.
                <br>
                <br>
                The Department started as the Computer Centre in 1973 with the acquisition of an IBM 370 Computer. It presently offers B. Tech., dual-degree B.Tech./ M.Tech., M.Tech., M.S., Ph.D. degree programmes. A dual-degree B.Tech/M.Tech. program in data science, open to all B.Tech. students of IIT Madras, has been started from Jan. 2018.
                <br>
                <br>
                The department has a vibrant student body numbering around 700 and faculty numbering nearly 35. About 60% of students are postgraduates, mostly supported by government of India scholarships and research projects. The Departments also offers several attractive industry-sponsored fellowships for outstanding Ph.D. scholars.
                <br>
                <br>
                The vision of the CSE Department is Global Excellence and Local Relevance in Research, teaching, and technology development in Computer Science and Engineering. In pursuit of this vision, the Department is actively engaged in research activities in various research areas.
                <br>
                <br>
                The Department's research activities have been funded by several Government organizations such as Department of Science & Technology (DST), Ministry Of Electronics & Information Technology (MeiTY), and Defence Research and Development Organisation (DRDO); and by several industries including Accenture, Amazon, Ciena, Google, Hitachi, IBM, Intel, Microsoft, Tata Power Corporation, and VMWare. Several of our alumni hold important positions in the industry and academia worldwide. Students have been recently placed, both in India and abroad, in several leading national and international companies including Adobe, Apple, Flipkart, Goldman Sachs, Google, IBM, Intel, Juniper, LinkedIn, Microsoft, Ola, Oracle, Paypal, Qualcomm, Samsung, Uber, and Visa. Many Ph.D. graduates are serving as faculty members, both in India and abroad, in reputed educational institutions such as Indian Institute of Science Bangalore, Institute of Mathematical Sciences, IIT Bombay, IIT Kanpur, IIT Kharagpur, IIT Madras, IIT Guwahati, IIT Hyderabad, IIT Jodhpur, IIT Dharwad, IIT Mandi, IIT Palakkad, IIT Tirupati, IIIT Bangalore, IIITDM Kancheepuram, NIT Calicut, NIT Trichy, Iowa State University, Queen’s University Belfast, and National University of Singapore.
                <br>
                <br>
                <span style="color:var(--maroon);">Dr. S.Chiranjeevi M.Tech, PhD</span>
                <!-- Assistant Professor, Computer Science and Engineering -->
                <br>Head of the Department
                <br>Department of Computer Science and Engineering
                <br>RGUKT-Nuzvid
                <br>Eluru Dist- 521202.
            </div>
        </div>
    </div>
    <div id="row3" >
        <div class="row3Child" id="c1">
            <h3>For Current Students</h3>
            <!-- <hr> -->
            <ol>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
            </ol>
        </div>
        <div class="row3Child" id="c2">
            <h3>For Prospective Students</h3>
            <!-- <hr> -->
            <ol>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
            </ol>
        </div>
        <div class="row3Child" id="c3">
            <h3>For Visitors</h3>
            <!-- <hr> -->
            <ol>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
            </ol>
        </div>
        <div class="row3Child" id="c4">
            <h3>For Prospective Faculty</h3>
            <!-- <hr> -->
            <ol>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
            </ol>
        </div>
    </div>
</section>