<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/assets/js/accordion.js"></script>
    
                
    
</head>
<script>
//     document.addEventListener('DOMContentLoaded', function () {
//     // Get references to the heading and hidden text elements
//     var heading = document.querySelector('.accordion-button');
//     var hiddenText = document.querySelector('.faq-answer');

//     // Add a click event listener to the heading
//     heading.addEventListener('click', function () {
//         // Toggle the visibility of the hidden text
//         if (hiddenText.style.display === 'none' || hiddenText.style.display === '') {
//             hiddenText.style.display = 'block';
//         } else {
//             hiddenText.style.display = 'none';
//         }
//     });
// });




// document.addEventListener('DOMContentLoaded', function () {
//     // Get all the heading and hidden text elements within the ACF repeater
//     var headings = document.querySelectorAll('.accordion-button');
//     var hiddenTexts = document.querySelectorAll('.faq-answer');

//     // Add a click event listener to each heading within the repeater
//     headings.forEach(function (heading, index) {
//         heading.addEventListener('click', function () {
//             // Toggle the visibility of the corresponding hidden text
//             if (hiddenTexts[index].style.display === 'none' || hiddenTexts[index].style.display === '') {
//                 hiddenTexts[index].style.display = 'block';
//             } else {
//                 hiddenTexts[index].style.display = 'none';
//             }
//         });
//     });
// });

</script>
<style>
     @import url('https://fonts.cdnfonts.com/css/poetsenone');
@font-face {
  font-family: 'Lato-Black';
  src: url(../fonts/Lato-Black) format('ttf');
}

.font-class{
  font-family:'Lato-Black', sans-serif !important;
}

                
 /* @font-face {
  font-family: PoetsenOne;
  src: url(/assets/PoetsenOne-Regular.ttf);
}    */
*{margin: 0 auto;
     font-family: 'Poetsen One', sans-serif;
    font-family: 'lato', sans-serif;}
