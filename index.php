
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>BILLING SYSTEM</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/cust.css" rel="stylesheet">

  
</head>


<body>
  <div class="container display-table">
              <div class="row ">
                <header id="nav-header" class="clearfix">
                  <div class="col-md-5"></div>
                  <div class="col-md-7">
                    <ul class="pull-right ">
                        <li id="welcone" class="hidden-xs hidden-lg hidden-md"><?php echo date("l jS \of F Y h:i:s A"); ?>Beta</li>
                        <li class="fixed-width">
                          <a href="#"></a>
                          <span class="glyphicon glyphicon-bell hidden-xs hidden-lg hidden-md" aria-hidden="true"></span>
                          <span class="label label-warning hidden-xs hidden-lg hidden-md">0</span>
                        </li>
                        <li class="fixed-width ">
                          <a href="#"></a>
                           <span class="glyphicon glyphicon-envelope hidden-xs hidden-lg hidden-md " aria-hidden="true"></span>
                           <span class="label label-message hidden-xs hidden-lg hidden-md">4</span>
                        </li>
                        <li>
                          <a href="#" class="logout">

                              <span class="glyphicons glyphicons-satellite"><?php echo date("l jS \of F Y h:i:s A"); ?> BETA</span> </a>


                        </li>
                     </ul>
                   </div>
                </header>
              </div>

              <div class="row  ">
                <div class="col-md-1 col-xs-1 col-sm-1"></div>
                  <div class="col-md-10 dashboard-center-cell">
                      <div class="admin-content-con">
                        <header>
                          <h5>Electricity Bill calculator <span class="label label-warning">ASSAM</span></h5>
                        </header>
                        <form method="POST" action="#" enctype="multipart/form-data">
                          <div class="row ">
                            <div class="col-md-1" ></div>
                            <div class="col-md-3 col-xs-4" >
                              <label class="hidden-md hidden-lg"> Prev </label><label class="hidden-xs "> Prv. Reading- </label>
                            <input type="number" name="pv" maxlength="5" id="frm-signUpForm-username" required data-nette-rules="[{"op":":filled","msg":"Please enter your Meter Readings."}]" value="" class="form-control" placeholder="Previous" />





                            </div>
                            <div class="col-md-3 col-xs-4" >
                              <label class="hidden-md hidden-lg">Current- </label><label class="hidden-xs">Current Reading- </label>
                              <input type="number" name="cv" maxlength="5" id="frm-signUpForm-username" required data-nette-rules="[{"op":":filled","msg":"Please enter your Meter Readings."}]" value="" class="form-control" placeholder="Current" />
                            </div>
                            <div class="col-md-3 col-xs-3" >
                              <label class="hidden-md hidden-lg">Days  </label><label class="hidden-xs">Number Of Days  </label>
                              <input type="number" name="d"  id="frm-signUpForm-username" required data-nette-rules="[{"op":":filled","msg":"Please enter your Meter Readings."}]" maxlength="3" value="" class="form-control" placeholder="Days" />
                            </div>
                            <div class="col-md-2 " ></div>
                          </div>

                          <div class="row ">
                            <div class="col-md-2" ></div>
                            <div class="col-md-4 " ></div>
                            <div class="col-md-4 " >
                              </br>
                                <button type="submit" name="tri" class="btn btn-success pull-right" >Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                  <div class="row ">
                      <div class="col-md-1"></div>
                    <div class="col-md-10 dashboard-center-cell">
                      <div class="admin-content-conn">


                         <div class="row">
                           <div class="col-md-2 "></div>
                           <div class="col-md-2 col-xs-3 "><label class="hidden-md hidden-lg">En.Chg </label><label class="hidden-xs">Energy Charge</label></div>
                           <div class="col-md-1 col-xs-1 "><span class="label label-warning">Rs. 7.55</span></div>
                           <div class="col-md-2 col-xs-2"></div>
                           <div class="col-md-2 col-xs-3 "><label class="hidden-md hidden-lg">GOVT.sub </label><label class="hidden-xs">Govt. Subsidy</label></div>
                            <div class="col-md-1 col-xs-1 pull-left"><span class="label label-info">Rs. 0.6</span></div>
                            <div class="col-md-2 "></div>

                         </div>
                     </div>
                       <div class="col-md-1"></div>
                   </div>

                  </div>




           <?php
           error_reporting(0);
           if(isset($_POST['tri']))
           {

               $pv= $_POST['pv'];
               $cv= $_POST['cv'];



               $date=$_POST['d'];

               $fec="7.6";
               $fgs="0.6";
               $fmr="0.26";
               $fc="3.63";
               $ed=".10";


               echo $unit;

               //claculation part
                          //drived in unitconsumed
                              $unit=$cv-$pv;
                          //energy charge calculation
                              $enCharge=$unit*$fec;

                         //GOVT. subsidy calculation
                              $GSS=$unit*$fgs;

                         //fixed charge calculation
                              $tfc=$date*$fc;
                        // extra Rs 10
                        $ext="9";

                        //meter rent calculation
                        $mr=$date*$fmr;
                        //caclulation of electric duty
                        $edty=$unit*$ed;



                        //actual amount

                        $amount=$enCharge;

                        $amount1=$amount-$GSS;
                        $amount2=$amount1+$tfc;
                        $amount3=$amount2+$mr;
                        $amount4=$amount3+$ext;
                        $amount5=$amount4+$edty;

                        //display
                        //echo $amount .'</br>';
                        //echo $GSS .'</br>';
                        //echo $amount1 .'</br>';
                        //echo $tfc .'</br>';
                       //echo $mr .'</br>';
                        //echo $amount2 .'</br>';
                        //echo $amount3 .'</br>';
                        //echo $amount4 .'</br>';
                        //echo $amount5 .'</br>';



                if ($cv < $pv) {

                  echo '<div class="row ">
                      <div class="col-md-1"></div>
                    <div class="col-md-10 dashboard-center-cell">
                      <div class="admin-content-conn">
                        <div class="row">
                           <div class="col-md-2 "></div>
                         <div class="col-md-8">

                           <font color="red"><h2 class="hidden-xs" align="center" ><span class="label label-danger">Opps.. Readings are not in Correct position</span></h2></font>
                           <font color="red"><h4 class="hidden-md hidden-lg" align="center" ><span class="label label-danger">Opps.. Readings are not in Correct position</span></h4></font>

                          </div>
                            <div class="col-md-2 "></div>

                         </div>
                     </div>
                       <div class="col-md-1"></div>
                   </div>

                </div>

                  ';
                }

                elseif ($cv == $pv) {
                  echo '<div class="row ">
                      <div class="col-md-1"></div>
                    <div class="col-md-10 dashboard-center-cell">
                      <div class="admin-content-conn">
                        <div class="row">
                           <div class="col-md-2 "></div>
                         <div class="col-md-8">

                           <font color="red"><h2 class="hidden-xs " align="center" ><span class="label label-danger">Opps.. You Entered Same Readings </span></h2></font>
                           <font color="red"><h4 class="hidden-md hidden-lg" align="center" ><span class="label label-danger">Opps.. You Entered Same Readings </span></h4></font>


                          </div>
                            <div class="col-md-2 "></div>

                         </div>
                     </div>
                       <div class="col-md-1"></div>
                   </div>

                </div>

                  ';
                }
                else {



                  echo '
                           <div class="row ">
                               <div class="col-md-1"></div>
                             <div class="col-md-10 dashboard-center-cell">
                               <div class="admin-content-conn">
                                 <div class="row">
                                    <div class="col-md-2 "></div>
                                  <div class="col-md-8">
                                    <font color="red"><h5 align="center" ><b>Your Approx Bill is </b></h5></font>
                                    <h1 align="center"><span class="label label-success"> ' .$amount5.'**</span></h1></div>
                                     <div class="col-md-2 "></div>

                                  </div>
                              </div>
                                <div class="col-md-1"></div>
                            </div>

                         </div>';
}
}


