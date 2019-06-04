(function($){Drupal.settings.views=Drupal.settings.views||{'ajax_path':'/views/ajax'};Drupal.quicktabs=Drupal.quicktabs||{};Drupal.quicktabs.getQTName=function(el){return el.id.substring(el.id.indexOf('-')+1);}
Drupal.behaviors.quicktabs={attach:function(context,settings){$.extend(true,Drupal.settings,settings);$('.quicktabs-wrapper',context).once(function(){Drupal.quicktabs.prepare(this);});}}
Drupal.quicktabs.prepare=function(el){var qt_name=Drupal.quicktabs.getQTName(el);var $ul=$(el).find('ul.quicktabs-tabs:first');$ul.find('li a').each(function(i,element){element.myTabIndex=i;element.qt_name=qt_name;var tab=new Drupal.quicktabs.tab(element);var parent_li=$(element).parents('li').get(0);if($(parent_li).hasClass('active')){$(element).addClass('quicktabs-loaded');}
$(element).once(function(){$(this).bind('click',{tab:tab},Drupal.quicktabs.clickHandler);});});}
Drupal.quicktabs.clickHandler=function(event){var tab=event.data.tab;var element=this;$(this).parents('li').siblings().removeClass('active');$(this).parents('li').addClass('active');tab.container.children().addClass('quicktabs-hide');if(!tab.tabpage.hasClass("quicktabs-tabpage")){tab=new Drupal.quicktabs.tab(element);}
tab.tabpage.removeClass('quicktabs-hide');return false;}
Drupal.quicktabs.tab=function(el){this.element=el;this.tabIndex=el.myTabIndex;var qtKey='qt_'+ el.qt_name;var i=0;for(var i=0;i<Drupal.settings.quicktabs[qtKey].tabs.length;i++){if(i==this.tabIndex){this.tabObj=Drupal.settings.quicktabs[qtKey].tabs[i];this.tabKey=i;}}
this.tabpage_id='quicktabs-tabpage-'+ el.qt_name+'-'+ this.tabKey;this.container=$('#quicktabs-container-'+ el.qt_name);this.tabpage=this.container.find('#'+ this.tabpage_id);}
if(Drupal.ajax){Drupal.ajax.prototype.eventResponse=function(element,event){var ajax=this;if(ajax.ajaxing){return false;}
try{if(ajax.form){if(ajax.setClick){element.form.clk=element;}
ajax.form.ajaxSubmit(ajax.options);}
else{if(!$(element).hasClass('quicktabs-loaded')){ajax.beforeSerialize(ajax.element,ajax.options);$.ajax(ajax.options);if($(element).parents('ul').hasClass('quicktabs-tabs')){$(element).addClass('quicktabs-loaded');}}}}
catch(e){ajax.ajaxing=false;alert("An error occurred while attempting to process "+ ajax.options.url+": "+ e.message);}
return false;};}})(jQuery);