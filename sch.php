<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="schedule/schstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <title>SIMLAB | Jadwal</title>
	<header>
		<div class="container">
			<h1><a href="index.php">SIMLAB</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li  class="active"><a href="sch.php">SCHEDULE</a></li>
				<li><a href="laboratorium.php">LABORATORIUM</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><?php
                    if (isset($_SESSION['status'])){?>
                    	<a href='logout.php'>SIGN OUT</a>
                    <?php } else { ?>
                        <a href='login.php'>SIGN IN</a>
                    <?php } ?></li>
			</ul>
		</div>
	</header>	

        <h1>JADWAL LABORATORIUM

        <div class="task__container">
            <div class="task__name" id="break" style="background-color: #324cc4;">AVAIL</div>
            <div class="task__name" id="gym" style="background-color: #534e4e">NOT AVAIBLE</div>
            <div class="task__name" id="deselect">Deselect All</div>

        </div>

        <h3>Tambahkan Jadwal</h3>

        <div class="schedule__container">
            <div class="days__container">
                <span class="corner"></span>
                <div class="day">Minggu</div>
                <div class="day">Senin</div>
                <div class="day">Selasa</div>
                <div class="day">Rabu</div>
                <div class="day">Kamis</div>
                <div class="day">Jum'at</div>
                <div class="day">Sabtu</div>
            </div>
            <div class="part__day">
                <span class="time">8am <br> - <br> 12pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">12pm <br> - <br> 2pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">2pm <br> - <br> 6pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">6pm <br> - <br> 9pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">9pm <br> - <br> 11pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
        </div>

        <button class="deleteBtn">Reset Schedule</button>

        <div class="pop-up__container">
            <div class="pop-up">
                <h4>Are you sure you want to delete all the tasks from your schedule?</h4>
                <div class="btn__container">
                    <div class="btn__answer" id="btn__yes">YES</div>
                    <div class="btn__answer" id="btn__no">NO</div>
                </div>
            </div>
        </div>
    </h1>
    </div>

    <footer>
		<div class="container">
			<small>Copyright &copy; 2023. SIMLAB - Sistem Informasi Manajemen Laboratorium. All Rights Reserved.</small>
		</div>
	</footer>

    <script src="schedule\schmain.js"></script>
</body>
</html>