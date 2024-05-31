<?php include 'header.php'?>


<!-- head -->
<div class="container">
    <div class="main-head">
    <h1>Get In Touch</h1>
    </div>
</div>
<!-- head end -->

<div class="container">
        <div class="row">
            <div class="col-12">
          
              <div class="contact-pages">
                <div class="contactuspage-details ">
              
                    
                     
                     
                    
                        <div class="form-page  py-3 px-md-5 px-2 shadow rounded">
            
                              <!-- <h2 class="text-center py-2 heading">Get In Touch</h2> -->
                             
                          <form class="row g-3" id="signupForm" autocomplete="off" method="POST" action="">
                          
                                  <div class="col-12">
                                  <label for="name" class="form-label"> Name</label>
                                      <input type="text" id="name" name="name" class="form-control" placeholder="Enter your  name" >
                                  </div>
                                  
            
                                  <div class="col-12">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                  </div>
                                  
                                  
                                  
                                  
                                  <div class="col-md-6">
                                      <label for="contact" class="form-label">Contact</label>
                                      <input type="text" id="contact" name="contact" maxlength="10" class="form-control" placeholder="Enter your number" >
                                  </div>
            
                                  <div class="col-md-6">
                                      <label for="city" class="form-label">City</label>
                                      <input type="text" id="city" name="city" class="form-control" placeholder="Enter your city">
                                  </div>
                                  
                                  <div class="col-12">
                                      <label for="usermessage" class="form-label">Message</label>
                                      <textarea rows="4" type="text" class="form-control" id="usermessage" name="usermessage" placeholder="Message here"> </textarea>
                                    
                                  </div>
                                 
                                  <div class="col-12 text-center">
                                      <button type="submit" name="send" class="btn bookbtn w-50" id="submitbtn">Send</button>
                                  </div>
                                  </form>
            
                        
      
                     </div>
                  </div>
              </div>
            </div>

           
        </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
    $(document).ready(function(){
    jQuery.validator.addMethod('name_rule', function (value, element) {
        if (/^[A-Za-z\s\-]+$/.test(value)) {
            return true;
        } else {
            $("#name").focus();
            return false;
        };
    },"*Name only character");

    jQuery.validator.addMethod('contact_rule', function (value, element) {
        return  /^\d{10}$/.test(value);
        
    },"*Enter only 10 digits numuber");

    jQuery.validator.addMethod('city_rule', function (value, element) {
        if (/^[A-Za-z\s\-]+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    },"*Enter only characters");


    $("#signupForm").validate({ 
  
        rules: {
            name: {
                required: true,
                minlength: 3,
                name_rule:true,
             
            },
            email: {
                required: true,
                email: true
            },
           
            contact:{
                required:true,
                contact_rule:true
                
            },
            city: {
                required:true,
                city_rule:true

            },
            usermessage:{
                required:true,
            }
        },
        messages: {
            name: {
                required: "*Please enter your name",
                minlength: "*Your name must be at least 3 characters long",
               
            },
            email: {
                required: "*Please enter your email",
                email: "*Please enter a valid email address"
            },
            city: {
                required :"*Please enter city"
            
            },
            contact: {
                required :"*Please enter contact number",
                
            },
            usermessage :{
                required : "*Please enter any message here"
            }
        },
        
    }); 



   

});
   </script>
<?php include 'footer.php'?>