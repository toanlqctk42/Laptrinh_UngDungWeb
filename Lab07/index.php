<!doctype html>
<html lang="en">

<head>
    <title>Lê Quốc Toàn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="chonbanghienthi">Chọn bảng hiển thị</label>
                    <select class="form-control" id="chonbanghienthi" name="banghienthi">
                        <option value="dpm">Bộ phận</option>
                        <option value="emp">Nhân viên</option>
                    </select>
                </div>
                <div class="form-group">
                    <button name="thucthi" onclick="thucthi()">Xem Bảng</button>
                </div>
            </form>
            <div id ="kq"></div>
        </div>
    </div>

    <script>
    function thucthi() {
        var e = document.getElementById("chonbanghienthi");
        var strUser = e.options[e.selectedIndex].value;
        alert(strUser);
        var response = new XMLHttpRequest();
        response.open('GET','thucthi.php?chon='+strUser)
        response.send();
        response.onload = function(){
          if(this.status == 200 && this.readyState==4){
            document.getElementById("kq").innerHTML = this.responseText;
          }
        };
    }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>