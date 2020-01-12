#include <stdio.h>
#include <stdlib.h>

int main()
{
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
    printf("Trung binh tong cac so la: %f", trungBinhTong);



    return 0;
}
