#include <iostream>
#include <stdio.h>
#include <stdlib.h> 
using namespace std;

int main(void) 
{ 
  int jum;
  static const char alphanum[] =
        "0123456789"
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
        "abcdefghijklmnopqrstuvwxyz";

  cout << "masukkan banyak generate : ";cin>> jum;
  cout<<endl;
    for(int x = 0; x<jum; x++) 
    {
      for (int j=0;j<=jum;j++)
      {
        for (int z=1;z<=jum;z++)
             cout<<( alphanum[rand() % (sizeof(alphanum))]);
             cout << " - ";
      }
        cout<<endl;
    }
    
    return 0; 
} 