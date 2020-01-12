#include <stdio.h>
#include <stdlib.h>

int max (int a, int b, int c){
    int max;
    return max;

    }
int main(){
    int a,b,c;
    printf("Nhap so a: ");
    scanf("%d",&a);

    printf("Nhap so b: ");
    scanf("%d",&b);

    printf("Nhap so c: ");
    scanf("%d",&c);



    if (a > b){
        if (a > c){
            printf("Max = %d \n",a);
        } else {
            printf("Max = %d \n",c);
        }
    } else {
        if (b > c){
            printf("Max = %d \n",b);
        } else {
            printf("Max = %d \n",c);
        }

    }
    printf("So lon nhat trong 3 so la: %d");
return 0;
}
