<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" type="text/css" href = "Main.css"/>
</head>
<body>
<div class = "leftCover">
        <div class="content">
            <p>WELCOME !</p> 
            &nbsp &nbsp;
            <h1>TO KEEP CONNECTED WITH US PLEASE REGISTER WITH YOUR PERSONAL INFO</h1>
            <br><br>
            <i class='bx bxs-hand-right'></i>
        </div> 
    </div>

    <div class = "rightCover">
    <form action="Insert.php" name="form" method="post" onsubmit="return ValidateForm()">
        <h1>Register Form</h1>
		&nbsp
        <table>
            <tr>
                <td>Full Name</td>
            </tr>
            <tr>
                <td><div class = "input-box">
                    <input type = "text" name= "fname" placeholder="First Name" required>
                </div></td>

                <td><div class = "input-box">
                    <input type = "text" name= "lname" placeholder="Last Name" required>
                </div></td>
            </tr>
            
            <tr>
                <td>Address</td>
            </tr>

            <tr>
                <td><div class = "input-box">
                    <input type = "text" name= "street" placeholder="Street Name">
                </div></td>

                <td><div class = "input-box">
                    <input type = "text" name= "city" placeholder="City">
                </div></td>

                <td><div class = "input-box">
                    <input type = "text" name= "code" placeholder="Postal Code">
                </div></td>
            </tr>
            
           <tr>
                <td>Gender</td>
                <td><input type = "radio" name="male">Male
                    <input type = "radio" name="female">Female
                    <input type = "radio" name="other">None</td>
           </tr> 
          
            <tr>
                <td>Date of Birth</td>
                <td><div class = "input-box"><input type="date" name="birthday"></div></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td colspan="2"><div class = "input-box">
                    <input type = "text" name="email" placeholder="email@gmail.com"required>
                </div></td>
            </tr>
        
            <tr>
                <td>Contact Number</td>
                <td><div class = "input-box">
                    <input type = "text" name="cnumber" placeholder="011 111 1111"required>
                </div></td>
            </tr>
            
        </table> 
        &nbsp;
        <center><button type="submit" class="btn">Submit</button></center>
    </form>
</div>
</body>
</html>