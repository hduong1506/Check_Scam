
<?php
include('header.php');
?>

    
                <main class="cirqi">
                                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">
                
                
                <div class="flex items-center justify-center cejl6 c2ksj cryht cdmac cn2cr">
                    <div class="bg-white dark:bg-slate-800 rounded cm7c4 c5gd2 c21iq cym6n c96ud">
                      
                        <div class="border-slate-200 dark:border-slate-700 cqyqv c7q80 cks8x">
                            <div class="flex items-center cc2cs">
                                <div class="text-slate-800 dark:text-slate-100 ca8f5"> Đăng Nhập Quản Trị </div>
                            </div>
                        </div>
                   
                        <div class="c7q80 cpnas">
                            <div class="text-sm">
                                <div class="text-slate-800 dark:text-slate-100 cz4nn cm3dd"> Hãy đăng nhập vào key để lấy tài khoản và mật khẩu của trang web </div>
                            </div>
                            <div class="cfohq">
                                <div>
                                    <label class="block text-sm cz4nn ca5ph" for="name"> Tên Đăng Nhập <span class="ciajw">*</span></label>
                                    <input id="username" class="c04hc c96ud czv4r cwkie" type="text" required="">
                                </div>
                                
                                  <div>
                                    <label class="block text-sm cz4nn ca5ph" for="name"> Mật Khẩu <span class="ciajw">*</span></label>
                                    <input id="password" class="c04hc c96ud czv4r cwkie" type="text" required="">
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="border-slate-200 dark:border-slate-700 cannk c7q80 cpnas">
                            <div class="flex flex-wrap justify-end cb50h">
                                <button class="c5e6b cdsge c7qs0 cijix" id="dangnhap" onclick="DangNhap()"> Đăng Nhập </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div></main>

     
                            
                                      <script>

                                    function DangNhap(){
                                         $('#dangnhap').html('Đang Kiểm Tra').prop('disabled', false);
                                        $.ajax({
                                        url: "/Ajaxs/Login.php",
                                        method: "POST",
                                        data: {
                                            username: $("#username").val(),
                                            password: $("#password").val()
                                        },
                                        success: function(response) {
                                          if(response == 'true'){
                                              toastr.success('Đăng Nhập Thành Công Vui Lòng Đợi!');
                                              window.location.href="/admin";
                                          } else if(response == 'false') {
                                              toastr.error('Đăng Nhập Thất Bại!');
                                          } else {
                                              toastr.error(response);
                                          }
                                            $('#dangnhap').html(
                                                    'Đăng Nhập')
                                                .prop('disabled', false);
                                        }
                                    });
                                    }
                                    
                                  </script>
                                
                        
<?php
include('footer.php');
?>