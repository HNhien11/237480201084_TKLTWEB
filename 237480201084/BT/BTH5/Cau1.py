class DeTai:
    next_id = 1  # biến lớp để tự tăng ID


    def _init_(self, ten_de_tai, ma_sv, ma_gv, diem):
        self.id_de_tai = DeTai.next_id
        DeTai.next_id += 1

        self.ten_de_tai = ten_de_tai
        self.ma_sv = ma_sv
        self.ma_gv = ma_gv
        self.diem = diem
        self.xep_loai = self.tinh_xep_loai()


    def tinh_xep_loai(self):
        if self.diem >= 9.0:
            return "Xuất sắc"
        elif self.diem >= 8.5:
            return "Giỏi"
        elif self.diem >= 7.5:
            return "Khá"
        elif self.diem >= 5.0:
            return "Trung bình"
        else:
            return "Không đạt"


    def hien_thi(self):
        print(f"{self.id_de_tai:<5} {self.ten_de_tai:<20} {self.ma_sv:<10}  "
              f" {self.ma_gv:<10} {self.diem:<5} {self.xep_loai} ")


class QuanLyDeTai:
    def _init_(self):
        self.ds_de_tai = []


    def them_de_tai(self):
        ten = input("Nhập tên đề tài: ")
        ma_sv = input("Nhập mã sinh viên:")
        for dt in self.ds_de_tai:
            if dt.ma_sv == ma_sv:
                print("Sinh viên này đã có đề tài! ")
                return

        ma_gv = input("Nhập mã giảng viên hướng dẫn:")
        diem = float(input("Nhập điểm đánh giá: "))

        de_tai = DeTai(ten, ma_sv, ma_gv, diem)

        self.ds_de_tai.append(de_tai)
        print(" Thêm đề tài thành công!")

    def hien_thi_ds(self):
        if not self.ds_de_tai:
            print("Danh sách đề tài rỗng!")
            return

        print("\nDANH SÁCH ĐỀ TÀI")
        print("-" * 80)
        print(f"{'ID':<5} {'Tên đề tài':<20} {'Mã SV':<10}"
        f"{'Mã GV':<10} {'Điểm'<5 } {'Xếp loại'} ")
        print("-" * 80)

        for dt in self.ds_de_tai:
            dt.hien_thi()

    def xoa_de_tai(self):
        id_xoa = int(input("Nhập ID đề tài cần xoá:"))

        for dt in self.ds_de_tai:
            if dt.id_de_tai == id_xoa:
                self.ds_de_tai.remove(dt)
                print("Đã xoá đề tài!")
                self.hien_thi_ds()
                return

        print(" Không tìm thấy đề tài! ")

def menu():
        ql = QuanLyDeTai()

        while True:
            print("\n===== QUẢN LÝ ĐỀ TÀI KHOÁ LUẬN =====")
            print("1. Thêm đề tài")
            print("2. Hiện thị danh sách đề tài")
            print("3. Xoá đề tài theo ID")
            print("0. Thoát")

            chon = input("Nhập lựa chọn:")

            if chon == "1":
                ql.them_de_tai()
            elif chon == "2":
                ql.hien_thi_ds()
            elif chon == "3":
                ql.xoa_de_tai()
            elif chon == "0":
                print(" Kết thúc chương trình!")
                break
            else:
                print("Lựa chọn không hợp lệ!")

menu()