else {



                         echo '
                                  <div class="row ">
                                      <div class="col-md-1"></div>
                                    <div class="col-md-10 dashboard-center-cell">
                                      <div class="admin-content-conn">
                                        <div class="row">
                                           <div class="col-md-2 "></div>
                                         <div class="col-md-8">
                                            <font color="sky blue"><h5 align="center" ><b>Please Enter Commercial Meter Readingd And Number of Days For Your BILL** Details</b></h5></font>
                                           <font color="red"><h5 align="center" ><span class="label label-danger">NOT FOR JEEVAN USERs </span></h5></font>


                                          </div>
                                            <div class="col-md-2 "></div>

                                         </div>
                                     </div>
                                       <div class="col-md-1"></div>
                                   </div>

                                </div>';




           }



            ?>











           <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-10 dashboard-center-cell">
               <div class="admin-content-connn">
                 <header class="hidden-xs">
                     <h5 align="center">**The result shown will be in approx value non of the organisation is responsible for mismatch with original bill Issued</h5>
                  </header>
                  <h5 align="center" class="hidden-lg" >**The results Shown will be in approx value on one is responsible for mismatch with bill Issued</h5>


                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
			
			
			
			<?php
// Prints the day
//echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
//echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
//echo "7 14th,1975 was on a ".date("l", mktime(0,0,0,7,24,2016)) . "<br>";

// Use a constant in the format parameter
//echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
//echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));

$date=date_create(null,timezone_open());
$tz=date_timezone_get($date);
echo timezone_name_get($tz);

?>


            <div class="row">
              <footer id="admin-footer" class="clearfix">
                <div class="pull-left"> <b>Design and Developed by <a href="https://www.facebook.com/N8r0x">Tridip Das</a> </b> </div>
                <span class="social social-facebook"></span>

              </footer>
            </div>





</div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/cust.js"></script>
</body>

</html>