#container{
    width: 100%;

}
header{
    width: 100%;
}
.logo{
    width: 30%;
    height: auto;
    margin-left: 3%;
    margin-top: 3%;
}
.nav{
    width: 70%;
}
/* logo css*/
img.logo_img {
    width: auto;
    height: auto;
    
}
div#f_section {
    width: 100%;
    height: 890px;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39386.png);
    background-size: 100%;
    background-repeat: no-repeat;
    display: flex;
    margin-top: -178px;
    align-items: flex-end;
}
.leftcol {
    width: 50%;
    float: left;
    padding-left: 7%;
    padding-bottom: 8%;
}
.F_Heading{
    color: #414042;
    font-family: 'Poetsen One', sans-serif;                             
    font-size: 73.814px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 31px;
    bottom: -100px;
    position: absolute;
    z-index: 100;
    width: 77.854px;
    height: 160.145px;
}
p.f_para{
color: #FFF;
font-family: 'Lato',sans-serif;
font-size: 31.044px;
font-style: normal;
font-weight: 500;
line-height: normal;
margin-bottom: 30px;
}
.f_button {
    background-color: #E96A24;
    color: #FFF;
    font-family: PoetsenOne;
    font-size: 23.921px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    text-decoration: none;
    white-space: pre-line;
}
.rightcol {
    width: 50%;
    float: right;
    
}
.state_head{

color: #E98824;
font-family: PoetsenOne;
font-size: 39.242px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 32%;
margin-right: 2%;
margin-bottom: -5%;}
div#s_section {
    width: 90%;
    height: auto;
    display: flex;
    margin-top: -80px;
    align-items: flex-end;
}
.leftcol-md-6 {
    width: 40%;
    float: left;
    padding-bottom: 220px;
}
.rightcol-md-6 {
    width: 60%;
    float: right;
    padding-top: 170px;
    white-space: pre-line;
}
img.second_img.img-responsive {
    width: 654.783px;
    height: 668.709px;
}
h3.s_heading {
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 43.156px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    z-index: 100;
    padding-left: 5%;
}
.one p {
    color: #58595B;
    font-family: 'Poetsen One', sans-serif;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    padding-left: 5%;
    padding-right: 5%;
}
/* p.s_para{
color: #58595B;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
font-size: 28.071px;
font-style: normal;
font-weight: 500;
line-height: normal;
padding-left: 5%;
} */
a.s_button {
    background-color: #E98824;
    color: #FFF;
    font-family: PoetsenOne;
    font-size: 23.921px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    text-decoration: none;
    white-space: pre-line;
    margin-left: 5%;
}
.rightcol-md-6::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Vector.png);
    position: absolute;
    background-size: cover;
    width: 372.056px;
    height: 367.74px;
    right: 80px;
    z-index: -1;
}
div#t_section {
    width: 90%;
    height: auto;
    display: flex;
    margin-top: -100px;
    align-items: flex-end;
}
.t_leftcol {
    width: 60%;
    float: left;
    
}
.t_rightcol {
    width: 40%;
    float: right;
    
}
h3.t_heading {
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 43.156px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.third p {
    color: #58595B;
    font-family: 'Poetsen One', sans-serif;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
ul{
    margin-top: 5%;
}
ul li {
    color: #808285;
    font-family: PoetsenOne;
    font-size: 34.152px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
li::marker {
    width: 13.842px;
    height: 13.842px;
    color: #E98824;
}
.tellink {
    margin-top: 25%;
}
a.tel_link {
    color: #F58220;
    font-family: PoetsenOne;
    font-size: 45.138px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.bulletpoints {
    width: 100%;
    margin-top: 5%;
}
.leftbullet {
    float: left;
    width: 50%;
}
.rightbullet {
    float: right;
    width: 50%;
}
img.third_img.img-responsive {
    width: 839.536px;
    margin-top: -180px;
}
/* Fourth Section Css */
div#frt_section {
    width: 95%;
    height: auto;
}
.frt_left {
    width: 50%;
    float: left;
}
.frt_right {
    width: 40%;
    float: right;
    padding-bottom: 4%;
    border-bottom: 1px solid #E98824;

}
h3.ftt_heading {
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 60.173px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.fii, .sii, .tii{
    width: 100%;
    float: left;
    margin-top: 5%;
}
.left_fii, .left_sii, .left_tii {
    width: 15%;
    float: left;
    padding-top: 1.5%;
}
.right_fii, .right_sii, .right_tii {
    width: 85%;
    float: right;
}
h4.frt_heading {
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 34.152px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.frt_desc p {
    color: #414042;
    font-family: 'Lato', sans-serif;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
div#fifth_section {
    width: 85%;
    height:auto;
    margin-top: 33%;
}
.fifth_leftcol {
    width: 60%;
    float: left;
    padding-top: 10%;
}
.fifth_leftcol::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-6.png);
    position: absolute;
    width: 702.807px;
    height: 513.08px;
    z-index: -1;
    margin-top: -4%;
    margin-left: 200px;
}
.fifth_rightcol {
    width: 40%;
    float: right;
    padding-top: 5%;
}
h3.fifth_heading {
    color: #E98824;
    font-family: PoetsenOne;
    font-size: 43.156px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* padding-right: 35%; */
}
.fifth_desc p {
    color: #414042;
    font-family: Lato;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
/* form css*/
h2.gform_title {
    display: none;
}
label {
    display: none !important;
}
.gfield {
    margin-top: 3%;
    margin-bottom: 3%;
    
    
}
input {
    color: #6D6E71;
    font-family: 'PoetsenOne' sans-serif;
    font-size: 19.453px !important;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    width: 674.908px;
    height: 67.649px;
    border-radius: 15px !important;
    border: 0.84px solid #6D6E71 !important;
    padding-left: 30px !important;
}
input#gform_submit_button_1{
    width: 100%;
    background-color: #E98824;
    color: #fff;
    border: none !important;

}
div#sixth_section {
    width: 100%;
    height:auto;
    margin-top: 72%;
}
h2.mainheading {
    text-align: center;
    color: #414042;
    font-family: PoetsenOne;
    font-size: 41.762px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.test_row::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39387.png);
    background-repeat: no-repeat;
    background-size: cover;
    width: 1357.611px;
    height: 298.279px;
    /* float: right; */
    position: absolute;
    left: 0px;
    top: 120px;
}
.test_row::after {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-7.png);
    background-repeat: no-repeat;
    background-size: cover;
    width: 179.455px; 
    height: 188.768px;
    position: absolute;
    z-index: 1;
    right: 0px;
    top: 120px;
}
.test_row {
    width: 80%;
    height: auto;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    position: relative;
}
.col1, .col2, .col3 {
    width: 25%;
    height: 327px;
    background-color: #FBE0D6;
    float: none;
    margin: 4% 1% 4% 1%;
    padding: 2%;
    border-radius: 2%;
    z-index: 100;
}

