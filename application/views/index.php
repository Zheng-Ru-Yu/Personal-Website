
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url();?>" target=""/><!DOCTYPE html>
    <meta name="viewport" content="width=device-width,initial-scale=1.0 user-scalable = no
        maximum-scale =1
        minimum-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/pagination.css">
</head>

<body id="body">
    <header>
    </header>
    <div id="home" class="page">
        <!-- <nav></nav> -->
        <!-- <div class="wrapper">
			<div id="icon"></div>
			<h1 class="name"></h1>
		</div> -->
        <div id="cloud">
            <a><img src="images/rocket.png" alt="" id="rocket"> </a>
            <img src="images/click1.png" alt="" id="click">
            <div class="line line1"></div>
            <div class="line line2"></div>
        </div>
        <div id="nav">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about-me">About me</a></li>
                <li><a href="#learning">学无止境</a></li>
                <li><a href="#showcase">成果展示</a></li>
                <li><a href="#life">禅意生活</a></li>
                <li><a href="#contact">Contact me</a></li>
            </ul>
        </div>
    </div>
    <div id="about-me" class="page"></div>

    <div id="learning" class="page">
        <div class="wrapper">
            <div class="title">
                <div class="left">
                    <div class="line line3"></div>
                    <div class="line line4"></div>
                </div>
                <div class="right">
                     <div class="line line5"></div>
                    <div class="line line6"></div>
                </div>
                 <h1>LEARNING-EXPERIENCE</h1>
            </div>
            <div class="experience">
            <div class="container">
            <?php 
            $e=floor((count($lesson1)+count($lesson2)+1)/2);
			for ($i=0; $i < $e; $i++) { 
				
            ?>
                <div class="part">
                    <div class="skill">
                        <div class="c">
                            <h3><?php echo $lesson1[$i]->lesson?></h3>
                            <p>power: <?php echo $lesson1[$i]->lesson_power?></p>
                        </div>
                    </div>
                    <div class="time">
                        <div class="dot"></div>
                        <div class="data"><?php echo $lesson1[$i]->lesson_date?></div>
                    </div>
                    <div class="tu">
                        <img src="images/xing.png" alt="">
                    </div>
                </div>
                
                <div class="line line7"></div>
         <?php 
         if($i<count($lesson2)){
     	?>
                <div class="part2">
                    <div class="skill">
                        <h3><?php echo $lesson2[$i]->lesson?></h3>
                        <p>power: <span><?php echo $lesson2[$i]->lesson_power?></span></p>
                    </div>
                    <div class="time">
                        <div class="dot"></div>
                        <div class="data"><?php echo $lesson2[$i]->lesson_date?></div>
                    </div>
                    <div class="tu">
                        <img src="images/xing.png" alt="">
                    </div>
                </div>
                <div class="line line7"></div>
         <?php 
             } 
        } ?>
        <?php 
            $e=floor((count($lesson1)+count($lesson2)+1)/2);
            for ($i=0; $i < $e; $i++) { 
                
            ?>
                <div class="part">
                    <div class="skill">
                        <div class="c">
                            <h3><?php echo $lesson1[$i]->lesson?></h3>
                            <p>power: <span><?php echo $lesson1[$i]->lesson_power?></span></p>
                        </div>
                    </div>
                    <div class="time">
                        <div class="dot"></div>
                        <div class="data"><?php echo $lesson1[$i]->lesson_date?></div>
                    </div>
                    <div class="tu">
                        <img src="images/xing.png" alt="">
                    </div>
                </div>
                
                <div class="line line7"></div>
                 <?php 
                 if($i<count($lesson2)){
                ?>
                <div class="part2">
                    <div class="skill">
                        <h3><?php echo $lesson2[$i]->lesson?></h3>
                        <p>power: <span><?php echo $lesson2[$i]->lesson_power?></span></p>
                    </div>
                    <div class="time">
                        <div class="dot"></div>
                        <div class="data"><?php echo $lesson2[$i]->lesson_date?></div>
                    </div>
                    <div class="tu">
                        <img src="images/xing.png" alt="">
                    </div>
                </div>
                <div class="line line7"></div>
             <?php 
                 } 
                     } ?>

          </div>

			
                
               
                
            </div>
           

            
        </div>
        
    </div>




    <div id="showcase" class="page"></div>
    <div id="life" class="page"></div>

    <div id="contact" class="page">
        <div class="wrapper">
        	<div id="comment">
          
        		<div id="number">共有<?php echo count($pl)?>条评论</div>

                <div id="Searchresult">分页初始化完成后这里的内容会被替换。</div>
                 <div id="hiddenresult" style="display:none;">
        		   <?php  for ($j=0; $j <ceil(count($pl)/4) ; $j++) { 	?>
	        		<div class="content result">
                         <?php for ($i=0; $i < 4; $i++) {    ?>
                            <div class="row">
                               <div><p id="message"><?php echo $pl[$i+$j*4]->message?></p></div>
                               <br>
                               <br>
                               <br>
                                <div id="writter"><span><?php echo $pl[$i+$j*4]->name?></span>发表于<span><?php echo $pl[$i+$j*4]->date?></span></div>
                                
                            </div>
                            <hr>
                                <?php if ($j == ceil(count($pl)/4)-1 && $i==(count($pl)%4-1)) {
                                 break;
                           } ?>
                         <?php } ?> 
		        	</div>
	        		
        		  <?php }  ?>	
                </div>
                   <div id="Pagination" class="pagination"><!-- 这里显示分页 --></div>


        	</div>
            <div id="send-container">
                <form action="pl/comment" method="post" id="pl">
                    <input type="text" placeholder="name" class="text" name="name">
                    <br>
                    <br>
                    <br>
                    <input type="text" placeholder="Email address" class="text" name="email">
                    <br>
                    <br>
                    <br>
                    <textarea name="content" rows="10" cols="30" placeholder="Message"></textarea>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Send" name="sub" class="submit" id="sub" />
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.pagination.js" type="text/javascript"></script>
    <script src="js/index.js"></script>
    <script>
    $(function(){
    var initPagination = function() {
        var num_entries = $("#hiddenresult div.result").length;
        // 创建分页
        $("#Pagination").pagination(num_entries, {
            num_edge_entries: 1,
            num_display_entries: 4, //主体页数
            callback: pageselectCallback,
            items_per_page:1 //每页显示1项
        });
     }();
     
    function pageselectCallback(page_index, jq){
        var new_content = $("#hiddenresult div.result:eq("+page_index+")").clone();
        $("#Searchresult").empty().append(new_content); //装载对应分页的内容
        return false;
    }

    });

    </script>

</body>

</html>
