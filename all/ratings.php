<?
    top('MAIN', $page);
    
?>
	<link rel="stylesheet" href="/css/animate.css">
	<script src="/css/wow.min.js"> </script>
	<script>
        new WOW().init();
	</script>
<style>
	h1{
		color:goldenrod;
		font-size: 2em;
	}
	.part1 p {
		text-align: center;
	}
    svg{
        width:30px; 
    }
    span{
        display:flex;
    }
    #carlsen{
       width:400px; 
        height:400px;  
    }

	img{
		width:100px;
		height: 70px;
	}

	#rating{
		padding-top: 27px;
	}

	.next-3{
		display: flex;
	}

	.caruana, .liren, .grish{
		width: 50%;
		border-bottom: 1px solid #e0e0e0;
		border-right: 1px solid #e0e0e0;
		background: whitesmoke;
	}
	.caruana:hover, .liren:hover, .grish:hover{
		background: #fff;
	}


</style>

<div class="fide"> 
    <span>
    <svg-logo-fide  _ngcontent-world-chess-c40="" class="rating__title-icon" _nghost-world-chess-c41=""><svg _ngcontent-world-chess-c41="" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31 22.9" xmlns="http://www.w3.org/2000/svg"><path _ngcontent-world-chess-c41="" d="M12 4.2c0-.2-.1-.5-.1-.6.4-.3 1.6-.8 1.6-.8l-.2-1.6.7-.3.6 1.6c4.3-.4 4.7 1.6 4.9 2.2 2.1-.3 4.2-1 5.9-2C23.1 1.2 19.6 0 15.5 0 12 0 8.8.8 6 2.4c1.7.9 3.9 1.6 5.9 2 0-.1.1-.2.1-.2zm7.8 3.7c4.5-.3 8.1-1.2 9.5-1.7-.8-1.3-2.2-2.5-3.3-3.2-.8.4-2.9 1.5-6.3 2 .4.9.1 2.9.1 2.9zm-8.4-3.1c-3-.6-5.3-1.7-6.1-2.1-1.1.8-2.4 1.8-3.3 3 1.1.4 3.4 1.1 7.2 1.7.3-.5 1.8-2.1 2.2-2.6zm7.8 6.2h11.9c0-1.4-.5-2.9-1.3-4.2-.9.2-4.4 1.4-10.1 1.7-.2.8-.5 1.8-.5 2.5zm-5-2.5s-1.2-.1-2-.1c-.6.5-1.7 1.7-3-.4-2.5-.3-5.6-1.1-7.6-1.7C.4 8 0 9.7 0 11h11.5c.9-1.5 2.7-2.5 2.7-2.5zm4.9 3.1c-.1 1 .3 1.9.6 2.2 5.6.5 9.2 1.8 9.9 2 .6-.9 1.3-2.4 1.4-4.2H19.1zm-7.9 0H0c.1 1.7.6 3 1.2 4 .8-.3 3.5-1.3 9.5-1.8 0-.5.2-1.7.5-2.2zm8.7 4.1h-8.8s-.2-.7-.2-1.3c-5.2.4-8.6 1.6-9.2 1.8.9 1.4 2.3 2.6 3.8 3.5.3-.2 3-2 8.1-2.4-.5-.8-2.4-.8-2.4-.8v-.6H20v.6c-.4.1-2 .2-2.5.9 4.1.3 7.2 1.8 8.3 2.3 1.4-.9 2.7-2.1 3.6-3.3-.8-.3-5-1.6-9.2-1.9-.1 0 .1.7-.3 1.2z"></path><path _ngcontent-world-chess-c41="" d="M17.6 19c.4.3.9.4 1.6.4h1.1V22c1.6-.4 3.3-1 4.7-1.8 0 0-3.4-1.8-7.8-2.2 0 .2 0 .6.4 1zm-4-1.1c-3.7.2-6.4 1.3-7.7 2.3 1.2.7 2.8 1.4 4.5 1.8v-2.6s2.2.1 2.9-.3c.4-.4.4-1.1.3-1.2z"></path><path _ngcontent-world-chess-c41="" d="M11.5 22.9h.6v-1.2h.9v-.5h-.9v-.6h1V20h-1.6zm2.1-2.9h.6v2.8h-.6zm3 .3c-.2-.2-.6-.3-1.1-.3-.3 0-.6 0-.8.1v2.8h.7c.5 0 1-.1 1.2-.4.3-.2.4-.6.4-1.1.1-.5-.1-.9-.4-1.1zm-1.1 2.1h-.2v-1.8h.3c.5 0 .9.3.9.9-.1.6-.4.9-1 .9zm2.6-.7h1v-.5h-1v-.6h1V20h-1.6v2.9h1.7v-.6h-1.1z"></path></svg></svg-logo-fide>
    FIDE Official Rating Top 10
    </span>
</div>
<div class="top-players">
    <div class="calsen wow fadeInDown">
		<div class="part1">
			<h1>1 Carlsen, Magnus</h1>
			<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/B/T/E/carlsen.svg" alt=""></p>

		</div>
		<div class="part2">
		<span>
			<img src="/img/norway_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2872</div>
		</span>
		</div>
    </div>
	<div class="next-3 wow fadeInRight">
		<div class="caruana">
			<div class="part1">
				<h2>2 Caruana, Fabiano</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/G/G/X/caruana.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/united_states_of_america_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2822</div>
		</span>
			</div>
		</div>
		<div class="liren">
			<div class="part1">
				<h2>3 Ding, Liren</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/J/C/X/liren.svg" alt=""></p>

			</div>
			<div class="part2">
		<span>
			<img src="/img/china_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2872</div>
		</span>
			</div>
		</div>
		<div class="grish">
			<div class="part1">
				<h2>4 Grischuk, Alexander</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/J/W/Y/grishchuk.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/russia_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2777</div>
		</span>
			</div>
		</div>
	</div>
	<div class="next-3 wow fadeInLeftBig">
		<div class="caruana">
			<div class="part1">
				<h2>5 Nepomniachtchi, Ian</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/D/E/C/nepomniachtchi.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/russia_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2774</div>
		</span>
			</div>
		</div>
		<div class="liren">
			<div class="part1">
				<h2>6 Aronian, Levon</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/T/B/W/aronian.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/armenia_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2773</div>
		</span>
			</div>
		</div>
		<div class="grish">
			<div class="part1">
				<h2>7 Vachier-Lagrave, Maxime</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/Z/S/O/vachier-lagrave.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/france_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2770</div>
		</span>
			</div>
		</div>
	</div>
	<div class="next-3 wow fadeInUpBig">
		<div class="caruana">
			<div class="part1">
				<h2>8 Mamedyarov, Shakhriyar</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/C/G/H/mamedyarov.svg" alt=""></p>>
			</div>
			<div class="part2">
		<span>
			<img src="/img/azerbaijan_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2770</div>
		</span>
			</div>
		</div>
		<div class="liren">
			<div class="part1">
				<h2>9 Giri, Anish</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/V/J/M/giri.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/netherlands_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2768</div>
		</span>
			</div>
		</div>
		<div class="grish">
			<div class="part1">
				<h2>10 So, Wesley</h2>
				<p><img id="carlsen" src="https://wctour.s3.amazonaws.com/media/avatars/I/C/W/so.svg" alt=""></p>
			</div>
			<div class="part2">
		<span>
			<img src="/img/united_states_of_america_rectangular_icon_with_iso_code_640.png" alt=""> <div id="rating">2765</div>
		</span>
			</div>
		</div>
	</div>
</div>

<?
    bottom();
?>