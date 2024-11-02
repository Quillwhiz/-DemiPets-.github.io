		<!DOCTYPE html>
		<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="https://www.marapets.com/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="https://www.marapets.com/favicon.ico" type="image/vnd.microsoft.icon">   
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>MaraPets - Login</title>
		<meta name='Description' content='MaraPets is a free virtual pet site with free flash games and dress up games.'><meta name='Keywords' content='games, virtual pets, pet games, html5 games, pets, dress up games, free flash games, virtual pet'>  	<link href="https://www.marapets.com/gamesjs/jqueryui.css" rel="stylesheet" type="text/css">
	<link href='https://www.marapets.com/maratalk/animate.min.css' rel='stylesheet' type='text/css'>
	<link href="https://www.marapets.com/maincss97.css" rel="stylesheet" type="text/css">
	<link href="https://www.marapets.com/tooltipster.css" rel="stylesheet" type="text/css">
	
	<style>
    body {

background: #423f33 url(https://images.marapets.com/decade/2017_autumn_night.jpg) no-repeat center top;
}
</style>
<script type="text/javascript" src="https://www.marapets.com//gamesjs/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="https://www.marapets.com//gamesjs/jquery-ui-1.13.3.min.js"></script>
<style>
@media (min-width: 1150px) {
.ad-container{
position: relative;
left:-260px;
width:970px;
height:90px;
overflow:visible;
z-index:9999999999999999999999999;
display:flex;
justify-content:flex-end;
}
}
@media (max-width: 600px) { 
.each-link-min {
	flex-basis:49%;	
}
.pet_showone {
	flex-wrap: wrap;
}
.petwidth_one img {
	max-width:100%;
	height:auto;
}
.petwidth_one {
	min-width:150px;
	width:150px;
	max-width:150px;
}

}

@media (max-width: 1002px) { 
.each-link-min {
	flex-basis:32%;	
}
.top-wrapping {
	width:845px;
}
header{
	width:845px;
}
.marapetsmax {
	width:845px;
}
.marapetsend {
	width:845px;
}
.verytoptext {
	font-size:0.917rem;
}
.mara-block {
	width:100%;
	height:70px !important;
}
.mara-container{
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
	justify-content:center;
	align-items:flex-start;
	margin:0 auto;
	padding:0;
	border:0;
	position:relative;
	width:845px;
	height:90px;
	z-index:1000;
	overflow:visible;
}
.ad-container{
  display: flex;
	justify-content:flex-end;
	position: relative;
	width:728px;
	height:90px;
	margin:0;
	padding:0;
	border:0;
	left:0;
	overflow:visible;
	z-index:9999999999999999999999999;
	flex-grow:1;
}
.top-nav-menu {
	margin-top:59px;
	width:845px;
	background:#FFFFFF;
	border-radius:12px;
	height:28px;
	margin-bottom:40px;
}
.top-nav-menu > ul{
	list-style:none;
	width:845px;
}
.maralayout.sitecontent {
  width: 740px;
  max-width:740px;
  overflow:hidden;
	position: absolute;
  left:103px;
}
.maralayoutmiddle {
  background-color:#FFF;
  min-height:670px;
  min-width:734px;
  max-width:734px;
  border-radius: 8px;
  margin: 0;
  padding:6px 3px;
  float:left;
}	
.verytoptext {
	font-size:0.917rem;
}
.flex-left {
	padding-left:4px;	
}
.flex-right {
	padding-right:4px;	
}
.tree-search{
 display:block;
 width:100px;
 max-width:100px;
 margin:1px auto;
}
.tree-search-input, .tree-search input[type=text]{
  float:left;	
  width: 100px;
  max-width:100px;
  height:25px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;    
	box-sizing: border-box;
  border: 1px solid #333333;
  border-radius: 10px;
  font-size: 0.917rem; font-family:verdana,arial,helvetica,sans-serif; text-decoration:none;
  background-color: white;
  background-image: url('https://images.marapets.com/sitesearch.png');
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  opacity:0.9;
  padding: 2px 10px 2px 25px;
}
.tree-search input[type=text]:focus {
  width: 100%;
}
.tree-search-shield {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  max-width:103px;
  width:103px;
    flex-direction: row;
	flex-wrap: nowrap;
	justify-content:center;
	align-items:center;
}
.tree-search-shield2 img {
	width:35px;
	height:auto;
}
.tree-search-shield3 img {
	width:17px;
	height:auto;
}
.reminder-container {
  display: flex;
	justify-content:center;
    min-width:115px;
    max-height:80px;
    padding:2px;
}
.sitetemplate_reminders {
 position:relative;
 z-index: 999998;
 margin:0;
 border-radius: 8px;
  width:115px;
    max-height:80px;
}
.sitetemplate_reminders .currencytext img {
	display:none;	
}
.sitetemplate_reminders .verytoptext {
	  font-size:0.877rem;
}
.search-box-menu {
	display:none;	
}

}

@media all and (orientation:portrait) and (max-width: 400px), (max-width: 400px) and (max-aspect-ratio: 13/9) { 
.mobilesearch {
 display:block;
 position:absolute;
 z-index: 999998;
 right:6px;
 top:58px;
 margin:0;
}
.sitetemplate_mobilesearch {
  line-height:13px;
  position:absolute;
  background-color:#FFF;
  width:105px;
    max-width:105px;
 max-height:60px;
  border-radius: 10px;
  padding:6px;
  text-align:center;
  overflow:hidden;
 z-index: 999998;
 justify-content: space-around;
  justify-content: space-evenly;
  align-items: center;
  align-content: center;
 right:0;
 top:0;
 margin:0;
}
.sitetemplate_mobilesearch-input, .sitetemplate_mobilesearch input[type=text]{
  float:left;	
  width: 95px;
  max-width:95px;
  height:25px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;    
	box-sizing: border-box;
  border: 1px solid #FFF;
  border-radius: 10px;
  font-size: 16px; font-family:verdana,arial,helvetica,sans-serif; text-decoration:none;
  background-color: white;
  background-image: url('https://images.marapets.com/sitesearch.png');
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  opacity:0.8;
  padding: 2px 10px 2px 25px;
}
.sitetemplate_mobilesearch input[type=text]:focus {
  width: 100%;
}
}

@media all and (orientation:portrait) and (min-width: 400px) and (max-width: 845px), (min-width: 400px) and (max-width: 845px) and (max-aspect-ratio: 13/9) { 
.tabletsearch {
 display:block;
 position:absolute;
 z-index: 999998;
 right:0;
 top:55px;
 margin:0;
}
.tabletsearch-input, .tabletsearch input[type=text]{
  float:left;	
  width: 95px;
  max-width:95px;
  height:25px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;    
	box-sizing: border-box;
  border: 1px solid #FFF;
  border-radius: 10px;
  font-size: 16px; font-family:verdana,arial,helvetica,sans-serif; text-decoration:none;
  background-color: white;
  background-image: url('https://images.marapets.com/sitesearch.png');
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  opacity:0.8;
  padding: 2px 10px 2px 25px;
}
.tabletsearch input[type=text]:focus {
  width: 100%;
}
}



