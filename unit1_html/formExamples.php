<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container" >
<header>Book Examples of Form Elements:</header>
    <nav>
                <ul>
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="page1.php">Page 1</a></li>
                    <li><a href="page3.php">Page 3</a></li>
                    <li><a href="subfolder/index.php">Sub page</a></li>
                </ul>
    </nav>

    <form method="post" action="#">
        <label for ="firstname"> Enter your first name: </label> <br>
        <input type="text" id = "firstName" name = "firstName" size="20" maxlength="5" placeholder="Enter First Name"> 
   

      <br>
      <br>

      <label for="msg">Enter a message: </label><br>
        <textarea name = "msg" id = "msg" col ="40" row = "10"> Add text here:    
        </textarea>
    <br>
    <br>
       

 
        <label><input type="radio" name="color" value="#0000FF" checked> Blue</label>
        <label><input type="radio" name="color" value="red"  > Red</label>
        <label><input type="radio" name="color" value="yellow" > Yellow</label> 
        
        <p>Sizes:</p>
        <label><input type="checkbox" name="size" value="small" > Small</label>
        <label><input type="checkbox" name="size" value="medium" checked > Medium</label>
        <label><input type="checkbox" name="size" value="large" checked > Large</label>
        <br>

        <br>
            <p>Drop-down Menu Example: </p>
            <label for="color">Color:</label><br />
            <select id="color" name="color" size="8" multiple>
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

        <input type="hidden" name = "destination" value = "youremail@domain.com">

        <br>
        <input type="Reset">
        <input type="Submit" value = "click me to submit">
    
    </form>

    </div>
</body>
</html>