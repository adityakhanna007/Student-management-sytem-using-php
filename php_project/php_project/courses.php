
<div id="content"  class="col-sm-9 frame animated fadeInRight jumbotron" >
                <h3 style="text-decoration:underline;text-align:center">Subjects</h3>
    <hr>
                <div class="table-responsive">
    <table class=" table table-striped table-hover table-bordered">
       <tr> 
           <th>id</th>
        <th>Subject</th>
        <th>Teacher</th>
        <th>Credits</th>
        
        </tr>
        <?php
           include 'connection.php';
           $sql="select * from courses";
           $res=mysqli_query($con,$sql);
           
           while($row=mysqli_fetch_assoc($res))
           {
           
           ?>
           <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['Subject'];?></td>
        <td><?php echo $row['Teacher'];?></td>
        <td><?php echo $row['Credits'];?></td>
       
        
        </tr>
        <?php
           }
           ?>
    </table>
    </div>
    <hr>
    
</div>
