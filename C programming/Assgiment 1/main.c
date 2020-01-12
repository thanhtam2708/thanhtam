#include <stdio.h>
#include <stdlib.h>

int main()
{
    int part;
    while (1 <= part <= 6){
        system ("cls");
        printf("++---------------------------++\n");
        printf("|1. Ho ten va can nang        |\n");
        printf("|2. Nhap diem                 |\n");
        printf("|3. Tinh tien nuoc            |\n");
        printf("|4. So chinh phuong cua mang  |\n");
        printf("|5. Nhap user va pass         |\n");
        printf("|6. Thoat                     |\n");
        printf("++---------------------------++\n");
        printf("Moi chon chuc nang: ");
        scanf("%d",&part);
    switch (part){
    case 1: {
        char hoTen[50];
        int canNang;
        printf("Moi nhap ho ten: ");
        scanf("%s",&hoTen);
        printf("Moi nhap can nang: ");
        scanf("%d",&canNang);
        printf("Ho va ten : %s\n",hoTen);
        printf("Can nang: %d kg",canNang);
    break;
    }
    case 2: {
        int diem;
        printf("Moi nhap diem: ");
        scanf("%d",&diem);
        while (diem >= 50 && diem <= 100){
            printf("Diem la: %d",diem);
            break;
        }printf("Ban da nhap sai moi nhap lai");
    break;
    }
    case 3: {
        int m, soTien;
        printf("Moi nhap so m3 nuoc: ");
        scanf("%d",&m);

        if (m >= 0 && m <= 10){
            soTien = m*6000 + m*6000*0.1;
            printf("So tien thanh toan la: %d",soTien);
        }else if (m >= 11 && m <= 15){
            soTien = 10*6000 + (m-10)*7000 + (10*6000 + (m-10)*7000)*0.1;
            printf("So tien thanh toan la: %d",soTien);
        }else if (m >= 16 && m <= 20){
            soTien = 10*6000 + 5*7000 + (m-15)*8000 + (10*6000 + 5*7000 + (m-15)*8000)*0.1;
            printf("So tien thanh toan la: %d",soTien);
        }else {
            soTien = 10*6000 + 5*7000 + 5*8000 + (m-20)*10000 + (10*6000 + 5*7000 + 6*8000 + (m-20)*10000)*0.1;
            printf("So tien thanh toan la: %d",soTien);
        }
    break;
    }
    case 4: {
        int n;
        int count = 0;
        printf("Moi nhap so phan tu mang: ");
        scanf("%d",&n);
        int mang[n];
        int i;
        for (i = 0; i < n; i++){
            printf("mang[%d]",i);
            scanf("%d",&mang[i]);
        }
        for (int x = 1; x < mang[i]; x++){
            if (x * x == mang[i]){
                count++;
            }
        }
        for (i = 1; i < n; i++){
            if (count != 0){
                printf("%d la so chinh phuong \n",mang[i]);
            }
        }
    break;
    }
    case 5: {
        char poly[] = "poly";
        char com107[] = "com107";
        char user[50];
        char pass[50];
        printf("Moi nhap user: ");
        scanf("%s",user);
        printf("Moi nhap pass: ");
        scanf("%s",pass);
        if (strcmp(user,poly) ==0 && strcmp(pass,com107) == 0){
            printf("Login thanh cong");
        }else {
            printf("Khong login duoc");
        }
    break;
    }
    case 6:
        printf("Thoat khoi chuong trinh");
        return 0;
    default :
        printf("Ban da chon sai moi chon lai");
    }getch();
    }
    return 0;
}
