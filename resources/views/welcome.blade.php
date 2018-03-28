<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Teejay Hidalgo</title>
    <meta name="description" content="backend developer, php, javascript, jquery, mysql, programmer, coder, website">  
    <meta name="author" content="Teejay Hidalgo">

   <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('apps/css/base.css') }}">  
   <link rel="stylesheet" href="{{ asset('apps/css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('apps/css/vendor.css') }}">     

   <!-- script
   ================================================== -->   
    <script src=" {{ asset('apps/js/modernizr.js') }}"></script>
    <script src=" {{ asset('apps/js/pace.min.js') }}"></script>

   <!-- favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header>     
    <div class="row">

        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                 <a href="/">apps</a>
              </div>              

            <nav id="main-nav-wrap">
                    <ul class="main-navigation">
                        <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                        <li><a class="smoothscroll"  href="#about" title="">About</a></li>
                        <li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
                        <li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                        <li><a class="smoothscroll"  href="#services" title="">Services</a></li>                    
                        <li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>  
                    </ul>
                </nav>          
        </div> <!-- /top-bar --> 
        
    </div> <!-- /row -->        
   </header> <!-- /header -->

    <!-- intro section
   ================================================== -->
   <section id="intro">   

    <div class="intro-overlay"></div>   

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>Hello, World.</h5>
                <h1>I'm Teejay Hidalgo.</h1>

                <p class="intro-position">
                    <span>Back-end Developer</span>
                    <!-- <span>UI/UX Designer</span>  -->
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

            </div>  
            
        </div>                  
    </div> <!-- /intro-content --> 

    <ul class="intro-social">        
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-behance"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->          

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src=" {{ asset('apps/images/profile-pic.jpg') }}" alt="Profile Picture">

                <p class="lead">
                I am a professional back-end developer with 7 year experience in creating websites. Proficient knowledge of the back-end programming language/framework. I have a good understanding of front-end web technologies like HTML, CSS, and JavaScript and communicate well with front end developers. I am able to manage a hosting environment, including database administration as well as scaling applications to handle load changes. With experience in version control, such as Git
                </p>
                 <p class="lead">I am currently looking for a company where I can continue to grow and learn as a web developer and software engineer. I want to be part of a team where sharing of knowlege and helping each other to grow while working together is encouraged.
                 </p>
            </div>              

        </div>          
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Teejay Hidalgo</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>February 14, 1988</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Back-end Developer</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.antariprince.com</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>me@antariprince.com</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Qualities</h3>
           
            <ul class="info-list">
                <li>
                    <strong>Self-motivated</strong>
                </li>
                 <li>
                    <strong>Willingness to learn</strong>
                </li>
                 <li>
                    <strong>Problem-Solving Skills</strong>
                </li>
                 <li>
                    <strong>Honest</strong>
                </li>
                 <li>
                    <strong>Independent</strong>
                </li>

            </ul> <!-- /info-list -->

        </div>

        

    </div>

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Primary Skills</h3>

                <ul class="skill-bars">
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>PHP</strong>
                   </li>

                   <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>Javascript</strong>
                   </li>

                   <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                   </li>

                   <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>MySql</strong>
                   </li>

                   <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>Debugging skills</strong>
                   </li>
                   <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Git</strong>
                   </li>

                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>Codeigniter</strong>
                   </li>

                   <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>Laravel</strong>
                   </li>

                   

                   
      
                </ul> <!-- /skill-bars -->      

        </div>

        <div class="col-six tab-full">

            <h3>Others Skills</h3>

                <ul class="skill-bars">
                    


                   <li>
                    <div class="progress percent50"><span>50%</span></div>
                    <strong>Wordpress</strong>
                   </li>

                   <li>
                    <div class="progress percent55"><span>55%</span></div>
                    <strong>Prestashop</strong>
                   </li>

                   <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>Bootstrap</strong>
                   </li>

                   <li>
                    <div class="progress percent30"><span>30%</span></div>
                    <strong>AWS</strong>
                   </li>

                   <li>
                    <div class="progress percent45"><span>45%</span></div>
                    <strong>HTML5</strong>
                   </li>
                   <li>
                    <div class="progress percent40"><span>40%</span></div>
                    <strong>CSS3</strong>
                   </li>

                   <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>Web Scraping</strong>
                   </li>

                    <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>Photoshop</strong>
                   </li>
                </ul> <!-- /skill-bars -->      

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>          
    </div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
    <section id="resume" class="grey-section">

        <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <h1>More of my credentials.</h1>

            <!-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->

        </div>          
    </div> <!-- /section-intro--> 

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Work Experience</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                       
                        
                        <h3>Senior Software Engineer</h3>
                        <p>Jan 2014 - May 2017</p>
                        <h3>Software Engineer</h3>
                        <p>Jan 2012 - Dec 2013</p>
                        <h3>Junior Software Engineer</h3>
                        <p>July 2011 - Dec 2011</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Sevenworks Inc.</h4>
                        <p>Job Description:
                        <ul>
                                <li>Writing, maintaining and enhancing program code</li>
                                <li>Creating, maintaining, and enhancing databases</li>
                                <li>Testing, debugging, diagnosing and correcting errors and bugs in an application</li>
                                <li>Managing and working with a small team to ensure that the project specification is met and is delivered in a timely manner</li>
                                <li>Communicating and coordinating with project managers and clients during the development lifecycle for concerns requiring technical knowledge</li>
                                <li>Reviewing current system or process and presenting ideas for improvements</li>
                                <li>Researching and integrating APIs, plugins and extensions</li>
                                <li>Meeting with clients for consultation, analysis and evaluation of project for technical specifcations and requirements</li>
                                <li>Researching and identifying technology requirements, proposing process and solutions</li>
                                <li>Preparing system specifications, flow charts, timeline, scope and limitations</li>
                                <li>Integrated user-facing elements developed by front-end developers with server side logic</li>
                                <li>
                                    Worked closely with Designers, Customer Support and QA to develop suite of web tools for internal and external users
                                </li>
                                <li>Worked closely with product managers, editorial and business partners to understand software requirements</li>
                          </ul>  
                          </p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Junior Developer</h3>
                        <p>Nov 2009 - April 2011</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Ivertise Multimedia Designs Corporation</h4>
                        <p>Job Description:
                        <ul>
                                <li>Setup and configuration of the framework and database for new projects</li>
                                <li>Writing new codes for projects requiring new functions and enhancements</li>
                                <li>Analysis of client requirement and propose solutions and enhancements</li>
                                <li>Reviewing client requests and providing man hours estimate for the customization</li>
                                <li>Maintenance, enhancement and create backup of the website and database</li>
                                <li>Testing, debugging and troubleshooting the system to ensure the applications perform to specification</li>
                                <li>Contributed in the development of an internal CMS framework for the company</li>
                                <li>Creating user manual</li>
                          </ul>  
                          </p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Internship</h3>
                        <p>Sept 2008 - Dec 2008</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Novare Technologies</h4>
                        <p>Job Description:
                        <ul>
                                <li>Developed a Bug Tracking Mobile Application (Mobile Mantis) for Blackberry
