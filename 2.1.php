<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clg website</title>
    <link rel="stylesheet" href="2.1.css">
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="info">
        <center>
            <h2>About Us</h2>
        </center>
        <p class="about">The college is located in pollution free environment and conducive ambience, about 65 km North of Pune, on
            Pune-Nashik highway (NH-50) and 65 km from holy shrine Bhimashankar, in the land of Maratha warrior
            Chhatrapati Shivaji Maharaj. College campus is spread over 50 acre area with huge academic buildings along
            with a separate administrative and workshop buildings, a separate residential zone with quarters for faculty
            and staff and hostels. The college is approved by All India Council for Technical Education, New Delhi and
            is affiliated to Savitribai Phule Pune University. Directorate of Technical Education, Maharashtra State,
            Mumbai controls institute through its Regional office at Pune.
        </p>
        <center><b>College offers following Under Graduate Courses (4 years duration)</b></center>
        <center>
            <table cellpadding="10" class="table table-hover">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">Sr. no.</th>
                        <th scope="col">Name of Course</th>
                        <th scope="col">Year of Starting</th>
                        <th scope="col">Sactioned</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td class="branch_name">Mechanical Engineering</td>
                        <td>2009</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td class="branch_name">Automobile Engineering</td>
                        <td>2009</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td class="branch_name">Electronics and TeleCommunication Engineering</td>
                        <td>2009</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td class="branch_name">Computer Engineering</td>
                        <td>2009</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td class="branch_name">Civil Engineering</td>
                        <td>2010</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td class="branch_name">Instrumentation and Control Engineering</td>
                        <td>2010</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </center>

        <div class="clg-images">
            <div class="card-group clg-images">
                <div class="card">
                    <img class="card-img-top" src="Administrative Building.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Administrative Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Automobile.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Automobile Department Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Civil.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Civil Department Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Computer.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Computer Department Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="E & TC and Instru.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">E&TC and Instrumentation Department Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Mechanical.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Mechanical Department Building</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Workshop.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Workshop</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>

</body>

</html>