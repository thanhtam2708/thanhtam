#include <stdio.h>
#include <stdlib.h>

int main()
{
    int part;
    while (1 <= part <= 4){
        system ("cls");
        printf("1: Nhap thong tin \n");
        printf("2: Tinh tong \n");
        printf("3: Thong tin tivi \n");
        printf("4: Thoat \n");
        printf("Moi chon chuc nang (1,2,3,4): ");
        scanf("%d",&part);
    switch(part){
    case 1: {
        char hoTen[50], maSV[50];
        int diem;

        printf("Moi nhap ho va ten: ");
        scanf("%s",&hoTen);

        printf("Moi nhap ma so sinh vien: ");
        scanf("%s",&maSV);

        printf("Moi nhap diem: ");
        scanf("%d",&diem);

        printf("=========================\n");
        printf("Ho va ten: %s \n",hoTen);
        printf("Ma so sinh vien: %s \n",maSV);
        printf("Diem: %d",diem);
    break;
    }
    case 2: {
        int n;
        printf("Moi nhap so bat ki: ");
        scanf("%d",&n);
        int i;
        int tong = 0;
        for (i = 1; i < n; i++){
            tong += i;
        }
        printf("Tong cac so la: %d\n",tong);
        if (n % 2 == 0){
            printf("%d la so chan",n);
        } else {
            printf("%d la so le ",n);
        }
    break;
    }
    case 3:{
        int soLuongTV,n,i;
        printf("+---Thong tin Ti vi cua hang---+\n");
        printf("Moi nhap so luong tivi: ");
        scanf("%d",&soLuongTV);
        printf("Moi nhap mang kich co tung tivi: ");
        scanf("%d",&n);
        int mangTV[n];
        for (i = 0; i < n; i++){
            printf("MangTV[%d]",i);
            scanf("%d",&mangTV[i]);
        }
        printf("+---Xuat thong tin Ti vi---+\n");
        printf("So luong tivi la: %d\n",soLuongTV);
        float tong = 0;
        int count = 0;
        for (i = 0; i < n; i++){
            tong += mangTV[i];
            count++;
        }
        printf("Kich co trung binh tivi: %.2f\n",tong/count);
        int max = mangTV[0];
        for (i = 0; i < n; i++){
            if (mangTV[i] > max){
                max = mangTV[i];
            }
        }
        printf("Tivi co kich thuoc lon nhat la: %d",max);
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
