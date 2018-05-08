<nav class="navbar navbar-inverse" style="border-radius: 0px; margin-left: -20px;margin-right: -20px;">
 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
      <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/">Home</a>
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <ul class="nav navbar-nav">
   
        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/pages/new-member.php"> <span class="glyphicon glyphicon-plus"></span> Add new member <span class="sr-only">(current)</span></a></li>
   
        <li class="dropdown">
   
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendance <span class="caret"></span></a>
          
          <ul class="dropdown-menu">
           
            <li><a href="#" data-toggle="modal" data-target="#pre_Attendance">Start attendance</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/pages/attendance.php">Load last attendance</a></li>
            <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/pages/attendance-select.php">Select previous attendance</a></li>
          
          </ul>
        
        </li>
      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/sample.php">Test page</a></li>
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
      
          <ul class="dropdown-menu">
            <li><a href="#">Send SMS</a></li>
            <li><a href="#">Create report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/processes/logout.php">logout</a></li>
          </ul>
      
        </li>
     
      </ul>
   
    </div><!-- /.navbar-collapse -->
  
  </div><!-- /.container-fluid -->

</nav>

<div class="modal fade" id="pre_Attendance" role="dialog" aria-labelledby="pre_AttendanceLabel">
    
    <div class="modal-dialog" role="document">
      
      <div class="modal-content">
        
        <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" >&times;</span>
          </button>

          <h4 class="modal-title" id="pre_AttendanceLabel"> ATTENDANCE </h4>


        </div>

        <form role="form" data-toggle="validator" method="post" action="/crafting-table/processes/attendance.php">

        <div class="modal-body">

          <div class="row">
            
            <div class="col-md-5">
              
              <label>
                <b>Gathering</b>
              </label>
              <select class="form-control" name="attendance_type">
                <option value="PM">Prayer Meeting</option>
                <option value="SPM">Special Prayer Meeting</option>
                <option value="PBB">PBB</option>
                <option value="SPBB">SPBB</option>
                <option value="WS">Worship Service</option>
                <option value="WBE">WorldWide Bible Exposition</option>
                <option value="MI">Mass Indoctrination</option>
              </select>

            </div>

            <div class="col-md-3">
              
              <label>
                <b>Start time</b>
              </label>
              <select class="form-control" name="attendance_start_time">
                <option value="5:30 PM">5:30 PM</option>
                <option value="7:30 PM">7:30 PM</option>
                <option value="9:30 PM">9:30 PM</option>
                <option value="6:00 AM">6:00 AM</option>
                <option value="8:30 AM">8:30 AM</option>
                <option value="SPECIAL">Special Schedule</option>
              </select>

            </div>

            <div class="form-group col-md-4">
              
              <label>Date</label>
              <input type="date" name="date" class="form-control" data-error="Please fill this up." required>
            
              <div class="new-style help-block with-errors"></div>

            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" name="run_attendance">Start</button>
        </div>  
      
        </form>

      </div>

    </div>

</div>

