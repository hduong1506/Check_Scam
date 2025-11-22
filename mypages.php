<?php
include('../system/header.php');
if(!isset($_SESSION['key'])){
    load('/logkey');
} else {
$result = $connect->query("SELECT * FROM Website WHERE keycode = '$key'");
$row = $result->fetch_array();
$num = $result->num_rows;
?>

<main class="cirqi">
                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">


                    <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 c21iq c3lv0">
                        <header class="c7q80 cpnas">
                            <h2 class="text-slate-800 dark:text-slate-100 ca8f5"> Trang Web Của Tôi <span> <?=number_format();?> </span></h2>
                        </header>
                        <div x-data="handleSelect">

                            <div class="cvh0j">
                                <table class="cn6i6 cywsn c4idw czmhm cjh4m c96ud">
                                    <thead class="text-slate-500 dark:text-slate-400 border-slate-200 dark:border-slate-700 cx7ad clfnu clvip cannk cev1n">
                                        <tr>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5 ckchq"> ID </div>
                                            </th>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5 ckchq"> Tên Miền </div>
                                            </th>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5 ckchq"> Thông Tin </div>
                                            </th>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5 ckchq"> Thời Gian Hết Hạn </div>
                                            </th>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5 ckchq"> Trạng Thái </div>
                                            </th>
                                            <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="ca8f5"> Thao Tác </div>
                                            </th>
                                    
                                        </tr>
                                    </thead>
                                    <?php
                                    $response = $connect->query("SELECT * FROM Website WHERE keycode = '$key' ORDER BY id DESC");
                                      foreach($response as $row){
                                          $id+=1;
                                      ?>
 
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div> <?=$id;?> </div>
                                            </td>
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn"> <a href="https://<?=$row['domain'];?>" target="_blank" style="color: blue;"> <?=$row['domain'];?> </a></div>
                                            </td>
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="cb1p4 cz4nn ckchq"> <?=$row['taikhoan'];?> / <?=$row['matkhau'];?></div>
                                            </td>
                                            
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <strong> <?=date('d/m/Y - h:i:s',$row['time']);?> </strong>
                                            </td>
                                            
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <?=status($row['status']);?>
                                            </td>
                                            
                                            <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                                <div class="cd4ca"><a id="admin" onclick="ControlAdmin('<?=$row['slug'];?>')" class="inline-flex rounded-full ckslm czfwe c1gyt c3kam cd4ca cz4nn c60df c0b60" style="background-color: #07a8dd; color:white;"> Đăng Nhập Admin </a></div>
                                            </td>
                                            
                                         
                                            <td class="c6dbl ceem3 c1ctz cyb0x czv4r cks8x">
                                                <div class="flex items-center">
                                                    <button class="cccp8 c3d0i camw1 c4cuk cvn01" :class="{ 'c6fjp': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01" aria-expanded="false">
                                                        <span class="czsjw">Menu</span>
                                                        <svg class="c7hxs cr790 cesa3" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                     
                                        <tr id="description-01" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="ceem3 c1ctz czv4r cks8x">
                                                <div class="flex items-center dark:text-slate-400 cfjk5 clfnu cedup co6nx">
                                                    <svg class="mr-2 camw1 c4cuk c7hxs cz1vo c29x4 cq5uz">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="czskp"> Link Rãi: https://<?=$row['domain'];?>/?i=<?=rand(1000,9999);?> </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                    <?php } if($id < 1){ ?>
                                    
                                </table>
                                
                                    <p style="text-align: center;"> Không Có Dữ Liệu </p>
                                    
                                <?php } else { echo '     </table>'; } ?>
                                
                                
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        
        
              <script>

                     function ControlAdmin(text){
                        $.ajax({
                        url: "/Ajaxs/AutoLoad.php",
                        method: "POST",
                        data: {
                            id: text,
                        },
                        success: function(response) {
                            $("#result").html(response);
                        }
                    });
                }
                
                        </script>    


<?php
}
include('../system/footer.php');
?>