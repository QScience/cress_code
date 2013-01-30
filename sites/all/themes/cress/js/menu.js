//JavaScript Document Developed by Seo-semantic-xhtml
function mainmenu(){
jQuery(" #nav ul ").css({display: "none"}); // Opera Fix
jQuery(" #nav li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		});
}

jQuery(document).ready(function(){
	mainmenu();
});

jQuery(function() {
  jQuery('.sub_menu').hover(function() {
   jQuery(this).parent().addClass('active');          
  },
  function() {
   jQuery(this).parent().removeClass('active');          
  });
});
