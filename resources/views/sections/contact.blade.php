<section id="contact">

    <div class="row section-intro">
    <div class="col-twelve">

        <h5>Contact</h5>
        <h1>I'd Love To Hear From You.</h1>

        <p class="lead">Please fill up the form below with your inquiry and I will get back to you as soon as possible.</p>

    </div> 
    </div> <!-- /section-intro -->

    <div class="row contact-form">

    <div class="col-twelve">

        <!-- form -->
        <form id="contactForm" method="post" action="{{ route('inquire') }}">
            <fieldset style="border:none;!important">
               {{ csrf_field() }}
               <div class="form-field">
                 <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="true">
             </div>
             <div class="form-field">
                 <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="true">
             </div>
             <div class="form-field">
                 <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" required="true">
             </div>                       
             <div class="form-field">
                <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required="true"></textarea>
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

    </section>