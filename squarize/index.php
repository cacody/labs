<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Squarize Lab</title>

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
    
        <div id="home">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-10">
                        <img src="images/Dentistry_v3.0_white.png" class="hidden-xs" style="margin-right:40px; margin-bottom:10px"><img src="images/squarize-lab-logo.png" style="padding:10px;">
                    </div>

                </div>
            </div>


            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-custom" style="margin-bottom:0">
                <div class="container">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right nav-tabs" style="font-size:1.5em;">
                            <li><a href="#top" data-toggle="tab">Home</a></li>
                            <li><a href="#about" data-toggle="tab">About</a></li>
                            <li><a href="#director" data-toggle="tab">Director</a></li>
                            <li><a href="#publications" data-toggle="tab">Publications</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lab Team <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color:#000;">
                                    <li><a href="#team" data-toggle="tab">Current Members</a></li>
                                    <li><a href="#alumni" data-toggle="tab">Alumni</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact" data-toggle="tab">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>
        
        <!-- main content-->
        <div class="tab-content">
            <div id="top" class="tab-pane active fade in" style="position:relative">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1 semi-trans" style="border:#fff 1px solid; color:#fff; margin-top:30px; padding:20px;">
                            <a class="headlinelink" href="http://dent.umich.edu/news/2015/05/04/squarize-wins-major-award-robert-wood-johnson-foundation"><p class="karma-light large-text"><i class="fa fa-quote-left"></i> Squarize Wins Major Award from Robert Wood Johnson Foundation <i class="fa fa-quote-right"></i></p>
                            <p style="text-align:right;"><i class="fa fa-angle-double-right fa-5x"></i></p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="about" class="tab-pane fade">
                <div class="container" style="padding-bottom:50px;">
                        <h2 class="blue-text">ABOUT</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="karma blue-text">Squarize Lab's research interests</h3>
                            <p>We are determined to understand the function of the key signaling molecules and stem cells in epithelial regeneration and disease.</p><p>Our research combines cutting edge technology using in vitro studies and preclinical models aiming to solve important clinical questions and problems related healing of the oral mucosa and skin, as well as, epithelial cancer progression and resistance to therapy.</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="blue-text" style="font-size:1.2em;">Cancer (HNSCC)</span><br>
                                    <img src="images/about1.png"><br><small style="text-align:right">Pullos &amp; Squarize, JDR</small>
                                </div>
                                <div class="col-md-2">
                                    <img src="images/arrow.png" style="margin-top:40px;">
                                </div>
                                <div class="col-md-2">
                                    <span class="blue-text" style="font-size:1.2em;">Stem Cell (epithelial)</span><br>
                                    <img src="images/about2.png"><br><small style="text-align:right">Squarize lab data</small>
                                </div>
                                <div class="col-md-2">
                                    <img src="images/arrow.png" style="margin-top:40px;">
                                </div>                                
                                <div class="col-md-3">
                                    <span class="blue-text" style="font-size:1.2em;">Tissue regeneration (Stem cell - Mucosa/Skin)</span><br>
                                    <img src="images/about3.png"><br><small style="text-align:right">Squarize et al, PLoSOne</small>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="director" class="tab-pane fade">
                <div class="container">
                    <h2 class="blue-text">DIRECTOR</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="images/cristiane-squarize.png">
                                </div>
                                <div class="col-md-9">
                                    <h3 class="karma" style="color:#bfbfbf;">Cristiane H. Squarize, DDS, MS, PhD</h3>
                                    <p><em>Head of Laboratory</em></p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Education</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2003 - 2010</td>
                                                <td>Post-Doctorate, National Institutes of Health (NIH), USA</td>
                                            </tr>
                                            <tr>
                                                <td>2003 - 2005</td>
                                                <td>PhD, Oral Pathology, University of Sao Paulo, Brazil</td>
                                            </tr>
                                            <tr>
                                                <td>2001 - 2003</td>
                                                <td>MS, Oral Pathology, University of Sao Paulo, Brazil</td>
                                            </tr>
                                            <tr>
                                                <td>1989 - 1995</td>
                                                <td>DDS, Pontific Catholic University of Campinas, Brazil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Honors and Awards</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2015</td>
                                                <td>Robert Wood Johnson Foundation – AMFDP Scholar</td>
                                            </tr>
                                            <tr>
                                                <td>2003 - 2005</td>
                                                <td>Fellowship award for post-doctoral training, National Institute of Dental and Craniofacial Research (NIDCR), National Institutes of Health (NIH)</td>
                                            </tr>
                                            <tr>
                                                <td>2003</td>
                                                <td>Fellowship award for PhD education, FAPESP (Foundation for the support of research from the State of Sao Paulo)</td>
                                            </tr>
                                            <tr>
                                                <td>2002</td>
                                                <td>Unilever Travel Award, International Association of Dental Research (IADR), 80th Meeting of the International Association for Dental Research/AADR/CADR</td>
                                            </tr>
                                            <tr>
                                                <td>2001 - 2003</td>
                                                <td>Fellowship award for Master of Science education, FAPESP (Foundation for the support of research from the State of Sao Paulo)</td>
                                            </tr>
                                            <tr>
                                                <td>2001</td>
                                                <td>Edward H Hatton, IADR Brazilian Division - (First Prize) - Brazilian Society of Dentistry for research (SBPqO)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Academic Appointments and Professional Experience</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2015 - present</td>
                                                <td>Global Initiative Leader – Brazilian division – UM School of Dentistry Global Initiative</td>
                                            </tr>
                                            <tr>
                                                <td>2010 - present</td>
                                                <td>Assistant Professor, University of Michigan School of Dentistry, Ann Arbor, Michigan, USA</td>
                                            </tr>
                                            <tr>
                                                <td>2003 - 2010</td>
                                                <td>Research Fellow at the National Institutes of Health (NIH), USA</td>
                                            </tr>
                                            <tr>
                                                <td>2001 - 2003</td>
                                                <td>Surgical and Experimental Pathology training and service, University of Sao Paulo, Sao Paulo, Brazil</td>
                                            </tr>
                                            <tr>
                                                <td>1996 - 2001</td>
                                                <td>Dental Surgeon, Proprietor, Private Practice, Campinas, Brazil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
          
            <div id="publications" class="tab-pane fade">
                <div class="container">
                    <h2 class="blue-text">SCIENTIFIC JOURNAL COVERS</h2>
                    <div class="row">
                        <div class="col-md-2"><img src="images/cancer-research-cover.png"></div>
                        <div class="col-md-2"><img src="images/neoplasia-cover.png"></div>
                        <div class="col-md-2"><img src="images/oral-surgery-cover1.png"></div>
                        <div class="col-md-2"><img src="images/oral-surgery-cover2.png"></div>
                        <div class="col-md-2"><img src="images/umich-cover.png"></div>
                                                
                    </div>
                    <h2 class="blue-text">BOOKS AND BOOK CHAPTERS</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/current-methods-book.png">
                        </div>
                        <div class="col-md-9">
                            <ul>
                                <li>Cristiane H. Squarize and Rogerio M. Castilho. Emerging animal models. Current Methods in Medicinal Chemistry and Biological Physics. Edited by Carlton A. Taft , Carlos H. T. P. Silva. Research Signpost 207-226, 2007. ISBN: 81-308-0141-8
