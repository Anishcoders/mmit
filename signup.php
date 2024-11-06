<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="#">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(214, 213, 213);
            /* background: url(pic/up\ l\ ogo.png); */
            
        }

        /* #sidebar {
            background-color: rgb(2, 191, 243);
            height: 100px;
            color: #ffffff;
        } */

        #logo {
            margin-left:80px;
            height: 90px;
            width: 100px;
        }

        .colle {
            font-size: 28px;
            font-weight: bold;
            font-family: "Ubuntu", sans-serif;
            font-style: normal;
        }

        .sregister {
            margin-top: 140px;
            margin-bottom: 40px;
            font-size: 25px;
            font-family: "Fredoka", sans-serif;
            font-weight: 800;
            font-style: normal;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;

        }
        #uplogo{
            height: 100px;
            width: 100px;
        }

        @media (max-width: 768px) {
    #logo {
        display: none;
    }

    #uplogo {
        display: none;
    }

}
       
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <div class="navbar bg-light fixed-top" data-bs-theme="dark" >

            <div class="col-lg-12 col-12">
                <div class="row">
                <div class="col-lg-2">
                <img src="pic/2718_collegeLogo.jpg" alt="college logo" id="logo" >
                </div >
                <div class="col-lg-8">
                <p class="colle mt-3 text-center"> Mahamaya Polytechnic Of Information Technology, Shravasti</p>
                </div>
                <div class="col-lg-2">
                <img class="" src="pic/up l ogo.png" alt="college logo" id="uplogo">
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <form action="signupcode.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div>
                    <p class="sregister">Student Registration</p>
                </div>
                <div class="col-lg-6">

                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-user fa-beat"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-person fa-beat"></i></span>
                        <input type="text" name="fname" class="form-control" placeholder="Enter your father name">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-person-dress fa-beat"></i></span>
                        <input type="text" name="mname" class="form-control" placeholder="Enter your mother name">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-calendar-days fa-flip"></i></span>
                        <input type="date" name="dob" class="form-control" placeholder="Enter your date Of birth">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone fa-shake"
                                style="color: green"></i></span>
                        <input type="number" name="phoneno" class="form-control" placeholder="Enter your Phone Number">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope fa-beat"
                                style="color: #ed6c30;"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-lock" style="color: #f62121;"></i></span>
                        <input type="password" name="pwd" class="form-control" placeholder="Enter your Password">
                    </div>

                    <div class="input-group mb-3">
                    <label class="input-group-text"><i class="fa-solid fa-book" style="color: #63E6BE;"></i></label>
                        <select class="form-select" name="category">
                            <option selected>Select Category</option>
                            <option value=" General">General</option>
                            <option value=" OBC">OBC </option>
                            <option value=" SC"> SC</option>
                            <option value="ST "> ST  </option>
                            <option value=" Other"> Other  </option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pen-fancy"></i></span>
                        <input type="text" name="enrollno" class="form-control" placeholder="Enter your enrollment no. / jeecup no.">
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text"><i class="fa-solid fa-book" style="color: #63E6BE;"></i></label>
                        <select class="form-select" name="year">
                            <option selected>Select Semester / Year</option>
                            <option value="1st Semester / 1st Year">1st Semester / 1st Year</option>
                            <option value="2nd Semester / 1st Year">2nd Semester / 1st Year</option>
                            <option value="3rd Semester / 2nd Year">3rd Semester / 2nd Year</option>
                            <option value="4th Semester / 2nd Year">4th Semester / 2nd Year</option>
                            <option value="5th Semester / 3rd Year">5th Semester / 3rd Year</option>
                            <option value="6th Semester / 3rd Year">6th Semester / 3rd Year</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></label>
                        <select class="form-select" name="branch">
                            <option selected>Select Your Branch </option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Computer Science Engineering">Computer Science Engineering</option>
                            <option value="Food Technology">Food Technology</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text"> <i class="fa-solid fa-photo-film fa-flip"></i></label>
                        <input type="file" class="form-control" name="file">

                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text"><i class="fa-solid fa-earth-americas fa-spin-pulse"></i></label>
                        <select class="form-select" name="state">
                            <option selected>Select Your state </option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-city fa-bounce"></i></span>
                        <input type="text" name="city" class="form-control" placeholder="Enter your City Name">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-regular fa-address-card fa-shake"></i></span>
                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" 
                        rows="3" placeholder="Enter your Address"></textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class=" text-center">
            <button class="btn btn-success mt-4" type="submit" style="width: 280px; font-weight: bold; padding: 10px;">Submit form</button>
        </div>

    </form>

</body>

</html>