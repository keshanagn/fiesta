<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Account</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Css/Customer page Myacc.css">
    </head>
    <body>
<!-- This Division is the Header Section. -->
<img id = "backgroundimg" src = "./images/background.jpg" width="650" height = "1036">
<img id = "backgroundimg2" src = "./images/bg2.png" width="950" height= "1036">
    <div id = "header">
        <p class = "header_1" id = "titleofP" >Hefty</p>

        <img class = "header_1 rightheader sharelinks" src = "./Images/facebook.png" width = 40 height = 40 alt = "whatsapp">
        <img class = "header_1 rightheader sharelinks" src = "./Images/whatsapp.png" width = 40 height = 40 alt = "facebook">
        <p class = "header_1 rightheader sharelinks" id = "sharetitle">Follow Us On:</p>

        <nav class = "header_1 rightheader" id = "navigation">
            <li><Button><a href = "Home Page 2.php">Home</a></Button></li> <!-- return to home page 2-->
            <li><Button>Name of the Account</Button></li> <!-- No need to click the button -->

        </nav>
        
    </div>

<!-- This is the Second Header Section -->
<div>
    <p>Customer</p>
    <p>My Account</p>   <!-- This 2 paragraphs must be align to the right of the second Header -->

    <Button><a href = "Customer Page_Order.php">Order</Button>
    <Button><a href = "Customer Page_My acc.php">My Account</a></Button>  <!--The Three Buttons in the Second Header Must float right-->
    <button>Log Out</button> <!-- logged out and go the Home page 1 -->
</div>


<!-- The body Section Starts From Here -->

    <div>
        <form action="action.php" method = "get">
            <label for="Name">Name</label><br>
            <input type= "text" name = "Name" placeholder="John Doe" required><br>

            <label for="Email">Email</label><br>
            <input type="text" name = "Email" placeholder = "John@example.com" required><br>

            <label for="Password">Password</label><br>
            <input type="text" name = "Password" placeholder="abc@1234" required>
            <br>
            <label for="Address">Address</label><br>
            <input type="text" name = "Address" placeholder="94,Cumar...." required><br>

            <label for="Telephone">Telephone</label><br>
            <input type="text" name = "Telephone" placeholder="+94..." required><br>
            <br>
            <input type="Submit" value="Update">
        </form>
    </div>


<!-- This is the footer. footer is divided into to two sections. paragraphs are in first section and buttons are in the second section. -->
    <div id = "footer"> 
        <!-- first Section -->   
        <div id = "footer1" class = "blocking">
            <div id = "footer1_1" class ="footer_one"> 
                <P>terms and Conditions</P>
                <p>Group Project- Group 63</p>
            </div>

            <div id = "footer1_2" class = "footer_one">
                <p>Address <br> College House 94 <br> Cumarthunga Munidasa Mawatha <br> Colombo 03 <br>Sri Lanka</p>
            </div>
        </div>
        <!-- Second Section -->
        <div class = "footer2 blocking">
            <button id = "Contributors">Contributors</button>
            <div id = "footer2right">   <!-- when this one is clicked must pop up only the names of the contributors-->
            <button class = "footer2right"><a href = "Help Page.php">Help</button>
            <button class = "footer2right">Contact Us</button> <!-- popup the contact details -->
        </div>
    </div>
    </body>
</html>


<!-- color codes 
#747473 - light grey
#242323 - Dark grey Only for the Contributos button in the Home Page

text Size = 12 px
Large Text = 40px
Don't use any other type of font sizes. -->
