/*window.onload = function () {
        document.onclick = function (e) {
             e = e || window.event;
             if((e.target || e.srcElement).id != 'buy_mod') {
                 //showmod(0,0);
				 alert((e.target || e.srcElement).id+"!");
             }
        }
    }
*/

function chpass(){
	var pass1=document.getElementById("rpass");
	var pass2=document.getElementById("rpass2");
	
	if (pass1.value!=pass2.value){pass2.style="border:1px solid #FF0000;width:135px;";}else{pass2.style="border:0px;width:135px;";}
	
	
}

function openscroll(id){
	var scro=document.getElementById("scroll_"+id);
	scro.click();
	
}

function setcom(com,id){
	var btn0=document.getElementById("btn0_"+id);
	var btn1=document.getElementById("btn1_"+id);
	var btn2=document.getElementById("btn2_"+id);
	var inf=document.getElementById("inf_"+id);
	
	inf.innerHTML='<img src="images/loading.gif" width=30px>';
	
	btn0.disabled=true;
	btn1.disabled=true;
	btn2.disabled=true;
	
	makeRequest("setcom.php?id="+id+"&com="+com,2,id,"-");
	setTimeout('getinfo('+id+');',500);
}

function getinfo(id){

	makeRequest("getinfo.php?id="+id,3,id,"-");
	setTimeout('getinfo('+id+');',5000);
	
}

var zen=0;
  function calc(){
	var slot=document.getElementById("slots");
	var srok=document.getElementById("srok");
	var zeno=document.getElementById("rzen");
	var zena=document.getElementById('zen');
	
	var ticks=document.getElementById('ticks');
	var a1=0;
if (ticks!=null){
	if (ticks.value=='128'){a1=5;}
	if (ticks.value=='100'){a1=5;}
	if (ticks.value=='2'){a1=10;}
	if (ticks.value=='3'){a1=15;}
	
}
	zen=zena.value*1+a1*1;
	//alert(slot.value*(srok.value)*zen+" руб");	
	zeno.innerHTML=slot.value*(srok.value)*zen+" руб";

	
}

var mod;
var mod2;
var mod3;

function showmod2(sh){
	mod2=document.getElementById("reg_form");
	if (sh==0){mod2.style.display="none";}else{
		
		document.getElementById("game_info").style.display="none";
		document.getElementById("buy_mod").style.display="none";
		
		mod2.style.opacity=0;
		mod2.style.display="block";
		for (i=1;i<=5;i++){
		setTimeout('mod2.style.opacity=0.'+i*2,20*i);
		}
		setTimeout('mod2.style.opacity=1',100);
		}
}

function showmod3(sh,id){
	mod3=document.getElementById("game_info");
	if (sh==0){mod3.style.display="none";}else{
		
document.getElementById("buy_mod").style.display="none";
		
		mod3.style.opacity=0;
		makeRequest("getgameinfo.php?id="+id,4,id,"-");
		mod3.style.display="block";
		for (i=1;i<=5;i++){
		setTimeout('mod3.style.opacity=0.'+i*2,20*i+200);
		}
		setTimeout('mod3.style.opacity=1',100+200);
		}
}

	


function showmod(sh,id){
	mod=document.getElementById('buy_mod');
	//var zeno=document.getElementById("rzen");
	
	if (sh==0){mod.style.display="none";
	}else{
		document.getElementById("game_info").style.display="none";
		if (mod.style.display=="none"){
		mod.style.opacity=0;
		setTimeout('mod.style.display="block";',200);
		for (i=1;i<=5;i++){
		setTimeout('mod.style.opacity=0.'+i*2,20*i+200);
		}
		setTimeout('mod.style.opacity=1',100+200);
		}
		
		makeRequest("getgame.php?buy="+id,1,id,"-");
		}
	
}