devices utilizing both API provided by RIM (research in motion) and already
existing Web Services by Mantis Connect.</li>
                          </ul>  
                          </p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->              

        </div> <!-- /col-twelve -->
        
    </div> <!-- /resume-timeline -->
    
    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Bachelor of Science in Information and Communication Technology Management</h3>
                        <p>May 2005 - April 2009</p>
                    </div>

                    <div class="timeline-content">
                        <h4>De La Salle University</h4>
                        <p>De La Salle University is an internationally recognized Catholic university in the Philippines established by the Brothers of the Christian Schools in 1911. Inspired by the charism of St. John Baptist de La Salle, the University community, together and by association, provides quality human and Christian education by teaching minds, touching hearts, and transforming lives.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->              

        </div> <!-- /col-twelve -->
        
    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Online Courses</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Udemy Courses</h3>
                    </div>

                    <div class="timeline-content">
                        <h4>Laravel, the Complete Guide with Real World Projects</h4>
                        <p>This course uses a project based approach for learning. It is also be filled with specific articles to read to clearly understand a concept better, and multiple explanations of all concepts taught. Built number of projects from simple to extra advanced, as listed below.</p>
                        <ul>
                                <li>Task APPLICATION</li>
                                <li>COMPLETE BLOG</li>
                                <li>COMPLETE FORUM</li>
                                <li>E-COMMERCE WITH STRIPE</li>
                          </ul>  
                    </div>

                    <div class="timeline-content">
                        <h4>JavaScript, Understanding the Weird Parts</h4>
                        <p>In this course you will gain a deep understanding of Javascript, learn how Javascript works under the hood, and how that knowledge helps you avoid common pitfalls and drastically improve your ability to debug problems. You will find clarity in the parts that others, even experienced coders, may find weird, odd, and at times incomprehensible. You'll learn the beauty and deceptive power of this language that is at the forefront of modern software development today.</p>
                        <p>
                            This course will cover such advanced concepts as objects and object literals, function expressions, prototypical inheritance, functional programming, scope chains, function constructors (plus new ES6 features), immediately invoked function expressions (IIFEs), call, apply, bind, and more.
                        </p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->              

        </div> <!-- /col-twelve -->
        
    </div> <!-- /resume-timeline -->
        
    </section> <!-- /features -->


    <!-- Portfolio Section
   ================================================== -->
    <section id="portfolio">

        <div class="row section-intro">
        <div class="col-twelve">

            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

            <p class="lead">Due to the non discloruse agreement between my previous employers I am not able to use my previous works as portfolio so I created these simple websites as my sample works.</p>

        </div>          
    </div> <!-- /section-intro--> 

    <div class="row portfolio-content">

        <div class="col-twelve">

            <!-- portfolio-wrapper -->
             <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/liberty.jpg') }}" alt="Liberty">
                      <a href="#modal-01" class="overlay">                                 
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                       <h3 class="folio-title">Liberty</h3>                             
                                         <span class="folio-types">
                                          Graphic Design
                                       </span>
                                   </div>                           
                         </div>                    
                      </a>
                   </div>                  
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/shutterbug.jpg') }}" alt="Shutterbug">
                    <a href="#modal-02" class="overlay">                                      
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                <h3 class="folio-title">Shutterbug</h3>                             
                                        <span class="folio-types">
                                          Web Design
                                      </span>                   
                                   </div>                           
                         </div>                    
                      </a>
                   </div>
                    </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/clouds.jpg') }}"alt="Clouds">
                      <a href="#modal-03" class="overlay">                                    
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                <h3 class="folio-title">Clouds</h3>                             
                                        <span class="folio-types">
                                          Web Design
                                      </span>                   
                                   </div>                           
                         </div>                    
                      </a>
                   </div>
                    </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/beetle.jpg') }}" alt="Beetle">
                      <a href="#modal-04" class="overlay">                                       
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                <h3 class="folio-title">Beetle</h3>                             
                                        <span class="folio-types">
                                          Branding
                                      </span>                   
                                   </div>                           
                         </div>                    
                      </a>
                   </div>
                    </div> <!-- /folio-item -->     

                    <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/lighthouse.jpg') }}" alt="Lighthouse">
                      <a href="#modal-05" class="overlay">                                    
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                <h3 class="folio-title">Lighthouse</h3>                             
                                        <span class="folio-types">
                                          Web Development
                                      </span>                   
                                   </div>                           
                         </div>                    
                      </a>
                   </div>
                    </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                   <div class="item-wrap">
                    <img src=" {{ asset('apps/images/portfolio/salad.jpg') }}" alt="Salad">
                      <a href="#modal-06" class="overlay">
                         <div class="folio-item-table">
                            <div class="folio-item-cell">
                                <h3 class="folio-title">Salad</h3>                              
                                        <span class="folio-types">
                                          Branding
                                      </span>                   
                                   </div>                           
                         </div>                    
                      </a>
                   </div>
                    </div> <!-- /folio-item -->   

                <!-- modal popups - begin
                ============================================================= -->
                <div id="modal-01" class="popup-modal slider mfp-hide"> 

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-liberty.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Liberty</h4>            
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Web Development</div>                        
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-01 -->

                   <div id="modal-02" class="popup-modal slider mfp-hide">  

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-shutterbug.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Shutterbug</h4>             
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Web Design</div>                         
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-02 -->

                   <div id="modal-03" class="popup-modal slider mfp-hide">  

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-clouds.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Clouds</h4>             
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Web Design</div>                         
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-03 -->

                   <div id="modal-04" class="popup-modal slider mfp-hide">  

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-beetle.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Beetle</h4>             
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Branding</div>                           
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-04 -->

                   <div id="modal-05" class="popup-modal slider mfp-hide">  

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-lighthouse.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Lighthouse</h4>             
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Web Development</div>                        
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-05 -->

                   <div id="modal-06" class="popup-modal slider mfp-hide">  

                        <div class="media">
                            <img src=" {{ asset('apps/images/portfolio/modals/m-salad.jpg') }}" alt="" />
                        </div>          

                       <div class="description-box">
                          <h4>Salad</h4>              
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                          <div class="categories">Branding</div>                           
                       </div>

                     <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                          <a href="#" class="popup-modal-dismiss">Close</a>
                     </div>           

                   </div> <!-- /modal-06 -->


                   <!-- modal popups - end
                ============================================================= -->

             </div> <!-- /portfolio-wrapper --> 

        </div>  <!-- /twelve -->   

    </div> <!-- /portfolio-content --> 
        
    </section> <!-- /portfolio --> 


    <!-- CTA Section
   ================================================== -->
    <section id="cta" class="grey-section">

    <div class="row cta-content">

        <div class="col-twelve section-ads">  

                <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

              <p class="lead">
              Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
                <!-- Simply type    the promocode in the box labeled “Promo Code” when placing your order. -->  
                </p>

                <div class="action">
                  <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
              </div>                

        </div>

    </div> <!-- /cta-content -->

   </section> <!-- /cta --> 

    
    <!-- services Section
   ================================================== -->
    <section id="services">

        <div class="overlay"></div>

        <div class="row section-intro">
        <div class="col-twelve">

            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>
