alert("Hello World")
function test(){
    console.log("Test function");
    for(let i=1; i<=10; i++){
    
        if(i%2 == 0){
            continue;
        }
        console.log(i);
    } 
}
test();
function dsNhom(){
    console.log("DANH SÁCH THÀNH VIÊN NHÓM 6:");
    let thanhvien = ["Nguyễn Thị Vân Dung", "Phạm Thị Thu Huyền", "Nguyễn Thị Phương Linh", "Nguyễn THị Phương Loan", "Ngô Hà My"];
    for (let i=0; i<thanhvien.length; i++){
        console.log(thanhvien[i]);
    }
}
dsNhom();

//hàm thông thường
function tong(a,b){
    return a+b;
}
console.log("Tổng: " +tong(10, 88));

//hàm ẩn danh
var sum = function(a,b){
    return a+b;
}
console.log(sum(5,3));