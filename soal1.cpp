#include <iostream>
using namespace std;

int main()
{
    int a[5]={1,2,3,4,5};
    int jum=0;
   int urut=0;
   int nx =0;
    //memasukkan data
    for (int i:a){
        cout<<i<<" ";
    }
    cout<<endl;
    
      
     for (int x:a)
     {
        cout <<"angka "<<x<< " : ";
        urut=x;
        jum=0;
        for (int b=1;b<6;b++)
        {
            if (b!=x)
            {
              cout << b << " ";
              jum=jum+b;
            }
                  
        } 
         cout <<" = " <<jum;
        cout<<endl;
     }
     
    return 0;
}