</li>
                                <li>Cristiane H. Squarize, Rogerio M. Castilho and Andreia M. Leopoldino. Drug Target Validation. Current Methods in Medicinal Chemistry and Biological Physics. Vol. 2. Edited by Carlton A. Taft, Carlos H. T. P. Silva. Research Signpost 167-186, 2008. ISBN: 978-81-308-0292-3</li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="blue-text">PUBLICATIONS</h2>
                    <div class="col-md-10">
                        <p>The most recent publications are reported below via PubMed search.</p>
                        <p>To see all PubMed results go to the <a href="http://www.ncbi.nlm.nih.gov/pubmed?term=Squarize%20CH[Author]">complete listing of publications by Dr. Squarize.</a></p>
                            <div class="panel-group" id="accordion" role="tablist">
                                
                                <?php get_pubmed("http://www.ncbi.nlm.nih.gov/entrez/eutils/erss.cgi?rss_guid=1dCMR27FLislraIfl26fOMsdd7S6yKjAlfWZkG3fu2Y8mZ9gTy"); ?>  
                            </div>
                    </div>
                </div>
            </div>       
            
            <div id="team" class="tab-pane fade">
                <div class="container">
                    <h2 class="blue-text">LAB TEAM</h2>
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/cristiane-squarize.png">
                                        </div>
                                        <div class="col-md-8">
                                                                            <h3 class="panel-title">Cristiane H. Squarize, DDS, MS, PhD
