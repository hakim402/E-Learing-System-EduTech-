     <?php
      include('./dbConnection.php');
      include('./mainInclude/header.php');
      ?>

      <!-- Start Course Page Banner -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="image/course/2.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- End Course Page Banner -->

    <div class="container jumbotron mb-5" style="background-color: #DCDCDC;">
        <div class="row">
            <div class="col-md-5"> <br>
                <h5 class="mb-5">If Already Registered !! Login</h5>
                <form role="form" id="stuLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuLogemail" class="pl-2 font-weight-bold">Email:</label>
                        <small id="statusLogMsg1"></small>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail"> 
                    </div> <br>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stuLogpass" class="pl-2 font-weight-bold">Password:</label>
                        <small id="statusLogMsg1"></small>
                        <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass"> 
                    </div> <br>
                    <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                </form> <br>
                <small id="statusLogMsg"></small>
            </div>
            <div class="col-md-6 offset-md-1"> <br>
                <h5 class="mb-3">New User !! Sign Up</h5>
                <form role="form" id="stuRegForm">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="stuname" class="pl-2 font-weight-bold">Name:</label>
                        <small id="statusMsg1"></small>
                        <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"> 
                    </div> <br>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                        <small id="statusMsg1"></small>
                        <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail"> 
                    </div> <br>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stupass" class="pl-2 font-weight-bold">Password</label>
                        <small id="statusMsg1"></small>
                        <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass"> 
                    </div><br>
                    <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
                </form> <br>
                <small id="successMsg"></small>
            </div>
        </div>
    </div>


<!-- Start Include Include Contact Us -->
    <?php
    include('./mainInclude/contact.php');
    include('./mainInclude/footer.php');
     ?>
<!-- End Include Include Contact Us -->