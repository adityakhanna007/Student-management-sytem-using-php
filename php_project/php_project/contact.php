<title>Contact ::</title>

<?php
session_start();
include 'header.php';
include 'nav.php';

?>
<script>

$(document).ready(function(){
    <?php
    if(isset($_GET['sent'])){
        ?>
    alert("Message sent");
    <?php
    }
    ?>
})
</script>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.652090675914!2d75.53316791441966!3d31.396155260408023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a51d30c180edf%3A0x5b7633718d17ef33!2sDr.+B.R.+Ambedkar+National+Institute+of+Technology%2C+Jalandhar%2C+Punjab!5e0!3m2!1sen!2sin!4v1531931699192" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


<div class="container jumbotron" style="position:relative; top:-50px;border:5px solid;">
    <div class="row">
    <div class="col-sm-12">
            <div class="col-sm-1"></div>
             <div class="col-sm-4"><h1>Send Us a Message</h1>
            <p>You can contact us anytime.We wil get in touch with you.</p>
                 <div class="form-group"></div>
    </div>
        
       
    </div>
    </div>
    <hr style=" border-top: 1px solid #ccc";>
   
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
            <form action="send.php" method="post">
                <h4>Your Name</h4>
                 <input class="form-control" type="text" name="name">
                <h4>Email-address</h4>
                <input class="form-control"type="text" name="email">
                <h4>Phone</h4>
                <input class="form-control" type="Text" name="phone">
                <H4>Message</H4>
                <textarea class="form-control" name="txt"></textarea><br><br>
                <input class="btn btn-success" type="Submit" >
                </form>
    </div>
    <div class="col-sm-2"></div>
             <div class=" col-sm-4">
                 <div class="col-sm-12">
                 <h3 style="color:red"><i class=" fas fa-map-marker-alt" > </i> Find Us at Office</h3>
                     <br>
                    Dr. B.R. Ambedkar National Institute of Technology Jalandhar
N.I.T. Post Office
Jalandhar (Punjab) - 144 011
India
                 </div>
                 <div class="col-sm-12">
                     <h3 style="color:green"><i class=" fas fa-phone"></i> Give Us a Ring</h3>
                     <h4 style="color:grey"><pre>0181 - 2690301 
0181 - 2690453
0181 - 3082000</pre></h4>

                 </div>
                 <div class="col-sm-12">
                     <h3 style="color:blue"><i class=" far fa-envelope"></i> Email-id</h3>
                     <pre>director@nitj.ac.in</pre>
                     
                 </div>
                 
             
             </div>
             
             
             
             
         </div>
