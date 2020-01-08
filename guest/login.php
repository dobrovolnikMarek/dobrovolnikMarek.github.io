<?
    top('Login form' , $page);
    
?>

<br>
<h1>LOGIN</h1>



<p><input type="text" placeholder="e-mail" id="email"></p>
<p><input type="password" placeholder="password" id="password"></p>
<p><input type="text" placeholder="<? captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'login','email.password.captcha')">LOG IN</button><button onclick="post_query(go('recovery'))">RESTORE PASSWORD</button></p>
	<br>
	<style>
		.up, .down{
			font-family: Gerbera,Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif;
		}
		.up, .down{
			background-color: black;
			color: #fff;
		}
		h1{
			font-size: 2em;
			color:#fff;
		}
		.up img{
			width: 50%;
			height: 550px;
			flex: 0 0 auto;
		}

		.up p{
			color: #656565;
		}
		.up{
			display: flex;
		}
		.down div{
			display: flex;

		}

		/*.down div:nth-child(5) .one img{
            width: 48%;
        }*/
		.one:hover, .two:hover, .up:hover{
			/* filter: grayscale(1);*/
			background-color: #383838;
		}

		.one:hover img, .two:hover img, .up:hover img{
			filter: grayscale(1);

		}

		/*.one, .two, .up{
            display: flex;
            align-items: center;
            justify-content: center;
        }*/

		/*.one p, .two p{
            font-size: 400;
        }*/

		.two img, .one img{
			width: 50%;
			height: 250px;
		}

		.two div, .one div{
			display: block;

		}
		.two div, .one div, .up div{
			padding-left:20px;
		}
		/*.one div, .two div, .up div{
            /*display: block;*/
		/*display: flex;
        align-items: center;
        justify-content: center;
    }*/
	</style>
	<div class="up wow fadeInDown">
		<img src="https://news.worldchess.com/wp-content/uploads/2019/11/tb_03.jpg" alt="">

		<div> <p>Dec 22 - 9:45 PM</p><br><h1>Nepo Joins Fellow Russian Grischuk in the Candidates</h1></div>
	</div>
	<div class="down">
		<div>
			<div class="one wow fadeInLeft">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-08904.jpg"  alt="">

				<div> <p>Dec 22 - 10:17 AM</p><h2>Nepo One Draw Away <br> from Reaching the Candidates</h2></div>
			</div>
			<div class="two wow fadeInRight">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-07790.jpg" alt="">

				<div> <p>Dec 18 - 8:42 AM</p><h2>Nepo beats MVL, Wei Yi <br> and Navara draw</h2></div>
			</div>
		</div>
		<div>
			<div class="one wow fadeInLeft">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-07581.jpg" alt="">

				<div> <p>Dec 17 - 2:25 PM</p><h2>MVL and Nepo will cross <br> swords in Semifinals</h2></div>
			</div>
			<div class="two wow fadeInRight">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-07050.jpg" alt="">

				<div> <p>Dec 16 - 7:54 AM</p><h2>David Navara Secures <br> His Place in Semifinals</h2></div>
			</div>
		</div>
		<div>
			<div class="one wow fadeInLeft">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-06733.jpg" alt="">

				<div> <p>Dec 15 - 7:01 AM</p><h2>The Shortest Round in <br> History, Probably</h2></div>
			</div>
			<div class="two wow fadeInRight">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-05632.jpg" alt="">

				<div> <p>Dec 14 - 10:46 AM</p><h2>Mamedyarov out, MVL <br> and Nepo still in the hunt</h2></div>
			</div>
		</div>
		<div>
			<div class="one wow fadeInLeft">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-05282.jpg" alt="">

				<div> <p>Dec 13 - 9:38 AM</p><h2>Jerusalem Game 2. Record Tie-breaks Coming</h2></div>
			</div>
			<div class="two wow fadeInRight">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/12/Niki-Riga_-04808.jpg" alt="">

				<div> <p>Dec 12 - 7:46 AM</p><h2>Jerusalem Grand Prix Round One: Eight Draws</h2></div>
			</div>
		</div>

		<div class="wow fadeInUp">
			<div class="one">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/11/Valeria-Gordienko-03547.jpg" alt="">

				<div> <p>Nov 12 - 10:25 PM</p><h2>Big win for Alexander Grischuk</h2></div>
			</div>
			<div class="two">
				<img src="https://news.worldchess.com/wp-content/uploads/2019/11/tb04.jpg" alt="">

				<div> <p>Nov 12 - 7:36 AM</p><h2>Balanced play in <br> the first game of the semi-finals</h2></div>
			</div>
		</div>
	</div>
<?
    bottom();
?>