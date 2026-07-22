L = list(map(int, input("Nhập danh sách : ").split()))

a = int(input("Nhập a: "))
b = int(input("Nhập b: "))

if 0 <= a < b < len(L):
    print("Số nhỏ nhất: ", min(L[a:b+1]))
else:
    print("Dữ liệu không hợp lệ!")