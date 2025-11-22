<?php
include('system/header.php');
?>
     
          <main class="cirqi">
                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">
                    <div class="flex cqv5w c14pv c1jvo c6cxg c6n7d c1wqx c6gbs cjs9i cgi8s c10j3 cic9p c5hux">
                        <div>
                            <div>
                                
                                <div class="ch27r cgs8f c3myn">
                                <?php
                                 $response = $connect->query("SELECT * FROM Templates ORDER BY id DESC");
                                 foreach($response as $row){
                               ?>
                                
                                    <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cejl6 cqt51 cthv6 c0gox c21iq">
                                        <div class="flex cic9p c3noi">
                                            <!-- Image -->
                                            <div class="calrm">
                                                <img class="c96ud" src="<?=$row['image'];?>" width="301" height="226" alt="Nguyễn Thành IT">
                                                <!-- Like button -->
                                                <button class="mr-4 cwxu7 chcol cjgij cloy2">
                                                    <div class="bg-slate-900 rounded-full cenv3 cmv9m">
                                                        <span class="czsjw">Like</span>
                                                        <svg class="c7hxs cr790 cesa3" viewBox="0 0 32 32">
                                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                                <!-- Special Offer label -->
                                                <div class="mr-4 cwxu7 cdr4n chcol cjc22">
                                                    <div class="inline-flex items-center rounded-full cq7ln cywsn cl8rx cenv3 cd4ca cz4nn c0b60 cev1n czv4r">
                                                        <svg class="w-3 h-3 mr-1 c0h2w c7hxs cz1vo" viewBox="0 0 12 12">
                                                            <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                                        </svg>
                                                        <span> CYBERLUX.VN </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Content -->
                                            <div class="flex cic9p cirqi cr8qq">
                                                <!-- Card body -->
                                                <div class="cirqi">
                                                    <header class="c3ys4" style="text-align: center;">
                                                        <a href="#0">
                                                            <h3 class="text-slate-800 dark:text-slate-100 ca8f5 ciajb ca5ph"> <?=$row['name'];?> </h3>
                                                        </a>
                                                        <div class="text-sm"> <?=$row['mota'];?> </div>
                                                    </header>
                                                </div>
                                               
                                                <div class="">
                                                    <center> <button class="btn c5e6b cdsge c7qs0 cz1vo" onclick="create(<?=$row['id'];?>)"> Tạo Ngay </button></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                
                                <?php } ?>
                                
                                
                                </div>
                                
                            </div>



                        </div>

                    </div>

                </div>
            </main>

        </div>

    </div>
    
    <script>
        function create(id){
            window.location.href="/create/" + id;
        }
    </script>
<?php
include('system/footer.php');
?>