<!DOCTYPE html>
<html>
<head>
    <title>Let's Talk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/css/socializer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"> 
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand py-3" href="#">Let's Talk.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="how it helps.php">How it works</a>
            </li>
         
             <li class="nav-item">
                <a class="nav-link" href="wehelpwith.php">We help with</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="selfimp.php">Self improvement</a>
         
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div align="center">

<body>
  <div class="smart-wrap">
  <div class="smart-forms smart-container wrap-2">
   
    <div class="form-header header-primary">
      <h2><i class="fa fa-calendar"></i>Make Appointments Here</h2>
    </div>
     
    <form method="post" action="bookingtable.php" id="contact">
      <div class="form-body">   
       
  <label for="name" class="field-label">Please Enter Your Name</label>
  <label for="Name" class="field prepend-icon">
    <input type="text" name="Name" id="Name" class="gui-input" required="" placeholder="Your name">
    <span class="field-icon"><i class="fa fa-user"></i></span>  
  </label>
</div>
               
<div class="frm-row">
  <div class="section colm colm6">
    <label for="Email" class="field-label">Email Address</label>
    <label for="Email" class="field prepend-icon">
      <input type="email" name="Email" id="Email" class="gui-input" required="" placeholder="Your Email">
      <span class="field-icon"><i class="fa fa-envelope"></i></span>  
    </label>
  </div>
   
  <div class="section colm colm6">
    <label for="Number" class="field-label">Telephone / Mobile</label>
    <label for="Number" class="field prepend-icon">
      <input type="text" name="Number" id="Number" class="gui-input" required="" placeholder="Telephone/Mobile Number">
      <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
    </label>
  </div>
</div>
 
<div class="frm-row">
  <div class="section colm colm6">
    <label for="Adults" class="field-label">Number of Adults</label>
    <label for="Adults" class="field prepend-icon">
      <input type="number" id="Adults" name="Adults" class="gui-input" required="" placeholder="Number of adults">
      <span class="field-icon"><i class="fa fa-users"></i></span>  
    </label>
  </div>
   
  <div class="section colm colm6">
    <label for="Children" class="field-label">Number of Children</label>
    <label for="Children" class="field prepend-icon">
      <input type="number" id="Children" name="Children" class="gui-input" required="" placeholder="Number of children">
      <span class="field-icon"><i class="fa fa-users"></i></span>  
    </label>
  </div>
</div>
 
<div class="frm-row">
  <div class="section colm colm6">
    <label for="Service" class="field-label">service's name</label>
    <label for="Service" class="field prepend-icon">
      <input type="text" id="Service" name="Service" class="gui-input" required="" placeholder="">
      <span class="field-icon"><i class="fa fa-calendar"></i></span>  
    </label>
  </div>
   
  <div class="section colm colm6">
    <label for="Category" class="field-label">Category</label>
    <label for="Category" class="field prepend-icon">
      <input type="text" id="Category" name="Category" class="gui-input" required="" placeholder="">
      <span class="field-icon"><i class="fa fa-calendar"></i></span>  
    </label>
  </div>
</div>
 
<div class="spacer-t20 spacer-b30">
  <div class="tagline"><span>Please answer these question for a pleasant stay</span></div>
</div>
 
<div class="frm-row">
  <div class="option-group field">
   
    <div class="section colm colm6">
      <label class="switch">
        <input type="checkbox" name="Prescription" id="prescription" value="prescription">
        <span class="switch-label" data-on="YES" data-off="NO"></span>
        <span>Do you have prescriptions (if consulted earlier)s?</span>
      </label>
    </div>
         
 
  </div>
</div>
 
 
 
<div class="section">
  <label for="Comment" class="field-label">Anything else we should know about?</label>
  <label for="Comment" class="field prepend-icon">
    <textarea class="gui-textarea" id="Comment" name="Comment" placeholder="Let us know about any special accommodation needs"></textarea>
    <span class="field-icon"><i class="fa fa-comments"></i></span>
    <span class="input-hint"> 
      <strong>
        Please be patient:</strong> We will contact you shortly
    </span>   
  </label>
</div>                                             
         
      </div>
      <div class="form-footer">

        <button type="submit" href="index.php" class="btn btn-primary"> Confirm booking </button>
        <button type="reset" href="index.php" class="btn btn-primary"> Cancel </button>
        <!--<button type="reset" class="button">Cancel</button>-->
      </div>
       
    </form>
     <br><br>
     <div align="center">
     <img src="\img\16.png">
  </div>
  <br><br>
</div>
</div>

</div>


<footer class="bg-dark">
    <div align="center">
    <p class="p-3 bg-dark text-white text-center">Let's Talk By VIPS</p>
    <div class="socializer a sr-32px sr-squircle-2 sr-opacity sr-icon-white sr-pad"><span class="sr-facebook sr-text-in"><a href="https://www.facebook.com/share.php?u=https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F&amp;t=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i><span class="text">Facebook</span></a></span><span class="sr-twitter sr-text-in"><a href="https://twitter.com/intent/tweet?text=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web%20-%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F%20" target="_blank" title="Twitter"><i class="fab fa-twitter"></i><span class="text">Twitter</span></a></span><span class="sr-email sr-text-in"><a href="mailto:?subject=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web&amp;body=%20-%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="Email"><i class="fa fa-envelope"></i><span class="text">Email</span></a></span><span class="sr-whatsapp sr-text-in"><a href="https://api.whatsapp.com/send?text=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i><span class="text">WhatsApp</span></a></span><span class="sr-instagram sr-text-in"><a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i><span class="text">Instagram</span></a></span></div>
</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>













































  
  
 