#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int swap (int *x, int *y){
    int temp;
        temp = *x;
        *x = *y;
        *y = temp;
    return swap;
}
int main()
{
    int x,y;
    printf("Nhap so x: ");
    scanf("%d",&x);

    printf("Nhap so y: ");
    scanf("%d",&y);

    printf("x = %d ,y = %d \n", x, y);

    swap(&x,&y);
    printf("Hoan vi la:  x = %d, y = %d ", x, y);

return 0;
}

