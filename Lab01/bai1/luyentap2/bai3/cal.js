function f(d) {
    if (d == 'c') { // nếu kí tự nhập vào là 'c' thì sẽ reset lại giá trị
    document.getElementById('res').value = "";
    return;
    }
    res = document.getElementById('res').value;
    if (res == 0 && d == 0) // nếu giá trị ban đầu và giá trị nhập vào bằng 0 thì dừng tính toán
    return;
    if (d == '+' || d == '-' || d == '*' || d == '/') { // kiểm tra kí tự vừa nhập vào là số hay phép tính
    opr = d;
    num = parseFloat(res);
    document.getElementById('res').value = d;
    return;
    }
    if (d == '=') {
    num1 = parseFloat(res);
    switch (opr) { // thực thi phép tính
    case '+': ans = num + num1; break;
    case '-': ans = num - num1; break;
    case '*': ans = num * num1; break;
    case '/': ans = parseInt(num / num1); break;
    }
    document.getElementById('res').value = ans; // trả về giá trị phép tính
    return;
    }
    if (d == '--') {
    document.getElementById('res').value *= -1;
    return;
    }
    if (!isNaN(document.getElementById('res').value))
    document.getElementById('res').value += d;
    else
    document.getElementById('res').value = d;
   }