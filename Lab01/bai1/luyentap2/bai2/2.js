function findLMV() {
    var str = document.getElementById('t1').value // lấy giá trị tại element có id là t1
    for (i = 0; i < str.length; i++) {
    if (str.charAt(i) == 'a' || str.charAt(i) == 'e'
    || str.charAt(i) == 'i' || str.charAt(i) == 'o' || str.charAt(i) == 'u') // duyệt vòng lặp để tìm các ký tự 'a' , ' e' , 'i' ,'o' ,'u'
    return ("Left most vowel of " + str + " is at location " + (i + 1)); // trả về chuỗi kí tự đã nhập và vị trí của 1 trong các ký tự trên xuất hiện đầu tiên
    }
    return ("No vowels found for string " + str);
   }

   function reverse(num) {
    rnum = 0;
    temp = num;
    if (isNaN(num)) { //kiểm tra kí tự vừa nhập là số
    return "invalid number";
    }
    while (num != 0) { //tạo vòng lặp để lấy từng số phía sau của chuỗi vừa nhập vào phần đầu của chuỗi mới để tạo thành chuỗi đảo ngược
    rnum *= 10;
    rnum += num % 10;
    num -= num % 10;
    num = Math.floor(num / 10);
    }
    return "Reverse of num " + temp + " is " + rnum;
   }