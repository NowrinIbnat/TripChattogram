<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>

<!DOCTYPE html>





<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>




 <style>
.error {color: #FF0000;}
</style>




<?php include('headerUser.php')?>


 <style>

.error {color: #FF0000;}
</style>


<center>
<fieldset id="">
    
    

    <!--<div  align="center"><img id="logo"  src="pictures/logo.png"></div>

    <h1 id="TLL1" align="center" ><b>The Legal Light</h1>-->
    

    



    <p><br></p><p><br></p>

    <div class="container">
        <div class="row justify-content-center">
            <div id="welcomeBox" class="form_container col-md-6 co-sm-4 col-xs-12" >
                <h4 style="color: #5bffd9;">"A warm welcome and best wishes for your new role as a part of our legal World. On behalf of TheLegalLight, we congratulate you. It is grateful and enthusiastic for your contributions to TheLegalLight"</h4>
            </div>
        </div>
    </div>

    <p><br></p>
</fieldset>

</center>





<body>
    <p><br></p><p><br></p><p><br></p>


    <div class="container tab_wrapper">
         
            <div class="row">
            
                <div class="col-md-12">

                    <div class="tab_container">
                        <input id="tab_1" type="radio" name="tabs" checked>
                        <label for="tab_1"><span ><img src="../images/user.png" id="tab_1_img" class="tab_icon" alt="" style="opacity: 0.75;">CLIENT</span></label>
            
                        <input id="tab_2" type="radio" name="tabs">
                        <label for="tab_2"><span><img src="../images/user.png" id="tab_2_img" class="tab_icon" alt="">ADVOCATE</span></label>
            
                        <input id="tab_3" type="radio" name="tabs">
                        <label for="tab_3"><span><img src="../images/user.png" id="tab_3_img" class="tab_icon" alt="">STUDENT</span></label>






                        <section id="content1" class="tab-content">
                        
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.2.jpeg" alt="Basic Laws"></div>
                                            <div class="tab_box_text">Basic Laws</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.3.jpeg" alt="Find Advocates"></div>
                                            <div class="tab_box_text">Find Advocates</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.4.jpeg" alt="Find Law Firms"></div>
                                            <div class="tab_box_text">Find Law Firms</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.5.jpeg" alt=" Legal Documents"></div>
                                            <div class="tab_box_text"> Legal Documents</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.6.jpeg" alt="Cyber Crime & Security"></div>
                                            <div class="tab_box_text">Cyber Crime & Security</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.7.jpeg" alt="Alternative Dispute Resolution"></div>
                                            <div class="tab_box_text">Alternative Dispute Resolution</div>
                                        </a>
                                    </div>  
                                        
                                                                
                                    <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                        <a href="#">
                                            <div><img src="../images/client/1.8.jpeg" alt="Ask Your Question"></div>
                                            <div class="tab_box_text">Ask Your Question</div>
                                        </a>
                                    </div>    



                        </section>
                        
                        
                        <section id="content2" class="tab-content">
                        
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.2.jpeg" alt="Laws and Acts"></div>
                                        <div class="tab_box_text"> Personal Diary</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.3.jpeg" alt="Laws and Acts"></div>
                                        <div class="tab_box_text">Laws and Acts</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.4.jpeg" alt="International Cases"></div>
                                        <div class="tab_box_text">International Cases</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.5.jpeg" alt="Court Documents"></div>
                                        <div class="tab_box_text">Court Documents</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.6.jpeg" alt="Law News"></div>
                                        <div class="tab_box_text">Law News</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.7.jpeg" alt="Legal E-Books"></div>
                                        <div class="tab_box_text">Legal E-Books</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/lawyer/2.8.jpeg" alt="Reply Your Answer"></div>
                                        <div class="tab_box_text">Reply Your Answer</div>
                                    </a>
                                </div>  
                                    
                        </section>
                        
                        
                        <section id="content3" class="tab-content">
                        
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.2.jpg" alt="Internship"></div>
                                        <div class="tab_box_text">Internship</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.3.jpg" alt="Case Studies"></div>
                                        <div class="tab_box_text">Case Studies </div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.4.jpg" alt="Legal E-books"></div>
                                        <div class="tab_box_text">Legal E-books</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.5.jpg" alt="Notes"></div>
                                        <div class="tab_box_text">Notes</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.6.jpg" alt="Slides"></div>
                                        <div class="tab_box_text">Slides </div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.7.jpg" alt="Exams"></div>
                                        <div class="tab_box_text">Exams</div>
                                    </a>
                                </div>  
                                    
                                                            
                                <div class="col-xs-12 col-sm-4 col-lg-3 tab_box">
                                    <a href="#">
                                        <div><img src="../images/student/3.8.jpg" alt="Pupillage"></div>
                                        <div class="tab_box_text">Pupillage</div>
                                    </a>
                                </div>  
                                    
                                 
                        </section>
                        

                    </div>
                    
                    <div class="clearfix"></div>
            
                </div> <!-- End Column 12 -->
                
        </div>




        <p><br></p><p><br></p><p><br></p><p><br></p>





        <div id="aboutUs">
            <h1>About Us</h1>
        </div>

        <p><br></p>



        <div class="container">
            <div class="row justify-content-center">
                <div id="aboutBox" class="form_container col-md-8 co-sm-4 col-xs-12" >
                    <h4>"TheLegalLight.com's aim is to provide Clients, Advocates, and Students with free legal access to high-quality legal information.The Internet has provided a once-in-a-lifetime opportunity to assist those seeking legal advice and information from the comfort of their own homes. 
                    Please feel free to browse the sections of our website that interest you to learn more about our legal services and information for specific hardship situations. 
                    Our mission is to provide you with legal advice and information to assist you in resolving your legal issue, regardless of your personal situation."</h4>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>


    

    <br><br>



</body>


 





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





</html>

<?php include('footer.php');?>