@media all and (orientation:portrait) and (max-width: 845px), (max-width: 845px) and (max-aspect-ratio: 13/9) { 
.eachdollhere {
	width:16%;
	max-width:16%;
}
.switchtodesktop {
	display:block;
}
.sitetemplate_reminders {
 position:absolute;
 z-index: 999998;
 right:0;
 top:0;
 max-height:60px;
 margin:0;
}
.hideonmobile {
	display:none;
}
.hideondesktop {
	display:block;
}
.nav_mobile_hide2 {
	display:none;
}
.nav_mobile_hide3 {
	display:none;
}
.nav_mobile_hide4 {
	display:none;
}
.nav_mobile_hide5 {
	display:none;
}
.mobile_btmbuttons {
	margin-bottom:5px;
	padding:0;
}
.randomeventsbox {
	margin-bottom:0;
}
.pets_show_one {
	max-width:98%;
}
.top-heading {
	display:none;	
}
.mara-block {
	display:none;	
}
.leftbar {
	display:none;	
}
.top-nav-menu {
	display:none;	
}
.googlead {
	display:none;	
}
.ianonly {
	display:none;	
}
.exploremap_vtop {
	display:none;	
}
.exploremap_top {
	padding:0;
	margin:0;
}
.maralayoutmiddle {
 box-sizing: border-box;
  background-color:#FFF;
  min-height:670px;
  min-width:100%;
  width:100%;
  max-width: 100%;
  margin: 0;
  padding: 5px 3px;
  float:left;
}	
.maralayout.sitecontent {
  min-width:100%;
  width:100%;
  max-width: 100%;
  border: 0;
  margin: 0;
  padding: 0;
  position: absolute;
  left:0;
  top:87px;
  display: inline-block;
}
.friendsbackground, .darkerbackground, .maralayoutmiddle {
	border:0;
    border-radius: 0;
}
.marapetsmax {
  width: 100%;
  max-width: 100%;
  min-width: 100%;
  margin:0;	
}
.marapetsend {
  width: 100%;
  max-width: 100%;
  min-width: 100%;
  margin:0;	
}
.mobile_sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index:999999999999999999999999;
  top: 0;
  left: 0;
  overflow: hidden;
  transition: 0.5s;
  display:block;
  background: #E8E8E8 url(https://images.marapets.com/decade/mobile_autumn_night.png) no-repeat center top;
  border-right:3px solid #FFFFFF;
}
.mobile_sidebar_signs {
  padding: 0px 35px 0px 140px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.mobile_sidebar_signs img {
	margin:0;
	padding:0;
}
.mobile_sidebar2 {
  height: 100%;
  width: 0;
  position: fixed;
  z-index:999999999999999999999999;
  top: 0;
  left: 0;
  overflow: hidden;
  transition: 0.5s;
  display:block;
  background: #E8E8E8;
  border-right:3px solid #FFFFFF;
  vertical-align:middle;
}
.mobileheader {
	width:100%;
	float:left;
	height:85px;
	display:inline-block;
    background-image: url(https://images.marapets.com/decade/mobile_headerbg.png);
	background-repeat: repeat;
	background-position: left top;
    border-bottom:2px solid #423f33;
}
body {
background-size: cover;
}
.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #E8E8E8;
  color: #000;
  padding: 10px 15px;
  border: none;
}
.mobile_bottombar {
  overflow: visible;
  position: fixed;
  bottom: 0;
  z-index:999999999999999999999999;
  min-width: 100%;
  width: 100%;
  max-width: 100%;
  height:75px;
  max-height:75px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;    
	box-sizing: border-box;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  flex-wrap: nowrap;
  flex-direction: row;
  padding-left:2px;
  padding-right:1px;
  margin:0 auto;
  background: url(https://images.marapets.com/mobile_bottombg4.png) repeat-x left bottom;
}
.mobile_bottombar_doll {
  width: 75px;
  max-width: 75px;
  height:75px;
  max-height:75px;
  flex:none;
}
.verytoptext {
	font-size:1rem;
}
.mobile_bottombar_eachicon {
  max-width:100%;
  height:auto;
}
.mobile_bottombar_treeicon {
	border:2px solid #FFFFFF;
	border-radius: 50%;
	height:50px;
	width:50px;
    background: #FFFFFF;
}
.mobile_bottombar_tree {
	padding-bottom:5px;
}
.mySidebarLogo {
  position: absolute;
  top:1px;
  left:3px;
}
.pages_search input {
	padding:3px 8px;
	width:20px;
}
.flex-buttons {
	padding-top:2px;	
	padding-bottom:3px;	
}
}

@media all and (orientation:portrait) and (max-width: 501px), (max-width: 501px) and (max-aspect-ratio: 13/9) { 
ul.pagination input {
	font-size:16px; 
}
.pages_search input {
	font-size:16px; 
}
.copyToClipboard input {
	font-size:1rem;
}
	
.form-control,input[type=text],input[type=password],input[type=email],input[type=number],input[type=tel],input[type=url],select,textarea {
	font-size: 14px;
}

.form-control.focus,.form-control:focus,input[type=text].focus,input[type=text]:focus,input[type=password].focus,input[type=password]:focus,input[type=email].focus,input[type=email]:focus,input[type=number].focus,input[type=number]:focus,input[type=tel].focus,input[type=tel]:focus,input[type=url].focus,input[type=url]:focus,select.focus,select:focus,textarea.focus,textarea:focus {
	font-size: 14px;
}
.sitepages_normal {
	display:none;	
}
.sitepages_mobile {
	display:block;	
}
.mainfeature_npc {
    flex-direction: column;
}
.mainfeature_npc2 {
    flex-direction: column;
}
.mainfeature_npc3 {
    flex-direction: column;
}
.bigger, .huge {
	font-size:1.167rem;
}
.more {
	font-size:1rem;
}


.eachfeature_box {
	width:95%;
    flex-direction: column;
	align-items:center;
}
.itemwidth {
	max-width:25%;
	min-width:25%;
	width:25%;
	padding-bottom:15px;
}
.width25 {
	max-width:33%;
}
.fixed25 {
	width:50%;
	max-width:50%;
}
.flex-returnto {
   background-color:#FFF;
   border: 2px solid #FFF;
   border-radius: 8px;
   width:100%;
   margin:6px auto;
}
.mobile-returnto {
	min-width:95px;
	width:95px;
}
.suggestbox {
	min-width:70px;
	width:70px;
	max-width:95px;
	min-height:75px;
	height:75px;
	max-height:110px;
	font-size:0.917rem;
}
.suggest_left {
	display:none;	
}
.suggest_right {
	display:block;	
}
.eachgame_box {
	min-width:96%;
	width:97%;
	max-width:98%;
}
.flex-table17 {
	justify-content:center;
}
.fixed50 {
	min-width:96%;
	width:97%;
	max-width:98%;
}
}

@media all and (orientation:portrait) and (max-width: 600px), (max-width: 600px) and (max-aspect-ratio: 13/9) { 
.pets_show_each {
	min-width:33%;
	width:33%;
}
}
@media all and (orientation:portrait) and (max-width: 550px), (max-width: 550px) and (max-aspect-ratio: 13/9) { 
.eachdollhere {
	width:24%;
	max-width:24%;
}
}

@media all and (orientation:portrait) and (max-width: 470px), (max-width: 470px) and (max-aspect-ratio: 13/9) { 
.flex50 {
	min-width:96%;
	width:97%;
	max-width:98%;
}
.pets_show_each {
	min-width:50%;
	width:50%;
}

}
@media all and (orientation:portrait) and (max-width: 400px), (max-width: 400px) and (max-aspect-ratio: 13/9) { 
.itemwidth {
	max-width:33%;
	min-width:33%;
	width:33%;
	padding-bottom:15px;
}
.pages_all {
	flex-wrap: wrap;
}
.pages_each {
	padding-bottom: 3px;
	margin-bottom: 6px;
}
}
@media (min-width: 360px) { 
	.mobile_bottombar_treeicon {
		border:3px solid #FFFFFF;
		border-radius: 50%;
		height:55px;
		width:55px;
	}
}
@media (min-width: 370px) { 
	.mobile_bottombar_treeicon {
		border:3px solid #FFFFFF;
		border-radius: 50%;
		height:60px;
		width:60px;
	}
}
@media all and (orientation:portrait) and (min-width: 420px) { 
.nav_mobile_hide2 {
  display: flex;
}
}
@media all and (orientation:portrait) and (min-width: 465px) { 
.nav_mobile_hide3 {
  display: flex;
}
}
@media all and (orientation:portrait) and (min-width: 505px) { 
.nav_mobile_hide4 {
  display: flex;
}
}
@media all and (orientation:portrait) and (min-width: 540px) {  
.nav_mobile_hide5 {
  display: flex;
}
}
@media all and (orientation:portrait) and (min-width: 570px) { 
.nav_mobile_hide5 {
  display: flex;
  flex:1;
}
}
@media all and (orientation:portrait) and (min-width: 600px) 
{ 
.mobile_bottombar_each {
  padding-left:1px;
  padding-right:1px;
}
}
@media all and (orientation:portrait) and (min-width: 650px) 
{ 
.mobile_bottombar_each {
  padding-left:2px;
  padding-right:2px;
}
}
@media all and (orientation:portrait) and (min-width: 700px) 
{ 
.mobile_bottombar_each {
  padding-left:3px;
  padding-right:3px;
}
}
@media all and (orientation:portrait) and (min-height:650px) AND (min-width:600px){
.mobile_bottombar_doll {
	height:90px;
	width:90px;
	max-height:90px;
	max-width:90px;
}
.mobile_bottombar_doll .smalldoll{
	float:left;
	margin:0;
	overflow:hidden;
	border:3px solid #FFFFFF;
	border-radius: 50%;
	height:90px;
	width:90px;
}
.mobile_sidebar2 {
  padding-bottom: 90px;
}
.mobile_bottombar_doll .smalldoll img
{
	width:240px;
	height:280px;
	margin:-35px -65px -110px -65px;
}
.mobile_bottombar_treeicon {
	border:3px solid #FFFFFF;
	border-radius: 50%;
	height:70px;
	width:70px;
}

}
@media all and (orientation:portrait) and (min-width: 560px) and (min-height: 450px) and (max-width: 845px) { 
.tabletsearch {
 display:block;
 position:absolute;
 z-index: 999998;
 right:0;
 top:68px;
 margin:0;
}
.tabletsearch-input, .tabletsearch input[type=text]{
  float:left;	
  width: 95px;
  max-width:95px;
  height:25px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;    
	box-sizing: border-box;
  border: 1px solid #FFF;
  border-radius: 10px;
  font-size: 16px; font-family:verdana,arial,helvetica,sans-serif; text-decoration:none;
  background-color: white;
  background-image: url('https://images.marapets.com/sitesearch.png');
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  opacity:0.8;
  padding: 2px 10px 2px 25px;
}
.mobileheader {
	width:100%;
	float:left;
	height:100px;
	display:inline-block;
    background-image: url(https://images.marapets.com/decade/tablet_headerbg.png);
	background-repeat: repeat;
	background-position: left top;
}
body {
background-size: cover;
}
.maralayout.sitecontent {
  top:97px;
}
.mobileheader_logo {
	margin-top:10px;
}
.mobile_mail {
	margin-top:10px;
}
.verytoptext {
	font-size:1rem;
}

.reminder-container {
    min-width:105px;
    max-width:105px;
    max-height:100px;
}
.sitetemplate_reminders {
  width:105px;
    max-width:105px;
    max-height:100px;
}
.tablet_progress {
	display:flex;	
	width:40px;
	min-width:40px;
	padding-left:3px;
}
.tablet_progress_shield {
	align-self:flex-end;
	margin-bottom:-10px;
}
.tablet_progress_shield img {
	width:38px;
	height:38px;
}
.mobile_sidebar_signs {
  padding: 58px 35px 0px 140px;
}
.tablet_progress_bars img {
	width:12px;
	height:24px;
}
}
@media (max-width: 600px) { 
.each-link-min {
	flex-basis:49%;	
}
}
@media all and (orientation:portrait) and (min-height:665px) AND (min-width:350px){
.mobile_sidebar_signs {
  padding: 0px 35px 0px 140px;
}
.mobile_sidebar2 {
  padding-top: 35px;
}
.mobile_sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index:999999999999999999999999;
  top: 85px;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  display:block;
  background: #FFF url(https://images.marapets.com/decade/mobile_autumn_night.png) no-repeat center top;
  border-right:3px solid #FFF;
}
.mySidebarLogo {
  display:none;
}
}
@media all and (orientation:portrait) and (min-height:665px) AND (min-width:550px){
 .mobilemenubox3 {
	 line-height:90px;
 }
.mobile_sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index:999999999999999999999999;
  top: 100px;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  display:block;
  background: #FFF url(https://images.marapets.com/decade/mobile_autumn_night.png) no-repeat center top;
  border-right:3px solid #FFF;
}
.mySidebarLogo {
  display:none;
}
}
@media all and (orientation:portrait) and (max-width: 450px) { 
.mobile_layoutmsg {
	display:block;	
	margin-bottom:5px;
}
}
@media (max-width: 325px) { 
body {
	font-size:10px;
}		
.mobile_bottombar_doll .smalldoll img
{
	margin-left:-42px;
}
.mobile_bottombar_doll {
	min-height:60px;
	min-width:50px;
	height:60px;
	width:50px;
}
.mobile_bottombar_doll .smalldoll{
	float:left;
	margin:0;
	overflow:hidden;
	border:2px solid #FFFFFF;
	border-radius: 50%;
	height:45px;
	width:45px;
}
.nav_mobile_hide1 {
	display:none;
}
.currencytext img {
	display:none;
}
}

