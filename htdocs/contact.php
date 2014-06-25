<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                  #bottomdiv{
              float: left;
            }
            #bottomdivcontent{
                position: relative;
                width: 960px;
                height: auto;
                text-align: center;
                margin: 0 auto;
            }
            .title{
                font-size: 36px;
                color: #ff9500;
                display: block;
                font-style: italic;
                font-family: 'Lato';
                
                margin-right: 90px;
                margin-top: -33px;
            }
            .customerform{
                margin-top: 40px;
            }
            #textlabel{
                min-width: 90px;
                min-height: 33px;
                display: inline-block;
                font-size: 14px;
                font-family: 'lato';
                text-align: right;
                padding-right: 5px;
            }
            .inputblock{
                min-width: 342px;
                min-height: 33px;
                background-color: #eeeeee;
                border:0;
                position: relative;
                z-index: 100;
            }
/*            .largeinputblock{
                min-width: 342px;
                min-height:127px;
                background-color: #eeeeee;
                border:0;
                position: relative;
                z-index: 100;
            }*/
            textArea{
                min-width: 338px;
                min-height:127px;
                background-color: #eeeeee;
                border:0;
                position: relative;
                z-index: 100;
                padding: 10px 0 10px 1%;
                resize: none;
                font-family: 'lato';
                font-size: 13px;
            }
            .textup{
                top:-125px;
                position: relative;
            }
            .submitbutton{
                width: 155px;
                height:40px;
                border-radius: 20px;
                border:0;
                background-color: #130505;
                color:white;
                margin-right: 190px;
            }
            #toprightholder{
                width: 239px;
                height:72px;
                top:0px;
                background-color: #dae6ec;
                float:left;
                position: relative;
                right: 75px;
            }
            #toprightholdercontent{
                text-align: justify;
                line-height: .8;
                margin-top: 40px;
                color: #285064;
                margin-left: 12px;
                font-family: 'lato';
                font-size: 18px;
                cursor: pointer;
            }
            .cellimage{
                top: 3px;
                left: 6px;
                position: absolute;
            }
              .no{
                position: absolute;
                top:22px;
                left: 43px;
                
                
            }
            .name{
                position: absolute;
                top:40px;
                left: 50px;
                color:#423b3b;
                margin-top: 5px;
                font-size: 19px;
            }
            #bottomrightholder{
                position: relative;
                top:10px;
                right:0px;
                width: 239px;
                height:107px;
                background-color:#f3f3f3;
                display: block;cursor: pointer;
            }
            #bottomrightholdercontent{
                
                text-align: justify;
                line-height: 1.3;
                margin-top: 2px;
                position: absolute;
                top:10px;
                font-size: 14px;
                color: #777777;
                margin-left: 10px;
                 font-family: 'lato';cursor: pointer;
            }
            .baranidatasol{
                font-size: 18px;
            }
            .spacer{
                min-height: 500px;
                min-width: 60px;
                display: block;
                text-align: right;
                width: 914px;
                margin: 0 auto;
            } 
            .minispacer{
                min-height:150px;
                min-width: 60px;
                display: block;
                text-align: right;
                width: 914px;
                margin: 0 auto;
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
                    <li ><a href="plans.php">PLANS</a></li>
                    <li><a href="easy-pay.php">EASYPAY</a></li>
                    <li  class='nav-selected'><a href="contact.php">CONTACT</a></li>                
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
       </div>
        
        
       <div id="bottomdiv">
                <div id="bottomdivcontent">
                    <span class="title">We like to hear from you</span>
                
                <form method="post" action="#" class="customerform">
                       <span id="textlabel">Your Name</span>&nbsp;&nbsp;&nbsp;<input type="text" class="inputblock" name="Name" value=""><br/>
                       <span id="textlabel">Contact No</span>&nbsp;&nbsp;&nbsp;<input type="text" class="inputblock" name="Contact No" value=""><br/>  
                        <span id="textlabel">Email Id</span>&nbsp;&nbsp;&nbsp;<input type="text" class="inputblock" name="Email Id" value=""><br/>
                        <span id="textlabel" class="textup">Your Message</span>&nbsp;&nbsp;&nbsp;<textarea></textarea><br/>
                       <span id="textlabel"></span><input type="submit" name="submit" value="Send Message" class="submitbutton">
                </form>   
                  
                </div> 
            </div>
        
        
           <div id="toprightholder">
                     <div id="toprightholdercontent">
                         &nbsp;&nbsp;<img src='./assets/cellicon.png' alt="/" class='cellimage' ><span class="no">+ 91 99434 30026</span><br>
                        <span class="name">Arul</span>
                     </div>
               
                 <!--bottom right holder div starts-->
            <div id="bottomrightholder">
                    <div id="bottomrightholdercontent">
                     <span class="baranidatasol">  Barani Data Solutions</span></br>
                             <span>     No 237, Tiruchendur Road,<br/>
                                M.K.P Nagar,<br/>
                                palayamkottai - 627002
                            </span>
                      
                     </div>
            </div>  <!--bottom right holder div ends-->       
            </div><!-- top right holder div ends-->
            <div class='spacer'>
                
                
            </div>  
          
            <div class='minispacer'>
                
                
            </div>
            
             <!--policy panel-->
        <div id="policypanel">
            <a href='#'>Policy</a> | <a href='#'>Terms of use</a>
        </div>
        
        <!--footer panel-->
        <div id="footer"></div> 
    </body>
</html>
