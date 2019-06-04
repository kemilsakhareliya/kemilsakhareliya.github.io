(function($){var FractionSlider=function(element,options){var vars={init:true,running:false,controlsActive:true,currentSlide:0,maxSlide:0,currentStep:0,maxStep:0,currentObj:0,maxObjs:0,finishedObjs:0};var timeouts=[];var fractionObjs=null;var slider=$(element),pager=null;vars.maxSlide=slider.children('.slide').length- 1;var sliderWidth=slider.width();var bodyWidth=$('body').width();var offsetX=(bodyWidth-sliderWidth)/2;
if(options['fullWidth']){sliderWidth=bodyWidth;}
var sliderHeight=slider.height();init();function init(){slider.addClass('fraction-slider');if(options['controls']){slider.append('<a href="#" class="prev"></a><a href="#" class="next" ></a>');slider.find('.next').bind('click',function(){return nextBtnPressed()})
slider.find('.prev').bind('click',function(){return prevBtnPressed()});}
if(options['pager']){pager=$('<div class="fs-pager-wrapper"></div>');slider.append(pager);}
if(options['fullWidth']){slider.css({'overflow':'visible'});}else{slider.css({'overflow':'hidden'});}
slider.children('.slide').each(function(index){var slide=$(this);slide.children().attr('rel',index);if(options['pager']){pager.append('<a rel="'+index+'" href="#"></a>');}});if(options['pager']){pager=$(pager).children('a');pager.bind('click',function(){return pagerPressed(this)});}
slideRotation();}
function pagerPressed(el){if(vars.controlsActive){vars.controlsActive=false;stopTimeouts();slider.find('.slide *').stop(true,true);endSlide(vars.currentSlide);vars.currentSlide=$(el).attr('rel');vars.currentStep=0;vars.maxStep=0;vars.currentObj=0;vars.maxObjs=0;vars.finishedObjs=0;startSlide();}
return false;}
function prevBtnPressed(){if(vars.controlsActive){vars.controlsActive=false;stopTimeouts();slider.find('.slide *').stop(true,true);endSlide(vars.currentSlide);vars.currentSlide--;vars.currentStep=0;vars.maxStep=0;vars.currentObj=0;vars.maxObjs=0;vars.finishedObjs=0;if(vars.currentSlide<0){vars.currentSlide=vars.maxSlide;}
startSlide();}
return false;}
function nextBtnPressed(){if(vars.controlsActive){vars.controlsActive=false;stopTimeouts();slider.find('.slide *').stop(true,true);endSlide(vars.currentSlide);vars.currentSlide++;vars.currentStep=0;vars.maxStep=0;vars.currentObj=0;vars.maxObjs=0;vars.finishedObjs=0;if(vars.currentSlide>vars.maxSlide){vars.currentSlide=0;}
startSlide();}
return false;}
function stopTimeouts(){var length=timeouts.length;$.each(timeouts,function(index){clearTimeout(this);if(index==length-1){timeouts=[];}});}
function slideRotation(){if(vars.init){var timeout=0;vars.init=false;}else{var timeout=options['timeout'];vars.init=false;}
timeouts.push(setTimeout(function(){if(vars.maxSlide==0&&vars.running==true){}else{endSlide(vars.currentSlide-1);startSlide();vars.running=true;}},timeout));}
function startSlide(){if(options['pager']){pager.removeClass('active');pager.eq(vars.currentSlide).addClass('active');};if(options['backgroundAnimation']){backgroundAnimation()};var slideObj=slider.children('.slide:eq('+vars.currentSlide+')');if(slideObj.length==0){vars.currentSlide=0;slideObj=slider.children('.slide:eq('+vars.currentSlide+')');}
getStepsForSlide();slideObj.show();slideObj.children().hide();vars.currentObj=0;vars.maxObjs=0;vars.finishedObjs=0;iterateSteps();}
function endSlide(slide){if(slide<0){return;}
var slideObj=slider.children('.slide:eq('+slide+')');var objs=slideObj.children();objs.each(function(){var obj=$(this);var position=obj.position();var transition=obj.attr("data-out");var easing=obj.attr("data-ease-out");if(transition==null){transition=options['transitionOut'];}
if(easing==null){easing=options['easeOut'];}
moveObjectOut(obj,position,transition,easing);}).promise().done(function(){slideObj.hide();vars.controlsActive=true;});}
function getStepsForSlide(){var objs=slider.children('.slide:eq('+vars.currentSlide+')').children();var maximum=0;objs.each(function(){var value=parseFloat($(this).attr('data-step'));maximum=(value>maximum)?value:maximum;});vars.maxStep=maximum;}
function iterateSteps(){if(vars.currentStep==0){var objs=slider.children('.slide:eq('+vars.currentSlide+')').children('*:not([data-step]), *[data-step="'+vars.currentStep+'"]');}else{var objs=slider.children('.slide:eq('+vars.currentSlide+')').children('*[data-step="'+vars.currentStep+'"]');}
vars.maxObjs=objs.length;fractionObjs=objs;if(vars.maxObjs>0){vars.currentObj=0;vars.finishedObjs=0;iterateObjs();}else{slider.trigger('fraction:stepFinished');}}
function iterateObjs(){var obj=$(fractionObjs[vars.currentObj]);var position=obj.attr("data-position").split(',');var transition=obj.attr("data-in");var delay=obj.attr("data-delay");var speed=obj.attr('data-speed');var easing=obj.attr('data-ease-in');var special=obj.attr("data-special");if(position==null){position=options['position'].split(',');}
if(transition==null){transition=options['transitionIn'];}
if(delay==null){delay=options['delay'];}
if(easing==null){easing=options['easeIn'];}
moveObjectIn(obj,position,transition,delay,speed,easing,special);vars.currentObj++;if(vars.currentObj<vars.maxObjs){iterateObjs();}else{vars.currentObj=0;}}
function objFinished(obj){if(obj.attr('rel')==vars.currentSlide){vars.finishedObjs++;if(vars.finishedObjs==vars.maxObjs){slider.trigger('fraction:stepFinished');}}}
slider.bind('fraction:stepFinished',function(){vars.currentStep++
if(vars.currentStep>vars.maxStep){if(options['autoChange']){vars.currentSlide++;vars.currentStep=0;slideRotation();}
return;}
iterateSteps();});function moveObjectIn(obj,position,transition,delay,speed,easing,special){var startY=null;var startX=null;var targetY=null;var targetX=null;switch(transition){case'left':startY=position[0];startX=sliderWidth;break;case'bottomLeft':startY=sliderHeight;startX=sliderWidth;break;case'topLeft':startY=obj.outerHeight()*-1;startX=sliderWidth;break;case'top':startY=obj.outerHeight()*-1;startX=position[1];break;case'bottom':startY=sliderHeight;startX=position[1];break;case'right':startY=position[0];startX=0- offsetX- obj.outerWidth();break;case'bottomRight':startY=sliderHeight;startX=0- offsetX- obj.outerWidth();break;case'topRight':startY=obj.outerHeight()*-1;startX=0- offsetX- obj.outerWidth();break;}
targetY=position[0];targetX=position[1];if(speed==null){speed=options['speedIn'];}else{speed=parseInt(speed);}
timeouts.push(setTimeout(function(){if(special=='cycle'&&obj.attr('rel')==vars.currentSlide){var tmp=obj.prev();if(tmp.length>0){var tmpPosition=$(tmp).attr('data-position').split(',');tmpPosition={'top':tmpPosition[0],'left':tmpPosition[1]};var tmpTransition=$(tmp).attr('data-out');if(tmpTransition==null){tmpTransition=options['transitionOut'];}
moveObjectOut(tmp,tmpPosition,tmpTransition,speed);}}
if(transition=='fade'){obj.css({"top":targetY+"px","left":targetX+"px"}).fadeIn(speed,function(){objFinished(obj);}).addClass('fs_obj_active');}else if(transition=='none'){obj.css({"top":targetY+"px","left":targetX+"px"}).show(0,function(){objFinished(obj);}).addClass('fs_obj_active');}else{obj.css({"top":startY+"px","left":startX+"px"}).show().animate({"top":targetY+"px","left":targetX+"px"},speed,easing,function(){objFinished(obj);}).addClass('fs_obj_active');}},delay));}
function moveObjectOut(obj,position,transition,speed,easing){var targetY=null;var targetX=null;switch(transition){case'left':targetY=position['top'];targetX=0- offsetX- 100- obj.outerWidth();break;case'bottomLeft':targetY=sliderHeight;targetX=0- offsetX- 100- obj.outerWidth();break;case'topLeft':targetY=obj.outerHeight()*-1;targetX=0- offsetX- 100- obj.outerWidth();break;case'top':targetY=obj.outerHeight()*-1;targetX=position['left'];break;case'bottom':targetY=sliderHeight;targetX=position['left'];break;case'right':targetY=position['top'];targetX=sliderWidth;break;case'bottomRight':targetY=sliderHeight;targetX=sliderWidth;break;case'topRight':targetY=obj.outerHeight()*-1;targetX=sliderWidth;break;default:break;}
if((speed==null&&transition!='fade')||(speed==null&&transition!='none')){if(position['left']>targetX){distX=Math.abs(position['left']-targetX);}else
if(position['left']>targetX){distX=Math.abs(targetX-position['left']);}else{distX=0;}
if(position['top']>targetY){distY=Math.abs(position['top']-targetY);}else
if(targetY>position['top']){distY=Math.abs(targetY-position['top']);}else{distY=0;}
dist=Math.sqrt((distX*distX)+(distY*distY));speed=(dist*(options['speedOut']/1000));}else if(speed!=null){}else{speed=options['speedOut'];}
if(transition=='fade'){obj.fadeOut(speed,function(){obj.hide();}).removeClass('fs_obj_active');}else if(transition=='none'){obj.hide(0,function(){obj.hide();}).removeClass('fs_obj_active');}else{obj.animate({"top":targetY+"px","left":targetX+"px"},speed,easing,function(){obj.hide();}).removeClass('fs_obj_active');}}
function backgroundAnimation(){if(options['backgroundElement']==null||options['backgroundElement']==""){var el=slider;}else{var el=$(options['backgroundElement']);}
var oldPos=el.css('background-position');oldPos=oldPos.split(' ');var moveX=options['backgroundX'];var moveY=options['backgroundY'];var x=Number(oldPos[0].replace(/[px,%]/g,''))+ moveX;var y=Number(oldPos[0].replace(/[px,%]/g,''))+ moveY;el.animate({backgroundPositionX:x+'px',backgroundPositionY:y+'px'},options['backgroundSpeed'],options['backgroundEase']);}}
$.fn.fractionSlider=function(options){var options=$.extend({'position':'0,0','transitionIn':'left','transitionOut':'left','fullWidth':false,'delay':0,'timeout':2000,'speedIn':2500,'speedOut':1000,'easeIn':'easeOutExpo','easeOut':'easeOutCubic','controls':false,'pager':false,'autoChange':true,'backgroundAnimation':false,'backgroundElement':null,'backgroundX':500,'backgroundY':500,'backgroundSpeed':2500,'backgroundEase':'easeOutCubic',},options);var slider=new FractionSlider(this,options);};var baseEasings={};$.each(["Quad","Cubic","Quart","Quint","Expo"],function(i,name){baseEasings[name]=function(p){return Math.pow(p,i+ 2);};});$.extend(baseEasings,{Sine:function(p){return 1- Math.cos(p*Math.PI/2);},Circ:function(p){return 1- Math.sqrt(1- p*p);},Elastic:function(p){return p===0||p===1?p:-Math.pow(2,8*(p- 1))*Math.sin(((p- 1)*80- 7.5)*Math.PI/15);},Back:function(p){return p*p*(3*p- 2);},Bounce:function(p){var pow2,bounce=4;while(p<((pow2=Math.pow(2,--bounce))- 1)/ 11 ) {}
return 1/Math.pow(4,3- bounce)- 7.5625*Math.pow((pow2*3- 2)/ 22 - p, 2 );
}});$.each(baseEasings,function(name,easeIn){$.easing["easeIn"+ name]=easeIn;$.easing["easeOut"+ name]=function(p){return 1- easeIn(1- p);};$.easing["easeInOut"+ name]=function(p){return p<0.5?easeIn(p*2)/ 2 :
1- easeIn(p*-2+ 2)/ 2;
};});})(jQuery);