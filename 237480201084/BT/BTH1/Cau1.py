while True:
    try:
        n = int (input("Nhập số nguyên n : "))
        if n<= 0:
            print("Phải nập số > 0 ")
            continue

        x = 1
        for i in range(1, n + 1):
            for j in range(1, i+1):
                print(x," ", end= " ")
            x += 1
            print()

        break

    except ValueError:
        print("Sai nhập, vui lòng nhập lại!")