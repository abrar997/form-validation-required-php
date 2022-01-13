    <!-- <?php
            // echo "<h1>print data from form  </h1>";
            // // 1_$_SERVER

            // // اللي محتاجة اعرفهم محددين بنجمة **
            // echo $_SERVER["PHP_SELF"];  #ياخذني لمسار هذي الصفحة  **
            // echo "<br>";
            // echo "<br>";
            // echo $_SERVER['SERVER_NAME']; #==localhost
            // echo "<br>";
            // echo $_SERVER["HTTP_HOST"]; # localhost:8080 **
            // echo "<br>";
            // echo $_SERVER["HTTP_USER_AGENT"]; # الاصدار وما يخصهMozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36
            // echo "<br>";
            // echo $_SERVER["SCRIPT_NAME"]; #/new3/result.php
            // echo "<br>";
            // echo $_SERVER["SERVER_PROTOCOL"]; # HTTP/1.1 **
            // echo "<br>";
            // echo $_SERVER["SERVER_SOFTWARE"]; #Apache/2.4.38 (Win32) OpenSSL/1.1.1a PHP/7.3.2 **
            // echo "<br>";
            // echo $_SERVER["SERVER_ADDR"]; #ib --->::1
            // echo "<br>";
            // echo "<br>";
            #============================================================================================== 
            ?>-->

    <!-- 2_$_REQUERST -->
    <style>
        <?php
        include "style.css" ?>
    </style>

    <?php
    $name = $email = $website = $comment = $gender = ""; #for validation
    $nameError = $emailError = $websiteError = $commentError = $genderError = ""; #for validation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $name = testdatainput($_REQUEST["name"]);
        // $email = testdatainput($_REQUEST["email"]);
        // $website = testdatainput($_REQUEST["website"]); # حتى يطبق الدالة التحت كلة على الموقع او على اي واحد اني مخليتو بنصة
        // $comment = testdatainput($_REQUEST["comment"]);
        // $gender = testdatainput($_REQUEST["gender"]);

        #need 5 functions to check all inputs 

        if (empty($POST["name"])) {
            $nameError = "name is required ";
        } else {
            $name = testdatainput($_REQUEST["name"]);
        }
        // -------------------
        if (empty($_POST["email"])) {
            $emailError = "email is required ";
        } else {
            $email = testdatainput($_REQUEST["email"]);
        }
        // ----------------
        if (empty($_POST["website"])) {
            $websiteError = "website is required ";
        } else {
            $website = testdatainput($_REQUEST["website"]);
        }
        // ------------------
        if (trim($_POST['comment']) == "") {
            $commentError = "comment is required ";
        } else {
            $comment = testdatainput($_REQUEST["comment"]);
        }
        // ---------------
        if (empty($_POST["gender"])) {
            $genderError = "gender is required ";
        } else {
            $gender = testdatainput($_REQUEST["gender"]);
        }
    }

    // دالة حتى اصلح اخطاء  ممكن الشخص يوكع بيهو وهة ممنتبه نمثل مسافة او رمز او شي موملحوظ بس يسوبي اررور 
    function testdatainput($dataCheck)
    { #never forget $ bcz php
        $dataCheck11 = trim($dataCheck); //white space
        $dataCheck11 = stripslashes($dataCheck);  //يتجاهل  / 
        $dataCheck11 = htmlspecialchars($dataCheck); //convert any thing intire to html code
        return $dataCheck11;
    }


    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <section class="container">
            <h1>abrar Muthanna rakea</h1>
            <h3>chemical and petrochemical engineering </h3>
            <div class="row">
                <div class="col-lg-8">
                    <!-- send data to other page  of php-->
                    <!-- <form action="inde.php" method="post"> -->
                         <!-- send data to same page  -->
                    <!-- طريقة تحول اي كود كو كفهوم الى كود html intity name -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">name :</label>
                            <div class="col-sm-10">
                                <span style="color: red;" class="error">**<?php echo $nameError; ?> </span>
                                <input type="text" class="form-control" id="inputPassword3" name="name" placeholder="your name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">email :</label>
                            <div class="col-sm-10">
                                <span style="color: red;" class="error">**<?php echo $emailError; ?> </span>
                                <input type="text" class="form-control" id="inputPassword3" name="email" placeholder="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">website :</label>
                            <div class="col-sm-10">
                                <span style="color: red;" class="error">**<?php echo $websiteError;  ?> </span>
                                <input type="text" class="form-control" id="inputPassword3" name="website" placeholder="website">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">comment :</label>
                            <div class="col-sm-10">
                                <span style="color: red;" class="error">**<?php echo $commentError;  ?> </span>

                                <textarea rows="5" cols="40" type="text" class="form-control" id="inputPassword3" name="comment"> </textarea>
                            </div>
                        </div>

                        <h4 class=" col-form-label">Gender:</h4>

                        <div class="form-group row">
                            <input type="radio" class="col-form mt-3" id="inputgender1" name="gender" value="female">
                            <label for="inputgender1" class="col-sm-2  col-form-label">female </label>
                            <input type="radio" class="col-form mt-3" id="inputgender2" name="gender" value="male">
                            <label for="inputgender2" class="col-sm-2 col-form-label"> male</label>
                            <input type="radio" class="col-form mt-3" id="inputgender3" name="gender" value="other">
                            <label for="inputgender3" class="col-sm-2 col-form-label"> other</label>
                            <span style="color: red;" class="error">**<?php echo $genderError; ?> </span>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn  ">log in</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-4">
                    <div class='data'>
                        <img src='img.jpg'>
                    </div>
                </div>
            </div>

            <div class="print-data"> <?php

                                        echo "<h2>Data </h2>";
                                        echo " <h4>Name: $name</h4>";
                                        echo "<br>";
                                        echo " <h4>Eamail: $email</h4>";
                                        echo "<br>";
                                        echo " <h4>your comment:$comment </h4>";
                                        echo "<br>";
                                        echo  "  <h4>your websitre:$website</h4>";
                                        echo "<br>";
                                        echo "<h4> Gender :$gender</h4>";

                                        ?></div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>

    </html>


    <!-- ====================================================================================================================================================== -->


    <!-- 3-regular expression -->

    <?php
    //  \^    startwith [a-zA-Z0-9] or +[a-z][A-Z][0-9]             [^abcs]-->write any thig unless this                 end- $\  
    // |com |net|org   choose one of them  
    // mathch single charecters  .
    // \s white space

    // \b match start of word with end of same word 
    // +  n+ at least one n اجباري اقل شي 1
    // **  0 or more   ماكو او اكو بيهة مجال
    // ?  0 or one  م اكو او بس وحدة 
    // /^ [A-Za-z-9_\-.]+@[A-Za-z0-9_\-.]+\.(com|org|net) $/ 

    // /W3school/i    يعني مش حروف حساسة ممكن اكتبة  صغير او كبير 
    // if(!preg_match("/^[a-zA-Z-']**$/",$name) validation for name 
    // 
    // ex // abrarara muthanna rarar
    // preg_match()  ترجع بس قيمة وحدة مشابهة 
    // preg_match_all()  ترجع كل  القيم مشابهة 

    // $info="lall lagfgdgd lalal";
    // $compar="/la/i"; //must writr betwee //i
    // echo preg_match($compar,$info); #1
    // echo preg_match_all($compar,$info); #4

    ?>