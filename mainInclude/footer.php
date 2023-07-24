    <!-- Start Footer -->
    <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2022 || Hakim Rahimi Safi  ||  <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCent">  Admin Login </a> </small>
        </footer>
        <!-- End Footer-->



      <!-- Start Studetn Registration Modal-->
       <!-- Modal -->
       <div class="modal fade" id="stuRegModalCent" tabindex="-1" aria-labelledby="stuRegModalCentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="stuRegModalCentLabel">Student Registration Form</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Start Studetn Registration Form--->
                <?php
                include('./mainInclude/studentRegistrationform.php')
                ?>
              <!-- End Studetn Registration Form--->
              </div>
              <div class="modal-footer">
                <span id="successMsg"></span>
              <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Studetn Registration Modal--->


      <!-- Start Studetn Login Modal-->
         <!-- Modal -->
    <div class="modal fade" id="stuLoginModalCent" tabindex="-1" aria-labelledby="stuLoginModalCentLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="stuLoginModalCentLabel">Student Login Form</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Start Studetn Login Form--->
            <form id="stuLoginForm">
            
              <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
              </div>

              <div class="form-group">
                <i class="fas fa-key"></i> <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
              </div>
              </form> 
              <!-- End Studetn Login Form--->
            </div>
            <div class="modal-footer">
              <small id ="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
      <!-- End Studetn Login Modal--->


      <!-- Start Admin Login Modal-->
          <!-- Modal -->
    <div class="modal fade" id="adminLoginModalCent" tabindex="-1" aria-labelledby="adminLoginModalCentLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="adminLoginModalCentLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Start Admin Login Form--->
            <form id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
              </div>

              <div class="form-group">
                <i class="fas fa-key"></i> <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
              </div>
              </form> 
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">login</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
      <!-- End Admin Login Form--->
 
  
    <!---Jquery and Bootsrap JavaScript--->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <!---JS Font Awesome--->
    <script type="text/javascript" src="./js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!---Student Ajax Call JavaScript--->
     <script type="text/javascript" src="./js/ajaxrequest.js"></script>
     <script type="text/javascript" src="./js/adminajaxrequest.js"></script>

     <!--Testimonials-->
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</body>

</html>