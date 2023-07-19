<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            margin: 0%;
            padding: 0%;
        }
            
        .video{
            
            border-radius: 10px;
            text-align: center;
            opacity: 85%;
            position: fixed;
            
        }

        .form{
            padding: 10px;
            
        }

        .form .heading{
            position: absolute;top: 80px; left: 494px;
            padding: 10px;
        }

        .form .name{
            font-family: comic sans MS;  
            position: absolute; top: 185px; left: 505px;
        }

        .form .name .submit{
            
            font-family: comic sans MS;  
            position: absolute; top: 249px; left: 100px;
            width: 20px;
        }

        .name .button{
            background-color: 	#ADD8E6;
            padding: 3px;
            border-radius: 10px;
            font-family: comic sans MS; 
            
        }

        .rect{
            padding: 55px; height: 274px; width: 420px;
            border: 2px solid;
            border-radius: 50px;
            
            position: absolute; left: 350px; top: 65px;
            z-index: 0;
            background-color: #E6E6FA;
            opacity: 70%;
        }

        
    </style>
</head>
<body>
   
    <div class="video">
        <video src="./video_inside_a_library (2160p).mp4" type="video/mp4" style="width: 1300px; border-radius: 10px;" autoplay loop muted>
            
        </video>      
    </div>

    <div class="rect">   </div>

    <form name="myform" class="form" action="form.html" method="post">
        <div class="heading">
            <h1 style="font-family: comic sans MS;" >Feedback Form</h1>
        </div>
        
        <div class="name">
            <label>NAME :</label>
             <input type="text" name="fname" id="fname" placeholder="Enter your name.." ><br><BR>
             <label>E-Mail :</label>
             <input type="text"  name="id" id="id" placeholder="Enter your e-mail.." ><br><br>
             <label>SUBJECT :</label>
             <input type="text"  name="sub" id="sub" placeholder="Enter your subject.." ><br><br>
             <label>MESSAGE :</label><br>
             <textarea rows="4" cols="30" name="feed" id="feed" form="usrform" placeholder="Enter your feedback here"></textarea>
               <div class="submit">
               <input type="button"   value="SUBMIT" class="button" >
               </div> 
            
                
             
                
        </div>

      
    </form>
       
    <?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = 'ass-3';
    
    // Create connection
    $conn = mysqli_connect ($host, $user, $pass, $db);

    $fname=$_POST['fname'];
    $id=$_POST['id'];
    $sub=$_POST['sub'];
    $feed=$_POST['feed'];

    $sql="INSERT INTO `feedback` (`name`, `e-mail`, `subject`, `message`) VALUES ('$fname', '$id', '$sub', '$feed')";

    if($conn->query($sql)==True){
        echo "new record added";

    }
    else{
        echo "error";
    }

    $conn->close();

   
    ?>
    
</body>
</html>