@media all and (orientation:portrait) and (min-width: 450px) and (max-width: 845px) { 
.tablet_layoutmsg{
	display:block;	
	margin-bottom:5px;
}
.mobile_layoutmsg {
	display:none;
}
}

@media (max-width: 400px) { 

.petwidth_one .text-left {
	font-size:0.917rem;
}
.petwidth_one .text-right {
	font-size:0.917rem;
}
.petbar {
	width:50px;
	max-width:50px;
}
.pets_stats_icon img {
	width:20px;
	height:20px;
	max-width:20px;
	max-height:20px;
}
.flex-table2 {
	padding:1px;
}
}

@media (max-width: 380px) { 
.petwidth_one {
	min-width:140px;
	width:140px;
	max-width:140px;
}
.failbox, .comebackbox, .questdaybox, .missionsbox, .progressbox, .progressquote, .progressquote2, .eventbox, .halloweenbox, .gbbox, .mpbox {
	min-width:95%;
	width:95%;
}
}
@media (max-width: 370px) { 
.petwidth_one {
	min-width:135px;
	width:135px;
	max-width:135px;
}
}
@media (max-width: 360px) { 
.flex-mainbtns img {
	width:64px;
	height:39px;
}
.petwidth_one {
	min-width:130px;
	width:130px;
	max-width:130px;
}
}
@media (max-width: 350px) { 
.petwidth_one {
	min-width:125px;
	width:125px;
	max-width:125px;
}
}
@media (max-width: 340px) { 
.petwidth_one {
	min-width:120px;
	width:120px;
	max-width:120px;
}
}
@media (max-width: 330px) { 
.petwidth_one {
	min-width:120px;
	width:120px;
	max-width:120px;
}
.petwidth {
	min-width:125px;
	width:125px;
	max-width:125px;
}
.specialpet, .defaultpet {
	width:125px;
	height:125px;
	max-width:125px;
   	max-height:125px;
}
.petwidth_one .text-left {
	font-size:0.833rem;
}
.petwidth_one .text-right {
	font-size:0.833rem;
}
.fairyreward_box {
  	min-width:130px;
  	width:130px;
	max-width:130px;
	margin-bottom:10px;
	margin-left:2px;
	margin-right:2px;
}
}
</style>



