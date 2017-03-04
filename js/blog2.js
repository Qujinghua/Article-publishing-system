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

// playimages
	function getByClass(oParent, sClass)
	{
		var aEle=oParent.getElementsByTagName('*');
		var aResult=[];
		
		for(var i=0;i<aEle.length;i++)
		{
			if(aEle[i].className==sClass)
			{
				aResult.push(aEle[i]);
			}
		}
		
		return aResult;
	}
	var oPlay=document.getElementById('playimages');
	var oBtnPrev=getByClass(oPlay, 'prev')[0];
	var oBtnNext=getByClass(oPlay, 'next')[0];

	var oPlayPic=getByClass(oPlay, 'play_pic')[0];
	var aLiPic=oPlayPic.getElementsByTagName('li');

	var oDotPic=document.getElementsByClassName('dot_pic_ul')[0];
	var oDotPicLi=oDotPic.getElementsByTagName('li');

	var nowZIndex=2;
	var now=0;

	oBtnPrev.onmouseover=function()
	{
		startMove(oBtnPrev, {opacity:100});
	};
	oBtnPrev.onmouseout=function()
	{
		startMove(oBtnPrev, {opacity:30});
	};
	oBtnNext.onmouseover=function()
	{
		startMove(oBtnNext, {opacity:100});
	};
	oBtnNext.onmouseout=function()
	{
		startMove(oBtnNext, {opacity:30});
	};

	startMove(oDotPicLi[0], {width:24});
	oDotPicLi[0].style.background='#3399CC';

	function tab()
	{
		for(var i=0;i<oDotPicLi.length;i++)
		{
			oDotPicLi[i].style.background="";
			startMove(oDotPicLi[i], {width:8});
		}
		oDotPicLi[now].style.background='#3399CC';
		startMove(oDotPicLi[now], {width:24});

		aLiPic[now].style.zIndex=nowZIndex++;
		aLiPic[now].style.height=0;
		aLiPic[now].style.right="";
		aLiPic[now].style.left="";
		startMove(aLiPic[now], {height:300});
	}

	function prevtab()
	{
		for(var i=0;i<oDotPicLi.length;i++)
		{
			oDotPicLi[i].style.background="";
			startMove(oDotPicLi[i], {width:8});
		}
		oDotPicLi[now].style.background='#3399CC';
		startMove(oDotPicLi[now], {width:24});

		aLiPic[now].style.zIndex=nowZIndex++;
		aLiPic[now].style.width=0;
		aLiPic[now].style.right="";
		aLiPic[now].style.left=0;
		startMove(aLiPic[now], {width:1200});
	}
	function nexttab()
	{
		for(var i=0;i<oDotPicLi.length;i++)
		{
			oDotPicLi[i].style.background="";
			startMove(oDotPicLi[i], {width:8});
		}
		oDotPicLi[now].style.background='#3399CC';
		startMove(oDotPicLi[now], {width:24});

		aLiPic[now].style.zIndex=nowZIndex++;
		aLiPic[now].style.width=0;
		aLiPic[now].style.left="";
		aLiPic[now].style.right=0;
		startMove(aLiPic[now], {width:1200});
	}

	for(var i=0;i<oDotPicLi.length;i++)
	{
		oDotPicLi[i].index=i;
		oDotPicLi[i].onclick=function()
		{
			if (this.index==now)return;
			now=this.index;			
			tab();
		}
	}

	oBtnPrev.onclick=function ()
	{
		now--;
		if(now==-1)
		{
			now=aLiPic.length-1;
		}
		
		prevtab();
	};

	oBtnNext.onclick=function ()
	{
		now++;
		if(now==aLiPic.length)
		{
			now=0;
		}
		
		nexttab();
	};
	// 定时器
	setInterval(function(){
		now++;
		if(now==aLiPic.length)
		{
			now=0;
		}
		nexttab();
	},5000);

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