<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>JNTUA CEA</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">

<link rel="icon" href="images/favicon.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<?php include "loader.php"; ?>

<!--Header-->
<?php include "header.php";

require_once("awards.class.php");
  $obj = new awards();
  $res = $obj->getawards();



 ?>
<!--Search-->

<br>
<div class="row">
        <div class="col-sm-12 col-md-3 cs" style="border-right:1px dotted #cccccc; width:25%;">
</div>
<div class="col-md-9 blog-pull-right">
<table width="100%">
<tr>
  <td width="75%" height="35"><table width="100%" border="0" cellspacing="0" cellpadding="0"  class="pagetitle">
    <tr>
      <td height="38" align="left" valign="top" ><div class="welcome">Awards & Honours</div></td>
      </tr>
    </table></td>
</tr>
<tr>
  <td height="35"><p style="color:#d80073;"> <?php if(!empty($res['status']) && $res['status']==1){ ?>
  
    <ul >
	<?php
	for($i=0;$i<10;$i++){?>
      <li class="lists"><strong><?php echo $res[$i]['name'];?>,</strong> <?php echo $res[$i]['role'];?> of <?php echo $res[$i]['branch'];?>  received <strong><?php echo $res[$i]['award'];?> for the year <?php echo $res[$i]['year'];?></strong> by the <?php echo $res[$i]['govt'];?>. </li>
     <?php
	}
  }
	?>
      </ul>
	 

    
    <p style="color:#d80073;"><strong>Other Awards and Honors (2016-17)</strong></p>
   
    <ul>
    <li class="lists"><a href="http://jntuhceh.org/images/DSC_0245_award.jpg" target="_blank">Dr. A. Jaya Laxmi, Prof. of EEE & Coordinator, Centre for Energy Studies received  <strong>"OUTSTANDING WOMAN EDUCATOR & SCHOLAR AWARD"</strong>  for astounding contribution to teaching and Scholarly activities in the field of Electrical & Electronics Engineering on 8th March 2017 by National Foundation for Entrepreneurship Development (NFED) at Coimbatore, Tamil Nadu in Women's Day Awards 2017.</a> </li>
      <li class="lists"><strong>Dr. A.  Govardhan,</strong> Professor of CSE and received Dr. CINAREY (Dr.C.Narayana Reddy)  Meritorious Award in the year 2017. </li>
      <li class="lists"><strong>Dr. A.  Govardhan,</strong> Professor of CSE received Telangana IT Association (TITA) Excellence  Award in the year 2016. </li>
      <li class="lists">National Instruments Engineering  Impact award is awarded as winner (runner being IIT Jodhpur) to <strong>Dr. K.H. Phanisree and her team, </strong>EEE  Dept, JNTUH for her work on closed loop control of Three Phase Inverter  voltage, doubly fed induction generator for wind power applications using  Labview FPGA &amp; CRIO in the year 2016.</li>
      </ul>
    <p><strong>&nbsp;</strong></p>
    <p style="color:#d80073;"><strong>Other Awards and Honors (2015-16)</strong></p>
    <ul >
      <li class="lists"><strong>Dr. A.  Govardhan,</strong> Professor of CSE received Dr. Sarvepalli Radhakrishnan <strong>National Award  for the year 2015</strong>.</li>
  
      <li class="lists"><strong>Dr. P. Srinivasa Rao,</strong> Professor of  Civil Engineering received <strong>ICI-ULTRATECH</strong>  Award<strong> </strong>for <strong>Outstanding Concreae  Engineer</strong> of Telangana State 2015.</li>
     
      <li class="lists"><strong>Dr.K.Bhaskar</strong>, Assistant  Professor of EEE <strong>POSOCO Power System  Award-2015</strong>, Power System Operation Corporation Limited and Foundation for  Innovation &amp; Technology Transfer (FITT), IIT, Delhi, 2015. </li>
      
      <li class="lists"><strong>Dr.M.V.Seshagiri Rao</strong> Professor  of Civil Engineering received the <strong>Best Paper Award by Indian Concrete  Institute</strong>.</li>
     
      <li class="lists"><strong>Dr.M.V.Seshagiri Rao</strong> Professor  of Civil Engineering received the <strong>Best  Paper Award by Institute of Engineers.</strong></li>
      
      <li class="lists"><strong>Dr.Ch.Venkata Ramana Reddy</strong>, Professor of Chemistry received Teaching <strong>Excellence Award  by  Indus Foundation in 2015</strong>.</li>
      <li class="lists"><strong>Mr. E.  Lalith Aditya</strong> bearing H.T. No. 14011A0319, a  student of 3rd Year B.Tech. Mechanical Engineering, JNTUHCEH is Recipient of  <strong>NSS State Award by the Govt. of Telangana for the year 2015-16</strong>.</li>
      </ul>
    <p style="color:#d80073;"><strong><br />
      Other Awards and Honors (2014-15) </strong></p>
    <ul >
      <li class="lists"><strong>Dr. P. Madhusudana Rao,</strong> Professor of Physics got <strong>Teaching  Excellence Award</strong> by Indus Foundation USA &amp; India in November, 2014.</li>
      <li class="lists"><strong>Dr. M.Madhavi Latha, </strong>has been awarded as <strong>Exchange Visitor Award</strong> by Dept of  states, Institute of International Education, USA</li>
      <li class="lists"><strong>Dr. J. Suresh Kumar,</strong> Professor of Mechanical Engineering was awarded as <strong>Best NSS Programme Officer</strong> by the Govt. Andhra Pradesh. </li>
      <li class="lists"><strong>Dr. K. Bhaskar,</strong> was awarded <strong>POSOCO Power System  Award-2015</strong> in the area of Power System Operation Corporation Limited and  Foundation for Innovation &amp; Technology Transfer (FITT), IIT, Delhi, 2015.</li>
      <li class="lists"><strong>Dr. A. Jaya Laxmi,</strong> Professor of EEE, Centre for Energy Studies was awarded <strong>Best Oral Poster presentation</strong> <strong>Award</strong> at Eleventh IEEE Indi Conference INDICON-2014, Pune Section held during 11-13,  December, 2014. </li>
    </ul></td>
</tr>

</table>


   </div>
</div>

<!--<textarea type="text"  name="txtarea" rows="5" style="font-family: Arial;font-size: 12pt;width:100%;">
</textarea> -->
<!--FOOTER-->

<!--FOOTER ends-->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; <a href="policy.php">JNTUACEA</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->



<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
