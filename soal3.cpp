#include <iostream>
using namespace std;
 
int hitung_luas (int row){
  int brs= row * row;

  if (row%2==0)
  {
    cout << "Harus ganjil !";
  }else
  {
    for (int i=1;i<=row;i++)
      {
        if (i%2==0)
       {
         for (int j=1;j<=row;j++)
           if (i%2==1 || j%2==1){
              cout<<"*";
              
            }else{
              cout<<"=";
            }
       }else
       {
         for (int j=1;j<=row;j++)
            if ( j%3==0){
              cout<<"=";
              
            }else{
              cout<<"*";
            }
       }
           
              cout<<endl;
            
  }
 
} 
 return brs;
}


int main(){
int a,b,hasil;
cout<<"Program cetak gambar Persegi Panjang"<<endl;
cout<<"-----------------------------------"<<endl;
cout<<"Masukkan jumlah baris :"; cin>>a;
hasil = hitung_luas(a);

cin.get();
return 0;
}
