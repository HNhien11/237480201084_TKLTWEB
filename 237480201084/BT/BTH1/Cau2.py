n = int(input("Nhập số phần tử: "))

ds = []

for i in range(n):
    x = int(input(f"Phần tử {i + 1}: "))
    ds.append(x)
chan = []
le = []
khong = []

for x in ds:
    if x == 0:
        khong.append(x)
    elif x % 2 == 0:
        chan.append(x)
    else:
        le.append(x)
ket_qua = chan + khong + le
print("Danh sách sau khi sắp xếp: ")
print(ket_qua)
