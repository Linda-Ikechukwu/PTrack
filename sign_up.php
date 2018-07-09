
<?php  $page_title = 'PTrack.Ng Sign Up'?>
<?php include('header.php'); ?>


        <section id="header">
           <div class="text-center"><h1>Sign Up</h1></div>
            
        </section>

       
        <section class = "signup-form">
            <div class="container">
                <div class = " div-padding">
                    <div class="col-md-12 wow bounceIn"><h4 class ="div-margin">Create New School Account</h4><hr></div>
                    <form action="" method="" class="form-horizontal center" >
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="subPackage">Subscription Package:</label>
                           <div class="col-sm-9"> 
                                <select class="form-control" id="subPackage" value="" name="subPackage" required>
                                     <option>---</option>
                                </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="schoolName">Name of School:</label>
                           <div class="col-sm-9"> 
                                <input type="text" class="form-control" id="schoolName" name="school_name" placeholder="School Name" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="location">Location: </label>
                           <div class="col-sm-5"> 
                                <input type="text" class="form-control" id="location" name="city_town" placeholder="City/Town" value=""required>
                           </div>
                           <div class="col-sm-4"> 
                                <select class="form-control" id="location" placeholder="" name="state" required>
                                     <option>State</option>
                                </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="country">Country: </label>
                           <div class="col-sm-9"> 
                                <select class="form-control" id="country" value="" name="country" required>
                                     <option>Nigeria</option>
                                </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="phoneNumbers">Phone Number(s):</label>
                           <div class="col-sm-9"> 
                                <input type="text" class="form-control" id="phoneNumbers" name="school_name" placeholder="Phone Numbers" value="" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3" for="schoolType">Type of School: </label>
                           <div class="col-sm-5"> 
                                <select class="form-control" id="schoolType" placeholder="" name="schoolType" required>
                                     <option>---</option>
                                </select>
                           </div>
                           <div class="col-sm-4"> 
                                <select class="form-control" id="location" placeholder="" name="currency" required >
                                     <option>-Currency</option>
                                </select>
                           </div>
                           <div class="form-group">
                                 <label class="control-label col-sm-3" for="img-file">School Logo:</label>
                               <div class="col-sm-9">
                                   <div class="myDiv">
                                     <input type="file" class="form-control-file" id="img-file" name="img_file" value="" >
                                  </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Email Address:</label>
                                <div class="col-sm-9"> 
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Type Admin Email" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="password">Password:</label>
                                <div class="col-sm-9"> 
                                     <input type="text" class="form-control" id="password" name="school_name" placeholder="Create Admin Password" required >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-sm-3" for="expiry">Expire After: </label>
                                <div class="col-sm-5"> 
                                  <select class="form-control" id="expiry" name="expiry" required>
                                     <option>---</option>
                                 </select>
                                </div>
                            </div>
                            <hr>
                            <div class="right"><button type="submit" name="submit" class="btn btn-primary right ">Submit</button></div>

                   </form>
                </div>  
            </div>
        </section>
        
<?php include('footer.php'); ?>