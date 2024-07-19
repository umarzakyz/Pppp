


<?php
include("header.php")
    ?>

<style>
    p{
        text-transform: capitalize;
        color : black;
        font-size : 17px;
    }

   
</style>






<!-- Page Header Start -->
<div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p1 class="m-0 text-uppercase">About</p1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                    <p >Welcome to <b>LAWFINITY</b>, where excellence, integrity, and commitment intersect to serve your legal needs. Founded on the principles of trust, professionalism, and unwavering dedication to our clients, we are a dynamic team of legal experts dedicated to providing exceptional legal representation and personalized solutions.
                <br>
                    At <b>LAWFINITY</b>, we understand that each legal matter is unique and requires tailored strategies to achieve the best possible outcome. Our team consists of experienced attorneys who specialize in various areas of law, including  corporate law, litigation, intellectual property, real estate, family law, and criminal defense.</p>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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