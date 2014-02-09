<?php
header("Content-Type: text/html; charset=UTF-8");
include_once("config.php");
?>
<?php getHeader(); ?>
<?php getNav() ?>
        <div id="content">
        <script type="text/javascript">
$(function() {
                var current = 0;
                
                var loaded  = 0;
                for(var i = 1; i <4; ++i)
                    $('<img />').load(function(){
                        ++loaded;
                        if(loaded == 3){
                            $('#bg1,#bg2,#bg3').mouseover(function(e){
                                
                                var $this = $(this);
                                if($this.parent().index() == current)
                                    return;

                                var item = e.target.id;
                                
                                if(item == 'bg1' || current == 2)
                                    $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(-333px 0)"},300,function(){
                                        $(this).find('li').hide();
                                    });
                                else
                                    $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(320px 0)"},300,function(){
                                        $(this).find('li').hide();
                                    });

                                if(item == 'bg1' || current == 2){
                                    $('#menu > li').animate({backgroundPosition:"(-780px 0)"},0).removeClass('bg1 bg2 bg3').addClass(item);
                                    move(1,item);
                                }
                                else{
                                    $('#menu > li').animate({backgroundPosition:"(780px 0)"},0).removeClass('bg1 bg2 bg3').addClass(item);
                                    move(0,item);
                                }
                                if(current == 2 && item == 'bg1'){
                                    $('#menu .sub'+parseInt(current)).stop().animate({backgroundPosition:"(-333px 0)"},300);
                                }
                                if(current == 0 && item == 'bg3'){
                                    $('#menu .sub'+parseInt(current+2)).stop().animate({backgroundPosition:"(320px 0)"},300);
                                }
                                current = $this.parent().index();
                                $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(0 0)"},300,function(){
                                    $(this).find('li').fadeIn();
                                });
                            });
                        }   
                    }).attr('src', 'media/images/news/'+i+'.jpg');
                function move(dir,item){
                    if(dir){
                        $('#bg1').parent().stop().animate({backgroundPosition:"(0 0)"},200);
                        $('#bg2').parent().stop().animate({backgroundPosition:"(-320px 0)"},100);
                        $('#bg3').parent().stop().animate({backgroundPosition:"(-640px 0)"},400,function(){
                            $('#menuWrapper').removeClass('bg1 bg2 bg3').addClass(item);
                        });
                    }
                    else{
                        $('#bg1').parent().stop().animate({backgroundPosition:"(0 0)"},400,function(){
                            $('#menuWrapper').removeClass('bg1 bg2 bg3').addClass(item);
                        });
                        $('#bg2').parent().stop().animate({backgroundPosition:"(-320px 0)"},300);
                        $('#bg3').parent().stop().animate({backgroundPosition:"(-640px 0)"},200);
                    }
                }
            });
</script>
        <style type="text/css">
.bg1 {
background-image:url(media/images/news/1.jpg);
}

.bg2 {
background-image:url(media/images/news/2.jpg)
}

.bg3 {
background-image:url(media/images/news/3.jpg)
}

#content {
    padding: 0 !important;
}
</style>
                    <div id="menuWrapper" class="menuWrapper bg1">
                <ul class="menu" id="menu">
                    <li class="bg1" style="background-position:0 0;">
                        <a id="bg1" href="#">Фестиваль</a>
                        <ul class="sub1" style="background-position:0 0;">
                            <li><a href="#">Фотографии</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                    <li class="bg1" style="background-position:-320px 0px;">
                        <a id="bg2" href="#">День рождения</a>
                        <ul class="sub2" style="background-position:-333px 0;">
                            <li><a href="#">Фотографии</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                    <li class="last bg1" style="background-position:-640px 0px;">
                        <a id="bg3" href="#">Футбол</a>
                        <ul class="sub3" style="background-position:-333px 0;">
                            <li><a href="#">Фотокарточки</a></li>
                            <li><a href="#">О празднике</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
<?php getFooter() ?>