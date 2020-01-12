#include <stdio.h>
#include <stdlib.h>

int main()
{
    int part;
    while (1 <= part <= 4){
        system ("cls");
        printf("++=================================================++\n");
        printf("|Chuc nang 1: Trung binh tong cac so chia het cho 3 |\n");
        printf("|Chuc nang 2: Tinh min, max                         |\n");
        printf("|Chuc nang 3: Sap xep mang theo thu tu giam dan     |\n");
        printf("|Chuc nang 4: Thoat                                 |\n");
        printf("++=================================================++\n");
        printf("Moi chon chuc nang:");
        scanf("%d",&part);
    switch(part){
    case 1: {
        int n;
        printf("Moi nhap so phan tu cua mang: ");
        scanf("%d",&n);
        int mang[n];
        int i;
        for (i = 0; i < n; i++){
            printf("mang[%d]",i);
            scanf("%d",&mang[i]);
        }
        int count = 0;
        float tong = 0;
        for (i = 0; i < n; i++){
            if (mang[i] % 3 == 0){
                tong += mang[i];
                count++;
            }
        }
        float trungBinhTong = tong/count;
        printf("TRung binh tong cac so chia het cho 3 la: %.2f",trungBinhTong);
    break;
    }
    case 2: {
         int n;
         printf("Moi nhap so phan tu cua mang: ");
         scanf("%d",&n);
         int mang[n];
         int i;
         for (i = 0; i < n; i++){
            printf("mang[%d]",i);
            scanf("%d",&mang[i]);
         }
         int max = mang[0];
         int min = mang[0];
         for (i = 0; i < n; i++){
            if (mang[i] > max){
                max = mang[i];
            } else if (mang[i] < min){
                min = mang[i];
            }
         }
         printf("Gia tri max cua mang la: %d\n",max);
         printf("Gia tri min cua mang la: %d",min);
        break;
         }
    case 3: {
        int n;
        printf("Moi nhap so phan tu cua mang: ");
        scanf("%d",&n);
        int mang[n];
        int i,j;
        for (i = 0; i < n; i++){
            printf("mang[%d]",i);
            scanf("%d",&mang[i]);
         }
        for (i = 0; i < n; i++){
            for (j = 0; j < n; j++){
                if (mang[i] > mang[j]){
                    int temp;
                    temp = mang[i];
                    mang[i] = mang[j];
                    mang[j] = temp;
            }
        }
    }
        for (i = 0; i <n; i++){
            printf("Vi tri thu mang[%d] la: %d \n",i,mang[i]);
        }
     break;
    }
    case 4:
        printf("Thoat khoi chuong trinh");
        return 0;
    default:
        printf("ban da chon sai moi chon lai");
    }getch();
    }

    return 0;
}
