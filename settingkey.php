<?php
include('../system/header.php');
if(!isset($_SESSION['key'])){
    load('/logkey');
}
?>

<main class="cirqi">
                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">



<div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 c21iq c3lv0">
                            <div class="cxrsk cn2cr cxct7">
                                <div class="ce7hm cux7g c8syf">

                                    <div class="text-slate-800 dark:text-slate-100 ca8f5 cd4ca c86fi"> Thông Tin Key </div>

                             
                                    <div class="cavzi">
                                        <div class="text-sm text-slate-800 dark:text-slate-100 ca8f5 ca5ph"> Thông Tin </div>
                                        <ul>
                                            <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> Cung Cấp Bởi </div>
                                                <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn c4j6o"> CYBERLUX.VN </div>
                                            </li>
                                            
                                            <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> Trạng Thái </div>
                                                <div class="flex items-center c6dbl">
                                                    <div class="w-2 h-2 rounded-full mr-2 cc2yu"></div>
                                                        <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn"> Active </div>
                                                </div>
                                            </li>
                                            
                                             <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> KEY (Cần Bảo Mật) </div>
                                                <div class="flex items-center c6dbl">
                                                        <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn" id="keyview"> <b onclick="keyView()"> Click Để Xem </b></div>
                                                </div>
                                            </li>
                                            
                                            
                                             <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> Giới Hạn Tạo </div>
                                                <div class="flex items-center c6dbl">
                                                        <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn"> <?=$getKey['gioihan'];?> </div>
                                                </div>
                                            </li>
                                            
                                               <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> Đã Dùng </div>
                                                <div class="flex items-center c6dbl">
                                                        <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn"> <?=$getKey['dadung'];?> </div>
                                                </div>
                                            </li>
                                            
                                               
                                               <li class="flex items-center border-slate-200 dark:border-slate-700 cc2cs cqyqv cks8x">
                                                <div class="text-sm"> Thời Gian Hết Hạn </div>
                                                <div class="flex items-center c6dbl">
                                                        <div class="text-sm text-slate-800 dark:text-slate-100 cz4nn"> <?=date('d/m/Y - h:i:s',$getKey['time']);?> </div>
                                                </div>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>


                        <script>
                            function keyView(){
                                document.getElementById('keyview').innerHTML = '<?=$key;?>';
                            }
                        </script>

                                    <div class="flex items-center c7zsv cavzi">
                                        <div class="cb0or">
                                            <button onclick="logout()" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c18nt czq29 ciajw c96ud">
                                                <svg class="c7hxs cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                                                    <path d="M14.574 5.67a13.292 13.292 0 0 1 1.298 1.842 1 1 0 0 1 0 .98C15.743 8.716 12.706 14 8 14a6.391 6.391 0 0 1-1.557-.2l1.815-1.815C10.97 11.82 13.06 9.13 13.82 8c-.163-.243-.39-.56-.669-.907l1.424-1.424ZM.294 15.706a.999.999 0 0 1-.002-1.413l2.53-2.529C1.171 10.291.197 8.615.127 8.49a.998.998 0 0 1-.002-.975C.251 7.29 3.246 2 8 2c1.331 0 2.515.431 3.548 1.038L14.293.293a.999.999 0 1 1 1.414 1.414l-14 14a.997.997 0 0 1-1.414 0ZM2.18 8a12.603 12.603 0 0 0 2.06 2.347l1.833-1.834A1.925 1.925 0 0 1 6 8a2 2 0 0 1 2-2c.178 0 .348.03.512.074l1.566-1.566C9.438 4.201 8.742 4 8 4 5.146 4 2.958 6.835 2.181 8Z"></path>
                                                </svg>
                                                <span class="c4j6o"> Đăng Xuất </span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
            </div>
        </main>
        

<?php
include('../system/footer.php');
?>