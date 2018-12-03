
      
      <div class="col-sm-12 col-md-2"></div>

    <div class="col-sm-12 col-md-8">
  <div class="card text-left wow shake my-5 text-white" style="max-width: 500px; margin: auto; background: green"> 
          <div class="card-header text-center">
            <h2>Voters Registration</h2>
          </div>
          <div class="card-body">
            <form class="form-signin" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          
          <input type="text" name="fullname" class="form-control" placeholder="Enter Your Fullname"><br>

           <input type="text" name="age" class="form-control" placeholder="Enter Your Age"><br>
          
          <select name="question" class="form-control">
            <option value="0">Select Security Question</option>
            <option value="What Is your Mother's Maiden Name?">What's your Mother's Maiden Name?</option>
            <option value="What's the name of your first pet?">What's the name of your first pet?</option>
            <option value="What is the name of your first car?">What's the name of your first car?</option>
            <option value="Where did you grow up?">Where did you grow up?</option>
            <option value="Whats the name of your child-hood hero?">What's the name of your child-hood hero?</option>
            <option value="Who is your favorite celebrity?">Who is your favorite celebrity?</option>
          </select><br>

           <input type="text" name="answer" class="form-control" placeholder="Enter Your Security Answer"><br>
          
            


          <input type="password" name="BVN" class="form-control" placeholder="Enter Your BVN"><p style="color: red"><em>* Bvn must be 11 digits in number<em></p><br>
         <!--  <label for="inputPassword"><b>Password:</b></label> -->
          <input type="password" name="BVN-repeat" class="form-control" placeholder="Enter your Confirm BVN" ><br>

          <input class="btn btn-md btn-success btn-block" name="submit" value="Register" type="submit"/> <br>
         
          <p class="mt-5 mb-3">E-vote &copy; 2017-2018</p>
       
        </form>
          </div>
        </div>
  </div>

  <div class="col-md-12 col-md-2"></div>
  
  