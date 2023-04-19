<!DOCTYPE html>
<html>
<style>
    /*add full-width input fields*/
      
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
    /* set a style for all buttons*/
      
    button {
        background-color: Green;
        color: white;
        padding: 15px 20px;
        margin: 8px 0;
        cursor: pointer;
        width: 100%;
    }
    /*set styles for the cancel button*/
      
    .cancelbtn {
        padding: 15px 20px;
        background-color: #FF2E00;
    }
    /*float cancel and signup buttons and add an equal width*/
      
    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }
    /*add padding to container elements*/
      
    .container {
        padding: 16px;
    }
    /*clear floats*/
      
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    /*styles for cancel button and signup button 
      on extra small screens*/
      
    @media screen and (max-width: 600px) {
        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>
  
<body>
  
    <h2>Signup Form</h2>
    <!--Step 1:Adding HTML-->
    <form action="/action_page.php" style="border:1px solid #ccc">
        <div class="container">
            <label><b>Email</b></label>
            <input type="text" 
                   placeholder="Enter Email" 
                   name="email" required>
  
            <label><b>Password</b></label>
            <input type="password" 
                   placeholder="Enter Password" 
                   name="psw" 
                   required>
  
            <label><b>Repeat Password</b></label>
            <input type="password" 
                   placeholder="Repeat Password" 
                   name="psw-repeat" 
                   required>
            <input type="checkbox" 
                   checked="checked"> Remember me
            <p>To create an account you have to agree our 
              <a href="#">Terms & Privacy</a>.
              </p>
  
            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
  
</body>
  
</html>