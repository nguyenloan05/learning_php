function form_dangky(){
    const name = document.getElementById('name').value.trim();
    const hodem = document.getElementById('hodem').value.trim();
    const fullname = hodem+ " " +name;
    console.log("Họ tên: ", fullname);

    const email = document.getElementById('email').value.trim();
    console.log("Địa chỉ email: ",email);

    const sdt = document.getElementById('phone').value.trim();
    console.log("SĐT: ", sdt);

    const tp = document.getElementById('tp').value;
    console.log("Thành phố:", tp);

    const tinh = document.getElementById('tinh').value;
    console.log("Tỉnh: ", tinh);

    const note = document.getElementById('ghichu').value.trim();
    console.log("Ghi chú: ", note);

}
window.onload = function() {
    const submitButton = document.getElementById('submit');

    if (submitButton) {
        submitButton.addEventListener('click', function(event) {
            let name = document.getElementById('name').value;
            if (name === "") {
                alert("Vui lòng nhập tên!");
                return;
            }
            form_dangky();
        });
    } else {
        console.error("Lỗi: Không tìm thấy nút có ID='submit'.");
    }
};


