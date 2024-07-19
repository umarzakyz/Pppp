

<?php
include("header.php")
    ?>




<style>

.img-fluid{
    height: 300px;
}



</style>


<!-- Page Header Start -->
<div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Attorney</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Attorney</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->











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
                                <img class="img-fluid" src="<?php echo "dashboard/".$row["lawyer_photo"] ?>" alt="">
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
    
    mysqli_query($con,$query);
    
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


    <?php
include("footer.php")
    ?>