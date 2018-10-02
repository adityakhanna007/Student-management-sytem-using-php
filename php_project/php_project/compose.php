<?php
include "connection.php";
 $username= $_SESSION['username'];
                   $sql="select * from users where username !='$username' ";
            $res=mysqli_query($con,$sql);
?>
<script>
      $(document).ready(function(){
        
<?php
    if(isset($_GET['sent'])){
        ?>
    alert("message sent");
    <?php
    }
        ?>
    })
function showmail(str){
    var s=str;
    if(str=="")
        {
            document.getElementById("mail").innerHTML="";
            return;
        }
    
      xml= new XMLHttpRequest;
    xml.onreadystatechange=function(){
        if(this.readyState==4&&this.status==200)
            {
                document.getElementById("mail").innerHTML=this.responseText;
            }
    }
       xml.open("GET","mailbox.php?q="+s,true);
    xml.send();
}
function func(){
       var fn=$("#file")[0].files[0].name;
    var fns=$("#file")[0].files[0].size;
    if(fns)
        {
            document.getElementById("fileup").innerHTML=fn;
        }
    else{
        document.getElementById("fileup").innerHTML="No File Attatched";

    }
    
   }
</script>
<div id="content"  class="col-sm-9 frame animated fadeInRight jumbotron" >
                <h3 style="text-align:center">Compose Message</h3>
    <br>
    <h4 style="text-align:center;">Select Recipient</h4>
               <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
    <select class="form-control" onchange="showmail(this.value)">
        <option value="">Select A Person</option>
        <?php
        while($row=mysqli_fetch_assoc($res))
        {
            
            ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['username']; ?></option>
        
        <?php
        }
        ?>
                   
            </select>
                   <br>
       
              
    </div>
                    </div>
    <hr>
                    <div class="container">
    <div class="row" id="mail">
    <h5 style="text-align:center">Mail box will appear after selecting recipient</h5> 
    </div>
                   
        </div>
    </div>