function makeRequest(url,type,id,params)
{
var http_request = false;
if (window.XMLHttpRequest) 
{ // Mozilla, Safari, ...
http_request = new XMLHttpRequest();
if (http_request.overrideMimeType) 
{
http_request.overrideMimeType('text/xml');
}
} 
else if (window.ActiveXObject) 
{ // IE
try 
{
http_request = new ActiveXObject("Msxml2.XMLHTTP");
} 
catch (e) 
{
try 
{
http_request = new ActiveXObject("Microsoft.XMLHTTP");
} catch (e) {}
}
}

if (!http_request) 
{
alert('Невозможно отобразить данные на странице');
return false;
}

http_request.onreadystatechange = function() { alertContents(http_request,type,id,params); };
http_request.open('POST', url, true);
http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http_request.setRequestHeader("Content-length", params.length);
http_request.setRequestHeader("Connection", "close");
http_request.send(params);
}

function alertContents(http_request,type,id,params) 
{
if (http_request.readyState == 4) 
{
if (http_request.status == 200) 
{

rt=http_request.responseText;

if (type==1){

var res=rt.split('*#');
var nama=document.getElementById('name');
nama.innerHTML=res[0]+"<br>";//<div style='font-size:12pt;'>("+res[1]+")</div>";

var slots=document.getElementById('slots');
slots.options.length = 0;
var b=0;
b=res[3]*1-res[2]*1;
var a=0;

for(i=0;i<=b;i++){
	a=i+res[2]*1;
	slots.options[i] = new Option("Слотов: "+a, a);
}

var zena=document.getElementById('zen');

zena.innerHTML=res[4]+" руб/слот";

zen=res[4];
document.getElementById('buyid').value=res[5];

var tic=document.getElementById('ticks');

if ((id==40) || (id==50)){
	slots.style.visibility="hidden";
	zena.style.visibility="hidden";
	nama.innerHTML=res[0]+"<br><textarea style='width:490px;' name='txt' placeholder='Вы можете заказать сервер любой конфигурации и любой версии. Просто опишите нам ваши требования и провидите оплату в течении часа мы сделаем вам уникальную сборку, после чего наши менеджеры с вами свяжутся'></textarea>";
}

if (id!=30){
	tic.style.visibility="hidden";
	tic.style.width="1px";
	}else{
		tic.style.width="100px";
		tic.style.visibility="visible";
	}
//var modcnt=document.getElementById('buy_mod_cnt');
//modcnt.innerHTML=rt;
calc();
}//-type 1

if (type==2){
	var btn0=document.getElementById("btn0_"+id);
	var btn1=document.getElementById("btn1_"+id);
	var btn2=document.getElementById("btn2_"+id);
	
	
	//var res=rt.split('*#');
	
	btn0.disabled=false;
	btn1.disabled=false;
	btn2.disabled=false;
	
	if ((rt*1)==0){btn0.disabled=true;}
	if ((rt*1)!=0){btn1.disabled=true;}
	if ((rt*1)==2){btn2.disabled=true;}
	
	//inf.innerHTML=res[1];
	
}

if (type==3){
	
	var inf=document.getElementById("inf_"+id);
	
	var res=rt.split('#');
	
	var r1="";
	
	if ((res[0]*1)==1){r1='Запущен';}
	if ((res[0]*1)==0){r1='Остановлен';}
	if (((res[0]*1)==2)||((res[1]*1)==2)){r1='Перезапуск...';}
	
//	if (((res[0]*1)==0)&&((res[1]*1)==1)){r1='Запускается...';}
if (((res[0]*1)==0)&&((res[1]*1)==1)){r1='Роботает';}
	if (((res[0]*1)==1)&&((res[1]*1)==0)){r1='Завершение...';}
	
	
	
	//inf.innerHTML=rt; 
	if ((res[2]!='')&&(res[3]!='0')){
		inf.innerHTML=r1+' IP:'+res[2]+':'+res[3];
	}
	
	
	
}

if (type==4){
	var ginf=document.getElementById("game_info_cnt");
	ginf.innerHTML=rt;
}

}



}else{}//ещё разок если что
}