<div id="mySidebar" class="mobile_sidebar">
<div class='mobile_sidebar_signs fixhtml5spacing'>
<a href='https://www.marapets.com/marapets.php'><img src='https://images.marapets.com/decade/pets.png'></a>

<a href='https://www.marapets.com/explore.php'><img src='https://images.marapets.com/decade/explore.png'></a>

<a href='arcade.php'><img src='https://images.marapets.com/decade/games.png'></a>

<a href='https://www.marapets.com/forums.php'><img src='https://images.marapets.com/decade/forums.png'></a>

<a href='https://www.marapets.com/dress_up_games.php'><img src='https://images.marapets.com/decade/dressup.png'></a>

<a href='https://www.marapets.com/clubs.php'><img src='https://images.marapets.com/decade/clubs.png'></a>

<a href='https://www.marapets.com/trades.php'><img src='https://images.marapets.com/decade/trades.png'></a>

<a href='https://www.marapets.com/auctions.php'><img src='https://images.marapets.com/decade/auctions.png'></a>

<a href='https://www.marapets.com/news.php'><img src='https://images.marapets.com/decade/news.png'></a>

<a href='https://www.marapets.com/battle.php'><img src='https://images.marapets.com/decade/battle.png'></a>

<a href='https://www.marapets.com/upgrades.php'><img src='https://images.marapets.com/decade/upgrades.png'></a>
</div>
<div class='mySidebarLogo'><a href='index.php'><img src=https://images.marapets.com/icons/mobile_logo3.png></a></div>

</div>


		

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("mobilebtmbtn").style.display = "none";
  document.getElementById("mobilebtmbtn_2").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("mobilebtmbtn").style.display = "block";
  document.getElementById("mobilebtmbtn_2").style.display = "none";
}
</script>

<style>
@media (max-width: 1002px) { 
.reminder-container {
    min-width:145px;
}
.sitetemplate_reminders {
  width:145px;
}
}
</style>		
			
</head>		
<body>
<div class='floatpricechecker' id='floatpricechecker'>
	<div class='showpricechecker' id='showpricechecker'> </div> 
</div>
<div id='dollpreviews' title='Wardrobe Preview'></div>
			<div class="top-heading">
			<div class="top-wrapping flex-table5">
    			<a class='flex-auto' href='https://www.marapets.com/register.php'><b class='same maragreen'>Sign Up</b></a>
       	 	<div class='flex-auto'>&nbsp;</div>
        		<a class='flex-auto' href='https://www.marapets.com/login.php'><b class='same alsotry'>Log In</b></a>
       		<div class='flex-double'> </div>
    			<a class='flex-double' href='online.php'><b class='same strong maragreen'>
    		779 Players Online</b></a>
    		<div class='flex-double'> </div>
            <a class='flex-double' href='https://www.marapets.com/calendar.php'><div id='servertime' class='same strong ghost itempadding'>16:57:20 MST</div></a>
            <div class='flex-double'> </div>
            <a class='flex-auto' href='https://www.marapets.com/register.php'><div class='currencytext text-right'><b class='same ghost'>Sign Up or Log In With:</b></div></a>
            <a class='flex-auto' href='https://www.marapets.com/facebook/index.php'><div class='currencytext text-right'><img 
            src='https://images.marapets.com/layout/1/fb.png'> <b class='same alsotry'>Facebook</b></div></a>
            <a class='flex-auto' href='https://www.marapets.com/google/index.php'><div class='currencytext text-right'><img 
            src='https://images.marapets.com/layout/google.png'> <b class='same createyellow'>Google</b></div></a>
			</div></div>
			<div class="mara-block">
	<div class="mara-container">
        <div class="reminder-container">
        	        </div>
    <div class="ad-container">
 					<style>
                .google_responsive_side
                {
                    display:none;
                }
                .google_responsivefooter {
                    display:none;
                }
                    .google_responsive_top {
                    width: 728px;
                    height: 90px;
                    display:inline-block;
                }
                .google_npc {
                    width:336px;
                    height:280px;
                    max-width: 350px;
                                max-height: 300px;
                    display:inline-block;
                }
                        .marapets_responsive_728 {
                    width: 320px;
                    height: 100px;
                    max-height: 250px;
                    display:inline-block;
                }
                @media all and (orientation:portrait) and (max-width: 400px) {
				.google_responsivefooter {
					display:block;
					width:350px;
					height:100px;
					max-width: 320px;
					max-height: 250px;
					display:inline-block;
				}
				.google_npc {
					width:350px;
					height:100px;
					max-width: 320px;
               
                        max-height: 100px; 					display:inline-block;
				}
			}
			@media all and (orientation:portrait) and (max-width: 320px) {
				.google_responsivefooter {
					display:block;
					width:320px;
					height:100px;
					max-width: 320px;
					max-height: 250px;
					display:inline-block;
				}
				.google_npc {
					width:320px;
					height:100px;
					max-width: 320px;
               
                        max-height: 100px; 					display:inline-block;
				}
			}          @media(min-width: 500px) {
				.marapets_responsive_728 {
					width: 468px;
					height: 60px;
					display:inline-block;
				}
			}
            @media(min-width: 800px) {
				.marapets_responsive_728 {
				width: 728px;
				height: 90px;
				display:inline-block;
				}
			}
			@media (min-width: 1150px)
			{
				.google_responsive_top {
				width: 728px;
				max-width: 970px;
				height: 90px;
				display:inline-block;
				}
			}
			@media (min-width: 1200px) {
										.google_responsive_side {
							width: 120px;
							max-width: 120px;
							height: 600px;
							display:inline-block;
						}
						.google_npc {
							display:none;
						}

										}
			@media (min-width: 1275px) {
										.google_responsive_side {
							width: 160px;
							max-width: 160px;
							height: 600px;
							display:inline-block;
						}
						.google_npc {
							display:none;
						}

										}
			@media (min-width: 1550px) {
										.google_responsive_side {
							width: 160px;
                            				max-width: 300px;
                           				height: 600px;
                            				max-height:1050px;
							display:inline-block;
						}


										}
            @media all and (orientation:portrait) and (max-width: 845px), (max-width: 440px)
			{
                .google_responsive_top {
					display:none;
				}
				.google_responsive_side {
					display:none;
				}
				.google_responsivefooter {
					display:inline-block;
					width:336px;
					height:280px;
					max-width: 350px;
					max-height: 300px;
				}
            }
       		</style>
        	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive Header -->
