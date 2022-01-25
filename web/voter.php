<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, iniitial-scale=1">
        <title>Voter Screen</title>
        
        <link rel="stylesheet" href="css/voter.css"/>
        

    </head>
    <body>
        <h1 id="heading">Welcome to XYZ voting portal</h1>
        <h2 id="heading2">You are at the voter's screen</h2>
        <img id="image" src="../img/voterimage.jpg">

        <div id="form">
            Enter your voter Id number: 
            <input type="number" id="cons">
            <button class="button">Check</button>

            <form id="newUserForm">
                <label class="formmitem">Full Name:</label> <input class="formmitem" type="text" id="fname" name="fname"><br>
                <label class="formmitem">Age:</label> <input class="formmitem" type="number" id="age" name="age"><br>
                <label class="formmitem">Gender:</label> 
                <input class="formmitem"type="radio" id="Male" name="gender">Male</input>
                <input class="formmitem" type="radio" id="FeMale" name="gender">Female</input>
                <input class="formmitem" type="radio" id="Others" name="gender">Others</input><br>
                <label class="formmitem">Constituency:</label> <input type="text" id="Constituency" >
                <br>
                <button class="button" >Submit</button>
            </form>

            
        </div>
        <div id="vote">
            <label for="cars">Select the political party you want to vote:</label>

            <select name="cars" id="cars">
                <option value="BJP">BJP</option>
                <option value="Congress">Congress</option>
                <option value="ABC">ABC</option>
                <option value="None">None</option>
            </select>
            
        </div>




    </body>
</html>

<?php

    include 'DatabaseConn.php'

?>