// JavaScript Document
var $j = $.noConflict();

//Method 2 of checking DOM is Ready
$j(document).ready(function() {
	
	//Find goes level below
	$j("#find").click(function(){
		$j('#aaa').find('li').addClass('red');
        //$j('ul').find('li').eq(1).addClass('red');
    });
	
	//Children goes level below
	$j("#children").click(function(){
		$j('#aaa').children('li').addClass('red');
        //$j('ul').children('li').eq(1).addClass('red');
    });
	
	//closest goes level up
	$j("#closest").click(function(){
		$j('#iii').closest('ul').addClass('red');
        //$j('ul').closest('li').eq(1).addClass('red');
    });
	
	//parent goes level up
	$j("#parent").click(function(){
		$j('#iii').parent('ul').addClass('red');
        $j('#iii').parent('li').addClass('red');
    });
	
	//parents goes all level up
	$j("#parents").click(function(){
		$j('#iii').parents('ul').addClass('red');
        //$j('ul').parent('li').eq(1).addClass('red');
    });
	
	
});