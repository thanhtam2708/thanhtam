#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;
    printf("Nhap so phan tu mang: ");
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
    return 0;
}
