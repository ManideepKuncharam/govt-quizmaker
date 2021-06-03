<?php 
include("header.php");
?>

<div class="content-wrapper" style="background-color:white;">
  <div class="col-md-12">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Quiz main Header Above -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="9523483332"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <div class="card-header">
        <h3>
          <i class="fas fa-bullhorn"></i>
          Quiz 
        </h3>
        <form role="form" id="quickForm"method='post' action="list.php">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-sm mr-2" role="group" aria-label="First group">
        <div class="form-group">
                <input type="number" name="quizcode" class="form-control" id="exampleInputEmail1" placeholder="Quiz Code">
                </div>
        </div>
      <div class="btn-group-sm mr-2" role="group" aria-label="Second group">
      <button type="submit" class="btn btn-primary" name='filter'>Search</button>
      </div>
      <div class="btn-group-sm mr-2" role="group" aria-label="Third group">
      <button type="submit" class="btn btn-danger" ><a href='list.php'style="color:white !important;">Clear Search</a></button>
      </div>
      <div class="btn-group-sm mr-2" role="group" aria-label="Third group">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> Filter Quiz </button>
      </div>
      <div class="btn-group-sm mr-2" role="group" aria-label="Third group">
      <button type="submit" class="btn btn-danger" ><a href='list.php'style="color:white !important;">Clear Filter</a></button>
      </div>
    </div>
    </form>
      </div>
   
      <div class="card-body">
        <?php
        include 'db.php';
        if(isset($_POST['filter'])){
          $quizcode=$_POST['quizcode'];
          $sql1="select * from users JOIN quiz where quiz.user_id=users.id and quiz.id='$quizcode'";
          }
        elseif(isset($_POST['filter1'])){
          $class=$_POST['class'];
          $sub=$_POST['subject'];
          $med=$_POST['medium'];
          $sql1="select * from users JOIN quiz where quiz.user_id=users.id and quiz.class='$class' and quiz.subject='$sub' and quiz.medium='$med'";
        }
        else{
        $sql1="select * from users JOIN quiz where quiz.user_id=users.id order by quiz.id desc";
        }
        $result1=$con->query($sql1);
        if ($result1->num_rows> 0): ?>
        <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Quiz Code</th>
                  <th>Quiz Title</th>
                  <th>Class</th>
                  <th>Subject</th>
                  <th>Medium</th>
                  <th>Staff Name</th>
                  <th>School Name</th>
                  <th>Time</th>
                  <th>Start Quiz</th>
                  <th>Share Quiz</th>
                </tr>
                </thead>
                
          <tbody>
        <?php  
        
        while($row1 = $result1->fetch_assoc()): ?>  
        
        <td><?php echo $row1['id'];?></td>
        <td><?php echo $row1['title'];?></td>
        <td><?php echo $row1['class'];?></td>
        <td><?php echo $row1['subject'];?></td>
        <td><?php echo $row1['medium'];?></td>
        <td><?php echo $row1['firstname'];?></td>
        <td><?php echo $row1['school'];?></td>
        <td><?php echo $row1['time'].' Min';?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $str =$row1['title'] ;
          $new_str = str_replace(' ', '', $str);
          echo $new_str;
          ?>">
            Start
          </button></td>
        <td><button class="btn btn-info">
          <a style="color:white !important;" href="https://api.whatsapp.com/send?&text=http://quizmaker.schooledu.co.in/list.php [Quiz Code:<?php echo $row1['id']; ?>] [Quiz Title:<?php echo $row1['title']; ?>] [Staff Name:<?php echo $row1['firstname']; ?>]" target="_blank"> Share</a>
        </button></td>
        </tbody>
        
                <!-- The Modal -->
          <div class="modal" id="<?php echo $new_str; ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Register</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form action="valid2.php" method="post">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="fname" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="staticEmail" name="email" placeholder="Email">
                  </div>
                </div>
                <?php
  include 'db.php';
  $query = "SELECT * FROM dist Order by d_name";
  $result = $con->query($query);
?> 
                                      <center>
                                        <div class="col-md-11">
                                        <div class="form-group">
          <select name="district" id="d1" class="form-control" onchange="FetchState(this.value)" required>
            <option value="" selected>Select School District </option>
          <?php
            if ($result->num_rows > 0 ):?> 
            <?php
               while ($row = $result->fetch_assoc()):?> 
                <option value="<?php echo $row['id']?>"><?php 

                echo $row['d_name']?></option>;
               
               <?php endwhile;?>
               <?php endif;?>
           
          </select>
                                        </div>
                                        </div>
                                    </center>
                                        <center>
                                        <div class="col-md-11">
                                        <div class="form-group">
          <select name="mandal" id="d2" class="form-control" value="mandal-val"   onchange="Fetch(this.value)" required>
            <option>Select School Mandal</option>
          </select>
                                        </div> 
                                        
                                        
                                    </div>
                                    </center>
                                    <center>
                                    <div class="col-md-11">
                                    <div class="form-group">
          <select name="school" id="d3" class="form-control" value="school-val"  required>
            <option>Select School Name</option>
          </select>
                                        </div>
                <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
                </div>
</center>
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="mybut" onclick="myFunction()" >Start Quiz</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile;?>
        <?php endif;?> 
        </table>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Filter</h4>
      </div>
      <div class="modal-body">
                  <div class="container-fluid">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- jquery validation -->
                    
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Filter</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" id="quickForm"method='post' action="list.php">
                      <div class="card-body">
                          <div class="form-group">
                              <label>Class</label>
                              <select class="form-control" name='class'>
                                <option value='class-5'>Class-5</option>
                                <option value='class-6'>Class-6</option>
                                <option value='class-7'>Class-7</option>
                                <option value='class-8'>Class-8</option>
                                <option value='class-9'>Class-9</option>
                                <option value='class-10'>Class-10</option>
                              </select>
                          </div>
                          <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" name='subject' >
                                  <option value='telugu'>Telugu</option>
                                  <option value='hindi'>Hindi</option>
                                  <option value='english'>English</option>
                                  <option value='maths'>Maths</option>
                                  <option value='science'>Gen Science</option>
                                  <option value='pscience'>Physical Science</option>
                                  <option value='bscience'>Biological Science</option>
                                  <option value='social'>Social</option>
                                </select>
                           </div>
                           <div class="form-group">
                                <label>Medium</label>
                                <select class="form-control" name='medium' >
                                  <option value='telugu'>Telugu</option>
                                  <option value='urdu'>Urdu</option>
                                  <option value='english'>English</option>
                                </select>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary" name='filter1'>Apply</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                    </div>
                  <!--/.col (left) -->
                  <!-- right column -->
                  <div class="col-md-6">

                  </div>
                  <!--/.col (right) -->
                </div>
                <!-- /.row -->
              </div><!-- /.container-fluid -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
<div align="center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- quiz resp -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="2810859032"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<script type="text/javascript">
  function FetchState(id){

    $('#d2').html('');
    $.ajax({
      type:'post',
      url: 'nxt.php',
      data : { d_id : id},
      success : function(data){
         $('#d2').html(data);
      }

    })
  }
  function Fetch(id){
    $('#d3').html('');
    $.ajax({
      type:'post',
      url: 'nxt.php',
      data : { m_id : id},
      success : function(data){
         $('#d3').html(data);
      }

    })
  }
  </script>