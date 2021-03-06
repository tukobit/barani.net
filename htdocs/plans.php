<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Barani Plans</title>
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
                    z-index: 999;
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
                #maincontent{
                   width: 100%;
                   height: auto;                    
                   z-index: 2;
                   padding-top: 100px;
                   text-align: center;
               }   
                #content{
                   width: 960px;
                   height: auto;
                   margin: 0 auto;
                   text-align: center;
               } 
               #smokebg{
                   width: 1060px;
                   height: 549px;
                   background-image: url('./assets/smoke.png');
                   z-index: 2;
                   background-repeat: no-repeat;
                   background-position: right 17px top;                  
                   margin-bottom: 60px;
                   position: absolute;
                   top:-115px;
                   right:0px;
               }    

               #captionforplans{
                   color:#ff9500;
                   font-size: 36px;
                   font-family: 'Lato';
                   font-style: italic;
                   text-align: left;
                   margin-left: 65px;
               }
               #globe{
                   position: relative;
                   z-index: 190;
                   top:-5px;
                   left:10px;
                   transition-duration: 1.5s;
                   transition-timing-function: linear;
               }
               #globe:hover{
                   transform: rotate(100deg);
                   background-color: orange;
                   opacity: 1;
                   border-radius:38px;
               }
                  sub, sup{
                font-size: 50%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }

            sup{
                top: -0.5em;
            }

            sub{
                bottom: -0.25em;
            }  

            #globe{
                position: relative;
                z-index: 190;
                top:-5px;
                left:10px;
                transition-duration: 1.5s;
                transition-timing-function: linear;
            }
            #globe:hover{
                transform: rotate(100deg);
                background-color: orange;
                opacity: 1;
                border-radius:38px;
            }

            .twopanel{
                width: 964px;
                height: auto;   
                margin: 0 auto;                    
            }
            .minipanel{
                width: 400px;
                height: auto;
                display: inline-block;
                vertical-align: top;
                margin-left: 10px;
                margin-right: 10px;
            }

            .minipaneltitle{
                width: 100%;
                background-color: #40424f;
                text-align: left;
                font-family: 'LatoLight';
                font-size: 18px;
                line-height: 2.4;
                color:#00a6ff;
                height: 44px;
                position: relative;  
            }

            .minipanelcontent{
                margin-top: 1px;
                margin-bottom: 10px;
                width: 100%;
                font-family: 'Lato';
                font-size: 14px;
                color:#343434;
                height: auto;
                background-color: #fff;
                text-align: justify;
                min-height: 84px;
                display: inline-block;
                border: 1px solid #f1f1f1;
            }

            .minipanelcontent span{
                padding-top: 10px;
                padding-left: 10px;
                padding-right: 10px;
                display: inline-block;
                text-align: justify;
                line-height: 1.2;
            }                 

            .glyph{
                position: absolute;
                right: 15px;
                top:15px;
            }  

            .spacer{
                min-height: 80px;
                min-width: 60px;
                display: block;
                text-align: right;
                width: 914px;
                margin: 0 auto;
            }     

            .leftbanner{
                width: 960px;
                height: 75px;
                margin: 0 auto;                
            }

            #baraniwifirecipes{
                width: 297px;
                height: 75px;
                background-image: url('./assets/baraniwifirecipes.png');
            }

            #tableholder{
                width: 960px;
                height: auto;
                text-align: center;
                margin: 0 auto;
                position: relative;
            }

            .bgtd{
                min-width: 229px;
                min-height: 33px;
                background-color: #4b4b4b;
                color:#fff;
                vertical-align: central;
                font-family: 'Lato';
                font-size: 14px;
                line-height: 2;
                border: 1px solid #5d5d5d;
            }
            
            .tableheader{
                min-width: 49px;
                display: inline-block;
                min-height: 23px;
                background-color:#4b4b4b ;
                color:white;
                border-radius: 10px;
/*                font-weight: bold;*/
                vertical-align: central;
                font-family: 'Lato';
                font-size: 14px;
                line-height: 1.6;
                float: left;
                transition-duration: 1s;
/*                border: 1px solid #5d5d5d;*/
            }
            .tableheader:hover{
                 transform:scale(.9,.9);
            }
            .tableheaderrupees{
                 min-width: 49px;
                display: inline-block;
                min-height: 23px;
                background-color:#4b4b4b ;
                color:white;
                border-radius: 10px;
                position: relative;
/*                top:1px;*/
left: 1px;
                vertical-align: central;
                font-family: 'Lato';
                font-size: 14px;
                line-height: 1.6;
                float: left;
                transition-duration: 1s;
            }
            .tableheaderrupees:hover{
                background-color: greenyellow;
                color:black;
                transform: rotate(10deg);
              
            }
            .tableheadercorp{
                 min-width: 49px;
                display: inline-block;
                min-height: 23px;
                background-color:#4b4b4b ;
                color:white;
                border-radius: 10px;
/*                font-weight: bold;*/
                vertical-align: central;
                font-family: 'Lato';
                font-size: 14px;
                line-height: 1.6;
                float: left;
                transition: 1s;
            }
            .tableheadercorp:hover{
                 transform:scale(1.1,1.1);
            }
            
            .bgtdcontent{
                min-width: 229px;
                min-height: 33px;
                background-color: #fff;
                color:#1a1a1a;
                vertical-align: central;
                font-family: 'Lato';
                font-size: 14px;
                line-height: 2;
                border: 1px solid #e9e9e9;                
            }
            

            .nobgtd{
                min-width: 229px;
                min-height: 33px;
                color:#d3d3d3;
                text-align: right;
                padding-right: 3px;
                font-family: 'Lato';
                font-size: 14px;                
            }     

            .tablesel .bgtdcontent{
                background-color: #f2f9ff;
            }

            .tablesel td:first-child{
                background-image:url('./assets/trtdfirstbg.png');
                background-repeat: no-repeat;
                background-position: right 0 top;
                color:#565656;
            }            

            tr:hover .bgtdcontent{
                background-color: #f8fcff;
            }
            
            .banneradholder{
                width: 960px;
                height: auto;
                text-align: left;
                margin: 0 auto;
            }     
            
            
                #gratitudebar{ 
                    width:914px;
                    height:auto;
                    background-color:#fff;
                    border: 1px solid #f3f3f3;
                    margin: 0 auto;
                    margin-top:100px;
                    margin-bottom:30px;
                    line-height: 2;
                    text-align: center;
                    color:#656565;
                    font-family: 'Lato';
                    font-size: 14px;
                    position: relative;
                    font-style: italic;
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
            
                #notify{
                    color:#626262;
                    font-family: 'Lato';
                    font-size: 14px;
                    font-style: italic;
                    position: absolute;
                    top:199px;
                    right:45px;
                }
                #tablespace{
                min-height: 90px;
                min-width: 60px;
                display: block;
                text-align: right;
                width: 914px;
                margin: 0 auto;
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
                <div id="captionforplans">                    
                    <span>Talk about Internet Provider.</span><img id="globe" src="assets/globe.png" alt="" /><br/>
                    <span>Try our new Barani Wifi Lounge<sup>TM</sup></span>


                </div>
            </div>
            
                        <div class="spacer">

            </div>  
            <div class='twopanel'>
                <!--1st mini panel starts-->
                <div class='minipanel'>
                    <div class='minipaneltitle'>&nbsp;&nbsp;Personal <img class='glyph' src='./assets/personal.png' alt=''></div>
                    <div class="minipanelcontent">

                        <span>See Its simple. We offer what we think is best for you. Be whereever you are. We take the internet to you at undisputable speeds for unbeatable price . 

                        </span><br/><br/>
                        <div style="text-align: center;"><span>starts at&nbsp;<img src="assets/550.png" alt="">/ Month</span></div>
                        <br/><br/>
                        <span>


                            Stay Connected.<br/>
                            Forever with the uncomprising network service by Barani.</span><br/>
                        <br/><p>

                    </div>
                </div><!--1st mini panel end-->

                <!--2nd mini panel starts-->
