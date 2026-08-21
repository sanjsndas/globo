<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta property="og:title" content="Globowaverosy : Request accepted!" />
    <meta property="og:image" content="icon.png" />
    <title>Globowaverosy : Request accepted!</title>
    
    <link rel="stylesheet" href="file/style/bootstrap.css" />
    <link rel="stylesheet" href="file/style/icon.css" />
   
    

    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet" />

    <script src="file/javascript/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="file/javascript/jquery.fancybox.js"></script>
    <script type="text/javascript" src="file/javascript/tinycolor.js"></script>

    
  </head>

  <body>

    

    <div class="box">
      <div class="block-content">
        <header>
          <div class="logo">
            <img src="icon.png" alt="logo" />
            <h2>Globowaverosy</h2>
          </div>
          <nav class="nav footerph-icon">
            <ul>
              <li><a href="./#service">Our Services</a></li>
              <li><a href="./#quiz">Quiz</a></li>
              <li><a href="./#comments">Comments</a></li>
              <li><a href="./#contacts">Contacts</a></li>
            </ul>
          </nav>
          <label class="burger footerph-icon" for="burger">
            <input type="checkbox" id="burger" />
            <span></span>
            <span></span>
            <span></span>
          </label>
          <ul class="burgerNav">
            <li><a href="./#service">Our Services</a></li>
            <li><a href="./#quiz">Quiz</a></li>
            <li><a href="./#comments">Comments</a></li>
            <li><a href="./#contacts">Contacts</a></li>
          </ul>
        </header>
        <div class="hedBox">
          <h1>Welcome to Globowaverosy, your premier destination for exceptional coffee and tea experiences. We offer a cozy atmosphere, expertly crafted beverages, and a commitment to quality that will delight your senses. Join us to explore unique blends and flavors that bring warmth and comfort to every sip.</h1>
          
        </div>
      </div>
    </div>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-headerum--card{
		margin: 0px;
		padding: 0px;
		font-family: 'Mate', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 337px 0px;
	}
	.bodyClass1-headerum--card{
		background: #fffaf6;
		color: #000000;
	}
	.bodyClass2-headerum--card{
		background: #f9f7cf;
		color: #fff;
	}
	.bodyClass3-headerum--card{
		background: #fff;
		color: #111;
	}
	.wrapage-block-headerum--card{
		background-size: 100%;
		width: 100%;
	}
	.box_main-headerum--card{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-headerum--card h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-headerum--card p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-headerum--card{
		text-align: start;
	}
	.mainBlock-headerum--card ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-headerum--card ul>li span{
		font-weight: bold;
	}
	.mainBlock-headerum--card{
		max-width: 772px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-headerum--card .cBlock-headerum--card{
		text-align: start;
	}

	.bodyClass3-headerum--card .mainBlock-headerum--card{
		background: none;
		border-top: 2px dotted #f9f7cf;
		border-bottom: 2px dotted #f9f7cf;
	}
	.bodyClass2-headerum--card .mainBlock-headerum--card{
		background: #000000;
		color: #fff !important;
		box-shadow: 0px 0px 0px #000000;
	}
	.bodyClass2-headerum--card .mainBlock-headerum--card p{
		color: #fff !important;
	}
	.bodyClass1-headerum--card .mainBlock-headerum--card{
		background: #ffffff;
		color: #000000;
		border-left: 4px solid #F6C90E;
	}
	.bodyClass1-headerum--card .mainBlock-headerum--card p{
		color: #000000 !important;
	}
	.order-headerum--card{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-headerum--card p{
			padding: 0px 15px;
		  }
		  .box_main-headerum--card h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-headerum--card{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-headerum--card{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-headerum--card" id="mainWrapp-headerum--card">


	<div class="wrapage-block-headerum--card">
		<div class="box_main-headerum--card">
			<div class="mainBlock-headerum--card">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-headerum--card">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




    <style>
      body{
        direction: ltr;
        font-family: 'Oswald', sans-serif !important;
        font-size: 14px;
        margin: 0;
        padding: 0;
      }

      .box{
        background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.9)), url(static/images/background_tAxk30.jpg);
        background-position: center;
        background-size: cover;
        border-top: 5px solid #0F3460;
      }

      img{max-width:100%}

      header{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 18px 0;
      }

      .logo {
        display: flex;
        align-items: center;
        cursor: pointer;
        gap: 24px;
        color: white;
      }

      .logo img {
        width: 40px;
      }

      .logo h2 {
        margin: 0;
      }

      .nav ul {
        list-style-type: none;
        display: flex;
        flex-direction: row;
        gap: 9px;
        margin: 0;
        padding: 0;
      }

      .nav li {
        margin: 0 5px;
        font-weight: 500;
        font-size: 12px;
        position: relative;
      }

      .nav li::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #1c95b0;
        transition: width 0.3s ease;
      }

      .nav li a {
        text-decoration: none;
        color: white;
      }

      .nav li a:hover {
        color: #1c95b0;
      }

      .nav li:hover::after {
        width: 100%;
      }


      .burger {
        display: none;
        position: relative;
        width: 40px;
        height: 30px;
        background: transparent;
        cursor: pointer;
      }

      .burger input {
        display: none;
      }

      .burger span {
        display: block;
        position: absolute;
        height: 4px;
        width: 100%;
        background: #000000;
        border-radius: 9px;
        opacity: 1;
        left: 0;
        transform: rotate(0deg);
        transition: .25s ease-in-out;
        }

      .burger span:nth-of-type(1) {
        top: 0px;
        transform-origin: left center;
      }

      .burger span:nth-of-type(2) {
        top: 50%;
        transform: translateY(-50%);
        transform-origin: left center;
      }

      .burger span:nth-of-type(3) {
        top: 100%;
        transform-origin: left center;
        transform: translateY(-100%);
      }

      .burger input:checked ~ span:nth-of-type(1) {
        transform: rotate(45deg);
        top: 0px;
        left: 5px;
      }

      .burger input:checked ~ span:nth-of-type(2) {
        width: 0%;
        opacity: 0;
      }

      .burger input:checked ~ span:nth-of-type(3) {
        transform: rotate(-45deg);
        top: 28px;
        left: 5px;
      }

      .burgerNav {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        background-color: darkgrey;
        padding: 0;
        margin: 0;
        list-style: none;
      }

      .burgerNav li {
        text-align: center;
        padding: 20px 0;
        font-weight: 500;
        font-size: 15px;
      }

      .burgerNav li a {
        text-decoration: none;
        color: white;
      }

      .burgerNav li a:hover {
        color: #1c95b0;
      }

      .burger:has(input:checked ) ~ .burgerNav {
        position: absolute;
        top: 90px;
        display: block;
        width: 100%;
        z-index: 2;
      }

      .stalePad {
        padding: 113px 0px;
      }

      .hedBox{
        padding: 150px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 49px;
        color: white;
      }
      .hedBox a{
        text-decoration: none;
      }

      .hedBox h1{
        text-align: center;
        font-weight: 500;
        font-size: 30px;
      }

      .hedBox button{
        width: 500px;
      }


      .service {
        text-align: center;
        padding: 44px 0;
      }

      .service h1 {
        font-weight: 500;
        font-size: 30px;
        margin-bottom: 15px;
      }

      .service p {
        font-weight: 500;
        font-size: 21px;
        margin-bottom: 15px;
      }

      .serv-card {
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        padding-top: 44px;
        gap: 49px;
      }

      .cards {
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #ffffff;
        cursor: pointer;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
        width: 450px;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        gap: 49px;
        transition: transform 0.3s ease-in-out;
      }

      .cards:hover{
        transform: scale(1.05);
      }

      .card-icon {
        font-size: 48px;
        color: #1c95b0;
      }

      .cards .card-text {
        font-size: 15px;
        margin: 0;
        color: #333333;
      }

      .cards:last-child{
        display: flex;
      }

      .contentBox {
        display: flex;
        padding: 44px 0;
        flex-direction: row;
        gap: 49px;
        align-items: center;
      }

      .contentBox > div:first-child{
        width: 35%;
      }

      .contentBox > div:last-child{
        width: 65%;
      }

      .buttonResize{
        margin: 0 auto;
        display: flex;
      }

      .workers {
        text-align: center;
        padding: 44px 0;
      }

      .employee-cards{
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        padding-top: 44px;
        gap: 49px;
      }

      .card-client {
        background: #060930;
        width: 264px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left:  18px;
        padding-right:  18px;
        border: 4px solid #0F3460;
        box-shadow: 0 6px 10px rgba(207, 212, 222, 1);
        border-radius: 10px;
        text-align: center;
        color: #fff;
        font-family: "Poppins", sans-serif;
        transition: all 0.3s ease;
      }

      .card-client:hover {
        transform: translateY(-10px);
      }

      .user-picture {
        overflow: hidden;
        object-fit: cover;
        width: 5rem;
        height: 5rem;
        border: 4px solid #0F3460;
        border-radius: 999px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
      }

      .user-picture img {
        width: 100%;
      }

      .name-client {
        margin: 0;
        margin-top:  18px;
        font-weight: 600;
        font-size: 18px;
      }

      .name-client span {
        display: block;
        font-weight: 200;
        font-size: 16px;
      }

      .skills{
        padding: 44px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .skill-title{
        text-align: center;
        padding-bottom: 44px;
      }

      .card-skills {
        max-width: 372px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
      }

      .header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        font-size: 18px;
      }

      .body {
        padding:  18px;
      }

      .skill {
        display: flex;
        align-items: center;
        margin-bottom:  18px;
      }

      .skill-name {
        width: 120px;
        font-size: 16px;
      }

      .skill-level {
        width: 160px;
        height: 10px;
        background-color: #eee;
        border-radius: 10px;
        overflow: hidden;
        margin-left: 20px;
      }

      .skill-percent {
        background-color: #333;
        height: 100%;
      }

      .skill-percent-number {
        margin-left: 20px;
        font-size: 16px;
      }

      .formBox {
        padding: 44px 0;
        margin: 44px 0;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(static/images/background_tAxk31.jpg);
        background-position: center;
        background-size: cover;
        color: white;
      }

      .callBack {
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        gap: 12px;
      }

      .callBack h3 {
        max-width: 750px;
        text-align: center;
      }

      .form {
        color: black;
        background-color: #fff;
        display: block;
        padding: 1rem;
        max-width: 350px;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }

      .input-container {
        position: relative;
      }

      .input-container input, .form button {
        outline: none;
        border: 1px solid #e5e7eb;
        margin: 7px 0;
      }

      .input-container input {
        background-color: #fff;
        padding: 1rem;
        padding-right: 3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        width: 100%;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      }

      .submit {
        display: block;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 18px;
        padding-right: 18px;
        background-color: #4F46E5;
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 18px;
        font-weight: 500;
        width: 100%;
        border-radius: 0.5rem;
        text-transform: uppercase;
      }

      .comBox{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .comBox h1{
        text-align: center;
        padding-bottom: 44px;
      }

      .comments{
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        padding: 44px 0;
        gap: 49px;
      }

      .card {
         --background: #fff;
         --cardShadow: rgba(32,33,37,.1);
        --cardShadowHover: rgba(32,33,37,.06);
        --cardShadowActive: rgba(32,33,37,.55);
        --cardBorder: #dbdce0;
         --cardBorderActive: #1a73e8;
        --textColor: #202125;
        --linkColor: #1967d2;
         --ratingColor: #faab00;
      }

       @media (prefers-color-scheme: dark) {
          .card {
            --background: #3c4043;
            --cardShadow: rgba(0,0,0,.28);
            --cardShadowHover: rgba(0,0,0,.16);
            --cardShadowActive: rgba(0,0,0,.55);
            --cardBorder: #202125;
            --cardBorderActive: #8ab4f8;
            --textColor: #e9eaee;
            --linkColor: #8ab4f8;
          }
        }

      .card {
        width: 347px;
        background: var(--background);
        color: var(--textColor);
        border: 1px solid var(--cardBorder);
        padding: 25px;
        box-shadow: 8px 8px 0 var(--cardShadow);
        transition: box-shadow .5s, transform .5s;
        border-radius: 8px;
        display: inline-block;
      }

      .card:hover {
        transform: translate(-2px, -4px);
        box-shadow: 16px 16px 0 var(--cardShadowHover);
      }

      .card:active {
        transform: translate(-2px, -4px);
        border: 2px solid var(--cardBorderActive);
        box-shadow: 4px 4px 0 var(--cardShadowActive);
      }

      .card > .icon,
      .card > .title,
      .card > .description {
        margin-bottom: 0.7em;
        cursor: default;
        user-select: none;
      }

      .card > .title {
        margin-top: 18px;
        font-weight: bold;
      }

      .card > .description {
        line-height: 18px;
        min-height: 6em;
      }

      .card > .icon img {
        width: 70px;
        border: 1px solid black;
        border-radius: 50%;
      }

      .card:last-child{
        display: block;
      }

      .karta{
        padding-top: 44px;
      }

      footer{
        background: #ffffff;
        color: #000000;
      }

      .footerTop{
        display: flex;
        justify-content: space-around;
        padding: 44px 0;
        border-bottom: 2px solid black;
        font-weight: 500;
        font-size: 12px;
        flex-direction: row;
        gap: 49px;
      }

      .contact{
        width: 50%;
        gap: 12px;
        font-weight: 500;
      }

      .contact a{
        text-decoration: none;
        color: inherit;
        padding-right:  7px;
      }

      .logotip{
        display: flex;
        align-items: flex-start;
        cursor: pointer;
        gap: 24px;
        color: #000000;
      }

      .logotip img {
        width: 40px;
      }

      .logotip h2 {
        margin: 0;
      }

      .privacy{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 44px 0;
      }

      .privacy a{
        text-decoration: none;
        color: #000000;
      }

      .privacy a:first-child{
        padding-right: 25px;
      }

      .privacy a:nth-child(2){
        padding: 0 25px;
      }

      .privacy a:last-child{
        padding-left: 25px;
      }

      .flexStyle{
        display: flex;
        flex-direction: column-reverse;
      }
      .input-containe{
          display: flex;
          flex-direction: column;
          gap: 12px;
      }
      .input-groupcomponentblock{
          display: block;
          width: 100%;
          padding: 0.375rem 0.75rem;
          font-size: 1rem;
          font-weight: 400;
          line-height: 1.5;
          color: #212529;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          border-radius: 0.25rem;
          transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
      .textarea-groupcomponentblock{
          border: 1px solid #ced4da;
           width: 100%;
          border-radius: 0.25rem;
          padding: 0.375rem 0.75rem;
      }
      @media (max-width: 1080px){
        .callBack {
          flex-direction: column-reverse;
        }
      }

      @media (max-width: 992px){

        .nav{
          display: none;
        }

        .burger {
          display: block;
        }
      }

      @media (max-width: 767px) {
        .contentBox {
        flex-direction: column-reverse;
        }

        .buttonResize{
          width: 100% !important;
        }

        .contentBox > div:first-child{
          width: 100%;
        }

        .contentBox > div:last-child{
          width: 100%;
        }
        .card-client {
          width: 100%;
        }

        .card {
          width: 100%;
        }

        .card-skills {
          width: 100%;
        }
      }

      @media (max-width: 513px) {
        .card-skills {
          width: auto;
        }

        .footerTop {
          flex-direction: column-reverse;
        }

        .contact{
          width: 100%;
        }

        .privacy {
          flex-direction: column;
        }

        .privacy a:first-child{
          padding-right: 0;
          padding-bottom: 25px;
        }

        .privacy a:nth-child(2){
          padding: 25px 0;
        }

        .privacy a:last-child{
          padding-left: 0;
          padding-top: 25px;
        }
      }

      @media (max-width: 400px) {
        .card-skills {
          width: 264px;
        }
      }


    .block-content{
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        position: relative;
        z-index: 0;
      }

      @media (min-width: 576px){
        .block-content{
          max-width: 540px;
        }
      }

      @media (min-width: 768px){
        .block-content{
          max-width: 720px;
        }
      }

      @media (min-width: 992px){
        .block-content{
          max-width: 960px;
        }
      }

      @media (min-width: 1200px){
        .block-content{
          max-width: 1140px;
        }
      }

      @media (min-width: 1400px){
        .block-content{
          max-width: 1270px;
        }
      }
 


    .newsd{
        width: 100%;
        height: 100vh;
        padding: 44px;
        background-color: #810000;
    }

    .but, button{
      outline: none;
      border: none;
      background: inherit;
      padding: 10px;
      box-sizing: border-box !important;
    }
    .button-1 {
      background-color: #EA4C89;
      border-radius: 8px;
      border-style: none;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-size: 16px;
      font-weight: 500;
      line-height: 20px;
      list-style: none;
      margin: 0;
      outline: none;
      padding: 12px;
      position: relative;
      text-align: center;
      text-decoration: none;
      transition: color 100ms;
      vertical-align: baseline;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-1:hover,
    .button-1:focus {
      background-color: #F082AC;
      color: #fff;
    }
    .button-2 {
      all: unset;
      width: 100px;
      font-size: 16px;
      background: transparent;
      border: none;
      position: relative;
      color: #f0f0f0;
      cursor: pointer;
      z-index: 1;
      padding: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      white-space: nowrap;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    .button-2:hover{
      color: #fff;
    }

    .button-2::after,
    .button-2::before {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      z-index: -99999;
      transition: all .4s;
    }

    .button-2::before {
      transform: translate(0%, 0%);
      width: 100%;
      height: 100%;
      background: #28282d;
      border-radius: 10px;
    }

    .button-2::after {
      transform: translate(10px, 10px);
      width: 35px;
      height: 35px;
      background: #ffffff15;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border-radius: 44px;
    }

    .button-2:hover::before {
      transform: translate(5%, 20%);
      width: 110%;
      height: 110%;
    }

    .button-2:hover::after {
      border-radius: 10px;
      transform: translate(0, 0);
      width: 100%;
      height: 100%;

    }

    .button-2:active::after {
      transition: 0s;
      transform: translate(0, 5%);
    }
    .button-3 {
      appearance: button;
      backface-visibility: hidden;
      background-color: #405cf5;
      border-radius: 6px;
      border-width: 0;
      box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
      box-sizing: border-box;
      color: #fff;
      cursor: pointer;
      font-size: 100%;
      line-height: 1.15;
      margin: 12px 0 0;
      outline: none;
      overflow: hidden;
      padding: 12px 18px;
      position: relative;
      text-align: center;
      text-transform: none;
      transform: translateZ(0);
      transition: all .2s,box-shadow .08s ease-in;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: 100%;
    }

    .button-3:disabled {
      cursor: default;
    }

    .button-3:focus {
      box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
    }
    .button-3:hover{
      color: #fff;
    }
    .button-4 {
      margin: 12px;
      padding: 12px 18px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      border-radius: 12px;
      display: block;
      border: 0px;
      font-weight: 700;
      box-shadow: 0px 0px 14px -7px #f09819;
      background-image: linear-gradient(45deg, #FF512F 0%, #F09819  51%, #FF512F  100%);
      cursor: pointer;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-4:hover {
      background-position: right center;
      color: #fff;
      text-decoration: none;
    }

    .button-4:active {
      transform: scale(0.95);
    }
    .button-5 {
      align-items: center;
      background-color: #0A66C2;
      border: 0;
      border-radius: 100px;
      box-sizing: border-box;
      color: #ffffff;
      cursor: pointer;
      display: inline-flex;
      font-size: 16px;
      font-weight: 600;
      justify-content: center;
      line-height: 18px;
      max-width: 480px;
      min-height: 40px;
      min-width: 0px;
      overflow: hidden;
      padding: 0px;
      padding-left: 18px;
      padding-right: 18px;
      text-align: center;
      touch-action: manipulation;
      transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
      user-select: none;
      -webkit-user-select: none;
      vertical-align: middle;
    }

    .button-5:hover,
    .button-5:focus {
      background-color: #16437E;
      color: #ffffff;
    }

    .button-5:active {
      background: #09223b;
      color: rgb(255, 255, 255, .7);
    }

    .button-5:disabled {
      cursor: not-allowed;
      background: rgba(0, 0, 0, .08);
      color: rgba(0, 0, 0, .3);
    }
    .button-6 {
      appearance: button;
      background-color: #1899D6;
      border: solid transparent;
      border-radius: 16px;
      border-width: 0 0 4px;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-size: 15px;
      font-weight: 700;
      letter-spacing: .8px;
      line-height: 20px;
      margin: 0;
      outline: none;
      overflow: visible;
      padding: 18px;
      text-align: center;
      text-transform: uppercase;
      touch-action: manipulation;
      transform: translateZ(0);
      transition: filter .2s;
      user-select: none;
      -webkit-user-select: none;
      vertical-align: middle;
      white-space: nowrap;
      width: 100%;
    }

    .button-6:after {
      background-clip: padding-box;
      background-color: #1CB0F6;
      border: solid transparent;
      border-radius: 16px;
      border-width: 0 0 4px;
      bottom: -4px;
      content: "";
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      z-index: -1;
    }

    .button-6:main,
    .button-6:focus {
      user-select: auto;
    }

    .button-6:hover:not(:disabled) {
      filter: brightness(1.1);
      -webkit-filter: brightness(1.1);
    }

    .button-6:disabled {
      cursor: auto;
    }
    .button-6 {
      appearance: button;
      background-color: transparent;
      background-image: linear-gradient(to bottom, #fff, #f8eedb);
      border: 0 solid #e5e7eb;
      border-radius: .5rem;
      box-sizing: border-box;
      color: #482307;
      column-gap: 1rem;
      cursor: pointer;
      display: flex;
      font-size: 100%;
      font-weight: 700;
      line-height: 24px;
      margin: 0;
      outline: 2px solid transparent;
      padding: 12px;
      text-align: center;
      text-transform: none;
      transition: all .1s cubic-bezier(.4, 0, .2, 1);
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      box-shadow: -6px 8px 10px rgba(81,41,10,0.1),0px 2px 2px rgba(81,41,10,0.2);
      display: flex;
      justify-content: center;
    }

    .button-6:active {
      background-color: #f3f4f6;
      box-shadow: -1px 2px 5px rgba(81,41,10,0.15),0px 1px 1px rgba(81,41,10,0.15);
      transform: translateY(0.125rem);
    }

    .button-6:focus {
      box-shadow: rgba(72, 35, 7, .46) 0 0 0 4px, -6px 8px 10px rgba(81,41,10,0.1), 0px 2px 2px rgba(81,41,10,0.2);
    }
    .button-7 {
      background: #fff;
      backface-visibility: hidden;
      border-radius: .375rem;
      border-style: solid;
      border-width: .125rem;
      box-sizing: border-box;
      color: #212121;
      cursor: pointer;
      display: inline-block;
      font-size: 1.125rem;
      font-weight: 700;
      letter-spacing: -.01em;
      line-height: 1.3;
      padding: 18px;
      position: relative;
      text-align: left;
      text-decoration: none;
      transform: translateZ(0) scale(1);
      transition: transform .2s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-7:not(:disabled):hover {
      transform: scale(1.05);
    }

    .button-7:not(:disabled):hover:active {
      transform: scale(1.05) translateY(.125rem);
    }

    .button-7:focus {
      outline: 0 solid transparent;
    }

    .button-7:focus:before {
      content: "";
      left: calc(-1*.375rem);
      pointer-events: none;
      position: absolute;
      top: calc(-1*.375rem);
      transition: border-radius;
      user-select: none;
    }

    .button-7:focus:not(:focus-visible) {
      outline: 0 solid transparent;
    }

    .button-7:focus:not(:focus-visible):before {
      border-width: 0;
    }

    .button-7:not(:disabled):active {
      transform: translateY(.125rem);
    }
    .button-7 {
      background-color: #36A9AE;
      background-image: linear-gradient(#37ADB2, #329CA0);
      border: 1px solid #2A8387;
      border-radius: 4px;
      box-shadow: rgba(0, 0, 0, 0.12) 0 1px 1px;
      color: #FFFFFF;
      cursor: pointer;
      display: block;
      font-size: 17px;
      line-height: 100%;
      margin: 0;
      outline: 0;
      padding: 18px;
      text-align: center;
      transition: all 200s ease-in-out;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: 100%;
    }

    .button-7:hover {
      box-shadow: rgba(255, 255, 255, 0.3) 0 0 2px inset, rgba(0, 0, 0, 0.4) 0 1px 2px;
      text-decoration: none;
      transition: all 200s ease-in-out;
    }

    .button-7:active {
      box-shadow: rgba(0, 0, 0, 0.15) 0 2px 4px inset, rgba(0, 0, 0, 0.4) 0 1px 1px;
    }

    .button-7:disabled {
      cursor: not-allowed;
      opacity: .6;
    }

    .button-7:disabled:active {
      pointer-events: none;
    }

    .button-7:disabled:hover {
      box-shadow: none;
      color: #fff;
    }
    .button-8 {
      align-items: center;
      appearance: none;
      background-color: #FCFCFD;
      border-radius: 4px;
      border-width: 0;
      box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
      box-sizing: border-box;
      color: #36395A;
      cursor: pointer;
      display: inline-flex;
      min-height: 48px;
      justify-content: center;
      line-height: 1;
      list-style: none;
      overflow: hidden;
      padding-left: 12px;
      padding-right: 12px;
      position: relative;
      text-align: left;
      text-decoration: none;
      transition: box-shadow .15s,transform .15s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      white-space: nowrap;
      will-change: box-shadow,transform;
      font-size: 18px;
    }

    .button-8:focus {
      box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    }

    .button-8:hover {
      box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
      transform: translateY(-2px);
    }

    .button-8:active {
      box-shadow: #D6D6E7 0 3px 7px inset;
      transform: translateY(2px);
    }
    .button-9 {
      background-color: #0078d0;
      border: 0;
      border-radius: 56px;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      font-size: 18px;
      font-weight: 600;
      outline: 0;
      padding: 12px;
      position: relative;
      text-align: center;
      text-decoration: none;
      transition: all .3s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-9:before {
      background-color: initial;
      background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
      border-radius: 125px;
      content: "";
      height: 50%;
      left: 4%;
      opacity: .5;
      position: absolute;
      top: 0;
      transition: all .3s;
      width: 92%;
    }

    .button-9:hover {
      box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
      transform: scale(1.05);
      color: #fff;
    }
 
    .button-10 {
      background: #e62143;
      border-radius: 11px;
      box-sizing: border-box;
      color: #fff;
      cursor: pointer;
      display: flex;
      font-size: 1.15em;
      font-weight: 700;
      justify-content: center;
      line-height: 33.4929px;
      padding: 12px;
      text-align: center;
      text-decoration: none;
      text-decoration-skip-ink: auto;
      text-shadow: rgba(0, 0, 0, .3) 1px 1px 1px;
      text-underline-offset: 1px;
      transition: all .2s ease-in-out;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: 100%;
      word-break: break-word;
      border: 0;
    }

    .button-10:active,
    .button-10:focus {
      border-bottom-style: none;
      border-color: #dadada;
      box-shadow: rgba(0, 0, 0, .3) 0 3px 3px inset;
      outline: 0;
    }

    .button-10:hover {
      border-bottom-style: none;
      border-color: #dadada;
      color: #fff;
    }

  </style>


    <footer>
      <div class="block-content">
         <div class="footerTop">
          <div id="contacts" class="contact">
            <h1>Contacts</h1>
            <p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-geo-alt"
                viewBox="0 0 16 16"
              >
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
               2008 | Connecticut Avenue | 70062 | Kenner | United States
            </p>
            <a href="mailto:globowaverosy_help@outlook.com">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-envelope-at-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"
                />
                <path
                  d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"
                />
              </svg>
              globowaverosy_help@outlook.com
            </a>
            <a href="tel:087780711">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-telephone-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                />
              </svg>
              087780711
            </a>
          </div>
          <div class="logotip">
            <img src="icon.png" alt="logo" />
            <h2>Globowaverosy</h2>
          </div>
        </div>
        <div class="privacy">
          <a href="Privacy.html" target="_blank">Privacy policy</a>
          <a href="terms.html" target="_blank">Terms & Conditions</a>
          <a href="disclaimer.html" target="_blank">Disclaimer</a>
        </div>
      </div>
    </footer>
 

   

    <script>

      function newColor() {
        let blackColor = $('.newsd').css('background-color');

        if (tinycolor(blackColor).isLight()) {
          $('.newsd').css({ color: '#333' });
        } else {
          $('.newsd').css({ color: '#fff' });
        }
      }
      newColor();
      
 
          

          function columRowNew(selector, itemSelector) {
              const container = document.querySelector(selector);
              const items = document.querySelectorAll(itemSelector);

              if (!container) return;

              const style = window.getComputedStyle(container);
              const direction = style.getPropertyValue('flex-direction');

              if (direction === 'column') {
                  container.style.alignItems = 'center';
                  items.forEach(item => {
                      item.style.width = '100%';
                      item.style.textAlign = 'center';
                  });
              } else {
                  container.style.alignItems = '';
                  items.forEach(item => {
                      item.style.width = '';
                      item.style.textAlign = '';
                  });
              }
          }

          columRowNew('.serv-card', '.cards');
          columRowNew('.comments', '.card');
      

    </script>
    
    

</body>
</html>