.t_name {
    font-size: 18px;
    font-weight: 600;
}
.t_content {
    font-size: 18px;
    line-height: 35px;
}
.t_location {
    font-size: 14px;
}
div#seventh_section {
    width: 100%;
    height:auto;
    margin-top: 2%;
}
h3.sevheading {
    color: #E98824;
    font-family: PoetsenOne;
    font-size: 41.762px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.faq-question {
    color: #58595B;
    font-family: PoetsenOne;
    font-size: 26.072px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.accordion-button {
    width: 800px;
    height: 67.649px;
    border: 0.84px solid #6D6E71;
    color: #58595B;
    font-family: PoetsenOne;
    font-size: 26.072px;
    font-style: normal;
    font-weight: 400;
    padding: 15px 10px 0px 20px;
    border-radius: 10px;
    float: left;
    cursor: pointer;
}
.faq-answer {
    color: #58595B;
    font-family: PoetsenOne;
    font-size: 20.072px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    float: left;
    display: none;
}
div#eight_section {
    width: 100%;
    height: auto;
    margin-top: 30%;
    display: flex;
    align-content: center;
    justify-content: space-evenly;
    flex-direction: column;
}
h3.teamtitle {
    color: #E98824;
    font-family: PoetsenOne;
    font-size: 41.762px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* text-align: center; */
}
.team_row {
    width: 100%;
    height: auto;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39391.png);
    background-repeat: no-repeat;
    /* background-size: contain; */
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
.fcol{
    /* width: 25%; */
    padding-top: 1.5%;
    transform: translateX(192px);
}
.scol{
    /* width: 25%; */
    padding-top: 3%;
    transform: translateX(0px);
}
.tcol{
    /* width: 25%; */
    padding-top: 3%;
    transform: translateX(-190px);
}
h4.teamname {
    color: #E98824;
    font-family: PoetsenOne;
    font-size: 21.099px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-align: center;
    transform: translateY(50px);
}
h5.teampost {
    color: #414042;
    font-family: 'Lato-Black';
    font-size: 16.412px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    text-align: center;
}
footer.main-footer {
    width: 100%;
    height: 250px;
    background-color: #E98824;
}
.footer_info {
    width: 90%;
    height: 200px;
    background-color: #E98824;
    padding: 2% 2%;
}
.f_logo {
    width: 30%;
    float: left;
}
.info {
    width: 30%;
    float: right;
    display: flex;
    flex-direction: column;
    align-content: flex-start;
    flex-wrap: wrap;
}
.mobileno {
    width: 40%;
    float: left;
}
.timezone {
    width: 40%;
    float: left;
}
a.m_no {
    color: #FFF;
    font-family: Lato;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 15%;
}
.m_no::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Vector-1.png);
    background-size: contain;
    background-repeat: no-repeat;
    width: 19.856px;
    height: 19.856px;
    position: absolute;
    right: 460px;
    margin-top: 6px;
}
.t_zone {
    color: #FFF;
    font-family: Lato;
    font-size: 28.071px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.sociallinks {
    width: 100%;
    float: left;
    display: flex;
    margin-top: 25px;
}
.twitter {
    width: 30%;
    float: left;
}
a.twitter_link {
    color: #FFF;
    font-family: Lato;
    font-size: 20.125px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.twitter_link::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Vector-3.png);
    background-size: contain;
    background-repeat: no-repeat;
    width: 14.917px;
    height: 12.411px;
    position: absolute;
    right: 630px;
    margin-top: 5px;
}
.instagram {
    width: 30%;
}
a.insta_link {
    color: #FFF;
    font-family: Lato;
    font-size: 20.125px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-left: 10px;
}
.insta_link::before{
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Vector-4.png);
    background-size: contain;
    background-repeat: no-repeat;
    width: 14.921px;
    height: 14.937px;
    position: absolute;
    right: 450px;
    margin-top: 5px;
}
.facebook {
    width: 30%;
}
a.fb_link {
    color: #FFF;
    font-family: Lato;
    font-size: 20.125px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.fb_link::before{
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/unnamed-file.png);
    background-size: contain;
    background-repeat: no-repeat;
    width: 7px;
    height: 12px;
    position: absolute;
    right: 292px;
    margin-top: 5px;
}
.copyright {
    background-color: #000;
    width: 100%;
    height: 50px;
}
.copyright_text p {
    color: #FFF;
    font-family: Lato;
    font-size: 19.419px;
    font-style: normal;
    font-weight: 500;
    line-height: 2.5;
    text-align: center;
}
@media (min-width: 1740px) and (max-width: 1900px) { 
/* logo css*/
/* img.logo_img {
    width: 18%;
    height: 90px;
    margin-left: 5%;
    margin-top: 3%;
} */
header{
    width: 100%;
}
.logo{
    width: 30%;
    height: auto;
    margin-left: 5%;
    margin-top: 3%;
}
.nav{
    width: 70%;
}
/* logo css*/
img.logo_img {
    width: auto;
    height: auto;
    
}
div#f_section {
    width: 100%;
    height: 890px;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39386.png);
    background-size: 100%;
    background-repeat: no-repeat;
    display: flex;
    margin-top: -178px;
    align-items: flex-end;
}
.leftcol {
    width: 50%;
    float: left;
    padding-left: 7%;
    padding-bottom: 7%;
}
.F_Heading{
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
                                                
    font-size: 73.814px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 31px;
    bottom: 300px;
    position: absolute;
    z-index: 100;
    width: 77.854px;
    height: 160.145px;
}
p{
color: #FFF;

font-family: 'Lato',sans-serif;
font-size: 31.044px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
button{
width: 199.687px;
height: 48.683px;
background-color: #E96A24;
color: #FFF;
font-family: PoetsenOne;
font-size: 23.921px;
font-style: normal;
font-weight: 400;
line-height: normal;
border: none;
border-radius: 10px;
margin-top: 40px;
}
.rightcol {
    width: 50%;
    float: right;
}
.state_head{
color: #E98824;
font-family: PoetsenOne;
font-size: 39.242px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 34%;
margin-right: 2%;
margin-bottom: -5%;}
 }
