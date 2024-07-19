<?php
include("header.php")
?>



<style>
    p{
        text-transform: capitalize;
        color : black;
        font-size : 17px;
    }

    .img-fluid1{
    height: 300px;
    }

    .img-fluid2{
    height: 300px;
        }


   
</style>







 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">A LEADING LAW FIRM</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4"> where the truth will always prevail</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Get An Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">PASSION MEETS PRECISION</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We’re here for you! any city! any case! any time!</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/about4.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">We Believe In Bringing Clarity To The Most Complex Cases!</h1>
                    <p>Welcome to <b>LAWFINITY</b>, where excellence, integrity, and commitment intersect to serve your legal needs. Founded on the principles of trust, professionalism, and unwavering dedication to our clients, we are a dynamic team of legal experts dedicated to providing exceptional legal representation and personalized solutions.
                <br>
                    At <b>LAWFINITY</b>, we understand that each legal matter is unique and requires tailored strategies to achieve the best possible outcome. Our team consists of experienced attorneys who specialize in various areas of law, including  corporate law, litigation, intellectual property, real estate, family law, and criminal defense.</p>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Our Practice</h6>
                    <h1 class="mb-4">Our Practice Areas</h1>
                    <p>Our practice areas encompass a diverse range of legal specialties, including corporate law, litigation, intellectual property, real estate, family law, and criminal defense. With expertise in these fields, we are equipped to provide comprehensive legal services tailored to your specific needs.</p>
                    <a href="" class="btn btn-primary mt-2">More Services</a>
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">In civil law, we handle contracts, property disputes, and personal injury claims, ensuring your rights are protected</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">In family law, we offer compassionate guidance and effective advocacy for divorce, custody, adoption, and more, ensuring the best outcomes for you.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">In business law, we excel in transactions, contracts, compliance, and dispute resolution, protecting your interests with precision.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">In criminal law, we offer vigorous defense and strategic representation, safeguarding your rights and striving for the best possible outcome in your case.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


   
<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>

                            <form method="Post" enctype="multipart/form-data" >

                                <div class="form-group">
                                <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label"> Name :</label>
                                    <input type="text" class="form-control border-0 p-4" name="name" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label"> Email :</label>
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label"> Phone :</label>
                                    <input type="number" class="form-control border-0 p-4" name="phone" placeholder="Your Phone Number" required="required" />
                                </div>

                                <?php


$query = "select * from lawyer_services";
$data = mysqli_query($con,$query);
?>


                    <div class="mb-3">
                      <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label"> Select Your Service :</label>
                      <select  class="form-control" name="services">
<?php
                      while($row = mysqli_fetch_array($data)){ 
?>

                            <option value="<?php echo $row["id"]  ?>"><?php echo $row["service_name"] ?></option>
                        
<?php
                        }
?>
                      </select>
                      
                    </div>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                            <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label">Date :</label>
                                                <input type="text" name="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                            <label style="color: white;margin-left: 10px;" for="exampleInputEmail1" class="form-label"> Time :</label>
                                                <input type="text" name="time" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            
                               
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit" name="submit">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST["submit"])){
    $pro_name = $_POST["name"];
    $pro_email = $_POST["email"];
    $pro_phone = $_POST["phone"];
    $pro_serv = $_POST["services"];
    $pro_date = $_POST["date"];
    $pro_time = $_POST["time"];
    
    $query = "insert into appointment values('','$pro_name','$pro_email','$pro_phone','$pro_serv','$pro_date','$pro_time')";
    
    if(mysqli_query($con,$query)){

        echo "<script>alert('data inserted')</script>";
    }

}
    ?>







    <!-- Appointment End -->




   <!-- Features Start -->
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/whychooseus.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">Adhering to the highest ethical standards and leveraging cutting-edge legal strategies, we ensure excellence in every aspect of our practice, delivering optimal outcomes for our clients.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">With a commitment to efficiency and trust, we streamline processes and foster transparent communication, earning the confidence of our clients at every step of their legal journey.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Delivering the results you deserve is our priority, achieved through meticulous attention to detail, unwavering dedication, and a relentless pursuit of justice.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->




    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Discover Unmatched Legal Support Tailored Uniquely for You. Reach Out to Us Today</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    
         <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys</h6>
                <h1 class="mb-4">Meet Our Attorneys</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                    <?php
                    


                    $query ="SELECT lawyer_info.lawyer_name,lawyer_info.lawyer_photo,lawyer_info.lawyer_facebook,lawyer_info.lawyer_twitter,lawyer_info.lawyer_linkdin,lawyer_services.service_name as Services from lawyer_info INNER JOIN lawyer_services on lawyer_services.id = lawyer_info.lawyer_service";

                    $data = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($data)){
?>
                    
                    <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                    <h5 class="mb-2 px-4"><?php echo $row["lawyer_name"] ?></h5>


<p class="mb-3 px-4"><?php echo $row["Services"] ?></p>
                            <div class="team-img position-relative">
                                <img class="img-fluid2" src="<?php echo "dashboard/".$row["lawyer_photo"] ?>" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1"  href="https://twitter.com/<?php echo $row["lawyer_twitter"] ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="https://facebook.com/<?php echo $row["lawyer_facebook"] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="https://facebook.com/<?php echo $row["lawyer_facebook"] ?>"  target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->





    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                    "Outstanding legal team! Professional, responsive, and achieved results beyond my expectations."
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>UMARZ</h5>
                            <p class="m-0">DOCTOR</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                    "Highly recommend! They provided excellent guidance and support throughout my legal matter."
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>MUFEEZ</h5>
                            <p class="m-0">ARCHITECT</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        
                    "Exceeded my expectations! Their unique approach and dedication made a significant difference in my case."
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>BAZAAN</h5>
                            <p class="m-0">SINGER</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                    "Outstanding support! Their unique approach, dedication, and expertise made a lasting impression."
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>RAMIZ</h5>
                            <p class="m-0">S.ENGINEER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->







    <?php
include("footer.php")
?>
