function sc() {
    rng = prompt('Enter the range');
    res = rng.split("-"); // lọc dấu cách
    if (res.length != 2) { // kiểm tra mảng đã đủ 2 số chưa
    alert("invalid range ");
    return;
    } // nếu khác 2 số thì xuất ra lỗi
    first = parseInt(res[0]);
    second = parseInt(res[1]);
    if (first > second) { //kiểm tra số thứ nhất và số thứ hai , nếu số thứ nhất lớn hơn số thứ hai thì tiến vào hàm if và ngược lại sẽ bỏ qua hàm if
    alert("invalid range ");
    return;
    }
    str = "<table border=2><tr><th>Number</th><th>Square</th><th>Cube</th></tr>"; // tạo bảng dữ liệu
    for (i = first; i <= second; i++) {
    str = str + "<tr><td>" + i + "<td>" + (i * i) + "<td>" + (i * i * i);
    }
    document.write(str);
   }