@media (min-width: 1200px) and (max-width: 1740px) { 
/* logo css*/
/* img.logo_img {
    width: 18%;
    height: 90px;
    margin-left: 5%;
    margin-top: 3%;
} */
div#f_section {
    width: 100%;
    height: 890px;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39386.png);
    background-size: 100%;
    background-repeat: no-repeat;
    display: flex;
    margin-top: -178px;
    align-items: flex-end;
}
.leftcol {
    width: 50%;
    float: left;
    padding-left: 7%;
    padding-bottom: 10%;
}
.F_Heading{
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
                                                
    font-size: 73.814px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 31px;
    bottom: 300px;
    position: absolute;
    z-index: 100;
    width: 77.854px;
    height: 160.145px;
}
p{
color: #FFF;

font-family: 'Lato',sans-serif;
font-size: 31.044px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
button{
width: 199.687px;
height: 48.683px;
background-color: #E96A24;
color: #FFF;
font-family: PoetsenOne;
font-size: 23.921px;
font-style: normal;
font-weight: 400;
line-height: normal;
border: none;
border-radius: 10px;
margin-top: 40px;
}
.rightcol {
    width: 50%;
    float: right;
}
.state_head{
    width: 555px;
height: 86.242px;
color: #E98824;
font-family: PoetsenOne;
font-size: 39.242px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 30%;
margin-bottom: -6%;}
 }

 @media (min-width: 750px) and (max-width: 768px) { 
    /* logo css*/
/* img.logo_img {
    width: 18%;
    height: 50px;
    margin-left: 5%;
    margin-top: 3%;
} */
div#f_section {
    width: 100%;
    height: auto;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-39386.png);
    background-size: contain;
    background-repeat: no-repeat;
    display: flex;
    margin-top: -45px;
    align-items: flex-end;
}
.leftcol {
    width: 50%;
    float: left;
    padding-left: 7%;
    padding-bottom: 0%;
    padding-top: 25%;
}
.F_Heading{
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 30px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 14px;
    bottom: 590px;
    position: absolute;
    z-index: 100;
    width: 30px;
    height: 50px;
}
p{
color: #FFF;

font-family: 'Lato',sans-serif;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
button{
width: 120px;
height: 40px;
background-color: #E96A24;
color: #FFF;
font-family: PoetsenOne;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;
border: none;
border-radius: 10px;
margin-top: 15px;
}
.rightcol {
    width: 50%;
    float: right;
}
.state_head{
color: #E98824;
font-family: PoetsenOne;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 20%;
margin-bottom: -14%;}
 }
 @media (min-width: 301px) and (max-width: 750px) {
    h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 14px;
    bottom: 600px unset;
    display: flex;
    position: absolute;
    z-index: 100;
    width: 30px;
    height: 50px;
}
  }
  @media (min-width: 250px) and (max-width: 300px) {
        /* logo css*/
/* img.logo_img {
    width: 22%;
    height: 30px;
    margin-left: 5%;
    margin-top: 3%;
} */
header{
    max-width: 100%;
}
.logo{
    width: 30%;
    height: auto;
    margin-left: 5%;
    margin-top: 3%;
}
.nav{
    width: 70% !important;
}
/* logo css*/
img.logo_img {
    width: 20;
    height: auto;
    
}
div#f_section {
    width: 100%;
    height: auto;
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/shape.png);
    background-size: contain;
    background-repeat: no-repeat;
    display: flex;
    margin-top: 20px;
    align-items: flex-end;
    flex-direction: column;
}
.leftcol {
    width: 100%;
    float: left;
    padding-left: 12%;
    padding-bottom: 0%;
    padding-top: 10%;
}
.F_Heading{
    color: #414042;
    font-family: 'Poetsen One', sans-serif;
    font-size: 28px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
h2.F_Heading::before {
    content: "";
    background: url(http://localhost/claim_exchange/wp-content/uploads/2023/10/Group-13.png);
    background-size: contain;
    background-repeat: no-repeat;
    left: 14px;
    bottom: 730px;
    position: absolute;
    z-index: 100;
    width: 20px;
    height: 35px;
}
p{
color: #FFF;

font-family: 'Lato',sans-serif;
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: normal;
padding-right: 10%;
}
button{
width: 120px;
height: 40px;
background-color: #E96A24;
color: #FFF;
font-family: PoetsenOne;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;
border: none;
border-radius: 10px;
margin-top: 15px;
}
.rightcol {
    width: 100%;
    float: right;
}
.state_head{
color: #E98824;
font-family: PoetsenOne;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 20%;
margin-bottom: -14%;}
  }
</style>
<body>
    

<?php
/*
Template Name: Home
*/
get_header();
?>
<!-- start First Section -->
<div id="f_section" class="content-area">

        <div class="leftcol">
    <?php

$heading = get_field('heading_lose');
$description = get_field('description_lose');
// $button_url = get_field('button_lose');
$f_blink = get_field('button_lose'); // Replace 'link_field' with the name of your ACF link field

if ($f_blink) {
    $url = $f_blink['url']; // Get the URL
    $label = $f_blink['title']; // Get the link text (label)
    
    // You can also get the target (e.g., _blank for opening in a new tab/window)
    $target = $f_blink['target'];
    
}
        ?>

<h2 class="F_Heading"><?php echo $heading; ?></h2>
<p class="f_para"><?php echo $description; ?></p>
<?php
        // Output the link
    echo '<a class="f_button" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
<!-- <button href="<?php echo $button_url; ?>"></button> -->

        <!-- Add your custom HTML structure here -->
        </div>
    <div class="rightcol">
        <?php $r_image = get_field('rightcol_image');?>
    <img class="right_img" src="<?php echo $r_image['url']; ?>" alt="<?php echo $r_image['alt']; ?>">
    <?php $subheading = get_field('sub_heading_bottom_of_image'); ?>
    <h4 class="state_head"><?php echo $subheading; ?></h4>
    </div>
</div>
<!-- End First Section -->
<!-- Start Second Section -->
<div id="s_section" class="content-area">
    <div class="row">
        <div class="leftcol-md-6">
        <?php $ss_img = get_field('second_image'); ?>
        <img class="second_img img-responsive" src="<?php echo $ss_img['url']; ?>" alt="<?php echo $ss_img['alt']; ?>">
        </div>
        <div class="rightcol-md-6 one">
        <?php
        $s_heading = get_field('second_heading');
        $s_description = get_field('second_description');
        // $S_button_url = get_field('second_button');
        $s_blink = get_field('second_button'); // Replace 'link_field' with the name of your ACF link field

if ($s_blink) {
    $url = $s_blink['url']; // Get the URL
    $label = $s_blink['title']; // Get the link text (label)
    
    // You can also get the target (e.g., _blank for opening in a new tab/window)
    $target = $s_blinkx['target'];
    
}
        ?>
        <h3 class="s_heading"><?php echo $s_heading; ?></h3>
        <div class="s_para"><?php echo $s_description; ?></div>
        <!-- <button href="<?php echo $s_button_url; ?>"><?php echo $s_button_url; ?></button> -->
        <?php
        // Output the link
    echo '<a class="s_button" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
        </div>
    </div>
</div>

<!-- Start Third Section -->
<div id="t_section" class="content-area">
    <div class="row">

        <div class="t_leftcol">
        <?php

        $t_heading = get_field('third_heading');
        // var_dump($t_heading); // Output the value to see what's retrieved
        $t_description = get_field('third_description');
        $t_leftbullet = get_field('left_bullet_points'); // Output the value left bullet points
        $t_rightbullet = get_field('right_bullet_points'); // Output the value right bullet points
        // $S_button_url = get_field('second_button');
        $t_link = get_field('call_today_heading'); // Replace 'link_field' with the name of your ACF link field

if ($t_link) {
    $url = $t_link['url']; // Get the URL
    $label = $t_link['title']; // Get the link text (label)
    
    // You can also get the target (e.g., _blank for opening in a new tab/window)
    $target = $t_link['target'];
    
}
        ?>
        <h3 class="t_heading"><?php echo $t_heading; ?></h3>
        <div class="t_para third"><?php echo $t_description; ?></div>
        <div class="bulletpoints">
            <div class="leftbullet"><?php echo $t_leftbullet; ?></div>
            <div class="rightbullet"><?php echo $t_rightbullet; ?></div>
        </div>
        <div class="tellink">
       <?php // Output the link
        echo '<a class="tel_link" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
        </div>
        </div>
        <div class="t_rightcol">
        <?php $t_img = get_field('third_section_image'); ?>
        <img class="third_img img-responsive" src="<?php echo $t_img['url']; ?>" alt="<?php echo $t_img['alt']; ?>">
        </div>
    </div>
</div>
<!-- End Third Section -->
<!-- Start Fourth Section -->
<div id="frt_section">
    <!-- Fourth Left Column -->
    <div class="frt_left">
    <?php $frt_img = get_field('f_section_image'); ?>
        <img class="forth_img" src="<?php echo $frt_img['url']; ?>" alt="<?php echo $frt_img['alt']; ?>">
    </div>
    <!-- Fourth Right Column -->
    <div class="frt_right">
        <?php
        $frt_heading = get_field('fourth_heading');

        // First Image/Icon Group
            $frtgroup_img = get_field('first_iconimage'); 
            // var_dump($frtgroup_img); // Output the value to see what's retrieved
            $frtgroup_heading = get_field('first_group_heading');
            $frtgroup_description = get_field('first_group_description');

        // Second Image/Icon Group
            $frtg2_img = get_field('second_iconimage'); 
            $frtg2_heading = get_field('second_group_heading');
            $frtg2_description = get_field('second_group_description');

        // Third Image/Icon Group
            $frtg3_img = get_field('third_iconimage'); 
            $frtg3_heading = get_field('Third_group_heading');
            $frtg3_description = get_field('third_group_description');
        // $t_leftbullet = get_field('left_bullet_points'); // Output the value left bullet points
        // $t_rightbullet = get_field('right_bullet_points'); // Output the value right bullet points
        
        ?>
        <h3 class="ftt_heading"><?php echo $frt_heading; ?></h3>
        
        <!-- First Image/Icon Group -->
        <div class="fii">
            <div class="left_fii">
            <img class="forth1_img" src="<?php echo $frtgroup_img['url']; ?>" alt="<?php echo $frtgroup_img['alt']; ?>">
                
            </div>
            <div class="right_fii">
                <h4 class="frt_heading"><?php echo $frtgroup_heading; ?></h4>
                <div class="frt_desc"><?php echo $frtgroup_description; ?></div>
            </div>
        </div>
        <!-- Second Image/Icon Group -->
        <div class="sii">
            <div class="left_sii">
                <img class="forth2_img" src="<?php echo $frtg2_img['url']; ?>" alt="<?php echo $frtg2_img['alt']; ?>">
            </div>
            <div class="right_sii">
                <h4 class="frt_heading"><?php echo $frtg2_heading; ?></h4>
                <div class="frt_desc"><?php echo $frtg2_description; ?></div>
            </div>
        </div>
        <!-- Third Image/Icon Group -->
        <div class="tii">
            <div class="left_tii">
                <img class="forth1_img" src="<?php echo $frtg3_img['url']; ?>" alt="<?php echo $frtg3_img['alt']; ?>">
            </div>
            <div class="right_tii">
                <h4 class="frt_heading"><?php echo $frtg3_heading; ?></h4>
                <div class="frt_desc"><?php echo $frtg3_description; ?></div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Fourth Section -->

<!-- Start Fifth Section -->
<div id="fifth_section">
<!-- Fifth Left Column -->
<div class="fifth_leftcol">
        <?php
        $fifth_heading = get_field('fifth_heading'); 
        $fifth_description = get_field('fifth_description');
        ?>
        <h3 class="fifth_heading"><?php echo $fifth_heading; ?></h3>
        <div class="fifth_desc"><?php echo $fifth_description; ?></div>
</div>
<!-- Fifth Right Column -->
<div class="fifth_rightcol">
<?php
$form_shortcode = '[gravityform id="1" title="true"]'; // Replace "1" with your desired form ID
echo do_shortcode($form_shortcode);
?>

</div>
</div>
<!-- End Fifth Section -->


<!-- Start Sixth/Testimonial Section -->
<div id="sixth_section">

<?php
$title_heading = get_field('title_heading'); 
?> <h2 class="mainheading"><?php echo $title_heading; ?></h2>
<?php
// Assuming 'testimonials' is the name of your Repeater field

// if ($testimonials) {
//     echo '<div class="testimonial-carousel">';
//     foreach ($testimonials as $testimonial) {
//         $name = $testimonial['testimonial_name'];
//         $location = $testimonial['testimonial_location'];
//         // $company = $testimonial['company'];
//         $testimonial_text = $testimonial['testimonial_content'];
//         // $profile_picture = $testimonial['profile_picture'];

//         echo '<div class="testimonial">';
//         echo '<div class="testimonial-content">';
//         echo '<p>' . $testimonial_text . '</p>';
//         echo '</div>';
//         echo '<div class="testimonial-info">';
//         // echo '<img src="' . $profile_picture['url'] . '" alt="' . $name . '">';
//         echo '<h4>' . $name . '</h4>';
//         echo '<p>' . $location . '</p>';
//         echo '</div>';
//         echo '</div>';
//     }
//     echo '</div>';
// }
?>
<div class="test_row">
<div class="col1">
    <div class="t_content"><?php $testimonial_content = get_field('testimonial_content');?>
   
    <?php echo $testimonial_content; ?></div>

    <div class="t_name"><?php $testimonial_name = get_field('testimonial_name');
    echo $testimonial_name; ?></div>

    <div class="t_location"><?php $testimonial_location = get_field('testimonial_location');
    echo $testimonial_location;?></div>
</div>
<div class="col2">
    <div class="t_content"><?php $testimonial_content_s = get_field('testimonial_content_s');
    echo $testimonial_content_s;?></div>
    <div class="t_name"><?php $testimonial_name_s = get_field('testimonial_name_s');
    echo $testimonial_name_s;?></div>
    <div class="t_location"><?php $testimonial_location_s = get_field('testimonial_location_s');
    echo $testimonial_location_s;?></div>
</div>
<div class="col3">
    <div class="t_content"><?php $testimonial_content_t = get_field('testimonial_content_t');
    echo $testimonial_content_t;?></div>
    <div class="t_name"><?php $testimonial_name_t = get_field('testimonial_name_t');
    echo $testimonial_name_t;?></div>
    <div class="t_location"><?php $testimonial_location_t = get_field('testimonial_location_t');
    echo $testimonial_location_t;?></div>
</div>
</div>
</div>
<!-- End Sixth Section -->
<!-- Start Seventh Section -->
<div id="seventh_section">
    <div class="main_row">
        <div class="leftcol">
        <?php $sev_img = get_field('s_section_image'); ?>
        <img class="sev_img" src="<?php echo $sev_img['url']; ?>" alt="<?php echo $sev_img['alt']; ?>">
        </div>
        <div class="rightcol">
        <?php
        $sev_heading = get_field('seventh_section_heading'); 
    ?> <h3 class="sevheading"><?php echo $sev_heading; ?></h3>
<?php
// if (have_rows('faq')) {
//     while (have_rows('faq')) {
//         the_row('faq');
//         $question = get_sub_field('question');
//         $answer = get_sub_field('answer');
//         // Output the subfield value as needed
//         echo $question, $answer;
//     }
// }

if (have_rows('faq')) {
    while (have_rows('faq')) {
        the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer');

        // Output the question and answer
        echo '<div class="faq-item">';
        echo '<h2 class="question accordion-button">' . esc_html($question) . '</h2>';
        echo '<div  class="faq-answer">' . $answer . '</div>';
        echo '</div>';

        // Output the question and answer
        // echo '<div class="faq-item accordion" id="accordionExample">';
        // echo '<div class="accordion-item">';
        // echo '<h2 class="accordion-header">';
        // echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">' . esc_html($question) . '</button>';
        // echo '</h2>';
        // echo '<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">';
        // echo '<div class="faq-answer accordion-body ">' . $answer . '</div>';
        // echo '</div>';
        // echo '</div>';
        // echo '</div>';
    }
}
?>

</div>
</div>
</div>
<!-- End Seventh Section -->
<!-- Start Eight (Team) Section -->
<div id="eight_section">
<?php $team_title = get_field('title_team_section'); 
            ?> <h3 class="teamtitle"><?php echo $team_title; ?></h3>
    <div class="team_row">
        <div class="fcol">
            <?php $team1_img = get_field('t_image_one'); ?>
            <img class="team_img" src="<?php echo $team1_img['url']; ?>" alt="<?php echo $team1_img['alt']; ?>">
            <?php $team1_name = get_field('one_t_name'); 
            ?> <h4 class="teamname"><?php echo $team1_name; ?></h4>
            <?php $team1_post = get_field('sone_t_post'); 
            ?> <h5 class="teampost"><?php echo $team1_post; ?></h5>
        </div>
        <div class="scol">
            <?php $team2_img = get_field('sec_t_image'); ?>
            <img class="team_img" src="<?php echo $team2_img['url']; ?>" alt="<?php echo $team2_img['alt']; ?>">
            <?php $team2_name = get_field('sec_t_name'); 
            ?> <h4 class="teamname"><?php echo $team2_name; ?></h4>
            <?php $team2_post = get_field('sec_t_post'); 
            ?> <h5 class="teampost"><?php echo $team2_post; ?></h5>
        </div>
        <div class="tcol">
        <?php $team3_img = get_field('third_t_image'); ?>
            <img class="team_img" src="<?php echo $team3_img['url']; ?>" alt="<?php echo $team3_img['alt']; ?>">
            <?php $team3_name = get_field('third_t_name'); 
            ?> <h4 class="teamname"><?php echo $team3_name; ?></h4>
            <?php $team3_post = get_field('third_t_post'); 
            ?> <h5 class="teampost"><?php echo $team3_post; ?></h5>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
<!-- </body>
</html> -->