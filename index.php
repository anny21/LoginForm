 <?php include('layout/header.php');?>
 <?php 
if(count($_SESSION) > 0){
    header('Location: home.php');
    exit();
}?>
 <?php //if(isset($_GET['error'])){ ?>
  <!-- <div><?php// echo $_GET['error']?></div> -->
 <?php //}?>
 <?php // if(isset($_GET['success'])){ ?>
  <!-- <div><?php //echo $_GET['success']?></div> -->
 <?php// }?>

    <div class="loginbox">
        <img src="https://res.cloudinary.com/tabeetha/image/upload/v1568648173/user-1633249_v5fkne.svg" class="avatar">
        <p class="fourloop"><span class="four">4</span><span class="loop">loop</span></p>
        <!-- <div id="errorMessage"></div> -->
        <?php if(isset($_GET['error'])){ ?>
  <div class="errorMessage1"><?php echo $_GET['error']?></div>
 <?php }?>
 <?php if(isset($_GET['success'])){ ?>
  <div class="successMessage1"><?php echo $_GET['success']?></div>
 <?php }?>
        <form action="authenticate.php" method="POST" onsubmit="validateLogin()">
            <label for="email">
                <input type="email" name="email" id="email" placeholder="Email">
            </label>
            <label for="password">
                <input type="password" name="password" id="password" placeholder="Password">
            </label>
            <p class="forgot">Forgot your password? Click <a href="#" style="color: red">Here</a></p>
            <input type="submit" name="signin" value="Sign In" class="submit">
          <div style="text-align:center"> Dont Have an Account? <a href="signup.php" style="color: red; padding:7px;">Sign Up here...</a></div>
        </form>
    </div>
  <?php include('layout/footer');?>