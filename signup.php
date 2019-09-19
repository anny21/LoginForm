
<?php 
include('layout/header.php');
if(count($_SESSION) > 0){
    header('Location: home.php');
    exit();
}?>
    <!-- all code go here -->
    <div class="loginbox1">
        <img src="https://res.cloudinary.com/tabeetha/image/upload/v1568648173/user-1633249_v5fkne.svg" class="avatar">
        <p class="fourloop"><span class="four">4</span><span class="loop">loop</span></p>
        <!-- <div id="errorMessage1"></div> -->
        <?php if(isset($_GET['error'])){ ?>
  <div class="errorMessage1"><?php echo $_GET['error']?></div>
 <?php }?>
        <form action="authenticate.php" method="POST" onsubmit="validateSignUp()">
            <label for="Full-Name">
                <span>Full Name:</span>
                <input type="text" name="fullName" id="Full-Name">
            </label>
            <label for="Email">
                <span>Email:</span>
                <input type="email" name="email" id="Email">
            </label>
            <label for="Password">
                <span>Password:</span>
                <input type="password" name="password" id="password">
            </label>
            <label for="Confirm-Password">
                <span>Confirm Password:</span>
                <input type="password" name="confirm_password" id="Confirm-Password">
            </label>
            <span class="already">Already Have an Account? <a href="index.php" style="color: red">Login</a></span>
            <input type="submit" name="signup" value="SUBMIT" class="sign-up"/>
        </form>
    </div>
  <?php include('layout/footer.php');?>