<!--                <div class='minipanel'>
                    <div class='minipaneltitle'>&nbsp;&nbsp;Premium <img class='glyph' src='assets/premium.png'></div>
                    <div class="minipanelcontent">

                        <span>The thing that strikes us first was the service to the esteemed customers who offer internet services at undisputed quality. 
                        </span><br/><br/>
                        <div style="text-align: center;"><span>starts at<img src="assets/499.png" alt="">/ Month</span></div>
                        <br/><br/>
                        <span>
                            We knew you were seeking quality all the time. So try our Barani WiFi LoungeTM  So we have our plans customized for internet cafe’s, game zones and coffee shops access points. 

                        </span><br/>
                        <br/>

                    </div>
                </div>-2nd mini panel end-->

                <!--3rd mini panel starts-->
                <div class='minipanel'>
                    <div class='minipaneltitle'>&nbsp;&nbsp;Corporate<img class='glyph' src="./assets/enterprise.png"></div>
                    <div class="minipanelcontent">

                        <span>There is a scale at which we have to face the challenge of beating our own records of our past. If you have that enterprise running, Barani will be so delighted to work with you and for you. We offer tailor made  solution for large scale internet infra structure.
                        </span><br/><br/><span>
                            Our domain experts will assist you in understanding your needs and help you in getting the best internet platform that a market can give. Experience gives us this faith. We believe we can serve you better.<br/><br/>
                        </span><br/>

                    </div>
                </div><!--3rd mini panel ends-->

            </div>      

            <div class="spacer">

            </div>  
            <div class="leftbanner">
                <div id="baraniwifirecipes"></div> 
            </div> 
            <div class="spacer">

            </div>  
            <div id="tableholder">
                <table id="classify">
                    <span class="tableheader">&nbsp;&nbsp; Home Plans&nbsp;&nbsp;</span><br/><br/><br/>
                    <tr><td class="bgtd">Price</td><td class="bgtd">Speed</td><td class="bgtd">Plan Type</td><td class="bgtd">Validity</td></tr>
                    <tr><td class="bgtdcontent">550</td><td class="bgtdcontent">256kbps</td><td class="bgtdcontent">Unlimited</td><td class="bgtdcontent">1 Month</td></tr>
                    <tr><td class="bgtdcontent">750</td><td class="bgtdcontent">512kbps</td><td class="bgtdcontent">Unlimited</td><td class="bgtdcontent">1 Month</td></tr>
                    <tr><td class="bgtdcontent">1050</td><td class="bgtdcontent">1mbps</td><td class="bgtdcontent">Unlimited</td><td class="bgtdcontent">1 Month</td></tr>
                    <tr><td class="bgtdcontent">1700</td><td class="bgtdcontent">2mbps</td><td class="bgtdcontent">Unlimited</td><td class="bgtdcontent">1 Month</td></tr>
                </table>
                
                <br/> <br/> <br/> <br/> <br/> <br/> 
                <table id="classify">
                     <span class="tableheadercorp">&nbsp;&nbsp; Corporate Plans&nbsp;&nbsp;</span><br/><br/><br/>
                    <tr><td class="bgtd">Price</td><td class="bgtd">Speed</td><td class="bgtd">Plan Type</td><td class="bgtd">Validity</td></tr>
                    <tr><td class="bgtdcontent">3500</td><td class="bgtdcontent">1mbps</td><td class="bgtdcontent">Unlimited</td><td class="bgtdcontent">1 Month</td></tr>
                    
                </table>
                 
                <span id="notify">* Home Customer Installation charge Rs 500</span><BR/><BR/><BR/>
                
                <span class="tableheader">&nbsp;&nbsp; Static IP Yearly Rental&nbsp;&nbsp;</span><div class="tableheaderrupees">&nbsp;&nbsp;RS 3500&nbsp;&nbsp;</div><br/><br/><br/>
            </div>
            <div class="spacer">

            </div>  
            <div class="banneradholder">
            <img src="./assets/bannerad.png" alt="">
            </div><br/><br/>
            <div class="banneradholder">
                <img style="cursor: pointer;" src="./assets/demoinvite.png" alt="">
            </div>            
          
          <!--Gratitude bar-->
            <div id="gratitudebar">
                <img id='leftarrow' src='assets/leftarrow.png' alt=''>
                    Rajkumar, manager jayavilas - Barani had transformed our business.
                <img id='rightarrow' src='assets/rightarrow.png' alt=''>
            </div>
       </div>   <!--main content ends-->
       
        <!--policy panel-->
        <div id="policypanel">
            <a href='#'>Policy</a> | <a href='#'>Terms of use</a>
        </div>
        
        <!--footer panel-->
        <div id="footer">
            
        </div>
    </body>
</html>
