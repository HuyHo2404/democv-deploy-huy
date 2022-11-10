<?php
require_once('../dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>CV</title>
</head>

<body>
    <div class="grid-container">
        <div id="header">
            <div class="grid-1">
                <div class="avatar">
                    <img src="./img/Huy01.jpg" alt="img profile">
                </div>
                <div class="module">
                    <div class="name">
                        <h1>HO QUANG HUY</h1>
                        <p>Software Engineer</p>
                    </div>
                    <div class="module-title">
                        <div class="column-item module-title-left">
                            <div class="li">
                                <span class="fa-solid fa-calendar"></span><p>24/04/2001</p>
                            </div>
                            <div class="li">
                                <span class="fa-solid fa-phone"></span><p>0905648420</p>
                            </div>
                            <div class="li">
                                <span class="fa-solid fa-envelope"></span><p>hoquanghuy2404@gmail.com</p>
                            </div>
                        </div>

                        <div class="column-item module-title-right">
                            <div class="li">
                                <span class="fa-brands fa-github"></span><p>https://github.com/HuyHo2404</p>
                            </div>
                            <div class="li">
                                <span class="fa-solid fa-location-arrow"></span><p>12B Đoàn Nguyễn Thục, TP Đà Nẵng</p>
                            </div>
                            <div class="li">
                                <span class="fa-solid fa-user"></span><p>Nam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module-content">
                <input value="<?php echo $edu['gioithieu'] ?? '' ?>" id="gioithieu" type="text" class="left-content-col-left" placeholder="Introduce" style="width: 945px; height: 130px; border: none; font-size: 20px; font-weight: 500; color: #999; outline: none">
            </div>
        </div>

        <!--Layout-->
        <div class="information-layout">
            <div class="grid-2">
                <div class="column-left">

                    <!--Education-->
                    <div class="des education-layout">
                        <div class="part-above">
                            <div class="above-left">
                                <span class="fas fa-graduation-cap"></span>
                                <h4>Education</h4>
                            </div>
                            <div class="above-right">
                                <i class="fa-solid fa-list-ul"></i>
                            </div>
                        </div>
                        <?php
                        $sql = 'select * from education';
                        $eduList = executeResult($sql);
                        foreach ($eduList as $edu) {
                            echo '
                                            <div class="edu-below">
                                                <div class="section-info">
                                                    <div class="edu-school">
                                                        <h5>' . $edu['truong'] . '</h5>
                                                    </div>
                                                    <div class="edu-date">
                                                        <p>' . $edu['start_end'] . '</p>
                                                    </div>
                                                </div>    
                                                <div class="content-des">
                                                        <p>' . $edu['noidung'] . '</p>
                                                        <p>' . $edu['thoigian'] . '</p>
                                                                                                                                
                                                </div>
                                            </div>
                            ';
                        }
                        ?>
                    </div>

                    <!--Work experience-->
                    <div class="des work-layout">
                        <div class="part-above">
                            <div class="above-left">
                                <span class="fa-solid fa-briefcase"></span>
                                <h4>Work experience</h4>
                            </div>
                            <div class="above-right">
                                <i class="fa-solid fa-list-ul"></i>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Some Group Projects</h5>
                                </div>
                                <div class="edu-date">
                                    <p>09/2020 - 04/2021</p>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Human Resource Management.</p>
                                <p>- Room management.</p>
                                <p>- Timekeeping management</p>
                            </div>
                        </div>

                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Personal Projects</h5>
                                </div>
                                <div class="edu-date">
                                    <p>09/2022 - 04/2022</p>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Library management.</p>
                            </div>
                        </div>
                    </div>

                    <!--Activitie-->
                    <div class="des act-layout">
                        <div class="part-above">
                            <div class="above-left">
                                <span class="fa-solid fa-star"></span>
                                <h4>Activitie</h4>
                            </div>
                            <div class="above-right">
                                <i class="fa-solid fa-list-ul"></i>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Volunteers</h5>
                                </div>
                                <div class="edu-date">
                                    <p style="font-weight: 900;">Volunteers group</p>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Gathering gifts and distributing to the victims after waiting for floods in Quang Tri.</p>
                                <p>- Share and encourage them to overcome difficult times, help them have optimistic thoughts.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column right-->
                <div class="column-right">

                    <!--Skills-->
                    <div class="des skill-layout">
                        <div class="part-above">
                            <div class="above-left">
                                <span class="fa-solid fa-pen"></span>
                                <h4>Skills</h4>
                            </div>
                            <div class="above-right">
                                <i class="fa-solid fa-list-ul"></i>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Programming language</h5>
                                </div>
                                <div class="edu-date">
                                    <p>09/2019 - 04/2022</p>
                                </div>
                            </div>
                            <div class="content-des">
                                <p style="color: #999;">C++ Programming.</p>
                                <p style="color: #999;">C# Programming.</p>
                                <p style="color: #999;">Programming HTML, CSS.</p>
                                <p style="color: #999;">Javascript Programming.</p>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Office information</h5>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Good use of Word, Excel, Power Point tools.</p>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Working group.</h5>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Good ability to work in a team and independently.</p>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>English</h5>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Ability to communicate in English normally.</p>
                            </div>
                        </div>
                    </div>

                    <!--Target-->
                    <div class="des target-layout">
                        <div class="part-above">
                            <div class="above-left">
                                <span class="fa-solid fa-square-check"></span>
                                <h4>Target</h4>
                            </div>
                            <div class="above-right">
                                <i class="fa-solid fa-list-ul"></i>
                            </div>
                        </div>
                        <div class="edu-below">
                            <div class="section-info">
                                <div class="edu-school">
                                    <h5>Duy Tan University</h5>
                                </div>
                                <div class="edu-date">
                                    <p>09/2020 - 04/2022</p>
                                </div>
                            </div>
                            <div class="content-des">
                                <p>- Improve knowledge in the field of Information Technology.</p>
                                <p>- Improve English communication in the next 1-2 years.</p>
                                <p>- Stabilize and try to grow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <button class="btn-success" onclick="window.open('../input.php','_self')">Add</button>            
    </div>  
</body>

</html>