<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <div style="text-align:center;">
            <i class="far fa-user-circle"></i>
        </div>
        <div class="homepage-view">
            <?php
                // connect to db
                $connect =  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

                //retrieve the session variables
                session_start();
                
                $username = $_SESSION['username'];
                $userType = $_SESSION['userType'];
                $studentID = $_SESSION['studentID'];
                echo "<h1 class='user-display'> WELCOME ", $username, "!</h1><br>";
            ?>
        </div>
    
        <?php
            if($userType =='ADMIN'){

        ?>
        <div id="admin-nav">
            <a href="addStudent.php" style="text-decoration:none;"><button class="button-design">Add Student Records</button></a>
            <a href="addCourse.php" style="text-decoration:none;"><button class="button-design">Add Course Records</button></a>
            <a href="addDepartment.php" style="text-decoration:none;"><button class="button-design">Add Department Records</button></a>
        </div>

        <div class="table-contents">
            <div class="table-contents-students">
                <?php
                    // get data
                    // create query
                    // get students
                    $sql =  "Select * from STUDENT ";
                    $studentResults = mysqli_query($connect, $sql);
                    // fetch  the rows as an array
                    $students = mysqli_fetch_all($studentResults);
                    //print out student results
                    if(is_array($students) || is_object($students)){

                        foreach($students as $row){
                            if($row[1] == 'Admin')
                            {
                                continue;
                            }
                            echo "<p class='table-results'><a href=studentInfo.php?STUDENTID=", $row[0], '">', $row[2], ", ", $row[1], "</a></p>";
                        }
                    } else {
                        echo "This is not an array";
                    }
                ?>
            </div>

            <div class="table-contents-courses">
                <?php
                    // get courses
                    $sql =  "Select * from COURSE ";
                    $courseResults = mysqli_query($connect, $sql);
                    // fetch  the rows as an array
                    $courses = mysqli_fetch_all($courseResults);
                    //print out courses results
                    foreach($courses as $row){
                        echo "<p class='table-results'>", $row[1], "</p>";
                    }
                ?>
            </div>
                

            <div class="table-contents-departments">
                <?php
                    // get departments
                    $sql =  "Select * from DEPARTMENT ";
                    $departmentResults = mysqli_query($connect, $sql);
                    // fetch  the rows as an array
                    $departments = mysqli_fetch_all($departmentResults);
                    //print out department results
                    foreach($departments as $row){
                        echo "<p class='table-results'>", $row[1], "</p>";
                    }
                ?>
            </div>

            <form action="logout.php" method="post">
                <input type="submit" name="logoutButton" value="LogOut" class="button-design-logout">
            </form>
            <div class="none">
                <br>
            </div>
        </div>  
            
            <?php
                //end of admin
                }
                else if($userType == 'USER')
                {
            ?>

            <div class="user-content">
                <?php
                    // get employee info
                    $sql = "SELECT * FROM STUDENT WHERE STUDENTID = $studentID";
                    $studentData = mysqli_query($connect,$sql);

                    $dataArray = mysqli_fetch_all($studentData);

                    // get Courses

                    $sql = "SELECT * FROM REGISTRATION NATURAL JOIN COURSE NATURAL JOIN STUDENT WHERE StudentID = $studentID";
                    $courses = mysqli_query($connect,$sql);
                    $coursesArray = mysqli_fetch_all($courses, MYSQLI_ASSOC);
                ?>
                <div class="student-info-table">
                    <?php
                        foreach($dataArray as $row)
                        {
                            echo '<h3 class="studentInfo"> Student ID: ', $row[0], '</h3>';
                            echo "<h3 class='studentInfo'> Name: ", $row[1]," ", $row[2], "</h3>";
                            echo "<h3 class='studentInfo'> Date of Birth: ", $row[3], "</h3>";
                            echo "<h3 class='studentInfo'> Declared Major: ", $row[4], "</h3>";
                            echo "<h3 class='studentInfo'> GPA: ", $row[5], "</h3>";
                            echo "<h3 class='studentInfo'> Level: ", $row[6], "</h3>";
                        }
                    ?>
                </div>
                
                <div class="student-classes" style="text-align:center;">
                        <h2 style=" margin-left: 3rem;"> Enrolled Classes </h2>
                    <?php
                        foreach($coursesArray as $row){
                            echo "<h3 class='courses-Info'> Course ID: ", $row['CourseID'], "</h3>";
                            echo "<h3 class='courses-Info'> Course Name: ", $row['Name'], "</h3>";
                        }
                    ?>
                </div>

                <form action="registerStudentCourse.php" method="post" style="margin-left: 15vw; margin-top: 2vh;">
                    <input type="submit" name="registerCourse" value="Class Register" class="button-design-logout">
                </form>
                
            
            <form action="logout.php" method="post" style="margin-left: 15vw; margin-top: 2vh;">
                    <input type="submit" name="logoutButton" value="LogOut" class="button-design-logout">
            </form>

            <div class="footer-div" style="margin-bottom: 12rem;"></div>

            <?php
            } else
            {
                header('Location:index.php?err=log in to view page');
            }
        ?>

        </div>
    
    </div>
    </body>
</html>