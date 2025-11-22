<?php
include('header.php');
$get = $_GET['delete'];
if(isset($get)){
    $connect->query("DELETE FROM Accounts WHERE token = '".$_SESSION['token']."'");
    echo load('/admin/accounts.php');
}
?>


<main class="cirqi">
                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">

                  <div class="calrm cym6n c2ksj cxrsk c8syf cn2cr cqhl3" x-data="{ card: true }">
                    <div class="bg-white dark:bg-slate-800 c9izj c21iq cg30u cwp1g">

                                <br>


                        <div x-show="card">
                            <div class="cj3ez">
                                <div>
                                    <label class="block text-sm cz4nn ca5ph" for="card-nr"> Tiêu Đề <span class="ciajw">*</span></label>
                                    <input id="tieude" class="c04hc c96ud" type="text" placeholder="Tiêu Đề" value="<?=$dulieu['tieude'];?>">
                                </div>
                                
                              <div>
                                    <label class="block text-sm cz4nn ca5ph" for="card-nr"> Mô Tả <span class="ciajw">*</span></label>
                                    <input id="mota" class="c04hc c96ud" type="text" placeholder="Mô Tả" value="<?=$dulieu['mota'];?>">
                                </div>
                                
                                
                                 <div>
                                    <label class="block text-sm cz4nn ca5ph" for="card-nr"> Đăng Nhập <span class="ciajw">*</span></label>
                                       <select class="c04hc c96ud" id="dangnhap">
                                           <?php
                                           if($dulieu['fb'] == 'on' && $dulieu['gg'] == 'off' && $dulieu['gr'] == 'off'){
                                               echo '<option value="1"> Facebook (Đang Chọn) </option> ';
                                           } else if($dulieu['fb'] == 'off' && $dulieu['gg'] == 'off' && $dulieu['gr'] == 'on'){
                                               echo '<option value="2"> Garena (Đang Chọn)  </option> ';
                                           } else if($dulieu['fb'] == 'on' && $dulieu['gg'] == 'off' && $dulieu['gr'] == 'on'){
                                               echo '<option value="3"> Facebook, Garena  (Đang Chọn) </option> ';
                                           }
                                           ?>
                                                      <option value="1"> Facebook </option> 
                                                     <option value="2"> Garena </option> 
                                                     <option value="3"> Facebook, Garena </option> 
                                                    </select>
                                </div>
                                

                                <div>
                                    <label class="block text-sm cz4nn ca5ph" for="card-name"> Ảnh icon <span class="ciajw">*</span></label>
                                    <input id="image" class="c04hc c96ud" type="text" placeholder="Ảnh icon" value="<?=$dulieu['avatarweb'];?>">
                                </div>
                            
                            </div>
                            
                            
                            <div class="cavzi">
                                <div class="cjc22">
                                    <button class="btn c5e6b cdsge c7qs0 c96ud" onclick="CapNhat()" id="capnhat"> Cập Nhật </button><br><br>
                                    <button class="btn c5e6b cdsge c7qs0 c96ud" onclick="Delete(<?=$dulieu['id'];?>)" style="background-color: red;" > Xóa Trang </button>
                                </div>
        
                            </div>
                        </div>


                    </div>
                </div>

                </div>
            </main>
            
            
                    
                  
        <script>
                function CapNhat(){
        $('#capnhat').html('Đang Kiểm Tra').prop('disabled', true);
        $.ajax({
        url: "/Ajaxs/UpdatePage.php",
        method: "POST",
        data: {
           id: '<?=$_SESSION['token'];?>',
           tieude: $("#tieude").val(),
           mota: $("#mota").val(),
           dangnhap: $("#dangnhap").val(),
           image: $("#image").val()
        },
        success: function(response) {
            if(response == 'ok'){
                 alert('Cập Nhật Thành Công!');
                 window.location.href="";
            } else {
                alert(response);
            }
          $('#capnhat').html('Cập Nhật').prop('disabled', false);
        }
    });
	    }
	    
	     function Delete(id){
	    $.ajax({
        url: "/Ajaxs/Delete.php",
        method: "POST",
        data: {
          id: id,
        },
        success: function(response) {
            if(response == 'ok'){
                window.location.href="/";
            } else {
              alert('Xóa Không Thành Công!');
            }
         }
        }); 
	    }
        </script>


<?php
include('footer.php');
?>