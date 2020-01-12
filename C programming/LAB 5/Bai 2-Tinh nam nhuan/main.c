#include <stdio.h>
#include <stdlib.h>

int checkYear (int year){
    if(year % 400 == 0 || (year % 4 == 0 && year % 100 != 0)){
        printf("%d la nam nhuan",year);
    } else {
        printf("%d khong phai nam nhuan",year);
    }

return checkYear;

}
int main()
{
    int year;
    printf("Nhap so nam: ");
    scanf("%d",&year);

    int result = checkYear(year);

    return 0;
}