<ins class="adsbygoogle google_responsive_top"
     style="display:inline-block"
     data-ad-client="ca-pub-9036577952985266"
     data-ad-slot="5664475203"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
	</div>
</div>
<header>
<div class="top-nav-menu">
	<ul>
		<li>
        	<a href='https://www.marapets.com/index.php'><img src="https://images.marapets.com/layout/logo.png" alt="MaraPets Virtual Pets"></a>
        </li>
		<li class="mini-items mini-items-first-move">
<p><img src='https://images.marapets.com/layout/blankspot.gif' width='80' height='0'></p></li>
		<li class="tooltips-selections-menu first-tooltip-selection">
            <div id='cssmenu'><ul><li class='has-sub'><a href='https://www.marapets.com/goal_games.php' onMouseOver="image22.src='https://images.marapets.com/top/top_quests2.png';"
    onmouseout="image22.src='https://images.marapets.com/top/top_quests.png';"><strong class='layouttext'>Quests</strong><img name="image22" src='https://images.marapets.com/top/top_quests.png' alt=""></a><ul>
             <li><a href='https://www.marapets.com/quest_games.php'><img src="https://images.marapets.com/top/dropdwn_quests.png" alt=""><span class="big-text-menu">Quests</span></a></li>
             <li><a href='https://www.marapets.com/mission_games.php'><img src="https://images.marapets.com/top/dropdwn_missions.png" alt=""><span class="big-text-menu">Missions</span></a></li>
             <li><a href='https://www.marapets.com/goal_games.php'><img src="https://images.marapets.com/top/dropdwn_goals.png" alt=""><span class="big-text-menu">Goals</span></a></li>
             <li><a href='https://www.marapets.com/collecting_games.php'><img src="https://images.marapets.com/top/dropdwn_collections.png" alt=""><span class="big-text-menu">Collections</span></a></li>
             <li><a href='https://www.marapets.com/contest_games.php'><img src="https://images.marapets.com/top/dropdwn_contests.png" alt=""><span class="big-text-menu">Contests</span></a></li>
             <li><a href='https://www.marapets.com/reward_games.php'><img src="https://images.marapets.com/top/dropdwn_rewards.png" alt=""><span class="big-text-menu">Rewards</span></a></li>
             </ul></li></ul></div>
       </li>
		<li class="tooltips-selections-menu">
        	<div id='cssmenu'><ul><li class='has-sub'><a href='https://www.marapets.com/free_games.php'  onMouseOver="image21.src='https://images.marapets.com/top/top_missions2.png';"
onmouseout="image21.src='https://images.marapets.com/top/top_missions.png';"><strong class='layouttext'>Free Games</strong><img name="image21" src='https://images.marapets.com/top/top_missions.png' alt=""></a><ul>

         <li><a href='https://www.marapets.com/free_games.php'><img src="https://images.marapets.com/top/dropdwn_freegame.png" alt=""><span class="big-text-menu">Free Games</span></a></li>
         <li><a href='https://www.marapets.com/pay_games.php'><img src="https://images.marapets.com/top/dropdwn_pointstoplay.png" alt=""><span class="big-text-menu">Points to Play</span></a></li>
         <li><a href='https://www.marapets.com/pet_dailies.php'><img src="https://images.marapets.com/top/dropdwn_petdailies.png" alt=""><span class="big-text-menu">Pet Dailies</span></a></li></ul></li></ul></div>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/market.php' class="tooltip2" title="Items" onMouseOver="image12.src='https://images.marapets.com/top/top_items2.png';"
