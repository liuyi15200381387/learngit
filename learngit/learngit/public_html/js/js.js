// JavaScript Document
$(function(){
	//显示第一个子菜单
	$('.subnav:eq(0)').show();
	//点击大菜单h1
	$('#nav ul li h1').click(function(){
		//显示它旁边的子菜单
		$(this).siblings().slideToggle();
		//隐藏其他的子菜单、
		$(this).parent().siblings().children('.subnav').hide();
	})
	/*轮播图*/
	//隐藏第一张以外的图片
	$('#banner>ul>li:gt(0)').hide();
	var n=0;
	var len=$('#banner ul li').length;  //获取的是li的长度 数量
	var t;
	function play(){
		//alert(n)
		$('#banner ul li').eq(n).show().siblings().hide();
			//给当前的span增加on样式，移除
		$('#num span').eq(n).addClass('on').siblings().removeClass('on');
	}
	function autoPlay(){
		//自动播放
		t=setInterval(function(){
			//alert(1)	
			n++;
			if(n>=len){
				n=0;
			}
			play();
		},2000)
	}
	//alert(len)
	autoPlay(); //调用自动播放函数
	
	//鼠标经过banner停止播放，移开继续播放
	$('#banner').hover(function(){
		clearInterval(t)
	},function(){
		autoPlay();
	})
	//点击下一张
	$('#next').click(function(){
			n++;
			if(n>=len){
				n=0;
			}
			play();
	})
	//点击上一张
	$('#prev').click(function(){
			if(n<=0){
				n=len;	
			}
			n--;	
		 play();
	})
	//点击数字显示相应的图片
	$('#num span').each(function(index) {
        //alert(index)
		$(this).click(function(){
			//alert(index)	
			n=index;
			play();
		})
    });
	
	
	//隐藏掉行业动态以外的新闻列表
	$('#content ul:gt(0)').hide();
	$('#title h1').each(function(index) {
        $(this).mouseover(function(){
			//alert(index)
			$('#content ul').eq(index).show().siblings().hide();
			$(this).addClass('active').siblings().removeClass('active');
		})
    });	
	
	/*返回顶部特效*/
	//浏览器窗口滚动条发生变化事件
	
	$(window).scroll(function(){
		var toTop=$(window).scrollTop();
		//alert(toTop)
		if(toTop>=500){
			//显示返回顶部按钮
			$('#to_top').fadeIn()
		}else{
			//隐藏返回顶部按钮
			$('#to_top').fadeOut();	
		}
	})
	//点击返回顶部按钮
	$('#to_top').click(function(){
			//
		//$(window).scrollTop(0)
		$('body,html').animate({scrollTop:'0'},1000)
	})
	
	
	/*左右滑动*/
	//获取li的个数
	var leng=$('#ul ul').length;
	var ulW=840*leng;
	//alert(ulW)
	//设置ul的宽度
	$('#ul').css({'width':ulW+'px'}); //变量不能够被引号包围 字符串一定要被引号包围 此处的+号起连接作用
	var i=0; //移动840的倍数
	var tt;
	function autoMove(){
		//图片自动滚动
		tt=setInterval(function(){
			//i++;
/*			if(i*840>=ulW){
				i=0;
			}
*/			$('#ul').animate({marginLeft:'-840px'},function(){
				$(this).css({'margin-left':'0'}).find('ul:first').appendTo('#ul');	
			})
		},3000)	
	}
	autoMove();
	//鼠标放到slide上面停止滑动，移开继续滑动
	$('#slide').hover(function(){
		//
		clearInterval(tt);
	},function(){
		autoMove();
	})
	//点击下一组
	$('#right').click(function(){
			$('#ul').animate({marginLeft:'-840px'},function(){
				$(this).css({'margin-left':'0'}).find('ul:first').appendTo('#ul');	
			})
	})
	//点击上一组
	$('#left').click(function(){
		$('#ul').css({'margin-left':'-840px'}).find('ul:last').prependTo('#ul');
		$('#ul').animate({marginLeft:'0'});
	})
	
    
	
		/*横向导航*/
	$('.content3 ul li').hover(function(){
		//鼠标经过事件执行的	
		//显示当前的ul
		$(this).find('p').slideDown();
		//隐藏其他的li的孩子（ul）
		//$(this).siblings().children('ul').slideUp();
		//给当前的li增加on样式
		//$(this).addClass('on').siblings().removeClass('on');
	},function(){
		//鼠标移开事件执行的
		$(this).find('p').slideUp();
		//$(this).removeClass('on');
	})
	
	
    	/*文本框特效*/
	//文本框获得焦点事件
	$('.search').focus(function(){
		var searchs=$('.search').val(); 
		if(searchs=='验证码'){
			$(this).val(''); //执行这个的前提条件是文本框的value值为默认值
		}
		//设置文本框的value值为空
	})
	//文本框失去焦点
	$('.search').blur(function(){
		var searchs=$('.search').val();
		//alert(searchs)
		if(searchs==''){
			$(this).val('验证码');	//执行这个的前提是文本框的value值为空
		}
		//设置文本框的值为秘密花园
		
	})

})
    