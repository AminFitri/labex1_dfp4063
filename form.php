<!DOCTYPE html>
<html>
<head> 
   
</head>
    <center>
    <body>
        <img src="books1.jpg" width="50%" height="200px"/>
        <div class="topnav">
        <a href="home.php">Home</a>
        <a href="list.php">List Book</a>
        <a class="active" href="form.php">Borrow Form</a>
        </div>

        <h1>BOOK BORROW FORM</h1>
        <table border="0">
        <form method="post" action=""> 
        <tr>
            <th>Full Name:</th>
                <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <th>Gender :</th>
                <td>
                <input type="radio" name="gender" value="Male" >Male
                <input type="radio" name="gender" value="Female" >Female
                </td>
        </tr>
        <tr>
            <th>Address :</th>
                <td><textarea name="address"  rows="3" cols="40"></textarea></td>
        </tr>
        <tr>
            <th>Contact No :</th>
                <td><input type="number" name="contact" ></td>
        </tr>
        <tr>
            <th>Email :</th>
                <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <th>Date :</th>
                <td><input type="date" name="employer" ></td>
        </tr>
        <tr>
            <th>Title :</th>
                <td><select name="book" id="book">
                <option value="Normal People">Normal People</option>
                <option value="The End Of Loneliness">The End Of Loneliness</option>
                <option value="Lookers">Lookers</option>
                <option value="The Encyclopedia of Animals">The Encyclopedia of Animals</option>
                <option value="The Confession">The Confession</option>
                <option value="Even When You Lie To Me">Even When You Lie To Me</option>
                </select></td>
        </tr>
        <tr>
            <th>Is the book :</th>
                <td>
                <input type="checkbox" name="fiction" value="Fiction">Fiction
                <input type="checkbox" name="nonfiction" value="Non Fiction">Non Fiction
                </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="submit" value="Submit" onclick="alert('All data have been saved.')"/>
            <input type="reset" name="reset" value="Reset"/>
            </td>
        </tr>
        </form>
        </table>
    </body>
</html>
