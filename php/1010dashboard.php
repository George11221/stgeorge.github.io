<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="dashboardcss.css">
    <link rel="stylesheet" href="scriptdashboard.js">
    <script src="scriptdashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myButton").click(function() {
                $.ajax({
                    url: "requiste.php",
                    type: "POST",
                    data: {
                        divToShow: "divId"
                    },
                    success: function(response) {
                        $("#" + response).show();
                        $("#divIddd").hide();
                        $("#divIdd").hide();
                        $("#divIdddd").hide();

                    },
                    error: function() {
                        console.log("Error occurred during AJAX request.");
                    }

                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#myButtton").click(function() {
                $.ajax({
                    url: "requiste2.php",
                    type: "POST",
                    data: {
                        divToShoww: "divIdd"
                    },
                    success: function(response) {
                        $("#" + response).show();
                        $("#divId").hide();
                        $("#divIddd").hide();
                        $("#divIdddd").hide();
                    },
                    error: function() {
                        console.log("Error occurred during AJAX request.");
                    }

                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myButtoon").click(function() {
                $.ajax({
                    url: "requiste3.php",
                    type: "POST",
                    data: {
                        divToShowww: "divIddd"
                    },
                    success: function(response) {
                        $("#" + response).show();
                        $("#divId").hide();
                        $("#divIdd").hide();
                        $("#divIdddd").hide();
                    },
                    error: function() {
                        console.log("Error occurred during AJAX request.");
                    }

                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myButtooon").click(function() {
                $.ajax({
                    url: "requiste4.php",
                    type: "POST",
                    data: {
                        divToShowwww: "divIdddd"
                    },
                    success: function(response) {
                        $("#" + response).show();
                        $("#divId").hide();
                        $("#divIdd").hide();
                        $("#divIddd").hide();
                    },
                    error: function() {
                        console.log("Error occurred during AJAX request.");
                    }

                });
            });
        });
    </script>


    <style>
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 25px;
        }
    </style>


    <style>
        .myDiv {
            display: none;
            padding: 10px;
            background-color: #e9b971;
            margin-top: 10px;
            margin-left: 230px;
            margin-right: 150px;
            border-radius: 20px;
        }
    </style>
</head>

<body class="body">


    <style>
        .body {
            background-image: url(church-windows-2217785.jpg);
            background-size: cover;
        }
    </style>
    <div class="intro">
        <p class="fword"> welcome ( ) it is your dashboard and you can choose what you want to do in the left side bar.! </p>

        <button style="align-items: center;">
            <span onclick="openNav()">open</span>
        </button>

    </div>







    <div id="message"></div>



    <div id="divId" class="myDiv">
        <form id="info" style="    display: flex;flex-direction: column;align-items: flex-end;" action="add_son.php" method="POST">
            <label for="name"> the name of son:</label>
            <input name="name" type="text">

            <label for="date-of-birth"> the date-of-birth:</label>
            <input required name="dateofbirth" type="date">

            <label for="sex"> the sex of son:</label>
            <select required id="sex" name="sex">

                <optgroup label="sex">
                    <option value="male">male</option>
                    <option value="female"> female </option>
                </optgroup>
            </select>

            <label for="phone"> the phone number of son:</label>
            <input required name="phone" type="number">

            <label for="priest"> the priest name of son:</label>
            <input required name="priest" type="text">

            <label for="address"> the address of son:</label>
            <input required name="address" type="text">

            <label for="grade"> the grade of son:</label>
            <select required id="grade" name="grade">
                <optgroup label="grade">
                    <option value="first">first</option>
                    <option value="second"> second </option>
                    <option value="third"> third </option>
                </optgroup>
            </select>

            <label for="school"> the school of son:</label>
            <input required name="school" type="text">

            <label for="notes"> the notes about son if you want:</label>
            <input name="notes" type="text">
            <input name="submit" type="submit">
        </form>


    </div>






    <div id="divIdd" class="myDiv">
        <form method="post" action="delete_son.php">
            ادخل أسم المخدوم:<input type="text" name="name">
            <input type="submit" name="Submit">
        </form>
    </div>

    <div id="divIddd" class="myDiv">
        <form method="post" action="update_details.php">
            تعديل اسم المخدوم:<input type="text">
            تعديل تاريخ ميلاد المخدوم:<input type="date">
            تعديل رقم هاتف المخدوم:<input type="text">
            تعديل اسم اب الاعتراف:<input type="text">
            تعديل عنوان المخدوم:<input type="text">
            :تعديل المرحلة التعليمية للمخدوم
            <select id="grade" name="grade">
                <optgroup label="grade">
                    <option value="first">first</option>
                    <option value="second"> second </option>
                    <option value="third"> third </option>
                </optgroup>
            </select>
            <br>
            تعديل اسم المدرسة:<input type="text">
            <input type="submit" name="Submit">
        </form>
    </div>


    <div id="divIdddd" class="myDiv">
        <form method="post" action="select.php">
    ID : <input type="number" name="ID"> <br>
    اسم المخدوم: <input type="text" name="name"> <br>

            <input type="submit" name="Submit">
        </form>
    </div>




    

    <script>
    function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
    }
    </script>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a id="myButton" href="#">اضافة مخدوم</a>
        <a id="myButtton" href="#">حذف مخدوم</a>
        <a id="myButtoon" href="#">تعديل بيانات مخدوم</a>
        <a id="myButtooon"href="#">عرض بيانات مخدوم</a>
        <a href="#">احصائية للمخدومين</a>
        <a href="#"> عمل افتقاد للمخدومين</a>
    </div>



</body>

</html>