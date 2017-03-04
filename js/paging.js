window.onload=function()
{
	var oMenu=document.getElementById('menu');
	var aLi=oMenu.getElementsByTagName('li');
	

	for(var i=0; i<aLi.length; i++){	
		aLi[i].index = i;	
		var iHeight=aLi[0].offsetHeight;

		aLi[i].onmouseover = function(){
			for(var i=0;i<aLi.length;i++){
				var aSpan=aLi[this.index].getElementsByTagName('span')[0];
				startMove(aSpan,{height: iHeight});	
			}		
		}
		aLi[i].onmouseout = function(){
			for(var i=0;i<aLi.length;i++){
				var aSpan=aLi[this.index].getElementsByTagName('span')[0];
				startMove(aSpan,{height: 3});	
			}		
		}
	}

		// aLi[0].onmouseover = function(){
		// 	alert(0);
		// 	var iHeight=oLi.offsetHeight;
		// 	startMove(aSpan,{height: iHeight});
		// }

// 最新最热选项卡
	
	var oHot=document.getElementById('hot');
	var oNew=document.getElementById('new');
	var oHotArticle=document.getElementsByClassName('sidebar_content_article_hot')[0];
	var oNewArticle=document.getElementsByClassName('sidebar_content_article_new')[0];

	oNew.onmouseover=function()
	{
		oHotArticle.style.display='none';
		oNewArticle.style.display='block';
		oHot.style.background='#f1f1ef';
		oNew.style.background='#39f';
	}
	oHot.onmouseover=function()
	{
		oHotArticle.style.display='block';
		oNewArticle.style.display='none';
		oHot.style.background='#39f';
		oNew.style.background='#f1f1ef';
	}







}