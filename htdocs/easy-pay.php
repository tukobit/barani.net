<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
        <style>
                @font-face{
                    font-family: Electrolize;
                    src: url("./fonts/Electrolize-Regular.ttf");
                }

                @font-face{
                    font-family: Lato;
                    src: url("./fonts/Lato-Regular.ttf");
                }            
                
                @font-face{
                    font-family: LatoLight;
                    src: url("./fonts/Lato-Lig.ttf");
                }                            
            
                html, body, div, span, applet, object, iframe,
                h1, h2, h3, h4, h5, h6, p, blockquote, pre,
                a, abbr, acronym, address, big, cite, code,
                del, dfn, em, img, ins, kbd, q, s, samp,
                small, strike, strong, sub, sup, tt, var,
                b, u, i, center,
                dl, dt, dd, ol, ul, li,
                fieldset, form, label, legend,
                table, caption, tbody, tfoot, thead, tr, th, td,
                article, aside, canvas, details, embed, 
                figure, figcaption, footer, header, hgroup, 
                menu, nav, output, ruby, section, summary,
                time, mark, audio, video {
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font-size: 100%;
                        font: inherit;
                        vertical-align: baseline;
                }
                
                article, aside, details, figcaption, figure, 
                footer, header, hgroup, menu, nav, section {
                        display: block;
                }
                
                body {
                        line-height: 1;
                        background-color: #f8f8f8;
                }
                
                ol, ul {
                        list-style: none;
                }
                
                blockquote, q {
                        quotes: none;
                }
                
                blockquote:before, blockquote:after,
                q:before, q:after {
                        content: '';
                        content: none;
                }
                
                table {
                        border-collapse: collapse;
                        border-spacing: 0;
                }        
                
                #titlebg{
                    width: 100%;
                    height: 108px;
                    background-color: #353535;
                    background-image: url('assets/stripes.png');

                    z-index: 1;
                }
                
                #titlecontent{
                    width: 1060px;
                    height: 108px;
                    margin: 0 auto;
                    z-index: 2;
                }
                
                #logofront{
                    position: relative;
                    left:-182px;
                    top:-28px;
                    z-index: 5;
                }
                
                #logoback{
                    position: relative;
                    z-index: 4;
                }                
                
                a{
                    text-decoration: none;
                }
                
                #navigationmenu{
                    font-family: 'Electrolize', sans-serif;
                    float: right;
                    list-style: none;
                    font-size: 24px;
                    cursor: pointer;
                    position: relative;
                    top:33px;
                }
                
                #navigationmenu li{
                    display: inline-block;
                    color:white;
                    margin-right: 30px;
                    padding:5px 10px 5px 10px;
                    transition: background-color 1.5s ease;
                }
                
                #navigationmenu li:hover{
                    padding:5px 10px 5px 10px;
                    background-color: #000;
                }                    
                
                #navigationmenu li a{
                    color:white;                    
                }      

                #navigationmenu .nav-selected a{
                    color: #000000;
                }                
                
                #navigationmenu .nav-selected{
                    background-color: #fbc509;                    
                }
                
                #navigationmenu .nav-selected:hover{
                    background-color: #fbc509;                        
                }
                
                #navigationmenu li:hover a{
                    color:#fbc509;
                }        
                
                #navigationmenu .nav-selected:hover a{
                    color:#000;
                }                                
                
                #titleborder{
                    width: 100%;
                    height: 10px;
                    background-color: #fbc509;
                    position: relative;
                    z-index: 0;
                }             
                
                #flash{
                    position: absolute;
                    top:0;
                    right:120px;
                    z-index: 0;
                }
                
                #logindiv{
                    background-image: url('./assets/loginbg.png');
                    width:353px;
                    height: 39px;
                    position: relative;
                    left:667px;
                    top:-48px;
                    z-index: 8;
                }
                
                #login{
                    font-family: 'Lato', sans-serif;
                    list-style: none;
                    font-size: 16px;                 
                }
                
                #login li{
                    display: inline;
                    margin-left: 10px;
                    margin-right: 10px;
                    color:#000;
                    position: relative;
                    left:170px;
                    top:10px;
                }
                
                #login li a{
                    text-decoration: none;
                    color:#000;
                }  
                
                #maincontent{
                    width: 100%;
                    height: auto;                    
                }
                
                #smokebg{
                    width: 1060px;
                    height: 549px;
                    background-image: url('./assets/smoke.png');
                    z-index: 6;
                    background-repeat: no-repeat;
                    background-position: right 40px top;
                    margin: 0 auto;
                    margin-bottom: 60px;
                }
                
                #slider{
                    width: 940px;
                    height: 630px;
                    background-image: url('./assets/smoke.png');
                    background-position: top 100px right 60px;
                    background-repeat: no-repeat;
                    margin: 0 auto;
                    position: relative;
                    top:120px;
                }
                
                #content{
                    width: 1060px;
                    height: auto;
                    margin: 0 auto;
                    text-align: center;
                }
                
                .twopanel{
                    width: 964px;
                    height: auto;   
                    margin: 0 auto;                    
                }
                
                .minipanel{
                    width: 284px;
                    height: auto;
                    display: inline-block;
                    vertical-align: top;
                    margin-left: 10px;
                    margin-right: 10px;
                }
                
                .largepanel{
                    width: 600px;
                    height: auto;
                    display: inline-block;                    
                    vertical-align: top;
                    margin-left: 10px;
                }                
                
                .paneltitle{
                    width: 100%;
                    border-top-right-radius: 10px;
                    border-top-left-radius: 10px;
                    background-color: #dae6ec;
                    text-align: center;
                    font-family: 'LatoLight';
                    font-size: 18px;
                    line-height: 2.4;
                    color:#000;
                    height: 44px;
                }
                
                .panelcontent{
                    margin-top: 1px;
                    margin-bottom: 10px;
                    width: 100%;
                    border-bottom-right-radius: 10px;
                    border-bottom-left-radius: 10px;
                    background-color: #d2d9dd;
                    font-family: 'Lato';
                    font-size: 14px;
                    color:#343434;
                    height: auto;
                    background-color: #f3f3f3;
                    text-align: center;
                    min-height: 268px;
                }  
                
                .minipanelcontent{
                    margin-top: 1px;
                    margin-bottom: 10px;
                    width: 100%;
                    border-bottom-right-radius: 10px;
                    border-bottom-left-radius: 10px;
                    background-color: #d2d9dd;
                    font-family: 'Lato';
                    font-size: 14px;
                    color:#343434;
                    height: auto;
                    background-color: #f3f3f3;
                    text-align: justify;
                    min-height: 84px;
                    display: inline-block;
                }                                  
                
                .panelcontent span{
                    padding-top: 10px;
                    padding-left: 10px;
                    padding-right: 10px;
                    display: inline-block;
                    text-align: justify;
                    line-height: 1.2;
                }
                
                .minipanelcontent span{
                    padding-top: 10px;
                    padding-left: 10px;
                    padding-right: 10px;
                    display: inline-block;
                    text-align: justify;
                    line-height: 1.2;
                }                
                
                .panelcontent a{
                    color:#0181ff;
                    cursor: pointer;
                }   
                
                #map{
                    width: 488px;
                    height: 260px;
                    margin: 0 auto;
                }
                
                .banner1{
                    width: 914px;
                    height: 120px;   
                    margin-top: -50px;
                    margin-bottom: 30px;
                    position: relative;
                    
                }
                
                .banner2{
                    width: 914px;
                    height: 120px;   
                    margin-top: 20px;
                    margin-bottom: 5px;
                    position: relative;
                }                
                
                #undispqual{
                    width: 914px;
                    height: 96px;
                    background-position: right 0px top;
                    background-repeat: no-repeat;
                    background-image: url("./assets/undisputedqualitynew.png");
                    position: absolute;
                }
                #signalicon{
                    width:52px;
                    height:38px;
                    background-repeat: no-repeat;
                    background-image: url("./assets/signalicon.png");
                    position: absolute;
                    top:30px;
                    right: 290px;
                    transition-duration: 5s;
                }
                #signalicon:hover{
                    top:4px;
                }
                   #experience{
                    width: 914px;
                    height: 96px;
                    background-position: right 0px top;
                    background-repeat: no-repeat;
                    background-image: url("./assets/experiencenew.png");
                    position: absolute;
                }
                    
                #exp{
                    width: 56px;
                    height:56px;
                    position: absolute;
                    top:15px;
                    right: 310px;
                    background-repeat: no-repeat;
                    background-image: url("./assets/exp.png");
                    transition-duration: 3s;
                    opacity: 2;

                }
                #exp:hover{
                 
                    opacity: .2;
                    right:300px
                }
                .mbps{
                    background-image: url("./assets/mbps.png");
                    background-repeat: no-repeat;
                    width:109px;
                    height:68px;
                    
                }
                    .minipaneltitle{
                    width: 100%;
                    border-top-right-radius: 10px;
                    border-top-left-radius: 10px;
                    background-color: #dae6ec;
                    text-align: center;
                    font-family: 'LatoLight';
                    font-size: 18px;
                    line-height: 2.4;
                    color:#000;
                    height: 44px;
                    position: relative;
                }
                #gratitudebar{ 
                    width:914px;
                    height:auto;
                    background-color:#fefbef;
                    box-shadow: 0px 1px 1px rgba(232,232,232,0.5);
                    margin: 0 auto;
                    margin-top:100px;
                    margin-bottom:30px;
                    line-height: 2;
                    text-align: center;
                    color:#656565;
                    font-family: 'Lato';
                    font-size: 14px;
                    position: relative;
                }
                
                #leftarrow{
                    position: absolute;
                    left:10px;
                    top:8px;
                    cursor: pointer;
                    opacity: 0.8;
                    
                }
                
                #rightarrow{
                    position: absolute;
                    right:10px;
                    top:8px;
                    cursor: pointer;
                    opacity: 0.8;
                }                
                
                #policypanel{
                    position: relative;
                    bottom:-49px;
                    height: 18px;
                    line-height:1.4;
                    width:344px;
                    margin: 0 auto;
                    text-align: center;
                    background-color: #e9e9e9;
                    border-top-left-radius:10px;
                    border-top-right-radius:10px;
                    font-family: 'Lato';
                    font-size: 12px;
                    color:#bdbdbd;                    
                }
                
                #policypanel a{
                        color:#bdbdbd;                    
                }
                
                #footer{
                    position: relative;
                    top: 50px;
                    width:100%;
                    height:8px;
                    background-color: #fae49a;
                }
                
                .glyph{
                    position: absolute;
                    right: 15px;
                    top:15px;
                }
                
                
                .panelcontent ul li{
                    text-align: left;
                    line-height: 1.8;
                    padding-left: 15px;
                }
                
                .spacer{
                    min-height: 40px;
                    min-width: 60px;
                    display: block;
                    text-align: right;
                    width: 914px;
                    margin: 0 auto;
                }
                
                .spacer span{
                    margin-right: 50px;
                    margin-top: 55px;
                    font-family:'Electrolize';
                    display: inline-block;
                    background-color: #ff9500;
                    color:#fff;
                    padding: 5px;
                    font-size: 18px;
                }
        </style>    
     <link rel="stylesheet" href="css/bootstrap.css" />   
	<!-- skin stylesheets -->
	<link rel="stylesheet" href="js/pe.kenburns/themes/neutral_light/skin.min.css" />
	
	<!-- import jQuery -->
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
	
	<!-- import plugin -->
	<script type="text/javascript" src="js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
    	<!-- set slider size -->
    	<style>
    		.peKenBurns {
    			width: 940px;
    			height: 400px;
    		}
                    
    		/* set border size to 0px */
    		.peKenBurns .peKb_slides {
    			padding: 0px;
    			-moz-border-radius: 0px; 
    			-webkit-border-radius: 0px; 
    			border-radius: 0px;
    		}
    		
    		/* set controls margins to 0px */
    		.peKenBurns .peKb_controlsInner .peKb_holder{
    			margin: 0px;
        	}                
    	</style>    
    </head>
    <body>
      <div id="titlebg">
            <div id="titlecontent">
                <a href='#'>
                    <img id='logoback' src='./assets/logoback.png' alt=''>
                    <img id='logofront' src='./assets/logofront.png' alt=''>
                </a>

             <ul id='navigationmenu'>    
                    <li><a href="index.php">HOME</a></li>
                    <li class='nav-selected' ><a href="#plans">PLANS</a></li>
                    <li><a href="easy-pay.php">EASYPAY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>                
                </ul> 
            <div id='logindiv'>

            </div>                
            </div>
        </div>
        <div id='titleborder'>
            <img id='flash' src='./assets/flash.png' alt=''>
        </div> 
        <!--main content starts-->
       <div id="maincontent">
            <div id="smokebg"></div>
            <div id="content">
                <h1>Payment Options</h1>
            </div>
            <div class="spacer">
            </div>
        </div> 
    </body>