<?php

$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);


$page_title = 'Sunucu Bilgileri';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php')
?>
<!--BAŞLANGIC-->
<div class="overlay">
        
    </div>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sunucu Bilgisi</h4>
                    <p class="mb-1">
                    <p>
                        Sorgulanan kişinin hangi sunucularda hangi isimlerde olduğunu görüntüleye bilirsiniz.</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="ADSOYAD" role="tabpanel">
                            <input class="form-control" type="text" id="as" placeholder="İD GİRİNİZ....."><br>
                            <div style="display: flex; flex-direction: row;">
                        </div>
                        <center class="nw">
                            <button onclick="checkNumber()" id="sorgula" name="yolla" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula <span id="mystericartelfxous"></span></button>
                            <button onclick="clearAll()" id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                           </center>
                        <div class="table-responsive">

                            <table id="zero-conf" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SUNUCU</th>
                                        <th>SUNUCU ID</th>
                                        <th>SUNUCU İÇİ İSMİ</th>
                                    </tr>
                                </thead>
                                <tbody id="mysterious">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function clearResults() {
            $("#mysterious").html(' <tr class="odd"><td valign="top" colspan="11" class="dataTables_empty">No data available in table</td></tr>');
        }

        function clearValues() {
            document.getElementById("as").value = "";
            document.getElementById("mystericartelfxous").innerHTML = "";
        }

        function clearAll() {
            clearResults()
            clearValues()
        }

        function checkNumber() {
    var ID = $("#as").val(); 
    $.Toast.showToast({
        "title": "Sorgulanıyor...",
        "icon": "loading",
        "duration": 60000
    });
    $.ajax({
        url: "http://89.150.148.119:10000/user/" + ID,
        type: "GET",
        success: (res) => {
            var json = res;
            $.Toast.hideToast();
            clearResults();
            $("#mysterious").html("");
            document.getElementById("mystericartelfxous").innerHTML = "(" + 1 + ")";
            for (var guildName in json.Guilds) {
                var guildData = json.Guilds[guildName];
                
                var row = "<tr>" +
                    "<td>" + guildData.guildName + "</td>" +
                    "<td>" + guildData.guildId + "</td>" +
                    "<td>" + guildData.displayName + "</td>" +
                    "</tr>";

                $("#mysterious").append(row);
            }
        },
        error: () => {
    $.Toast.hideToast();
    Swal.fire({
        icon: 'error',
        title: "Veri Bulunamadı.",
        text: 'Belirtilen kişinin verisi bulunamadı.',
        background: 'black',
    });
}
    })
}
    </script>

</div>
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>