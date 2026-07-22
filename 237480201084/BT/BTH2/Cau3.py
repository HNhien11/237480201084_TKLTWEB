L = list(map(int, input("Nhập danh sách : ").split()))
min_index = L.index(min(L))
max_index = L.index(max(L))
L[min_index], L[max_index] = L[max_index], L[min_index]

print("Danh sách sau khi đổi: ", L)