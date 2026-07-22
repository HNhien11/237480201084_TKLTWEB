L = list(map(int, input("Nhập danh sách : ").split()))

vi_tri = -1

for i in range(1, len(L) - 1):
    if L[i] > L[i - 1] and L[i] > L[i+1]:
        vi_tri = i
    break

print(vi_tri)