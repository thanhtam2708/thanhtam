#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;
    printf("Nhap so phan tu cua mang: ");
    scanf("%d",&n);
    int mang[n];
    int i;
    for (i=0; i<n; i++){
        printf("mang[%d]",i);
        scanf("%d",&mang[i]);
    }
    float tong = 0;
    int count = 0;
    for (i = 0; i < n; i++){
        if (mang[i] % 3 == 0){
            tong += mang[i];
            count++;
        }
    }
    float trungBinh = tong/count;
    printf("Trung binh tong cac so chia het cho 3 la: %.2f",trungBinh);


    return 0;
}
