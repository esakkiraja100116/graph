#include<stdio.h>
#include<string.h>

int main (){
    int salary,citizon;
    char name[20];
    char *add;
    strcpy(name,"esakkiraja");
    printf("%s \n",name);
    
    printf("%x",&name);
    salary = 10;
    citizon = 1;
    printf("%d \n",salary);
    printf("%d \n",citizon);
    printf(" Before excute %x \n",&name);
    strcpy(name, "anto joel");
    printf("%x\n",&name);
    printf("%s \n",name);

    printf("%s\n",name);
    printf("At last %x\n",&name);
}