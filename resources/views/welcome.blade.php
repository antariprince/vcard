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
      <link rel="stylesheet" href="{{ asset('apps/css/custom.css') }}">  


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
    @include('sections.header')
    <!-- /header -->

    <!-- intro section
    ================================================== -->
    @include('sections.intro')
    <!-- /intro -->


    <!-- about section
    ================================================== -->
    @include('sections.about')
    <!-- /process-->    


    <!-- resume Section
    ================================================== -->
    @include('sections.resume')

    <!-- /features -->


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
             @include('sections.folio')

        <!-- modal popups - begin
            ============================================================= -->
            @include('sections.modals')

           <!-- modal popups - end
            ============================================================= -->

        </div> <!-- /portfolio-wrapper --> 

    </div>  <!-- /twelve -->   

    </div> <!-- /portfolio-content --> 

    </section> <!-- /portfolio --> 


    <!-- services Section
    ================================================== -->
    @include('sections.services')
     <!-- /services -->  

    <!-- contact
    ================================================== -->
    @include('sections.contact')
     <!-- /contact -->

    @include('sections.footer')
    <!-- footer
    ================================================== -->

    

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