<!DOCTYPE html>
<html>
<head> 
    <title>List Page</title>
    <style>
        body{
            background-color: #F5F5DC
        }
        .topnav{
            background-color: #333;
            overflow: hidden;
        }

        .topnav a{
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px; /*top bottom right left */
            text-decoration: none;
            font-size: 17px;
            font-family: Tahoma;
        }

        .topnav a:hover{
            background-color: #ddd;
            color: black;
        }

        .topnav a.active{
            background-color: #9E4244;
            color: white;
        }
    </style>
</head>
    <center>
    <body>
        <img src="books1.jpg" width="50%" height="200px"/>
        <div class="topnav">
        <a href="home.php">Home</a>
        <a class="active" href="list.php">List Book</a>
        <a href="form.php">Borrow Form</a>
        </div>
        
    <table  cellspacing="10" cellpadding="10" border="0" ></br>
    <tr>
        <th><img src="books2.jpg"  width="80%" height="100%"></th>
        <th><img src="books3.jpg"  width="80%" height="100%"></th>
        <th><img src="books4.jpg"  width="80%" height="100%"></th>
    </tr>
    <tr>
        <th>
            <p>Normal People</p>
            <p>Author(s): Conversation With Friends</p>
            <p>Publisher: Faber and Faber</p>
            <a href="normal.php">More Details</a>
        </th>
        <th>
            <p>The End Of Loneliness</p>
            <p>Author(s): John Irving</p>
            <p>Publisher: Penguins Books</p>
            <a href="the.php">More Details</a>
        </th>
        <th>
            <p>Lookers</p>
            <p>Author(s): Simon & Schuster</p>
            <p>Publisher: Boundlesss</p>
            <a href="lookers.php">More Details</a>
        </th>
    </tr>
    </body>
</html>
