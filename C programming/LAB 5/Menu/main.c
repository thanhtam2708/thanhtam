#include <stdio.h>
#include <stdlib.h>

int Maxmin(int a, int b, int c)
{
    printf("Moi nhap so a: ");
    scanf("%d",&a);
    printf("Moi nhap so b:");
    scanf("%d",&b);
    printf("Moi nhap so c: ");
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
}
int checkYear (int year){
    printf("Moi nhap so nam: ");
    scanf("%d",&year);
    if (year % 400 == 0 || (year % 4 == 0 && year % 100 != 0 )){
        printf("%d la nam nhuan");
    } else {
        printf("%d khong phai nam nhuan");
    }
}

int hoanVi(int a, int b){
    int temp;
    temp = a;
    a = b;
    b = temp;
    printf("Moi nhap so a: ");
    scanf("%d",&a);
    printf("Moi nhap so b: ");
    scanf("%d",&b);

}
int main()
{
    int part;
    while (1 <= part <= 4){
        system ("cls");
        printf("1: Tim gia tri min, max trong 3 so \n");
        printf("2: Tinh nam nhuan \n");
        printf("3: Tim hoan vi \n");
        printf("4: Thoat chuong trinh \n");
        printf("Moi chon chuc nang: ");
        scanf("%d",&part);
    switch(part){
    case 1:{
        int a,b,c;
        Maxmin(a,b,c);
        break;
    }
    case 2:{
        int year;
        checkYear(year);
        break;
    }
    case 3:{
        int a,b;
        hoanVi(a,b);
        break;
    }
    case 4:
        return 0;
    default:
        printf("Ban da chon sai moi chon lai");
    }getch();
    }

    return 0;
}
