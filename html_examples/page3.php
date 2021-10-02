<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <header>Book Examples of Form Elements:</header>
    <nav>
                <ul>
                <li><a href="index.php">Home</a> </li>
                    <li><a href="page1.php">Page 1</a></li>
                    <li><a href="page3.php">Page 3</a></li>
                    <li><a href="formExamples.php">FormExamples from Class</a></li>
                    <li><a href="subfolder/index.php">Sub page</a></li>
                  
                </ul>
    </nav>

    <p>Basic Forms + Label + Textbox Example: </p>
    <form method = "POST" action = "#">
        <label for="fname">First Name: </label><br>
        <input type="text" id="fname" name = "fname"><br>
        <label for="lname">Last Name: </label><br>
        <input type="text" id="lname" name = "lname">
    </form>

    <br>
    <p>Textarea Example: </p>
    <label for="address">Address:  </label><br>
    <textarea name="address" id="address" cols="30" rows="4"></textarea>
    <br>

    <br>
    <p>Radio Form Example: </p>
    <p>Favorite Color:</p>
    <label><input type="radio" name="color" value="blue" > Blue</label>
    <label><input type="radio" name="color" value="red" checked > Red</label>
    <label><input type="radio" name="color" value="yellow" > Yellow</label> 
    <br>

    <br>
    <p>Checkbox Example: </p>
    <p>Sizes:</p>
    <label><input type="checkbox" name="size" value="small" > Small</label>
    <label><input type="checkbox" name="size" value="medium" checked > Medium</label>
    <label><input type="checkbox" name="size" value="large" checked > Large</label>
    <br>

    <br>
    <p>Drop-down Menu Example: </p>
    <label for="color">Color:</label><br />
    <select id="color" name="color">
        <option value="blue">Blue</option>
        <option value="red" selected="selected">Red</option>
        <option value="yellow">Yellow</option>
        <option value="purple">Purple</option>
        <option value="green">Green</option>
        <option value="pink">Pink</option>
    </select>
    <br>

    <br>
    <p>File Upload Example: </p>
    <input type="file" name="somefile" size="30" >
    <br>


    
    <br>
    <p>Form Button Example: </p>
    <input type="submit" value="Place Order" >
    <p>   OR  </p>
    <button>Place Order Here</button>
    <br>


</body>
</html>