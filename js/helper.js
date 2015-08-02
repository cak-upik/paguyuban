/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    //datepicker
    $("#datepicker").datepicker();
    $("#datepicker").change(function() {
        $("#datepicker").datepicker("option", "dateFormat", 'dd MM yy');
    });

    //fill text field when change select option
    $('#student').change(function() {
        var val = $(this).val();
        $.ajax({
            url: "helper.php",
            data: "getValStd=" + val,
            dataType: 'json',
            cache: false,
            success: function(data) {
                $("#rute").val(data.nama_rute);
                $("#service").val(data.layanan);
                $("#layanan").val(data.tarif);
                $("#sopir").val(data.nama);
                $("#id_supir").val(data.id_sopir);
                $("#id_rute").val(data.id_rute);
            }
        });
    });

    //calculate provit
    $('#payment').change(function(ev) {
        var supir = $('#payment').val() * (95 / 100);
        var intern = $('#payment').val() * (5 / 100);
        console.log(supir);
        console.log(intern);
        $('#closingSupir').val((supir).toFixed());
        $('#closingInt').val((intern).toFixed());
    });
    
    //check all month laporanLaba
    $('#all').change(function(){
        $('#datepicker').prop("disabled", $(this).is(':checked'));
        $('#siswa').prop("disabled", $(this).is(':checked'));
        $('#supir').prop("disabled", $(this).is(':checked'));
        $('#allMonths').val(1);
    });
});