</h3>
                                    <em>Principal Investigator</em><br><a href="mailto:csquariz@umich.edu">csquariz@umich.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                                       <img src="images/luciana-almeida.png">                     
                                        </div>
                                        <div class="col-md-8">
                                                                            <h3 class="panel-title">Luciana O. Almeida, PhD</h3>
                                    <em>Research Fellow, Biologist</em><br><a href="mailto:lucianao@umich.edu">lucianao@umich.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                                                        <img src="images/vivian-wagner.png">    
                                        </div>
                                        <div class="col-md-8">
                                                                         <h3 class="panel-title">Vivian Petersen Wager, DDS, MS</h3>
                                    <em>Visiting Scholar, PhD Candidate</em><br><a href="mailto:petersev@umich.edu">petersev@umich.edu</a>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/john-le.png">
                                        </div>
                                        <div class="col-md-8">
                                                                            <h3 class="panel-title">John M. Le</h3>
                                    <em>DDS Candidate, Research Pathways Program</em><br><a href="mailto:johnmle@umich.edu">johnmle@umich.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                                       <img src="images/liana-webber.png">                     
                                        </div>
                                        <div class="col-md-8">
                                                                            <h3 class="panel-title">Liana Preto Webber, DDS, MS</h3>
                                    <em>Visiting Scholar, PhD Candidate</em><br><a href="mailto:lpretowe@umich.edu">lpretowe@umich.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                                                        <img src="images/brian-yip.png">    
                                        </div>
                                        <div class="col-md-8">
                                                                         <h3 class="panel-title">Brian Yip</h3>
                                    <em>DDS Candidate, Research Pathways Program</em><br><a href="mailto:brianyip@umich.edu">brianyip@umich.edu</a>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </div>
            </div>

            <!-- Alumni -->
            <div id="alumni" class="tab-pane fade" style="text-align:left;">
                <div class="container">
                    <h2 class="blue-text">LAB ALUMNI</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                           <img src="images/marco-martins.png" class="img-responsive">                     
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Marco Antonio Trevizani Martins, DDS, MS, Ph.D.</h3>
                                    <em>Visiting Professor, Laboratory of Epithelial Biology</em><br><a href="mailto:marcotm@umich.edu">marcotm@umich.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                           <img src="images/chiara-zagni.png" class="img-responsive">                     
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Chiara Zagni, PhD</h3>
                                    <em>Research Fellow, Chemist</em><br><a href="mailto:uchiacch@unict.it">uchiacch@unict.it</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                           <img src="images/fernanda-giudice.png" class="img-responsive">                     
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Fernanda Giudice, DDS, MS</h3>
                                    <em>Visiting Scholar, Laboratory of Epithelial Biology</em><br><a href="mailto:fernandagiudice@yahoo.com.br">fernandagiudice@yahoo.com.br</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/carolina-dillenburg.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Carolina Siviero Dillenburg, DDS, MS</h3>
                                            <em>Visiting Student, Oral Pathology</em><br><a href="mailto:carolsd@gmail.com">carolsd@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/manoela-martins.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Manoela Domingues Martins, DDS, MS, PhD</h3>
                                            <em>Visiting Professor, Sabbatical, Oral Pathology</em><br><a href="mailto:manomartins@gmail.com">manomartins@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                           <img src="images/camila-matsumoto.png" class="img-responsive">                     
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Camila Matsumoto, PhD</h3>
                                    <em>Visiting Scholar, Pharmacist</em><br><a href="mailto:camilasm.85@gmail.com">camilasm.85@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>     
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/alissa-pullos.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Alissa Pullos, DDS</h3>
                                            <em>Research Pathways Program</em><br><a href="mailto:alissa.pullos@uc.edu">alissa.pullos@uc.edu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                           <img src="images/maria-fernandez.png" class="img-responsive">                     
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title">Maria José Fernandez, DDS, PhD</h3>
                                    <em>Visiting Scholar, Orthodontist</em><br><a href="mailto:mariajosefernandez_75@hotmail.com">mariajosefernandez_75@hotmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4"></div>
                    </div>              
                </div>
            </div>            

            <div id="contact" class="tab-pane fade">
                <div class="container">
                    <h2 class="blue-text">CONTACT</h2>
                    <div class="row" style="margin-bottom:50px;">
                        <div class="col-md-6">
                            <img src="images/contact-pic.png" style="padding:3px; border: 1px solid #00274c;">
                        </div>
                        <div class="col-md-6">
                            <span style="font-size:1.5em;"><strong>Squarize Lab</strong></span><br>
                            1011 N. University, Room 6218<br>
                            Ann Arbor, MI 48109-1078<br>
                            734-615-3406<br>
                            <a href="mailto:csquariz@umich.edu">csquariz@umich.edu</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->

        <footer class="footer">
            <div class="container white-text small-text">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/Dent-sgntr-mrktng-2014-whitetext.png" style="padding:15px;"> 
            
                    </div>
                    <div class="col-md-8">
                        <p style="padding:10px;"><a href="index.php">Squarize Lab</a> | 1011 N. University, Room 6218, Ann Arbor, MI 48109-1078 | 734-615-3406 | <a href="mailto:csquariz@umich.edu">csquariz@umich.edu</a> | &copy;2016</p>
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