onmouseout="image12.src='https://images.marapets.com/top/top_items.png';"><strong class='layouttext'>Inventory</strong><img name="image12" src='https://images.marapets.com/top/top_items.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/shopping.php' class="tooltip2" title="Shops"  onMouseOver="image13.src='https://images.marapets.com/top/top_shops2.png';"
onmouseout="image13.src='https://images.marapets.com/top/top_shops.png';"><strong class='layouttext'>Shops</strong><img name="image13" src='https://images.marapets.com/top/top_shops.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/attic.php' class="tooltip2" title="Attic"  onMouseOver="image14.src='https://images.marapets.com/top/top_attic2.png';"
onmouseout="image14.src='https://images.marapets.com/top/top_attic.png';"><strong class='layouttext'>Attic</strong><img name="image14" src='https://images.marapets.com/top/top_attic.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/viewitems.php' class="tooltip2" title="Gallery"  onMouseOver="image18.src='https://images.marapets.com/top/top_gallery2.png';"
onmouseout="image18.src='https://images.marapets.com/top/top_gallery.png';"><strong class='layouttext'>Gallery</strong><img name="image18" src='https://images.marapets.com/top/top_gallery.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/wardrobe.php' class="tooltip2" title="Wardrobe"  onMouseOver="image16.src='https://images.marapets.com/top/top_wardrobe2.png';"
onmouseout="image16.src='https://images.marapets.com/top/top_wardrobe.png';"><strong class='layouttext'>Wardrobe</strong><img name="image16" src='https://images.marapets.com/top/top_wardrobe.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/shopsearch.php' class="tooltip2" title="Search"  onMouseOver="image17.src='https://images.marapets.com/top/top_search2.png';"
onmouseout="image17.src='https://images.marapets.com/top/top_search.png';"><strong class='layouttext'>Search</strong><img name="image17" src='https://images.marapets.com/top/top_search.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/currency.php' class="tooltip2" title="Currency"  onMouseOver="image19.src='https://images.marapets.com/top/top_currency2.png';"
onmouseout="image19.src='https://images.marapets.com/top/top_currency.png';"><strong class='layouttext'>Currency</strong><img name="image19" src='https://images.marapets.com/top/top_currency.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/community.php' class="tooltip2" title="Community"  onMouseOver="image20.src='https://images.marapets.com/top/top_community2.png';"
onmouseout="image20.src='https://images.marapets.com/top/top_community.png';"><strong class='layouttext'>Community</strong><img name="image20" src='https://images.marapets.com/top/top_community.png' alt=""></a>
        </li>
		<li class="tooltips-selections-menu2">
        	<a href='https://www.marapets.com/preferences.php' class="tooltip2" title="Settings"  onMouseOver="image15.src='https://images.marapets.com/top/top_goals2.png';"
onmouseout="image15.src='https://images.marapets.com/top/top_goals.png';"><strong class='layouttext'>Settings</strong><img name="image15" src='https://images.marapets.com/top/top_goals.png' alt=""></a>
        </li>
		<li class="search-box-menu">

<form action='https://www.marapets.com/satellite.php?type=items' method='POST'>
	<input class='search-box-menu' type='text' name='word' placeholder='Search..'></form></li>
	</ul>
</div>
</header>
<div class='marapetsmax'>
	<div class="maracontent">
		<div class='mobileheader'>
			
            <a href='https://www.marapets.com/index.php'><img src='https://images.marapets.com/icons/mobile_logo3.png' class='mobileheader_logo'></a>
		
		<style>
        .tablet_google {
            position:absolute;
            top:0;
            left:120px;
            z-index:99999999999999999;
        }
        @media all and (orientation:portrait) and (min-width: 600px) and (max-width: 580px) and (min-height: 450px) and (max-width: 845px) {
            .tablet_google {
            left:130px;
            }
        }
        @media all and (orientation:portrait) and (min-width: 720px) and (min-height: 450px) and (max-width: 845px) {
            .tablet_google {
            left:135px;
            }
        }
        </style>
        
		<div class='tablet_google'>
		
<style>
   .google_responsive_tabletheader { display:none; }

@media all and (orientation:portrait) and (min-width: 560px) and (min-height: 450px) and (max-width: 845px) {
	.google_responsive_tabletheader { width: 300px; height: 60px; max-height:80px; }
	}

@media all and (orientation:portrait) and (min-width: 580px) and (min-height: 450px) and (max-width: 845px) {
	.google_responsive_tabletheader { width: 320px; height: 60px; max-height:80px; }
	}
@media all and (orientation:portrait) and (min-width: 715px) and (min-height: 450px) and (max-width: 845px) {
	.google_responsive_tabletheader { width: 468px; height: 60px; max-height:80px; }
	}
 </style>		


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive Tablet Header -->
<ins class="adsbygoogle google_responsive_tabletheader"
     style="display:inline-block"
     data-ad-client="ca-pub-9036577952985266"
     data-ad-slot="8781471366"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>		</div>		
		<div class='mobile_mail'>
		                <div class='flex-table flex-grow'>
                    <div class='flex-grow petpadding'><a href='https://www.marapets.com/register.php'><b class='returnto'>Sign Up</b></a></div>
                    <div class='flex-grow petpadding'><a href='https://www.marapets.com/login.php'><b class='alsotry returnto'>Log In</b></a></div>
                     <div class='flex-grow petpadding' id='mobilebtmbtn'><a href='javascript:;' onclick="openNav()"><b class='returnto marapetsshield'>Explore</b></a></div>
                     <div class='flex-grow petpadding hidediv' id='mobilebtmbtn_2'><a href='javascript:;' onclick="closeNav()"><b class='returnto marapetsshield'>Explore</b></a></div>
                </div>
						</div>
		<div id='sitetemplate_remindersearch'>
					</div>
        <div class='tabletsearch'>
            <form action='https://www.marapets.com/satellite.php?type=items' method='POST'>
            <input class='tabletsearch-input' type='text' name='word' placeholder='Search'></form>
        </div>
        <div class='sitetemplate_mobilesearch' id='sitetemplate_mobilesearch'>
            <form action='https://www.marapets.com/satellite.php?type=items' method='POST'>
            <input class='sitetemplate_mobilesearch-input' type='text' name='word' placeholder='Search'></form>
        </div>        
        <div class='mobilesearch'>
			<div id='mobilesearch_open'><a href='javascript:;' onclick="openSearch()"><img src='https://images.marapets.com/sitesearch.png'></a></div>
			<div id='mobilesearch_close' class='mobilesearch_close'><a href='javascript:;' onclick="closeSearch()"><img src='https://images.marapets.com/sitesearch.png'></a></div>
		</div>
	</div>
    <div class="maralayout leftbar">
		<div class='tree-search'>
        	<form action='https://www.marapets.com/satellite.php?type=items' method='POST'>
        	<input class='tree-search-input' type='text' name='word' placeholder='Search..'></form>
		</div>

<a href='https://www.marapets.com/marapets.php' onMouseOver="image48.src='https://images.marapets.com/decade/pets2.png';"
onmouseout="image48.src='https://images.marapets.com/decade/pets.png';"><strong class='layouttext'>Pets</strong><img name="image48" src='https://images.marapets.com/decade/pets.png'></a>

<a href='https://www.marapets.com/explore.php' onMouseOver="image49.src='https://images.marapets.com/decade/explore2.png';"
onmouseout="image49.src='https://images.marapets.com/decade/explore.png';"><strong class='layouttext'>Explore</strong><img name="image49" src='https://images.marapets.com/decade/explore.png'></a>

<a href='arcade.php' onMouseOver="image50.src='https://images.marapets.com/decade/games2.png';"
onmouseout="image50.src='https://images.marapets.com/decade/games.png';"><strong class='layouttext'>Games</strong><img name="image50" src='https://images.marapets.com/decade/games.png'></a>

<a href='https://www.marapets.com/forums.php' onMouseOver="image51.src='https://images.marapets.com/decade/forums2.png';"
onmouseout="image51.src='https://images.marapets.com/decade/forums.png';"><strong class='layouttext'>Forums</strong><img name="image51" src='https://images.marapets.com/decade/forums.png'></a>

