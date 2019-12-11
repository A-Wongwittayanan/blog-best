@extends('index')

@section('header')

<!-- HEADER -->
    <div class="w3-bar w3-white w3-large">
        <a href="/" class="w3-bar-item w3-button w3-blue w3-mobile">BLOG BEST</a>
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-large">RESUME</button>
    </div>

<!-- SUPPORT HEADER -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-pa" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-blue w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <h1 align="center">RESUME</h1>
            <h2 align = "center"><ins>ANURAK WONGWITTAYANAN</ins></h2>
            <h3>&nbsp;&nbsp;PROFESSIONAL SUMMARY</h3>
            <p>
                <i class="w3-padding-small">
                        Computer Science graduate passionate about web development including front-end development, back-end development and Full-stack development. Good knowledge and strong experience in programming languages including HTML, PHP, JavaScript, MySQL, C++, Java and Website design & development. Active member of Student Union of Faculty. (In position of Deputy Management of Recreation Department) Good interpersonal and presentation skills. Ability to work in a fast-paced environment to set deadlines. Good organized project management. Enthusiastic, highly-motivated computer science student with proven leadership capabilities, who likes to take initiative and seek out new challenges.
                </i>
            </p>
            <h3>&nbsp;&nbsp;PERSONAL INFORMATION</h3>
            <p>
                <i>
                    ADDRESS: 127/325 Soi Ramintra 40 Junction 8-3, 
                    Khlong Kum, Breng Kum, Bangkok 10230 Thailand <br>
                    TELPHONE: (+66) 09-7237-9275 <br>
                    E-MAIL: a.wongwittayanan@gmail.com <br>
                    DATE OF BIRTH: 2 March 1996 ( 23 years old)
                </i>
            </p>
            <h3>&nbsp;&nbsp;EDUCATION BACKGROUND </h3>
            <p>
                <i>
                    AUG 2014 - DEC 2019	BURAPHA UNIVERSITY <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Bachelor of Science Major Computer Science <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Cumulative GPA 2.19 <br>
                    MAY 2011 - MAR 2014	SURASAK MONTREE SCHOOL <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Sciences and Mathematics Program  <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Cumulative GPA 2.60
                </i>
            </p>
            
            <h3>&nbsp;&nbsp;CERTIFICATIONS </h3>
            <p>
                <i>
                    2019	Google Analytics Academy <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Certificate of Completion (Google Analytics for Beginners, Advanced Google Analytics, Google Analytics for Power Users, Google Analytics 360, Google Analytics Data Studio, Google Tag Manager Fundamentals)
                </i>
            </p>

            <h3>&nbsp;&nbsp;SKILLS </h3>
            <p>
                <i>
                    <ul> 
                        <ins>Language Spoken & Other Languages </ins>
                        <li>
                            Excellence of written and spoken Thai Language
                        </li>
                        <li>
                            Good command of written and spoken English Language
                        </li>
                    </ul>
                    <ul>
                            <ins>Computer Skills </ins>
                            <li>
                                Proficient in Microsoft Word, PowerPoint, Excel
                            </li>
                            <li>
                                Being able to code, and to understand multiple programming languages including HTML, PHP, JavaScript, MySQL, C++, Java
                            </li>
                        </ul>
                </i>
            </p>
            <h3>&nbsp;&nbsp;REFERENCES </h3>
            <p>
                <i>
                    <ul>
                         <li>
                            Suwinee Soonsap, Digital Marketing Manager, TNP Healthcare <br>
                            09-2881-5954, soonsap.su@gmail.com
                        </li>
                        <li>
                            Wanida Opakul, Marketing Strategics Planner (Revo Product), Toyota Motor Thailand <br>
                            08-5165-8670, noonwani@hotmail.com
                        </li>
                    </ul>
                </i>
            </p>
            <br>
        </div>
    </div>

@endsection