
<?php  $page_title = 'PTrack.Ng Sign In'?>
<?php include('header.php'); ?>
    
        <section id="header">
           <div class="text-center"><h1>Sign In</h1></div>
            
        </section>

        <section class = "">
            <div class="container">
              <div class="signin-form">
                <div class = " div-padding ">
                    <div class="col-md-12 wow bounceIn"><h3 class ="div-margin">Please Sign In</h3><hr></div>
                </div>
              <form class="form-signin">
                <img class="mb-4" src="" alt="" width="72" height="72">
                
                <label for="inputEmail" class="sr-only">Email address</label>
                     <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus autocomplete>
                <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-3">
                    <label>
                     <input type="checkbox" value="remember-me"> Remember me
                   </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
              </form>
              </div>
            </div>   
  
        </section>

      <?php include('footer.php'); ?>     