<!-- 
            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->

        </div>          
    </div> <!-- /section-intro -->

    <div class="row services-content">

        <div id="owl-slider" class="owl-carousel services-list">

            <div class="service">   

                <span class="icon"><i class="icon-earth"></i></span>            

                <div class="service-content">   

                     <h3>Web Maintenance</h3>

                    <p class="desc">Maintain, update, back up and troubleshoot an organization's website; ensure functionality and site responsiveness; evaluate website analytics.
                    </p>
                    
                </div>               

                </div> <!-- /service -->

                <div class="service">   

                    <span class="icon"><i class="icon-window"></i></span>                          

                <div class="service-content">   

                    <h3>Web Development</h3>  

                    <p class="desc">Write well designed, testable, efficient code by using best software development practices. Integrating data from various back-end services and databases. Coordinate with web designers to match visual design intent.
                    </p>

                </div>                            

               </div> <!-- /service -->

               <div class="service">

                <span class="icon"><i class="icon-chat"></i></span>                

                <div class="service-content">

                     <h3>Consultancy</h3>

                    <p class="desc">Offer advice and expertise to organisations to help them improve their web presence in terms of creating a website or ehnacing an existing website.
                        </p> 
                        
                </div>                 

               </div> <!-- /service -->

                

          </div> <!-- /services-list -->
        
    </div> <!-- /services-content -->
        
    </section> <!-- /services -->   


    <!-- stats Section
   ================================================== -->
    <section id="stats" class="count-up">

        <div class="row">
            <div class="col-twelve">

                <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-pencil-ruler"></i>
                        </div>

                        <h3 class="stat-count">
                            1500
                        </h3>

                        <h5 class="stat-title">
                            Projects Completed
                        </h5>

                    </div> <!-- /stat -->                   

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-users"></i>
                        </div>

                        <h3 class="stat-count">
                            900
                        </h3>

                        <h5 class="stat-title">
                            Happy Clients
                        </h5>

                    </div> <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-badge"></i>
                        </div>

                        <h3 class="stat-count">
                            200
                        </h3>

                        <h5 class="stat-title">
                            Awards Received
                        </h5>

                    </div> <!-- /stat -->                                   

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-light-bulb"></i>
                        </div>

                        <h3 class="stat-count">
                            120
                        </h3>

                        <h5 class="stat-title">
                            Crazy Ideas
                        </h5>

                    </div> <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-cup"></i>
                        </div>

                        <h3 class="stat-count">
                            1500
                        </h3>

                        <h5 class="stat-title">
                            Coffee Cups
                        </h5>

                    </div> <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="icon-clock"></i>
                        </div>

                        <h3 class="stat-count">
                            7200
                        </h3>

                        <h5 class="stat-title">
                            Hours
                        </h5>

                    </div> <!-- /stat -->

                </div> <!-- /stats-list -->

            </div> <!-- /twelve -->
        </div> <!-- /row -->

    </section> <!-- /stats -->

    
   <!-- contact
   ================================================== -->
    <section id="contact">

        <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

        </div> 
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                  <div class="form-field">
                           <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
                       <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                   </div>
                  <div class="form-field">
                           <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                   </div>                       
                  <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                   </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
                          <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                  </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">              
            </div>            
            <!-- contact-success -->
            <div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

         </div> <!-- /col-twelve -->
        
    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-twelve tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>me@antariprince.com</p>

        </div>
        
    </div> <!-- /contact-info -->
        
    </section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
        <div class="row">

            <div class="col-six tab-full pull-right social">

                <ul class="footer-social">        
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               </ul> 
                
          </div>

        <div class="col-six tab-full">
            <div class="copyright">
                    <span>© Copyright apps 2016.</span> 
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>              
                 </div>                       
            </div>

            <div id="go-top">
                 <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
              </div>

        </div> <!-- /row -->        
   </footer>  

   <div id="preloader"> 
        <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src=" {{ asset('apps/js/jquery-2.1.3.min.js') }}"></script>
   <script src=" {{ asset('apps/js/plugins.js') }}"></script>
   <script src=" {{ asset('apps/js/main.js') }}"></script>

</body>

</html>