<a href='https://www.marapets.com/dress_up_games.php' onMouseOver="image52.src='https://images.marapets.com/decade/dressup2.png';"
onmouseout="image52.src='https://images.marapets.com/decade/dressup.png';"><strong class='layouttext'>Dress Up Games</strong><img name="image52" src='https://images.marapets.com/decade/dressup.png'></a>
<a href='https://www.marapets.com/clubs.php' onMouseOver="image53.src='https://images.marapets.com/decade/clubs2.png';"
onmouseout="image53.src='https://images.marapets.com/decade/clubs.png';"><strong class='layouttext'>Clubs</strong><img name="image53" src='https://images.marapets.com/decade/clubs.png'></a>

<a href='https://www.marapets.com/trades.php' onMouseOver="image54.src='https://images.marapets.com/decade/trades2.png';"
onmouseout="image54.src='https://images.marapets.com/decade/trades.png';"><strong class='layouttext'>Trades</strong><img name="image54" src='https://images.marapets.com/decade/trades.png'></a>

<a href='https://www.marapets.com/auctions.php' onMouseOver="image55.src='https://images.marapets.com/decade/auctions2.png';"
onmouseout="image55.src='https://images.marapets.com/decade/auctions.png';"><strong class='layouttext'>Auctions</strong><img name="image55" src='https://images.marapets.com/decade/auctions.png'></a>

<a href='https://www.marapets.com/news.php' onMouseOver="image56.src='https://images.marapets.com/decade/news2.png';"
onmouseout="image56.src='https://images.marapets.com/decade/news.png';"><strong class='layouttext'>News</strong><img name="image56" src='https://images.marapets.com/decade/news.png'></a>

<a href='https://www.marapets.com/battle.php' onMouseOver="image57.src='https://images.marapets.com/decade/battle2.png';"
onmouseout="image57.src='https://images.marapets.com/decade/battle.png';"><strong class='layouttext'>Battle</strong><img name="image57" src='https://images.marapets.com/decade/battle.png'></a>

<a href='https://www.marapets.com/upgrades.php' onMouseOver="image58.src='https://images.marapets.com/decade/upgrades2.png';"
onmouseout="image58.src='https://images.marapets.com/decade/upgrades.png';"><strong class='layouttext'>Account Upgrades</strong><img name="image58" src='https://images.marapets.com/decade/upgrades.png'></a>

    <div class='tree-search'>
        </div>
</div>
<div class="maralayout sitecontent">
	<div class='hiddenavatars_box' id='randomeventsbox_box'> </div>
	<div class='hiddenavatars_box' id='hiddenavatars_box'> </div>
 		<div class='randomeventsbox tablet_layoutmsg returnto btmpad6'>
		<div class='flex-table'>
		<div class='flex-middle text-left itempadding flex-grow'><b class='marapetsshield'>Marapets</b> is mobile friendly</div>
		<div class='flex-middle text-right itempadding flex-grow'>
						<a href='https://www.marapets.com/index.php?desktop=1'><b class='alsotry text-right'>Switch to Desktop Mode</b></a>
				        </div></div></div>
 		<div class='randomeventsbox mobile_layoutmsg btmpad6'>
        <div class='flex-table'>
        <div class='flex-middle text-left itempadding flex-grow'><b class='marapetsshield'>Marapets</b> is mobile friendly</div>
        <div class='flex-middle text-right itempadding flex-grow'>
		            <a href='https://www.marapets.com/index.php?desktop=1'><b class='alsotry text-right'>Switch to Desktop Mode</b></a>
        	</div></div></div><div class='maralayoutmiddle'>

	<script type = "text/javascript">
    $(document).ready(function(){
      $("#username").keyup(function()
	  {
		    var username = $("#username").val();
		  	$.ajax
		  	({
				url: "n6.php",
				type: 'POST',
				data: {'username':username},
				success: function(data) 
				{
					$("#displayedresults").html(data);
				}
        	});
        	return false;
      });

    });
	</script>

<style>
.login_box_mobile {
	display:none;	
}
@media (max-width: 375px){
.login_box_desktop {
	display:none;	
}
.login_box_mobile {
	display:block;	
}
}

</style>


<form method='post' ACTION='login.php'>
<div class='mainfeature_start'>

    <div class='mainfeature_npc2'>
        <div class='mainfeature_art2'>



		<a href='login.php'><img src='https://images.marapets.com/frontpage/Mara.png' style="max-width:100%;height:auto;" title='' alt='' /></a>

<BR />
<div class='login_box_mobile'>
<b class='bigger trades'>Did you link your account? Log In With...</b><BR />


<div class='middleit flex-table'>
    <div class='flex-buttons'><a href='facebook/index.php'>
    <img src=https://images.marapets.com/layout/1/fb.png> <b>Facebook</B></a></div>

    <div class='flex-buttons'><a href='google/index.php'>
    <img src=https://images.marapets.com/layout/google.png> <b>Google</B></a></div>

</div></div>


        </div>
        <div class='mainfeature_ad'>


<div class='middleit'>
<div class='progressquote2 flex-table8' style='min-width:300px'>

<div class='petpadding'><img src=https://images.marapets.com/icons/left-quote.svg width=35 height=35></div>

<div class='petpadding text-left'><b class='bigger'>Welcome Back!
<BR />
Looking to Sign In?</B>
<BR /><BR />
<div class='middleit'>
<span class='bigger'>Enter your username:</span>
<BR /><BR />
<input type='text' size='20' name='username' id="username" autocomplete="off"  class='more' value=''/>

<BR />
<div id="displayedresults"> </div>

<BR />

  <input type='submit' name='submit' value='Login to Marapets'  />

<BR /><BR />
<span class='bigger'>New to MaraPets?<br><a href='register.php'><b class='alsotry'>Sign Up</b></a></span>
<BR />

</div>

</div>

<div class='petpadding flex-bottom'><img src=https://images.marapets.com/icons/right-quote.svg width=35 height=35></div> </div>


</div>

        </div>




</div>

</div>
</FORM>


<div class='flex-table login_box_desktop'>

	<div class='flex-buttons'><b class='bigger trades'>Did you link your account? Log In With...</b></div>

    <div class='flex-buttons'><a href='facebook/index.php'>
    <img src=https://images.marapets.com/layout/1/fb.png> <b>Facebook</B></a></div>

    <div class='flex-buttons'><a href='google/index.php'>
    <img src=https://images.marapets.com/layout/google.png> <b>Google</B></a></div>

</div>


<BR />

    <div id='lostpassword' class='progressbox text-left'>
    
    <B class='bigger progress'>Forgot your Password?</B>
    <BR /><BR />
<form action='login.php?do=lost' method='post' name='LOGIN'>

