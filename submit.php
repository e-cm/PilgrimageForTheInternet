<?php


//open connection to the database
class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('../../db/tithes.db');
        }
    }

//if user submitted a message at Hydro
if(isset($_POST['submit1']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesHydro (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}


//if user submitted a message at Data
else if(isset($_POST['submit2']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesData (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}




//if user submitted a message at ISP
else if(isset($_POST['submit3']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];

    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesISP (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }
}


//if user submitted a message at Satellite
else if(isset($_POST['submit4']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesSate (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}





//if user submitted a message at Last
else if(isset($_POST['submit5']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesLast (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}


?>