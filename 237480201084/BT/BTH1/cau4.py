f = open("input.txt","r")
list = []
for dong in f:
    dong = dong.strip()
    phan_tu = dong.split(",")

    so = []
    for p in phan_tu:
        p = p.strip()
        so.append(int(p))
    list.append(so)
f.close()
l = []
for i in range(len(list)):
    for a in list[i]:
        if(a<0):
          l.append(a)
    print("dòng", i+1, ":", end ="")
    for k in 1:
        print(k, end=" ")
    print()