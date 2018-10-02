
<?php
include 'connection.php';
$username=$_SESSION['username'];
$sql="select * from messages where t='$username'";
$res=mysqli_query($con,$sql);

?>
<script>
function view(s){
    xml=new XMLHttpRequest;
    xml.onreadystatechange=function(){
        if(this.readyState==4&&this.status==200)
            {
                document.getElementById("txt").innerHTML=this.responseText;
            }
    }
    xml.open("GET","view_message.php?q="+s,true);
    xml.send();
    
}

</script>
<div id="myModal" class="modal fade" role="dialog">
                
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
            <p id="txt"></p>    
            </div>
            <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>    
            </div>
            </div>
            </div>    
            </div>
<div id="content"  class="col-sm-9 frame animated fadeInRight jumbotron">
                <h3 style="text-align:center"> Inbox</h3>
    <hr>
    
        <div class=" table-responsive">
        <table class="table  table-striped table-hover table-bordered">
            <tr class="warning">
            <th>From</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Attachments</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($res)){
                ?>
            <tr>
            <td> <?php echo $row['f'];?> </td>
            <td><?php echo $row['subject'];?></td>
            <td >
            <button type="button" style="padding:5px;"class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="false" onclick="view(<?php echo $row['id'];?>)">
                View Message
            </button>    
            
                
                
            </td>
            <td><h4>
                <a href="download.php?name=attachments/<?php echo $row['file'];?>">Download</a>
                </h4>
                
            </td>
            
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
      
    </div>



