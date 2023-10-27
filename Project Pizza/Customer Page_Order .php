<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Order</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Css/Customer Page_Order.css">
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
            <li><Button><a href = "Home Page 2.php">Home</a></Button></li><!-- return to home page 2-->
            <li><Button>Name of the Account</Button></li>

        </nav>
        
    </div>

<!-- This is the Second Header Section -->
<div>
    <p>Customer</p>
    <p>Order Page</p>   <!-- This 2 paragraphs must be align to the right of the second Header -->

    <Button><a href = "Customer Page_Order.php">Order</a></Button>
    <Button><a href = "Customer Page_My acc.php" >My Account</a></Button>  <!--The Three Buttons in the Second Header Must float right-->
    <button>Log Out</button> <!-- logged out and must return to Home Page 1-->
</div>


<!-- The body Section Starts From Here -->

<!-- in this body we have to create a form to add 3 no of pan pizza , no of Burgers , and No of Sauce Portions and a order Button  -->
    <div>
        <form action="action.php" method = "get">
            <label for="panpizza">Pan Pizza</label><br>
            <input type= "number" name = "panpizza" required><br>

            <label for="Burgers">Burgers</label><br>
            <input type="number" name = "Burgers" required><br>

            <label for="Sauceportions">Sauce Portions</label><br>
            <input type="number" name = "Sauceportions" required><br><br>
            
            <input type="Submit" value="Order">
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
