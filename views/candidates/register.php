
      
      <div class="col-sm-12 col-md-2"></div>

    <div class="col-sm-12 col-md-8">
  <div class="card text-left wow shake my-5 text-white" style="max-width: 500px; margin: auto; background: green"> 
          <div class="card-header text-center">
            <h2>Candidates Registration</h2>
          </div>
          <div class="card-body">
            <form class="form-signin" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
             
          
          <input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname"><br>
          
          <select name="party" class="form-control">
            <option value="0">Select Party</option>
            <option value="PDP">PDP</option>
            <option value="APC">APC</option>
            <option value="APGA">APGA</option>
            <option value="ADC">ADC</option>
            <option value="SDP">SDP</option>
            <option value="ZLP">ZLP</option>
          </select><br>
          <select name="positions" class="form-control">
            <option value="0">Select Position</option>
          <?php $positions = (new PositionsModel)->request();

          ?>
          <?php foreach($positions as $position) :?>
              <option value=<?php echo $position['Position_Name'];?>><?php echo $position['Position_Name'];?></option>
          <?php endforeach;?>
        </select><br>
            


          <input type="password" name="BVN" class="form-control" placeholder="Enter Your BVN"><p style="color: red"><em>* Bvn must be 11 digits in number<em></p><br>
         <!--  <label for="inputPassword"><b>Password:</b></label> -->
          <input type="password" name="BVN-repeat" class="form-control" placeholder="Enter your Confirm BVN" ><br>

          <input class="btn btn-md btn-success btn-block" name="submit" value="Sign Up" type="submit"/> <br>
         
          <p class="mt-5 mb-3">E-vote &copy; 2017-2018</p>
       
        </form>
          </div>
        </div>
  </div>

  <div class="col-md-12 col-md-2"></div>
  
  