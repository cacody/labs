<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Giannobile Lab</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Custom styles-->
        <link rel="stylesheet" href="css/styles.css">
        
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Karma:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	<?php include('includes/pubmed.php'); ?>


    </head>
    <body>

        <div>
            <div class="container">
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-10">
                        <img src="images/Dentistry_v3.0.png" class="hidden-xs" style="margin-right:40px; margin-bottom:10px"><img src="images/Giannobile%20Lab%20Logo.png" style="padding:10px;">
                    </div>

                </div>
            </div>
         
            <div class="container" style="padding:20px;">
                <div class="row">
                    
                    <!-- NAVIGATION-->
                    <div class="col-md-2">

                        <div class="sidebar-nav">
                            <div class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                <span class="visible-xs navbar-brand">Sidebar menu</span>
                                </div>
                                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                        <li><a href="#director" data-toggle="tab" style="color:#fff;">Director</a></li>
                                        <li><a href="#publications" data-toggle="tab">Publications</a></li>
                                        <li><a href="#news" data-toggle="tab">News &amp; Media</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lab Team <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#current-members" data-toggle="tab">Current Members</a></li>
                                                <li><a href="#alumni" data-toggle="tab">Alumni</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#contact" data-toggle="tab">Contact</a></li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                    
                    <!--MAIN CONTENT-->
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <div class="col-md-7">
                                <div class="flex-video widescreen">
                                    <iframe width="640" height="360" src="https://www.youtube.com/embed/-Ropu3QiGKg" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-3" style="line-height:2em;">
                                <p class="karma-light"><i class="fa fa-quote-left" style="padding:10px 10px 10px 0; color:#b9b9b9;"></i>Our laboratory is exploring the potential of novel methods of growth factor delivery such as gene therapy to stimulate periodontal tissue repair.<i class="fa fa-quote-right" style="padding:0 0 10px 10px;color:#b9b9b9;"></i></p><p><strong>William Giannobile, DDS, MS, DMSc</strong></p>
                                <p style="padding-top:20px;"><a href="http://jdr.sagepub.com/" target="_blank"><img src="images/JDR-logo.jpg"></a></p>
                            </div>
                        </div>

                        <div id="about" class="tab-pane fade">
                            <h2>About</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                        <p>Our laboratory’s main goal is to explore the potential of novel methods for growth factor delivery, such as gene therapy, for restoring periodontal tissue lost due to oral disease. Working with investigators at the College of Engineering, we are able to immobilize PDGF and BMP adenoviral vectors onto various biomaterials for soft tissue and bone regeneration in vivo.</p><p>We also are investigating ways to improve outcomes for patients with implants. In addition to our studies examining increased implant osseointegration, we are researching new methods to incorporate periodontal ligament with alveolar bone and titanium.</p><p>Finally, the lab has been involved in clinical research studies that analyze oral fluids (whole saliva, crevicular fluid) in order to identify predictive markers of gingivitis, periodontal disease progression and peri-implant bone loss. By combining the levels of specific biomarkers together with the expression levels of certain bacteria within patient plaque samples, we are able to better determine the patient’s disease status resulting in a more effective treatment plan.</p>
                                    <hr>
                                    <img src="images/lab-team.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="director" class="tab-pane fade">
                            <h2>Director</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="images/wgiannobile2013.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <p><strong>William V. Giannobile, DDS, MS, DMSc</strong><br><em>Najjar Endowed Professor of Dentistry and Biomedical Engineering</em><br>Department of Periodontics and Oral Medicine<br>University of Michigan School of Dentistry<br>1011 N. University Ave, Rm #3397<br>Ann Arbor, MI 48109-1078<br>734-763-2105 <a href="mailto:wgiannob@umich.edu">wgiannob@umich.edu</a></p>
                                    </div>                                
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-8 col-md-offset-2">
                                        <p>Dr. Giannobile is the Najjar Endowed Professor of Dentistry and Biomedical Engineering and Chair of the Department of Periodontics and Oral Medicine at the School of Dentistry.  He received his DDS and an MS in Oral Biology from the University of Missouri.  He later received his certificate in Periodontology and Doctor of Medical Science in Oral Biology from Harvard University.  He subsequently completed postdoctoral training in Molecular Biology at the Dana Farber Cancer Institute and Harvard Medical School.</p><p>Dr. Giannobile previously served as a faculty member at Harvard and Forsyth Institute in Boston.  He has published and lectured extensively in the fields of Regenerative Medicine, Tissue Engineering, and Salivary Diagnostics as it relates to periodontal and peri-implant reconstruction.</p><p>Dr. Giannobile is an Editor-in-Chief of the Journal of Dental Research and is on the editorial boards of multiple journals. He is a fellow of the American College of Dentists and a Diplomate of the American Board of Periodontology. Dr. Giannobile currently serves as president of the American Academy of Periodontology Foundation.</p><p>Dr. Giannobile also serves as a consultant to the National Institutes of Health. To read more about Dr. Giannobile as an NIDCR investigator, please visit the NIDCR website for an article on the future impact of research on periodontal disease.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="publications" class="tab-pane fade">
                            <h2>Publications</h2>
                            <div class="col-md-10">
				<p>The most recent 20 publications are reported below via PubMed search.</p>
				<p>To see all PubMed results go to this <a href="http://www.ncbi.nlm.nih.gov/pubmed?term=Giannobile%2C%20William%5BAuthor%5D">complete listing of publications by Dr. Giannobile.</a> 
                              
				<?php
