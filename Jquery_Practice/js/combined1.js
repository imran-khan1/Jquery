// JavaScript Document
var $j = $.noConflict();

//Method 2 of checking DOM is Ready
$j(document).ready(function() {
	
	//Focus to Name TextBox
	$j("#set-focus").click(function(){
        $j("#uname").focus();
    });
	
	//add class to Div
	$j("#add-div1-class").click(function(){
        $j("#div1").addClass("red");
    });
	
	$j("#rem-div1-class").click(function(){
        $j("#div1").removeClass("red");
    });
	
	
	//add class to List first child
	$j("#add-li-first-class").click(function(){
        $j("#div2 ul li:first-child").addClass("red");
    });
	
	$j("#rem-li-first-class").click(function(){
        $j("#div2 ul li:first-child").removeClass("red");
    });
	
	
	//add class to List fourth Child
	$j("#add-li-fourth-class").click(function(){
        $j("#div2 ul li").eq(3).addClass("red");
    });
	
	$j("#rem-li-fourth-class").click(function(){
        $j("#div2 ul li").removeClass("red");
    });
	
	//add class to List Last Child
	$j("#add-li-last-class").click(function(){
        $j("#div2 ul li:last-child").addClass("red");
    });
	
	$j("#rem-li-last-class").click(function(){
        $j("#div2 ul li").removeClass("red");
    });
	
	
	//.next() to list child 4 and add class to List sixth Child
	$j("#add-li-sixth-class").click(function(){
        $j("#div2 ul li").eq(4).next().addClass("red");
    });
	
	$j("#rem-li-sixth-class").click(function(){
        $j("#div2 ul li").eq(5).removeClass("red");
    });
	
	
	//.prex() to list child 9 and add class to List eighth Child
	$j("#add-li-eighth-class").click(function(){
        $j("#div2 ul li").eq(8).prev().addClass("red");
    });
	
	$j("#rem-li-eighth-class").click(function(){
        $j("#div2 ul li").eq(7).removeClass("red");
    });
	
	
	//add class to textBox	
	$j("#add-form-class").click(function(){
        $j("#uname").addClass("red-color-border");
    });
	
	$j("#rem-form-class").click(function(){
        $j("#uname").removeClass("red-color-border");
    });
	
	
	//Check Checkbox1	
	$j("#chk-agree").click(function(){
        $j("#agree").prop('checked', true);
    });
	
	$j("#uncheck-agree").click(function(){
        $j("#agree").prop('checked', false);
    });
	
	//Check all Checkbox1s
	$j("#chk-all").click(function(){
        $j(":checkbox").prop('checked', true);
		$j("#agree").prop('checked', false);
    });
	
	$j("#uncheck-all").click(function(){
        $j(":checkbox").prop('checked', false);
    });
	 
   
});