<?php
/*
* Template Name: Microsoft Lync
*/
//$rootDir = '';
$rootDir = 'http://www.ipsolutions.co.uk/wp-content/themes/grandcollege/ip-solutions/';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <title>IP Solutions: Microsoft Lync</title>
    <link rel="stylesheet" href="<?php echo $rootDir; ?>stylesheets/app.css" />
    <link rel="stylesheet" href="<?php echo $rootDir; ?>QapTcha/jquery/QapTcha.jquery.css" />
    <script src="<?php echo $rootDir; ?>bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <!-- header / nav -->
    <header class="row full-screen">
        <div class="large-12 columns">
            <!-- header -->
            <div class="left">
                <div id="logos" class="padding-top-10 margin-bottom-10">
                    <img src="<?php echo $rootDir; ?>images/ipsolutionslogo.jpg">
                    <img src="<?php echo $rootDir; ?>images/lync_logo_1.jpg">
                    <img src="<?php echo $rootDir; ?>images/microsoft-logo.png">
                </div>
            </div>
        </div>
        <!-- background -->
        <div class="ips-background ips-background-white"></div>
    </header>
    <!--
        row 1: Is Microsoft Lync right for you?
        - background image -->
    <section class="full-screen padding-60-75">
        <div class="row">
            <div class="large-10 columns large-centered">
                <!-- FORM START -->
                <div class="row ips-background-box ips-background-blue" id="sign-up-form">
                    <div class="row"><div class="large-12 columns"><h3 class="padding-bottom-10 h1 text-center ips-green">Register</h3></div></div>
                    <!-- Title -->
                    <div class="large-6 columns ">
                        <h3 class="ips-white heading-line-height h2_5 padding-top-30 padding-bottom-10">Join us and Dragons' Den's Piers Linney at Microsofts London <br>Offices on the 1st April.</h3>
                        <h5 class="ips-white h5">Without voice enabling Office 365 you could be losing more than 20% functionality.</h5>
                    </div>
                    <!-- Sign up -->
                    <div class="large-6 columns border-left no-border-left-small">

                        <!--  ----------------------------------------------------------------------  -->
                        <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
                        <!--  If necessary, please modify the charset parameter to specify the        -->
                        <!--  character set of your HTML page.                                        -->
                        <!--  ----------------------------------------------------------------------  -->



                        <!--  ----------------------------------------------------------------------  -->
                        <!--  NOTE: Please add the following <FORM> element to your page.             -->
                        <!--  ----------------------------------------------------------------------  -->

                        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="happy-form">

                            <input type=hidden name="oid" value="00D20000000019X">
                            <input type=hidden name="retURL" value="http://www.ipsolutions.co.uk/microsoft-lync/thankyou/">

                            <!--  ----------------------------------------------------------------------  -->
                            <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
                            <!--  these lines if you wish to test in debug mode.                          -->
                            <!--  <input type="hidden" name="debug" value=1>                              -->
                            <!--  <input type="hidden" name="debugEmail"                                  -->
                            <!--  value="paul.richards@ipsolutions.co.uk">                                -->
                            <!--  ----------------------------------------------------------------------  -->

                            <label for="00N20000009RegP">Full Name:</label><input  id="00N20000009RegP" maxlength="40" name="00N20000009RegP" size="20" type="text" class="margin-bottom-0 happy-name" required/><br>

                            <label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" class="margin-bottom-0 happy-company" required/><br>

                            <label for="00N20000009RegZ">Job Title:</label><input  id="00N20000009RegZ" maxlength="40" name="00N20000009RegZ" size="20" type="text" class="margin-bottom-0 happy-job" required/><br>

                            <label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" class="margin-bottom-0 happy-email" required/><br>
                            <label>Slide to confirm you're not a robot</label>
                            <div class="QapTcha"></div>
                            <input type="submit" name="submit" value="Register now" class="hs-button happy-submit">

                        </form>
                    </div>
                </div>
                <!-- FORM END -->
            </div>
        </div>
        <!-- Background -->
        <div class="ips-background-image1"></div>
        <div class="ips-background ips-background-grey"></div>
    </section>
    <!-- row 2: Agenda
         - grey background
    -->
    <section class="full-screen padding-60-75 padding-top-0">
        <div class="row">
            <div class="large-7 columns large-centered">
                <h2 class="text-upper-case text-center ips-green">Agenda</h2>
                <table>
                    <tr>
                        <td class="text-bold ips-green">9:30am</td><td>Breakfast, refreshments and networking</td>
                    </tr>
                    <tr><td class="text-bold ips-green">10:00am</td><td>Welcome & Opening</td></tr>
                    <tr>
                        <td class="text-bold ips-green">10:20am</td><td>Cloud Strategy & Market Overview</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">10:40am</td><td>The benefits of voice-enabling O365</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">11:20am</td><td>Why Cloud and How to Get There</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">11:40am</td><td>The Subscription Economy: Capex versus Opex – VR & IP Solutions</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">12:00pm</td><td>Q&A</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">12:15pm</td><td>Lunch and networking</td>
                    </tr>
                    <tr>
                        <td class="text-bold ips-green">1:00pm</td><td>Close</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- background -->
        <div class="ips-background ips-background-grey"></div>
    </section>
    <!--
        row 3: Location
        - white background
    -->
    <section class="full-screen padding-60-75">
        <div class="row">
            <div class="large-4 columns large-centered">
                <h2 class="text-upper-case text-center ips-grey">Location</h2>
            </div>
        </div>
        <div class="row padding-60-75">
            <div class="large-9 columns large-centered">
                <div class="row">
                    <div class="large-6 columns">
                        <figure id="gmap">

                        </figure>
                    </div>
                    <div class="large-6 columns">
                        <ul class="ips-grey list-style-none">
                            <li>Cardinal Place</li>
                            <li>Auditorium1</li>
                            <li>80-100 Victoria Street</li>
                            <li>London</li>
                            <li class="text-upper-case">sw1e 5jl</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- background -->
        <div class="ips-background ips-background-white"></div>
    </section>
    <!--
        row 4: Sign up today
        - background image
    -->
    <section class="full-screen ips-section padding-60-75">
        <div class="row">
            <div class="large-10 columns large-centered">
                <!-- FORM START -->
                <div class="row ips-background-box ips-background-blue">
                    <!-- Title -->
                    <div class="large-6 columns">
                        <div class="table-center-container large-min-height-320">
                            <div class="table-center-cell">
                                <h3 class="h1 text-upper-case ips-white text-center">Register today to attend</h3>
                            </div>
                        </div>

                    </div>
                    <!-- Sign up -->
                    <div class="large-6 columns">
                        <div class="table-center-container large-min-height-320">
                            <div class="table-center-cell">
                                <a href="#sign-up-form" class="ips-white button ips-background-green padding-60-75 h3">Register now</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FORM END -->
            </div>
        </div>
        <!-- background -->
        <div class="ips-background ips-background-image2"></div>
    </section>
    <!--
        row 5: Connect with us
    -->
    <section class="full-screen padding-10-30-0-10">
        <div class="row">
            <div class="large-12 columns text-center">
                <h3 class="text-upper-case display-inline-block hide-for-small ips-white">Connect with us</h3>
                <nav class="display-inline-block">
                    <ul>
                        <li class="display-inline-block"><a href="https://twitter.com/ipsolutionsuk" target="_blank" class="social-icons"><img src="http://www.ipsolutions.co.uk/wp-content/themes/grandcollege/ip-solutions/images/social-01.png"></a></li>
                        <li class="display-inline-block"><a href="https://www.linkedin.com/company/ip-solutions-uk-ltd" target="_blank" class="social-icons"><img src="http://www.ipsolutions.co.uk/wp-content/themes/grandcollege/ip-solutions/images/social-03.png"></a></li>
