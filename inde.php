<!-- if $_SERVER['REQUEST_METHOD']=="GET"   
all intire data will print o appear in search nav

-->
<!-- <?php 
// echo "<h2>hello we  recieve your data from  </h2>";
//  لو طريقة بعث الداتا هي post in form
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     // $name = $_REQUEST["text"];  #ممكن استدل كلمة $_REQUEST ب $_POST or $_GET
//     // $name = $_POST["text"];   # راح يعمل جيك لل methode  وبعدين يكمل شعلو 
//     $name = $_REQUEST["text"];   // بس كلمة $_REQUEST اشمل
//     $email = $_REQUEST["email"];
//     $pass = $_REQUEST["pass"];


//     // if (empty($name && $pass) ) {# بهذي الحالة لو فارع واحد منهم راح يلوص الثاني وتنطبع النتيجة
//     if (empty($name)) {
//         echo "<h2>data iis empty </h2>";
//     } else {
//         echo  "<h3> Your Name : <span style='color:red;font-size:26px'> $name</span> </h3>";
//     }
//     echo "<br>";
//     if (empty($email)) {
//         echo "email is requierd";
//     } else {
//         echo  "<h3> Your Name : <span style='color:red;font-size:26px'> $email</span> </h3>";
//     }
//     echo "<br>";
//     if (empty($pass)) {
//         echo "password is empty";
//     } else {
//         // حتى اشفر الركز بحيث ينحفط بال بروزر وميضهر عندي استخدم  
//         // md5  راح يطلع ارقام او احرف  عشوائية حسب اللي مدخلة اني 
//         echo md5($pass);
//     }
// } 
// ?>
******************* VALIDATION -->
<?php

    // $name="";
    // $email="";
    // $website="";
    // $comment="";
    // $gender="";

    // or -->
//     $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $website = $comment = $gender = ""; #for validation
// // $nameError = $emailError = $websiteError = $commentError = $genderError = ""; #for validation
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = testdatainput($_REQUEST["name"]);
    // $email = testdatainput($_REQUEST["email"]);
    // $website = testdatainput($_REQUEST["website"]); # حتى يطبق الدالة التحت كلة على الموقع او على اي واحد اني مخليتو بنصة
    // $comment = testdatainput($_REQUEST["comment"]);
    // $gender = testdatainput($_REQUEST["gender"]);

    #need 5 functions to check all inputs 

    // if(empty($POST["name"])){
    //    $nameError="name is required ";
    // }else{
    //     $name= testdatainput($_REQUEST["name"]);
    // }
    // -------------------
    // if(empty($_POST["email"])){
    //         $emailError="name is required ";
    // }else{
    //     $email= testdatainput($_REQUEST["email"]);
    // }
    // ----------------
    // if(empty($_POST["website"])){
    //         $websiteError= "website is required ";


    // }else{
    //         $website= testdatainput($_REQUEST["website"]);
    // }
    // ------------------
    // if(empty($_POST["comment"])){
    //         $commentError= "comment is required ";


    // }else{
    //         $comment= testdatainput($_REQUEST["comment"]);
    // }
    // ---------------
    // if(empty($_POST["gender"])){
    //         $genderError= "gender is required ";


    // }else{
    //         $gender= testdatainput($_REQUEST["gender"]);
    // }
//     }
// // دالة حتى اصلح اخطاء  ممكن الشخص يوكع بيهو وهة ممنتبه نمثل مسافة او رمز او شي موملحوظ بس يسوبي اررور 
// function testdatainput($dataCheck)
// { #never forget $ bcz php
//     $dataCheck11 = trim($dataCheck); //white space
//     $dataCheck11 = stripslashes($dataCheck);  //يتجاهل  / 
//     $dataCheck11 = htmlspecialchars($dataCheck); //convert any thing intire to html code
//     return $dataCheck11;
// }

// echo "<h1>Data </h1>";
// echo " <h3>Name: $name</h3>";
// echo "<br>";
// echo " <h3>Eamail: $email</h3>";
// echo "<br>";
// echo " <h3>your comment:$comment </h3>";
// echo "<br>";
// echo  "  <h3>your websitre:$website</h3>";
// echo "<br>";
// echo "<h3> Gender :$gender</h3>";

// ?>



// <style>
//     <?php
//     include "style.css"
//     ?>
// </style>