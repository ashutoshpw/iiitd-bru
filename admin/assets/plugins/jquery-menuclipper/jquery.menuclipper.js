;(function($,window,document,undefined){var pluginName="menuclipper",defaults={menu:'.menuclipper-menu',item:'.menuclipper-menu > li',bufferWidth:100};function Plugin(element,options){this.element=element;this.options=$.extend({},defaults,options);this._defaults=defaults;this._name=pluginName;this.init();}
Plugin.prototype={init:function(){this.refresh();},refresh:function(){var $container=$(this.element);var $menuItems=$(this.options.item);var cWidth=$container.outerWidth(true);var itemsWidth=0;var lastIndex=-1;var _this=this;$menuItems.each(function(index){var itemWidth=$(this).actual('outerWidth',{includeMargin:true});if(lastIndex>-1){$(this).addClass('hidden');return true;}
if(itemWidth+itemsWidth+_this.options.bufferWidth<cWidth){itemsWidth+=itemWidth;$(this).removeClass('hidden');}else{if(lastIndex<0)lastIndex=index;$(this).addClass('hidden');}});var overflowingItems=$menuItems.splice(lastIndex,$menuItems.length);var $dropdown=$('.menuclipper-dropdown').length?$('.menuclipper-dropdown'):$('<div class="dropdown menuclipper-dropdown"/>');!$('.menuclipper-dropdown').length&&$dropdown.append('<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>');var $dropdownMenu=$('.menuclipper-dropdown-menu').length?$('.menuclipper-dropdown-menu'):$('<ul class="dropdown-menu menuclipper-dropdown-menu pull-right" role="menu"/>');if(lastIndex>-1){$dropdown.show();$dropdown.insertAfter($menuItems.eq(lastIndex-1));$dropdownMenu.empty();for(var item in overflowingItems){var li='<li role="presentation">'+$(overflowingItems[item]).html()+"</li>";$dropdownMenu.append(li);}
!$('.menuclipper-dropdown-menu').length&&$dropdown.append($dropdownMenu);}else{$dropdown.hide();}}};$.fn[pluginName]=function(options){return this.each(function(){if(!$.data(this,"plugin_"+pluginName)){$.data(this,"plugin_"+pluginName,new Plugin(this,options));}});};var timeout;$(window).on('resize',function(){clearTimeout(timeout);timeout=setTimeout(function(){var $menu=$('.menuclipper');$menu.each(function(){var plugin=$(this).data("plugin_"+pluginName);plugin&&plugin.refresh();});},100);});})(jQuery,window,document);