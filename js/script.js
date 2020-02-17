$(document).ready(function () {


    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return results[1] || 0;

        }
    }

    function tambah() {
        var name = 'test';
        var email = 'test';
        var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name +
            "</td><td>" + email + "</td></tr>";
        $("table tbody").append(markup);
    }

    function jumlah(params) {
        $(".beli").click(function () {
            const cek = $(":checked");


            let arr = [];
            for (let i = 1; i < cek.length; i++) {
                const cek1 = cek[i];

                arr.push(parseInt(cek1.value));

            }

            let totalHarga = 0;
            for (let x = 0; x < arr.length; x++) {
                totalHarga += arr[x] << 0;
            }
            $("#total").val(totalHarga);
            $(".jumlah").val(1);
        })
    }

    function konfirmasi() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
});