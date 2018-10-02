<div id="content" class="col-sm-9 frame animated fadeInRight jumbotron" >
                <h3 style="text-decoration:underline;text-align:center">Time-Table</h3>
    <hr>
    
                <div class="table-responsive">
    <table class=" table table-striped table-hover table-bordered">
       <tr> 
           <th>Day/Time</th>
           <th>8:30-9:25</th>
        <th>9:30-10:25</th>
        <th>10:30-11:25</th>
        <th>11:30-12:25</th>
        <th>12:30:13:25</th>
        <th>13:30-14:25</th>
        <th>14:30-14:25</th>
         
          <th>15:30:16:25</th>
            <th>16:30:17:25</th>


        </tr>
        <?php
           include 'connection.php';
           $sql="select * from TT";
           $res=mysqli_query($con,$sql);
           
           while($row=mysqli_fetch_assoc($res))
           {
           
           ?>
           <tr>
        <td><?php echo $row['day'];?></td>
        <td><?php echo $row['one'];?></td>
        <td><?php echo $row['two'];?></td>
        <td><?php echo $row['three'];?></td>
        <td><?php echo $row['four'];?></td>
        <td><?php echo $row['five'];?></td>
        <td><?php echo $row['six'];?></td>
        <td><?php echo $row['seven'];?></td>
               <td><?php echo $row['eight'];?></td>
               <td><?php echo $row['nine'];?></td>
               
        
        </tr>
        <?php
           }
           ?>
    </table>
    </div>
    <hr>
    
</div>