<?php

    $handle = fopen("scott.txt","w"); //overwrites file
    $handle = fopen("scott.txt","a");//appends to end of file
    fwrite($handle, "Hello Class");
    fclose ($handle);

    $handle = fopen("scott.txt", "r");
    echo fread($handle,100);
    echo fread($handle,3); //only shows 3 chars from $handle
    $data = fread($handle,3);



    while (!feof( $handle)){ //Loop thru file and show 5 char at a time then break.
        $text .= fread($handle, 5;) . "<br>";

    }

    fclose($handle);
    // "file/" = in file directory

    //read from text into an array
    echo "<pre>";
    print_r(file ("file/text.txt"));//indexes based on lines

    file_get_contents("file/file.txt");// dumps whole file



    echo readfile("file/text.txt");
    //does same thing as below but this method needs file to be opened first
    $handle = fopen("file/text.txt","r");
    echo fpassthru($handle);

    // HELLO_WORLD.TXT CONTAINS THE CHARACTERS "HELLO, WORLD!"
    $handle = fopen( "hello_world.txt", "r" );
    fseek( $handle, 7 ); //goes to 7th char
    echo fread( $handle, 5 ); // Displays "world"
    fclose( $handle );
    

    //rename/moving files
    rename ("scott.txt", "jazzy.txt"); //changes name of scott.txt to jazzy.txt
    rename ("jazzy.txt", "file/jaz.txt"); // moves the newly named jazzy.txt to file/ and renames to jaz.txt
    

?>