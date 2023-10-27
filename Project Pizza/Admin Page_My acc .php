<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Account-Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<!-- This Division is the Header Section. -->
       <div>
        <p>Hefty</p>
        <nav>
            <li><Button><a href = "Home Page 2.php">Home</a></Button></li> <!-- return to home page 2 -->
            <li><Button>Name of the Account</Button></li> <!-- admin account name must show -->

        </nav>
        <p>Follow Us On:</p>
        <img src = "">
        <img src = "">
       </div>

<!-- This is the Second Header Section -->
<div>
    <p>Administrator</p>
    <p>My Account</p>   <!-- This 2 paragraphs must be align to the right of the second Header -->
    <button><a href = "Admin Page_My Contacts.php">My Contancts</a></button>
    <button><a href = "Admin Page_Received Orders.php">Recieved Orders</button>
    <button><a href = "Admin Page_MY acc.php">My Account</a></button>  <!--The Three Buttons in the Second Header Must float right-->
    <button>Log Out</button>
</div>


<!-- The body Section Starts From Here -->

    <div>
        <form action="action.php" method = "get">
            <label for="Name">Name</label><br>
            <input type= "text" name = "Name" placeholder="John Doe" required><br>

            <label for="Email">Email</label><br>
            <input type="text" name = "Email" placeholder="john@example.com" required><br>

            <label for="Password">Password</label><br>
            <input type="text" name = "Password" placeholder="abc@1234" required><br>

            <label for="Telephone">Telephone</label><br>
            <input type="text" name = "Telephone" placeholder="+94.." required><br><br>


            <input type="Submit" value="Update">
        </form>
    </div>


<!-- This is the footer. footer is divided into to two sections. paragraphs are in first section and buttons are in the second section. -->
    <div> 
        <!-- first Section -->   
        <div>
            <div> 
                <P>terms and Conditions</P>
                <p>Group Project- Group 63</p>
            </div>

            <div>
                <p>Address <br> College House 94 <br> Cumarthunga Munidasa Mawatha <br> Colombo 03 <br>Sri Lanka</p>
            </div>
        </div>
        <!-- Second Section -->
        <div>
            <button>Contributors</button>
            <button><a href = "Help Page.php">Help</a></button> <!-- again return to the page -->
            <button>Contact Us</button> <!-- popup the contact details -->
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
