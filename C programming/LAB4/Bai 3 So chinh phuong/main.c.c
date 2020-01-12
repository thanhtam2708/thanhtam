#include <stdio.h>
#include <stdlib.h>

int main()
{
    int x;
    int count =0;
    printf ("Moi nhap so bat ki: ");
    scanf("%d",&x);
    int i;
    for (i = 1; i < x; i++){
    	if (i * i == x)
    		count++;
	}
	if (count != 0){
		printf ("%d la so chinh phuong",i);
	}else 
	printf ("%d khong phai so chinh phuong",i);
    return 0;
}