<div class='middleit flex-table' id='lostpassword'>
    <div class='flex-buttons'><B>Username</b>: <input type='text' size='20' name='username' class='more' value=''/></div>
    <div class='flex-buttons'><input type='submit' name='submit' value='Send Lost Password Request' class='more' /></div>
  </div>
  </form>
    <BR />
    These emails usually take a couple of minutes to send and will be sent from <i>mail@marapets.com</i>.
    Please check your SPAM or junk mail folder and add <i>mail@marapets.com</i> to your contacts or allowed senders list. If this doesn't work, email us at <i>marapets@gmail.com</i> with your username from the email you signed up and we will be happy to help.
    
    </div>
    <BR /><BR />
    
   <div id='forgot' class='progressbox text-left'>
    
     <B class='bigger progress'>Forgot your Username?</B>
    <BR /><BR />
    Provide us with your email address and we will email if we find a match. Remember, you are only allowed <u>one account per person</u> and this will only find the most recently played account. 
    <BR /><BR />
<form action='login.php?do=lost2' method='post' name='LOGIN'>
<div class='middleit flex-table' id='forgot'>
  <div class='flex-buttons'><B>Email Address</b>: <input type='text' size='20' name='username' class='more' value=''/></div>
  <div class='flex-buttons'><input type='submit' name='submit' value='Send Lost Username Request' class='more' /></div>
  </div>
 </form>
    <BR />
    These emails usually take a couple of minutes to send and will be sent from <i>mail@marapets.com</i>.
    Please check your SPAM or junk mail folder and add <i>mail@marapets.com</i> to your contacts or allowed senders list. If this doesn't work, email us at <i>marapets@gmail.com</i> with your username from the email you signed up and we will be happy to help.
    
    </div>
    <BR /></div>
<div class='clear-table btmpad6'><BR /></div>
<div class='btmpad3'><BR /></div>

<div class='darkerbackground btmpad6'>

<div class='flex-table middleit btmpad6 flex-auto'>
    <span class='switchtodesktop flex-auto'>
        <a class='flex-auto' href='https://www.marapets.com/index.php?desktop=1'><div class='flex-links strong alsotry'>Switch to Desktop Mode</div></a>
    </span>
<script src="https://www.marapets.com/gamesjs/tooltipster.bundle.min.js"></script>
<script src="https://www.marapets.com/maratalk/jquery/moment4.js"></script>
<script src="https://www.marapets.com/maratalk/jquery/livestamp.min.js"></script>

<script type="text/javascript">

var currenttime = 'November 02, 2024 16:57:20'

var montharray=new Array('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec')
var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? '0'+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1);
var timestring=padlength(serverdate.getHours())+':'+padlength(serverdate.getMinutes())+':'+padlength(serverdate.getSeconds());
document.getElementById('servertime').innerHTML=timestring+' MST';
document.getElementById('servertime2').innerHTML=timestring+' MST';
}

setInterval('displaytime()', 1000);

function closePriceChecker() {
  document.getElementById("floatpricechecker").style.display = "none"; 
  document.getElementById("showpricechecker").innerHTML = ""; 
}



<!--
var checkedradio;

function docheck(thisradio) {
    if (checkedradio == thisradio) {
        thisradio.checked = false;
        checkedradio = null;
    }
    else {checkedradio = thisradio;}
}

function newChat(url, urlname) {
	popupWindow = window.open(url,urlname,'height=735,width=600,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no').focus();
}

$(document).ready(function() {
	$('.tooltip2').tooltipster();
});

$(function() {
	$('.copyToClipboard input').click(function() {
	$(this).focus();
	$(this).select();
	document.execCommand('copy');
	alert((this).value+' copied to clipboard');
	});
});
		
</script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3WRXMNPHRD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3WRXMNPHRD');
</script>

		<!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
		<script type="text/javascript">
			window.cookieconsent_options = {"message":"Marapets uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-bottom"};
		</script>
		
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
		<!-- End Cookie Consent plugin -->	
				<a class='flex-auto' href='https://www.marapets.com/preferences.php'><div class='flex-links strong alsotry'><b class='alsotry'>Enable Mobile Mode</b></div></a>

		<div id='servertime2' class='flex-links flex-auto strong'>16:57:20 MST</div>
		
<a class='flex-auto' href='https://www.marapets.com/rules.php'><div class='flex-links strong'>Terms and Conditions</div></a>

<a class='flex-auto' href='https://www.marapets.com/policy.php'><div class='flex-links strong'>Account Protection</div></a>

<a class='flex-auto' href='https://www.marapets.com/referral.php'><div class='flex-links strong'>Link to Us</div></a>

<a class='flex-auto' href='https://www.marapets.com/info.php'><div class='flex-links strong'>Contact Us</div></a>

<a class='flex-auto' href='https://www.marapets.com/info.php?do=privacy'><div class='flex-links strong'>Privacy Policy</div></a>

</div>


  <div class='flex-table middleit'>
<a href='https://www.marapets.com/free_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_freegames.png' class='marapets_border'></a>
<a href='https://www.marapets.com/pay_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_paygames.png' class='marapets_border'></a>
<a href='https://www.marapets.com/quest_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_quests.png' class='marapets_border'></a>
<a href='https://www.marapets.com/reward_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_rewards.png' class='marapets_border'></a>
<a href='https://www.marapets.com/goal_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_goals.png' class='marapets_border'></a>
<a href='https://www.marapets.com/mission_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_missions.png' class='marapets_border'></a>
<a href='https://www.marapets.com/collecting_games.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_collections.png' class='marapets_border'></a>
<a href='https://www.marapets.com/pet_dailies.php' class='flex-mainbtns'><img src='https://images.marapets.com/decade/button_petdailies.png' class='marapets_border'></a>
</div>

</div>

<div class='hideondesktop'><BR /><img src='https://images.marapets.com/layout/blankspot.gif' width=250 height=75><BR /></div>

<BR /><BR />

</div></div></div>

<div class='clear-table'><BR /><BR /></div>

<style>
.responsive_sidebar {
	display:none;
}
@media (min-width: 1200px) {
	.responsive_sidebar {
	 display:block;
	 position:absolute;
	 z-index: 999998;
	 right:2px;
	 top:30px;
	 width:160px;
	 height:600px;
	}
	.responsive_sidebar > div {
		height:600px;
	}

}
@media (min-width: 1550px) {
	.responsive_sidebar {
	 display:block;
	 position:absolute;
	 z-index: 999998;
	 right:2px;
	 top:30px;
	 width:300px;
	 height:600px;
	}
	.responsive_sidebar > div {
		height:600px;
	}
}
</style>

<div class='responsive_sidebar'>
			<script type="text/javascript"><!--
			   e9 = new Object();
			   e9.size = "160x600,120x600";
			   e9.addBlockingCategories="Adult,Alcohol,Dating,Flashing,Audio,Pop-under,Pop-up,Floating,Full-page,Expandable";
			   e9.noAd = 1;
			//--></script>
			<script type="text/javascript" src="//tags.expo9.exponential.com/tags/Marapets/ROS/tags.js"></script>
			</div>

<BR /><BR />

<BR /><BR />
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8dc810f7dc00676c',t:'MTczMDU5MTg0MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

