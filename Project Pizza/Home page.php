<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Css/Home page.css">
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
            <li><a href = "Home page.php">Home</a></button></li>
            <li><a href = "Sign Up Page.php">Sign Up</a></button></li>
            <li><a href = "Sign In Page.php">Sign In</a></button></li>

        </nav>
        
        
       </div>


<!-- The body Section Starts From Here -->
    <div>
        <div id = "section1" class = "inline_one">
            <p id = "title">Hefty</p>
            <p>Hefty is a Customer Relationship Management site for<br>small scale pizza businesses.</p>
        </div>
        <div  class = "inline_one" id = "section2">
        <p>Want to manage <br>Your food business <br>easily?</p> 
        </div>
        
    </div>

    <div>

        <div id = "section3" class = "inline_two" >
            <p>Customers can also handle their orders quickly <br>and easily.</p>
            <p>Makes Your Dreams Come True</p>
            <button><a href = "Sign Up page.php">Sign Up as Customer</a></button>
        </div>
        
        <div id = "section4" class = "inline_two">

            <p>Our Design is very <br> User Friendly to <br> handle <br>feel free to get your orders done <br> correctly.</p>
        </div>
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
            <div id = "footer2right">
            <button onClick = "alertfunction()" class = "footer2right">Help</button>
            <button class = "footer2right">Contact Us</button> <!-- popup the contact details -->
            </div>
        </div>
    </div>
    </body>
    <script>
        function alertfunction() {
            alert("please login first");
        }
        </script>
</html>


<!-- color codes 
#747473 - light grey
#242323 - Dark grey Only for the Contributos button in the Home Page

text Size = 12 px
Large Text = 40px
Don't use any other type of font sizes. -->