get_pubmed("http://www.ncbi.nlm.nih.gov/entrez/eutils/erss.cgi?rss_guid=1pq-4TZ0w1pPilAGHGL1ZYRNQcRJNJ26oVFPZxI1iNnEUpUQlI");
?>  
                                                              
                            </div>
                        </div>
                        
                        <div id="news" class="tab-pane fade">
                            <h2>News &amp; Media</h2>
                            <p><a href="http://dent.umich.edu/news/2015/10/14/new-michigan-regenerative-medicine-center-formed#sthash.1kePNUez.dpuf">Dr. Giannobile and Dr. Kohn receive grant for new regenerative medicine center</a>: M-Dentistry News</p>
                            <p><a href="http://dent.umich.edu/news/2015/06/29/u-m-school-dentistry-others-pioneer-new-approach-dental-care#sthash.qNMdW5GD.nP3Yq99R.dpbs">Dr. Giannobile helps pioneer new approach to dental care</a>: M-Dentistry News</p>
                            <p><a href="http://drupal.dent.umich.edu/news/2010/january/giannobile-named-new-jdr-editor-chief">DentNEWS</a>: Dr. Giannobile named new JDR editor-in-chief</p><p><a href="http://www.ns.umich.edu/htdocs/releases/story.php?id=6880">Gene therapy to treat gum disease</a>: U-M News Service</p><p><a href="http://www.nidcr.nih.gov/Research/facingthefuture/periodontal.htm">The future of periodontology</a>: An interview with Dr. William Giannobile and Dr. Pamela Robey</p><p><a href="http://www.ns.umich.edu/htdocs/releases/story.php?id=6394">Growth rate of replacement blood vessels, tissues</a>: U-M News Service</p><p><a href="http://www.umich.edu/news/?Releases/2005/Feb05/r020105b">Gene therapy promising for growing tooth-supporting bone</a>: U-M News Service</p>
                        </div>

                        <div id="current-members" class="tab-pane fade">
                            <h2>Current Members</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                       <div class="container">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/wgiannobile2013.jpg" class="pic-style" height="104px" width="69px">
                                                            <h4>William V. Giannobile, DDS, DMSc</h4><em>Najjar Endowed Professor of Dentistry and Biomedical Engineering<br>Chair, Department of Periodontics and Oral Medicine</em><br>
                                                            <a href="mailto:wgiannob@umich.edu">wgiannob@umich.edu</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">

                                                            <img src="images/jim-sugai.jpg" class="pic-style" >
                                                            <h4>Jim Sugai</h4><em>Research Laboratory Specialist Senior</em>
                                                            <a href="mailto:jsugai@umich.edu">jsugai@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/sophia-pilipchuk.jpg" class="pic-style" height="104px" width="89px">
                                                            <h4>Sophia Pilipchuk</h4><em>PhD Graduate Student</em><br>
                                                            <a href="mailto:spilipch@umich.edu">spilipch@umich.edu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/LauraKruger.jpg" class="pic-style">
                                                            <h4>Laura Kruger</h4><em>Research Technician</em><br>
                                                            <a href="mailto:krulaura@umich.edu">krulaura@umich.edu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/lena-larsson.png" class="pic-style" height="104px" width="69px">
                                                            <h4>Dr. Lena Larsson</h4><em>Visiting Scholar</em><br>
                                                            <a href="mailto:mlarssons@umich.edu">mlarsson@umich.edu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/Ning_Yu.JPG" class="pic-style" height="104px" width="69px">
                                                            <h4>Ning Yu</h4><em>Postdoctoral Fellow</em><br>
                                                            <a href="mailto:niyu@umich.edu">niyu@umich.edu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/jie%20hao.jpg" class="pic-style">
                                                                <h4>Jie Hao</h4><em>Research Scholar</em><br>
                                                            <a href="mailto:hjie@umich.edu">hjie@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/Angeliki%20Polymeri.jpeg" class="pic-style" height="104px" width="69px">
                                                                <h4>Angeliki Polymeri</h4><em>ITI Scholar</em><br>
                                                            <a href="mailto:polyan@umich.edu">polyan@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/Alexandra%20Plonka.JPG" class="pic-style">
                                                                <h4>Alexandra Plonka</h4><em>Periodontics MS student</em><br>
                                                            <a href="mailto:aplonka@umich.edu">aplonka@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/Alberto%20Monje_formal.jpg" class="pic-style">
                                                                <h4>Alberto Monje</h4><em>Periodontics MS student</em><br>
                                                            <a href="mailto:amonjec@umich.edu">amonjec@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/Erin_Shan-Huey%20Yu_5423.JPG" class="pic-style" height="104px" width="69px">
                                                                <h4>Erin Shan Huey Yu</h4><em>Periodontics MS student</em><br>
                                                            <a href="mailto:shanhyu@umich.edu">shanhyu@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/nolan.jpg" class="pic-style">
                                                                <h4>Nolan Kavanagh</h4><em>Undergraduate student</em><br>
                                                            <a href="mailto:nolankav@umich.edu">nolankav@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div>                                               
                                            </div> 
                                           <div class="row">
                                                <div class="col-md-5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <img src="images/JeffWang.jpg" class="pic-style" style="height:104px; width:69px;">
                                                                <h4>Jeff CW Wang</h4><em>Clinical Assistant Professor</em><br>
                                                            <a href="mailto:jeffwa@umich.edu">jeffwa@umich.edu</a>

                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-5">
                                                    &nbsp;
                                                </div>                                               
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="alumni" class="tab-pane fade">
                            <h2>Alumni</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                         <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Hermann Agis<br>
                                                    <a href="mailto:hermann.agis@meduniwien.ac.at">hermann.agis@meduniwien.ac.at</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Salvatore Batia<br>
                                                    <a href="mailto:salvomarioclaudio@yahoo.it">salvomarioclaudio@yahoo.it</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Po Chun Chang<br>
                                                    <a href="mailto:changpc@ntu.edu.tw">changpc@ntu.edu.tw</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Jong-Hyuk Chung<br>
                                                    Kyung Hee University, Seoul, Korea</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Joni Cirelli<br>
                                                    <a href="mailto:cirelli@foar.unesp.br">cirelli@foar.unesp.br</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Roberto Farina<br>
                                                    <a href="mailto:roberto.farina@unife.it">roberto.farina@unife.it</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Lukas Furhauser<br>
                                                    <a href="mailto:lukas.fuerhauser@gmx.at" target="_blank">lukas.fuerhauser@gmx.at</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Reinhard Gruber<br>
                                                    <a href="mailto:reinhard.gruber@meduniwien.ac.at">reinhard.gruber@meduniwien.ac.at</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Qiming Jin<br>
                                                <a href="mailto:jinqm@umich.edu">jinqm@umich.edu</a></p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Zhao Lin<br>
                                                    <a href="mailto:zlin@vcu.edu">zlin@vcu.edu</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Julie Marchesan<br>
                                                    <a href="mailto:julmarch@umich.edu">julmarch@umich.edu</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Andrea Ottonello<br>
                                                <a href="mailto:andrea8nello@gmail.com">andrea8nello@gmail.com</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Chan Ho Park<br>
                                                <a href="mailto:chanho@umich.edu">chanho@umich.edu</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Gaia Pelligrini<br>
                                                <a href="mailto:gaiapellegrini.perio@gmail.com">gaiapellegrini.perio@gmail.com</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Christoph Ramsier<br>
                                                <a href="mailto:christoph.ramseier@zmk.unibe.ch">christoph.ramseier@zmk.unibe.ch</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Stefan Schroeckmair, Bernhard Gottlieb University Clinic of Dentistry, Vienna, Austria</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Seung-Yun Shin&nbsp;<br>
                                                <a href="mailto:ssyislet@khu.ac.kr">ssyislet@khu.ac.kr</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Mario Taba, Jr.<br>
                                                <a href="mailto:mtaba@forp.usp.br">mtaba@forp.usp.br</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                   <p>Dr. Valeria Tedeschi<br>
                                                <a href="mailto:valeriapontelli@forp.usp.br">valeriapontelli@forp.usp.br</a></p> 
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Kemal Ustun<br>
                                                <a href="mailto:k_unstun@yahoo.com">k_ustun@yahoo.com</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Christian Wehner,&nbsp;Bernhard Gottlieb University Clinic of Dentistry,&nbsp;Vienna, Austria</p>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>Dr. Andreas Weisbauer<br>
                                                <a href="mailto:andreasweisbauer@hotmail.com">andreasweisbauer@hotmail.com</a></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>Dr. Yang-Jo Seol<br>
                                                <a href="mailto:yjseol@snu.ac.kr">yjseol@snu.ac.kr</a></p>
                                                </div>
                                                <div class="col-md-3">

                                                </div>
                                            </div>                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div id="contact" class="tab-pane fade">
                            <h2>Contact</h2>
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>Giannobile Lab</h3><p>University of Michigan School of Dentistry<br>Department of Periodontics &amp; Oral Medicine<br>Room 3310-O Dental Building<br>1011 N. University Avenue<br>Ann Arbor, MI 48109</p><p><strong>Phone:</strong> 734-615-2467<br><strong>Fax:</strong> 734-763-5503</p>
                                </div>
                                <div class="col-md-7">
                                    <img src="images/IMGP5255.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>              
        <!-- Footer -->

        <footer class="footer">
            <div class="container blue-text small-text">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/Dent-sgntr-mrktng-2014.png" style="padding:15px;"> 
            
                    </div>
                    <div class="col-md-8" style="text-align:right">
                        <p style="padding:10px;"><a href="index.html">Giannobile Lab</a> | Room 3310-O Dental Building | 1011 N. University Ave, Ann Arbor, MI 48109 | <a href="mailto:wgiannob@umich.edu">wgiannob@umich.edu</a> |<br>734-615-2467 | Fax 734-763-5503 | &copy;2015</p>
                    </div>
                </div>    
            </div>  
        </footer>

        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51613058-6', 'auto');
  ga('send', 'pageview');

</script>        
    </body>
</html>
