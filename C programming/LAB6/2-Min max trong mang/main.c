#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;
    printf("So phan tu cua mang: ");
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
        }else if (mang[i] < min){
            min = mang[i];
        }
    }
    printf("Gia tri max la: %d \n",max);
    printf("Gia tri min la: %d",min);
    return 0;
}
