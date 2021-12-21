#include <stdio.h>
#include <string.h>

// struct with typedef person
typedef struct Person {
  char name[50];
  int citNo;
  float salary;
} person;

int main() {

  // create  Person variable
  person p1;
  person p2;

  // assign value to name of p1
  strcpy(p1.name, "George Orwell");
  strcpy(p2.name, "Esakkiraja M");
  // assign values to other p1 variables
  p1.citNo = 1984;
  p1. salary = 2500;
  p2.citNo = 11;

  // print struct variables
  printf("Name: %s\n", p1.name);
  printf("Citizenship No.: %d\n", p1.citNo);
  printf("Salary: %.2f \n", p1.salary);

  printf("Name of the second person: %s \n", p2.name);

  return 0;
}