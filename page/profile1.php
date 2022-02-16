
<?php


require_once('config.php');
session_start();
    $id = get_current_user();
 
    $sql = "SELECT email FROM user_account WHERE id = {$id}";
    $result = $link->query($sql);
 
    $data = $result->fetch_assoc();

 
   
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content="ie=edge">
        <!--==================== FONTAWESOMEICONS ====================-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://kit.fontawesome.com/070d25e7f6.js" crossorigin="anonymous"></script>
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        
        
        <title>Responsive Portfolio Website</title>
    </head>
    <body>
          <!--!--==================== HEADER ====================-->
          <header class="header" id="header">
            <nav class="nav-app" id="nav">
                <a href="#" class="nav-logo">MyPortfolio</a>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    
            
                 <!--   <div class="nav_toggle" id="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </div>-->
                
            
            </nav>
            
            </header>


            <div class="profile">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="bi bi-person-square"></i><br>Personal Info</button>
                      <button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill" data-bs-target="#v-pills-education" type="button" role="tab" aria-controls="v-pills-education" aria-selected="false"><i class="bi bi-mortarboard"></i><br>Education</button>
                      <button class="nav-link" id="v-pills-experience-tab" data-bs-toggle="pill" data-bs-target="#v-pills-experience" type="button" role="tab" aria-controls="v-pills-experience" aria-selected="false"><i class="bi bi-briefcase"></i><br>Experience</button>
                      <button class="nav-link" id="v-pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#v-pills-achievement" type="button" role="tab" aria-controls="v-pills-achievement" aria-selected="false"><i class="bi bi-trophy"></i><br>Achievement</button>
                      <button class="nav-link" id="v-pills-skill-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skill" type="button" role="tab" aria-controls="v-pills-skill" aria-selected="false"><i class="bi bi-lightbulb"></i><br>Skill</button>
                      <button class="nav-link" id="v-pills-reference-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reference" type="button" role="tab" aria-controls="v-pills-reference" aria-selected="false"><i class="bi bi-people-fill"></i><br>Referrences</button>
                    </div>
                    <?php

                    require_once("config.php");
                    $email = null;

                    if(isset($_GET["email"]))

                    {
                    $email = $_GET["email"];

                    }

                    $email =$_REQUEST['email'];

                    $sql ="SELECT * FROM user_account where email = '".$email."' ";									
                    $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
                    $data = mysqli_fetch_array ($result);
                    ?>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">PERSONAL INFORMATION</h4>
                        <form action="insert.php" method="post">
                            <div class="profilepic">
                                <img class="profilepic__image" src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Clipart.png" width="250" height="250" alt="Profibild" />
                                <div class="profilepic__content">
                                  <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                                  <input type="file" id="image" class="profilepic__input"><span class="profilepic__text">Edit Profile</span>
                                </div>
                              </div>
                            <div class="row">
                                
                                   
                                
                                <div class="col-12">
                                    <input type="text" name="fullname"required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email"  value="<?php echo $data['email'] ?>" required>
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone"required>
                                    <label>Phone no</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="occupation"required>
                                    <label>Occupation</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="website" required>
                                    <label>website</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="address"required>
                                    <label>Address</label>
                                </div>
                            </div>
                            <input type="submit" name ="save" value="save">
                        </form>
                      </div>
                    <!--Education Tabs-->
                     <div class="tab-pane fade show" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">EDUCATION</h4>
                        <form action="Post" id="form2"  action="add.php" class="form-group2">
                        <div class="education-input" id="education-input">
                        <div class="row" >
                            <div class="col-12">
                                <input type="text" name="wrapper" class="wrapper" required>
                                <label>Institution</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="degree" required>
                                <label>Degree</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <input type="date" id="startdate" name="startdate">
                                <label >Start:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="date" id="graddate" name="graddate">
                                <label >End:</label>
                            </div>   
                            
                            
                            
                        </div>
                        
                    </div>
                        <div class="controls">
                            <a href="#" id="add_more_fields"><i class="fa fa-plus"></i>Add More</a>
                            <a href="#" id="remove_fields"><i class="fa fa-plus"></i>Remove Field</a>
                          </div>
                       
                        <input type="submit" value="save">
                    </form>
                </div>
                      <div class="tab-pane fade" id="v-pills-experience" role="tabpanel" aria-labelledby="v-pills-experience-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">EXPERIENCE</h4>
                        <form action="#" id="form2"   class="form-group2">
                        <div class="education-input" id="education-input">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="wrapper" class="wrapper" required>
                                <label>Company</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="degree" required>
                                <label>description</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <input type="date" id="startdate" name="startdate">
                                <label >Start:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="date" id="graddate" name="graddate">
                                <label >End:</label>
                            </div>   
                            
                            
                            
                        </div>   
                        
                    </div>
                        <div class="controls">
                            <a href="#" id="add_more_fields"><i class="fa fa-plus"></i>Add More</a>
                            <a href="#" id="remove_fields"><i class="fa fa-plus"></i>Remove Field</a>
                          </div>
                       
                        <input type="submit" value="save">
                    </form>
                      </div>
                      <div class="tab-pane fade" id="v-pills-achievement" role="tabpanel" aria-labelledby="v-pills-achievement-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">ACHIEVEMENT</h4>
                        <form action="#" id="form2"   class="form-group2">
                        <div class="education-input" id="education-input">
                       
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="degree" required>
                                <label>award</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text"class="form-control" name="datepicker" id="datepicker">
                                <label >Start:</label>
                            </div>
                            
                            
                            
                            
                        </div>   
                        
                    </div>
                        <div class="controls">
                            <a href="#" id="add_more_fields"><i class="fa fa-plus"></i>Add More</a>
                            <a href="#" id="remove_fields"><i class="fa fa-plus"></i>Remove Field</a>
                          </div>
                       
                        <input type="submit" value="save">
                        </form>
                      </div>
                      <div class="tab-pane fade" id="v-pills-skill" role="tabpanel" aria-labelledby="v-pills-skill-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">SKILL</h4>
                        <form action="#" id="form2"   class="form-group2">
                        <div class="skill-input" id="skill-input">
                        
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="degree" required>
                                <label>Skill Name</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select" aria-label="Disabled select example" enabled>
                                    <option selected>Skill Level</option>
                                    <option value="1">Beginner</option>
                                    <option value="2">Average</option>
                                    <option value="3">Skilled</option>
                                    <option value="3">Specialist</option>
                                    <option value="3">Expert</option>
                                  </select>
                            </div>
                            
                            
                            
                            
                        </div>   
                        
                    </div>
                        <div class="controls">
                            <a href="#" id="add_more_fields"><i class="fa fa-plus"></i>Add More</a>
                            <a href="#" id="remove_fields"><i class="fa fa-plus"></i>Remove Field</a>
                          </div>
                       
                        <input type="submit" value="save">
                        </form>
                      </div>
                      <div class="tab-pane fade" id="v-pills-reference" role="tabpanel" aria-labelledby="v-pills-reference-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">PERSONAL INFORMATION</h4>
                        <form action="insert.php" method="post">
                            <div class="referrence-input" id="referrence-input">
                            <div class="row">
                                
                                   
                                
                                <div class="col-12">
                                    <input type="text" name="full-name"required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" required>
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone"required>
                                    <label>Phone no</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="occupation"required>
                                    <label>Occupation</label>
                                </div>
                                </div>
                                <div class="controls">
                                    <a href="#" id="add_more_fields"><i class="fa fa-plus"></i>Add More</a>
                                    <a href="#" id="remove_fields"><i class="fa fa-plus"></i>Remove Field</a>
                                  </div>
                            <input type="submit" name ="save" value="save">
                        </form>
                      </div>
                      </div>

                    </div>
                  </div>
            </div>
        <!-- <div class="profile-tabs-container">
                <ul class="profile-tabs">
                <li class="tabs-active">
                    <a href="">Personal Info <i class="far fa-address-card"></i></a> 
                </li>
                <li>
                    <a href="">PROFESSIONAL</a>
                </li>
                <li>
                    <a href="">SIMPLE</a>
                </li>
                <li>
                    <a href="">CREATIVE</a>
                </li>
                </ul>
                <div class="profile-tabs-content">
                <div class="profile-tabs-panel tabs-active" data-index="0">
                    <form action="#">
                        <div class="row">
                            <div class="field">
                                <input type="text" required>
                                <label>First Name</label>
                            </div>
                            <div class="field">
                                <input type="text" required>
                                <label>Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <input type="email" required>
                                <label>Email</label>
                            </div>
                            <div class="field">
                                <input type="number" required>
                                <label>Phone no</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="field message">
                                <input type="text" required>
                                <label>Message</label>
                            </div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="profile-tabs-panel" data-index="1">
                    <img src="images/Pro1.jpg" alt="" class="pro_img img">
                    <img src="images/Pro2.jpg" alt="" class="pro_img img">
                    <img src="images/Pro3.jpg" alt="" class="pro_img img">
                </div>
                <div class="profile-tabs-panel" data-index="2">
                    <img src="images/Simple1.jpg" alt="" class="pro_img img">
                    <img src="images/Simple2.jpg" alt="" class="pro_img img">
                    <img src="images/Simple3.jpg" alt="" class="pro_img img">
                </div>
                <div class="profile-tabs-panel" data-index="3">
                    <img src="images/Creative1.jpg" alt="" class="pro_img img">
                    <img src="images/Creative2.jpg" alt="" class="pro_img img">
                    <img src="images/Creative3.jpg" alt="" class="pro_img img">
                </div>
                </div>
            </div>

        </div>-->
        
        </div>
        </body>
        

        <!--==================== MAIN JS ====================-->
        <script src="index.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </html>



    
        