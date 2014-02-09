
		  $(function() {
		    $(".dropDownMark").click(function() {
		      $(this).find(".dropDownContent").toggleClass( "show");
		    });
		  });
  		</script>
		<script>
		var hour_all = "$hour_all";
		var hour_green = "$hour_green";
		var hour_red = "$hour_red";
		green = (hour_green/(hour_all * 0.01))*9.4;
		red = (hour_red/(hour_all * 0.01))*9.4;

		if(green > 0) {
		$(document).ready(function() {
		    $('#skipLessonDetailGreen').css('width', green);
		    $('#skipLessonDetailRed').css('width', red);
		});
		}
		if(red === 0)
		{
			$(document).ready(function() {
		    $('#skipLessonDetailRed').addClass('hide');
		});
		}

$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});