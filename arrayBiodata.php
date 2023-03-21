<!DOCTYPE html>
<html>
    <head>
        <title>WEB PROFILE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="wprofile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
    <body>  
        <div class="container">
            <div class="nav">
              
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#aboutMe">ABOUT ME</a></li>     
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="logo">Web Profile</a>
                </div>
             
                <!--Home-->
                <section class="home" id="home">
                    
                    <div class="content">
                        <div class="box"></div>           
                        <h5>HELLO!</h5>
                        <h3>Welcome to My Profile</h3>
                        <div class="foto">
                            <img src="assets/foto.jpg_small">
                        </div>
                        
                        <hr width="60%" align="left" color="#FFD700">
                        
                        <center><p>College Student<br>A hardworking person who loves cats</P></center>
                        <ul class="socialMedia">
                            <li><a href="https://www.linkedin.com/in/rosalena-brigita-limbong-77a21b18b/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://t.co/2DhCH9DiLp"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="mailto:21081010183@student.upnjatim.ac.id"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href="https://github.com/RosalenaBrigita"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </section>

                <!--ABOUT ME-->
                <section class="aboutMe adjust" id="aboutMe">
                    <div class="title">
                        <h1>ABOUT ME</h1>
                    </div>
                    <div class="content">
                        <div class="foto2">
                            <img src="assets/foto3.png" alt="">
                        </div>
                        <div class="text">
                            <p>Mahasiswa semester 4 Informatika, Universitas Pembangunan Nasional Veteran Jawa Timur. Dapat bekerjasama dalam tim dan memiliki kemampuan komunikasi yang baik. </p>
                           
                            <h3>Personal Details</h3>
                            <div class="bio">
                            <?php
                            $bio = [
                                'Name' => 'Rosalena Brigita Limbong',
                                'Birthdate' => '17 Oktober 2003',
                                'Email' => '21081010183@student.upnjatim.ac.id',
                                'Phone' => '+628972109602',
                                'Address' => 'Surabaya',
                              ];
                        
                              // get all values 
                              foreach ($bio as $key => $value) {
                                echo "<p>". $key . ' : ' . $value."</p>";
                             
                              }
                              
                              $additional = array (
                                array('Hobbies','Reading comics','Playing games','Listening musics'),                               
                                array('Riwayat Pendidikan','SD = YPPI', 'SMP = Marsudirini', 'SMA = Santa Maria')
                              );
                            echo"<table cellspacing=10px><tr>";
                              for ($row = 0; $row < 2; $row++) {
                                echo "<td><p><b>".$additional[$row][0].' :'."</b></p>";
                                echo '<ul type= "none" >';
                                for ($col = 1 ; $col < 4; $col++) {
                                  echo"<li>".$additional[$row][$col]."</li>";
                                }
                                echo "</ul></td>";
                              }
                              echo"</tr></table>"
                              ?>
                
                             <a href="myCV1.html" class="button">Download CV</a>
                           
                        </div>
                        
                    </div>
                </section>

                <!--CONTACT ME-->
                <section class="contact adjust" id="contact">
                    <div class="title">
                        <h1><center>CONTACT ME</center></h1>
                    </div>
                    <div class="center">
                            <form action="tugasUsia1.php" method="POST" required>
                                <fieldset>
                                <legend>Message Me</legend>
                                <p>
                                    <label>Name : </label>
                                    <input type="text" name="nama" placeholder="Full Name..." value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>" required>
                                </p>
                                <p>
                                    <label>Username : </label>
                                    <input type="text" name="username" placeholder="Username..." value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>" required>
                                </p>
                                <p>
                                    <label>Email:</label>
                                    <input type="email" name="email" placeholder="Your email..." value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"required>
                                </p>
                                <p>
                                    <label>Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" max="2023-04-01" required>
                                </p>
                                <p>
                                    <label>Jenis Kelamin:</label>
                                        <label><input type="radio" required name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                                        <label><input type="radio" required name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                                </p>
                                <p>
                                    <label>Message:</label>
                                    <textarea name="message" cols="50" rows="5"></textarea>
                                </p>
                                <p>
                                    <input type="submit" name="submit" value="submit" />
                                </p>
                                </fieldset>
                            </form>                        
                        </div>
                  
                </section>

                <!--COPYRIGHT-->
                <div class="copyright">
                    <div class="container">
                        &copy; 2023. <b>Rosalena Brigita.</b> All Rights Reserved.
                    </div>
                </div>

            </div>
        <script>
            let toggle = document.querySelector('.toggle');
            let topbar = document.querySelector('.topbar');
            let nav = document.querySelector('.nav ');
            let main = document.querySelector('.main ');

            toggle.onclick = function() {
                toggle.classList.toggle('active');
                topbar.classList.toggle('active');
                nav.classList.toggle('active');
                main.classList.toggle('active');
            }
        </script>
    </body>

</html>