<!--                        <li class="display-inline-block"><a href="#" class="link-ip-solutions ips-green"><img src="images/ipsolutionslogo.jpg"></a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- background -->
        <div class="ips-background ips-background-grey"></div>
    </section>
  <script language="JavaScript" src="http://aws.predictiveresponse.net/http/trac.js"> </script>
  <script language="JavaScript"> trackPredictive(); </script>
  <script src="<?php echo $rootDir; ?>QapTcha/jquery/jquery.js"></script>
    <script src="<?php echo $rootDir; ?>bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo $rootDir; ?>js/app.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7">
    </script>
    <script src="<?php echo $rootDir; ?>js/maplace-0.1.3.js"></script>
    <script src="<?php echo $rootDir; ?>js/maplace.config.js"></script>
    <script src="<?php echo $rootDir; ?>Happy.js/happy.js"></script>
    <script src="<?php echo $rootDir; ?>Happy.js/happy.methods.js"></script>
    <script src="<?php echo $rootDir; ?>Happy.js/happy.config.js"></script>
    <script src="<?php echo $rootDir; ?>QapTcha/jquery/jquery-ui.js"></script>
    <script src="<?php echo $rootDir; ?>QapTcha/jquery/jquery.ui.touch.js"></script>
    <script src="<?php echo $rootDir; ?>QapTcha/jquery/QapTcha.jquery.min.js"></script>
    <script type="text/javascript">
      // More complex call
      $('.QapTcha').QapTcha(
        {
          autoSubmit: false,
          autoRevert: true,
          PHPfile: 'http://www.ipsolutions.co.uk/wp-content/themes/grandcollege/ip-solutions/QapTcha/php/Qaptcha.jquery.php'
        }
      );
    </script>
    </body>
</html>
