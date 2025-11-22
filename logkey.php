<?php
include('../system/header.php');
?>

    
<main class="cirqi">
                <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">


<div class="flex items-center justify-center cejl6 c2ksj cryht cdmac cn2cr">
    <div class="bg-white dark:bg-slate-800 rounded cm7c4 c5gd2 c21iq cym6n c96ud">
      
        <div class="border-slate-200 dark:border-slate-700 cqyqv c7q80 cks8x">
            <div class="flex items-center cc2cs">
                <div class="text-slate-800 dark:text-slate-100 ca8f5"> Đăng Nhập Key </div>
            </div>
        </div>
   
        <div class="c7q80 cpnas">
            <div class="text-sm">
                <div class="text-slate-800 dark:text-slate-100 cz4nn cm3dd"> Nếu bạn share key thì tất cả người biết key sẽ quản lý được trang web của bạn </div>
            </div>
            <div class="cfohq">
                <div>
                    <label class="block text-sm cz4nn ca5ph" for="name"> Nhập Key <span class="ciajw">*</span></label>
                    <input id="key" class="c04hc c96ud czv4r cwkie" type="text" required="">
                </div>
            </div>
        </div>
      
        <div class="border-slate-200 dark:border-slate-700 cannk c7q80 cpnas">
            <div class="flex flex-wrap justify-end cb50h">
                <button class="c5e6b cdsge c7qs0 cijix" onclick="appKey()"> Đăng Nhập </button>
            </div>
        </div>
    </div>
</div>
</div></main>


<script>
function appKey(){
        $.ajax({
        url: "/Ajaxs/LoginKey.php",
        method: "POST",
        data: {
            key: $("#key").val(),
        },
        success: function(response) {
            $("#result").html(response);
            console.log(response);
        }
    });
    }
</script>

<?php
include('../system/footer.php');
?>