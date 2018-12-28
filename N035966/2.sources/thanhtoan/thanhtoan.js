$(document).ready(function(){
    $(document).on('click','#datphong',function(){
        var ngaynhan = $('#ngaynhan').val();
        var ngaytra = $('#ngaytra').val();
        var map = $('#map').val();
        var hoten = $('#hoten').val();
        var sdt = $('#sdt').val();
        $.ajax({
            url:'themhoadon.php',
            method: 'POST',
            data: {
                ngaynhan:ngaynhan,
                ngaytra:ngaytra,
                map:map,
                hoten:hoten,
                sdt:sdt
            },
            success:function(response){
                $('baocao').html(response);
                alert(response);
            }

        })
    });
})