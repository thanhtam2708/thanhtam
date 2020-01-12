#include <stdio.h>
#include <stdlib.h>

int main()
{
    int part;
    while (1 <= part <= 4){
        system ("cls");
        printf("++-----------lab 7-----------++\n");
        printf("|1: Dem nguyen am va phu am   |\n");
        printf("++---------------------------++\n");
        printf("|2: Dang nhap tai khoan       |\n");
        printf("++---------------------------++\n");
        printf("|3: Sap xep chuoi theo chu cai|\n");
        printf("++---------------------------++\n");
        printf("|4: Thoat                     |\n");
        printf("++---------------------------++\n");
        printf("Moi chon chuc nang (1,2,3,4): ");
        scanf("%d",&part);
        printf("==============================\n");
    switch(part){
    case 1: {
        char s[100];
        printf("Xin moi nhap vao chuoi: ");
        scanf("%s",s);
        char a,e,u;
        int i = 0;
        int n = 0;
        int p = 0;
        while (s[i++] != 0){
            if (s[i] == a || s[i] == i || s[i] == e || s[i] == u){
                n++;
            }else {
                p++;
            }
        }
        printf("Chuoi %s co chua %d nguyen am va %d phu am",s,n,p);
    break;
    }
    case 2: {
        char usernam[] = "admin";
        char password[] = "1234";
        char user[50];
        char pass[50];
        printf("Moi nhap ten dang nhap: ");
        scanf("%s",user);
        printf("Moi nhap mat khau: ");
        scanf("%d",pass);
        if (strcmp (usernam,user)==0 && strcmp(password,pass)==0){
            printf("Login thanh cong");
        }else {
            printf("Khong login duoc");
        }
    break;
    }
    case 3:{
    break;
    }
    case 4:
        printf("Thoat khoi chuong trinh");
        return 0;
    default:
        printf("Ban da chon sai moi chon lai");
    }getch();
    }
    return 0;
}
