#include <stdio.h>
#include <stdlib.h>

int main()
{
    int menu;
    while(1<=menu<=4) {
        system ("cls");

        printf("++-------------------------------------++\n");
        printf("|Chuc nang 1: Tinh trung binh tong      |\n");
        printf("|Chuc nang 2: Tim so nguyen to          |\n");
        printf("|Chuc nang 3: Tim so chinh phuong       |\n");
        printf("|Chuc nang 4: Thoat                     |\n");
        printf("++-------------------------------------++\n");


        printf("Xin moi chon chuc nang (1,2,3,4): ");
        scanf("%d", &menu);

        switch (menu){
        case 1: {
            int min, max;
            int tong = 0;
            int soCacSoHang = 0;

            printf("Moi nhap so dau: ");
            scanf("%d",&min);

            printf("Moi nhap so cuoi: ");
            scanf("%d",&max);

            for (int i = min; i <= max; i++){
                if ( i%2 == 0){
                    tong += i;
                    soCacSoHang++;
                }
            }

            float trungBinhTong = tong/soCacSoHang;
            printf("Trung binh tong cac so la: %.2f \n\n", trungBinhTong);

        }
            break;
        case 2: {
            int x;
            int count = 0;
            printf("Moi nhap x: ");
            scanf("%d",&x);

            for (int i = 2; i < x; i++ ){
                if (x % i == 0){
                    count++;
                }
            }

            if (count == 0){
                printf("%d la so nguyen to\n\n",x);
            } else {
                printf("%d khong phai so nguyen to \n\n",x);
            }
        }
            break;
        case 3: {
            int x;
            int count = 0;
            printf("Moi nhap so x: ");
            scanf("%d",&x);

            for (int i = 1; i < x; i++){
                if (i*i == x){
                    count++;
                }
            }
            if (count == 0){
                printf("%d khong phai so chinh phuong \n\n",x);
            } else {
                printf("%d la so chinh phuong \n\n",x);
            }

        }
            break;
        case 4:
            printf("Thoat\n");
            return 0;
            break;
        }
    }
return 0;
}
