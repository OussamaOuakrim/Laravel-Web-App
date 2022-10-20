<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eatery Cafe and Restaurant </title>

     <meta charset="UTF-8">
    
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/reserve.css">

</head>
<body> 
<img src="/images/reservationn.png" alt="alternatetext">
<h1>Reserve your Table Now !</h1>
<div id ="form">
<form action="/reserve" method="POST"> 
@csrf
<ul class="form-style-1">
    <li>
    <label>Full Name <span class="required">*</span></label>
    <input type="text" name="name" class="field-divided" placeholder="full name" id="t1" />

    </li>
    <li>
        <label>Date <span class="required">*</span></label>
        <input type="date" name="date" class="field-long" id="t2"/>
    </li>
    <li>
        <label>Hour <span class="required">*</span></label>
        <input type="text" name="hour" placeholder="Type the hour of your reservation" class="field-long" id="t3" />
    </li>
    
    <li>
        <!--<input type="submit" value="Submit" onclick="store();"/> -->
        <button >
            Reserve 
        </button>
    </li>
</ul>
</form>

</div>

